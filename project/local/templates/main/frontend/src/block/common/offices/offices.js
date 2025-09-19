var activeOffice = null;

document.addEventListener("DOMContentLoaded", () => {
	const mapsContainer = document.getElementById('maps-container');
	
	if (mapsContainer) {
		activeOffice = mapsContainer.firstElementChild;
		activeOffice.style.display = "block";

		var maps = mapsContainer.querySelectorAll('.office-map');
		initMap(maps);

		var buttons = document.querySelectorAll('.office-button');

		for (const button of buttons) {
			button.addEventListener("click", () => {
				var mapId = button.dataset.mapId;
				var newActiveOffice = mapsContainer.querySelector('#' + mapId);
				activeOffice.style.display = "none";
				newActiveOffice.style.display = "block";
				activeOffice = newActiveOffice;
			});
		}
	}

	async function initMap(containers) {
		// Промис `ymaps3.ready` будет зарезолвлен, когда загрузятся все компоненты основного модуля API
		await window.ymaps3.ready;

		const {YMap, YMapDefaultSchemeLayer, YMapMarker, YMapDefaultFeaturesLayer} = window.ymaps3;

		for (const container of containers) {
			const mapContainer = container.querySelector('#map');
			const mapCoordinates = JSON.parse(mapContainer.dataset.coordinates);

			// Иницилиазируем карту
			const map = new YMap(
				// Передаём ссылку на HTMLElement контейнера
				mapContainer,

				// Передаём параметры инициализации карты
				{
					location: {
						// Координаты центра карты
						center: mapCoordinates,

						// Уровень масштабирования
						zoom: 18
					}
				}
			);

			// Добавляем слой для отображения схематической карты
			map.addChild(new YMapDefaultSchemeLayer());
			map.addChild(new YMapDefaultFeaturesLayer());

			const markerElement = container.querySelector('#marker');

			const marker = new YMapMarker(
				{
					coordinates: mapCoordinates,
					draggable: false,
					mapFollowsOnDrag: true
				},
				markerElement
			);

			map.addChild(marker);

			markerElement.addEventListener('click', function() {
				var popupClassList = markerElement.querySelector('#popup').classList;
				if (popupClassList.contains('hidden')) 
				{
					popupClassList.remove('hidden');
				}
				else 
				{
					popupClassList.add('hidden');
				}
			});
		}
	}
})

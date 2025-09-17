initMap();

async function initMap() {
	// Промис `ymaps3.ready` будет зарезолвлен, когда загрузятся все компоненты основного модуля API
	await window.ymaps3.ready;

	const {YMap, YMapDefaultSchemeLayer} = window.ymaps3;

	// Иницилиазируем карту
	const map = new YMap(
		// Передаём ссылку на HTMLElement контейнера
		document.getElementById('map'),

		// Передаём параметры инициализации карты
		{
			location: {
				// Координаты центра карты
				center: [54.200445, 37.584812],

				// Уровень масштабирования
				zoom: 10
			}
		}
	);

	// Добавляем слой для отображения схематической карты
	map.addChild(new YMapDefaultSchemeLayer());
}

import Inputmask from "inputmask/dist/inputmask.es6.js";

var phoneField = document.querySelector('input[type="tel"]');

var phoneMask = new Inputmask("+7-(999)-999-99-99");
phoneMask.mask(phoneField);

const form = document.getElementById('feedbackForm');

form.addEventListener('submit', function validate(event) {
	var fields = document.getElementsByClassName("required");
	var errorMessages = document.getElementById('error-messages');
	var okMessage = document.getElementById('ok-message');

	var errors = [];
	var isGroupFilled = false;

	errorMessages.innerHTML = '';

	for (const field of fields) {
		var isBelongGroup = field.classList.contains('group');
		if (isBelongGroup && isGroupFilled) continue;

		if ((field.tagName.toLowerCase() == 'input') && (field.type == 'checkbox')) {
			if (!field.checked) {
				if (!isBelongGroup) errors.push(window.messages['REQUIRED_ERROR_' + field.name]);
			}
			else if (isBelongGroup) 
			{
				isGroupFilled = true;
			}
		}
		else 
		{
			if (field.value.trim() == '') {
				if (!isBelongGroup) errors.push(window.messages['REQUIRED_ERROR_' + field.name]);
			}
			else if (isBelongGroup) 
			{
				isGroupFilled = true;
			}
		}
	}

	if (!isGroupFilled) 
	{
		errors.push(window.messages['REQUIRED_ERROR_GROUP']);
	}

	if (errors.length != 0) {
		for (const error of errors) {
			const newParagraph = document.createElement('p');
			newParagraph.textContent = error;
			errorMessages.appendChild(newParagraph);
		}
		event.preventDefault();
	}
	else 
	{
		okMessage.textContent = "Форма отправлена";
	}
})

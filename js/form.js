"use strict"



document.addEventListener('DOMContentLoaded', function () {

	const form = document.getElementById('form');
	form.addEventListener('submit', formSend);//при отправке формы переходим в функцию formSend

	async function formSend(e){
		e.preventDefault();

		let error = formValidate(form);

		let formData = new formData(form);
		
		

		if (error === 0){
			
			let response = await files('sendmail.php',{
				method: 'POST',
				body: formData
			});
			if (response.ok){
				let result = await response.json();
				alert(result.messege);
				form.reset();
				
			}else{
				alert("Ошибка");
				
			}
			
			}else{
				alert('Заполните обязательные поля!');
			}		
	}


	function formValidate(form) {
		let error = 0;
		let formReq = document.querySelectorAll('._req');

		for (let index = 0; index < formReq.length; index++){
			const input = formReq[index];
			formRemoveError(input);

			if (input.classList.contains('_phon')) {
				 if (phonTest(input)) {}
				formAddError(input);
				error++;

			} else if (input.getAttribute("type") === "checkbox" && !input.checked ) {
				formAddError(input);
				error++;
			}else {
				if (input.value === '') {
					formAddError(input);
					error++;
				}
			}
		}
		return error;
	}
	function formAddError(input){
		input.parentElement.classList.add('_error');
		input.classList.add('_error');
	}
	function formRemoveError(input){
		input.parentElement.classList.remove('_error');
		input.classList.remove('_error');
	}


	//функция проверки даты
	function phonTest(input){
		return  /^\d[\d\(\)\ -]{4,14}\d$/.test(input.value);
	}
});

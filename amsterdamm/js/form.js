"use strict"
/*
function selectedUsluga(valForm){
	var postStr = `valForm=`+valForm;
	$.ajax({
		type: 'POST',
		url: '../selected_usluga.php',
		data: postStr,
		success: function(data) {
			var dataArr = JSON.parse(dataStr);

			for(var i = 0; i < dataArr.length; i++) {
				$('#select_master').append(`
					<option value="`+dataArr[0]+">`+dataArr[1]+`</option>
				`);
			}

		},
		error: function (jqXHR, exception) {
			//Сообщению клиенту 
		}
	});

	$('#select_master').fadeIn(300);
}



function putDataForm(){
	var usluga= $('#select_usluga').val();
	var master = $('#select_master').val();
	var dataZapis = $('#form_date').val();
	var phoneClient = $('#form_phone').val();
	var nameClient = $('#form_name').val();
	var comment = $('#form_comment').val();


	/// проверка формы! Если что то не так то вывести Error 

	var postStr = `master=`+master+`&dataZapis=`+dataZapis+`&phoneClient=`+phoneClient+`&nameClient=`+nameClient+`&comment=`+comment;
	$.ajax({
		type: 'POST',
		url: '../selected_usluga.php',
		data: postStr,
		success: function(dataStr) {

			var dataArr = JSON.parse(dataStr);
		},
		error: function (jqXHR, exception) {

		}
	});
}
*/




document.addEventListener('DOMContentLoaded', function () {

	const form = document.getElementById('form');
	form.addEventListener('submit', formSend);//при отправке формы переходим в функцию formSend

	async function formSend(e){
		e.preventDefault();

		let error = formValidate(form);

		let formData = new FormData(form);
		
		

		if (error === 0) {
			
			let response = await fetch('sendmail.php', {
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

			 if (input.getAttribute("type") === "checkbox" && !input.checked ) {
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



});

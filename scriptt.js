$("#sendMail").on("click", function() {
	var name = $("#name").val().trim();
	var email = $("#email").val().trim();

	if (email == "") {
		$("#errorMess").text("Введите email");
		return false;
	}else if(name == "") {
		$("#errorMess").text("Введите имя");
		return false;
	}



$("#errorMess").text("");


$.ajax({
 url: 'mail.php',
 type: 'POST',
 cache: false,
 data: {'name': name, 'email': email},
 dataType: 'html',
 beforeSend: function(){
 	$("#sendMail").prop("disabled", true );
 },

 success: function(data) {
 	alert(data);
 	$("#sendMail").prop("disabled", false);
 }
});



});

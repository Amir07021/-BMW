<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	$title = "Обратная связь";
	require_once "blocks/head.php" ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script >
		$(document).ready (function() {
$("#done").click (function(){
	   		$('#messageShow').hide();
	var name = $("#name").val();
	var email = $("#email").val();
	var subject = $("#subject").val();
    var message = $("#message").val();
		var fail = "";
		if (name.length < 3) fail = "Имя не меньше 3 символов";
        else if (email.split ('@').length - 1 == 0 || emai.split ('.').length - 1 == 0 )
        	fail = "Вы ввели некороктный email";
       else if (subject.length < 5)
            fail = "Тема соообщения не меннее 5 символов";
         else if (message.length <20)
         	  fail = "Сообщение не менее 20 символов";
         	if (fail != ""){
         		$('#messageShow').html (fail + "<div class='clear'><br></br>");
         		$('#messageShow').show ();
                 return false;
}
$.ajax({
	url: 'ajax/feedback.php'
	tupe:'POST'
	cache:false;
	data: {'name': 'email'; email, 'subject' : subject, 'message': message},
	dataType: 'html'
	success: function (data) { 
		if (data == 'Соообщение отправлено'){
				$('#messageShow').html (data + "<div class='clear'><br></br>");	
					$('#messageShow').show ();

			}

	});
	});
});
	</script>
</head>
<body>

<?php require_once "blocks/header.php" ?>
	<!-- Шапка сайта -->

	<!-- Основа сайта-->
<div id="wrapper">
			
			<div id="leftCol">
				
<input type="text" placeholder ="Имя"  id="name" name="name"><br/>
<input type="text" placeholder="Email"  id="email" name="email"><br/>
<input type="text" placeholder="Тема соообщения"  id="subject" name="subject"> <br/>
<textarea name="message" id="message"  placeholder="Введите свое сообщение"></textarea> <br/>
<center><div id="messageShow"></div></center>
<input type="button" name="done" id="done" value="Отправить">

			<?php require_once "blocks/rightCol.php" ?>
		</div>
	<?php require_once "blocks/footer.php" ?>
</body>
</html>
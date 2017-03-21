// JavaScript Document

	   function userLogin(){

			jQuery.post(baseUrl()+"/ajaxhandler/ajaxhandler.php", {
                ajax_action: 'user_login',
				email:$("#email").val(),
				password:$("#password").val(),
				},
            function (data) {
			   if(data!=''){

			     if(data == 1){
					 redirect('/home.php');
					 return true;

				  }else{
					alert('Invalid login credentials.');
					 return false;
				  }
				}
				else {
			   return false;
			 }
			});
		}

		// redirect

		function redirect(param){
		   var param;
		   if(param !=''){
			  window.location=baseUrl()+param;
			  return true;
		   }


		}

		//baseUrl sunmint.com/smapp
		function baseUrl(){
		  var base_url = $(".admin_url").val();
		  return base_url;

		}



$( document ).ready(function() {


	$("#login_form").submit(function(){

				var password = $("#password").val();
				var email = $("#email").val();
				var result = true;

				if ($('#email').val().search(/^[0-9a-zA-Z]([\-.\w]*[0-9a-zA-Z]?)*@([0-9a-zA-Z][\-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,}$/) == -1){
					$("#email_field_wrap").addClass('has-error');
					$("#email_field_error").show();
					$("#email").focus();
					result  = false;
				}else{
				  $("#email_field_wrap").removeClass('has-error');
				  $("#email_field_error").hide();
				}
				if (password =='' ||  password.length < 5){
					$("#password_field_wrap").addClass('has-error');
					$("#password_field_error").show();
					result  = false;
				}else{

				 $("#password_field_error").hide();
				 $("#password_field_wrap").removeClass('has-error');
				}
				if(result){
					userLogin();
				}
		     return false;


	});


	$("#form1_submit").click(function(){
		$("#button1").removeClass("hide");
		$("#button2").removeClass("hide");

		$("#button3").removeClass("hide");

		$("#button4").removeClass("hide");

});

});

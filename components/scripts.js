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

	$("#new_lead_btn").click(function(){
		 $("#form1").toggle();
	});

	$("#new_lead_btn2").click(function(){
		$("#form2").toggle();
	});


	$("#new_lead_btn3").click(function(){
		$("#form3").toggle();
	});

    $("#new_lead_btn4").click(function(){
        $("#form4").toggle();
    });

    $("#new_lead_btn5").click(function(){
        $("#form5").toggle();
    });


    $("#new_lead_btn6").click(function(){
        $("#form6").toggle();
    });


    $("#cust_form").submit(function(e)
    {
    	console.log("SUBMITING FORM");
        var postData = JSON.stringify($(this).serializeArray());
        var formURL = $(this).attr("action");
        console.log(postData);
        $.ajax(
            {
                url : formURL,
                type: "POST",
                data : {'customer':postData},
                success:function(data, textStatus, jqXHR)
                {
                    console.log(data);
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    console.log(errorThrown);
                }
            });
        e.preventDefault(); //STOP default action
        //e.unbind(); //unbind. to stop multiple form submit.
    });

    // $("#ajaxform").submit();

    var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
        backgroundColor: 'rgba(255, 255, 255, 0)',
        penColor: 'rgb(0, 0, 0)'
    });
    var saveButton = document.getElementById('save');
    var cancelButton = document.getElementById('clear');

    saveButton.addEventListener('click', function (event) {
        var data = signaturePad.toDataURL('image/png');

// Send data to server instead...
        window.open(data);
    });

    cancelButton.addEventListener('click', function (event) {
        signaturePad.clear();
    });



});

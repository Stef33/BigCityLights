 
  function submitContactForm()
  {
	  var B_error = false;
	  $('#signupform #firstname').removeClass('field-error');
	  $('#signupform #lastname').removeClass('field-error');
	  $('#signupform #phone').removeClass('field-error');
	  $('#signupform #email').removeClass('field-error');
	  $('#signupform #message').removeClass('field-error');
	  
	  var regPhoneNumber = /^\+?[0-9]{5,12}$/i;
	  var regEmail = /^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$/i;
	  
	  if ( '' == $('#signupform #firstname').val() || 'Prenom' == $('#signupform #firstname').val())
	  {
		  $('#signupform #firstname').addClass('field-error');
		  B_error = true;
	  }
	  if ( '' == $('#signupform #lastname').val() || 'Nom' == $('#signupform #lastname').val())
	  {
		  $('#signupform #lastname').addClass('field-error');
		  B_error = true;
	  }
	  
	  if ( '' == $('#signupform #phone').val() || 'Telephone' == $('#signupform #phone').val() || !regPhoneNumber.test($('#signupform #phone').val()) )
	  {
		  $('#signupform #phone').addClass('field-error');
		  B_error = true;
	  }
	  if ( '' == $('#signupform #email').val() || 'Email' == $('#signupform #email').val() || !regEmail.test($('#signupform #email').val()) )
	  {
		  $('#signupform #email').addClass('field-error');
		  B_error = true;
	  }
	  if ( '' == $('#signupform #message').val() || 'Message' == $('#signupform #message').val())
	  {
		  $('#signupform #message').addClass('field-error');
		  B_error = true;
	  }

	  if ( !B_error )
	  {
		  $.ajax(
                     {
                        url: $('#signupform').attr('action'),
                        type: 'POST',
                        data: $('#signupform').serialize(),
                        dataType: "json",
                        error: function()
                        {
                           alert("Error: message not sent !");
                        },
                        success: function(data)
                        {
                           if (data.success == true)
                           {
                              alert('Merci. Nous vous contacterons aussi vite que possible.');
                              $('#signupform #firstname').val('First Name');
                              $('#signupform #lastname').val('Last Name');
                              $('#signupform #phone').val('Phone Number');
                              $('#signupform #email').val('Email');
                              $('#signupform #message').val('Message');
                           }
                           else
                           {
                              alert("Error: "+data.errorMessage);
                           }
                        }
                        
                     }
                  );
		  
	  }
          
          return false;
  }

$(document).ready(function(){
   
});



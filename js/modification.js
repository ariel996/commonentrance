/**
 * Created by Dream Coder on 08/05/2017.
 */
$(document).ready(function () {
    var formulaire = $("#formulaire").val();
   $("#send").on('click', function () {
       if(formulaire == ''){
           $("#formulaire").focus().css('border-color','red');
       } else {
           $.ajax({
              type: 'post',
               url: 'verification.php',
               data: 'formulaire=' + formulaire,
               beforeSend: function () {
                   $("#send").attr('value','Sending ........');
               },
               success: function () {
                   if(msg == 'ok'){
                        window.open('welcome.php','_self');
                   } else {
                    alert('erreur');
                   }
               }
           });
       }
   });
});

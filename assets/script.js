//Set cookie for remember email
function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

//loading gif

$(window).on("load",function(){
  $(".loader-wrapper").fadeOut(1500);
  $('#email-login').val(getCookie('_user_remember'));
});



$(document).ready(function(){

//login ajax 

    $('form.login').on('submit',function(e){
      url = $(this).attr('action'),
      type = $(this).attr('method'),
      data = {};

      $(this).find('[name]').each(function(name,value){
        
        name = $(this).attr('name'),
        value = $(this).val();
        data[name]=value; 

        if(name==='remember'){
            if($(this).is(':checked')){
              data[name]=true; 
            }else{
              data[name]=false;
            }
        }else{
          data[name]=value; 
        }
        

      });
      
      $.ajax({
        url:url,
        type:type,
        data:data,
        success: function(response){
         if(response==='0'){
           $('#pwd').val("");
           $('.alert-danger').css("display", "block");
         }else{
          
          if(data['remember'])
            setCookie('_user_remember',data['email'],30);
          $(location).attr('href', 'entry');
         }
        }
      });
      return false;
    });

//register ajax

    $('form.register').on('submit',function(){
      url = $(this).attr('action'),
      type = $(this).attr('method'),
      data = {};

      $(this).find('[name]').each(function(name,value){
       
          name = $(this).attr('name'),
          value = $(this).val();
         
          if(name==='optradio'){
            if($(this).is(':checked')){
              data[name]=value; 
            }
          }else{
            data[name]=value; 
          }
          
      });
     

      $.ajax({
        url:url,
        type:type,
        data:data,
        success: function(response){
          $("form.register")[0].reset();
          alert("You have succesfully registered for ValChat!");
          console.log(response);
        }
      });
      return false;
    });
  
});



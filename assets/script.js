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

//----------------------------------------------




//loading gif

$(window).on("load",function(){
  $(".loader-wrapper").fadeOut(1500);
  $('#email-login').val(getCookie('_user_remember'));
});
//----------------------------------------------


$(document).ready(function(){

  //send message on click ajax 
 
  $("#public_msg_send_btn").on("click",function(){
    var content = $(".msg-container").val();
    url = 'ajax-msg-send';
    type = "post";
    data = {
      "content" : content
    }

    $.ajax({
      url:url,
      type:type,
      data:data,
      success: function(response){
        if (response && response.status) {
          $(".msg-container").val("");
        }
      }
    });
  });
  
  //----------------------------------------------

  //retrieve new messages from db every 5 seconds only in entry page..
  if (window.location.href === 'http://localhost/chatroom/entry'){
    setInterval(retrieveMsg,5000);

    function retrieveMsg(){
      var msg_last_id = $("#last_msg_id").val();
      url = 'ajax-msg-receive';
      type = "get";
      data = {
        "id" : msg_last_id
      }

      $.ajax({
        url:url,
        type:type,
        data:data,
        success: function(response){
          if (response && response.status) {
            $("#last_msg_id").val(response.lastid);   
            for (const msg of response.data) {  
              for(const sender of response.send_data){   
                if(msg.usr_id === sender.id){
                   $('#message-show').append('<div>'+ sender.nickname + "  Says:  " + msg.content +'</div>');
                   break;
                }
              }              
            }
          }
        }
      })
    }
  }

  //------------------------------------------
 

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
        dataType: 'json',
        success: function(response){
          if(response.loggedIn) {
            $(location).attr('href', 'entry');
          }else {
            alert(response.message);
          }
        },
      });
      return false;
    });
  //----------------------------------------------

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
        }
      });
      return false;
    });
  //----------------------------------------------
  
});



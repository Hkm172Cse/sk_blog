$(document).ready(function() {

    window.setTimeout(function() {
          $(".pop-up-box").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove();
          });
      }, 3000);

  $("#show_hide_password a").on('click', function(event) {
      event.preventDefault();
      if($('#show_hide_password input').attr("type") == "text"){
          $('#show_hide_password input').attr('type', 'password');
          $('#show_hide_password i').addClass( "fa-eye-slash" );
          $('#show_hide_password i').removeClass( "fa-eye" );
      }else if($('#show_hide_password input').attr("type") == "password"){
          $('#show_hide_password input').attr('type', 'text');
          $('#show_hide_password i').removeClass( "fa-eye-slash" );
          $('#show_hide_password i').addClass( "fa-eye" );
      }
  });

  $("#show_hide_confirmed_password a").on('click', function(event) {
    event.preventDefault();
    if($('#show_hide_confirmed_password input').attr("type") == "text"){
        $('#show_hide_confirmed_password input').attr('type', 'password');
        $('#show_hide_confirmed_password i').addClass( "fa-eye-slash" );
        $('#show_hide_confirmed_password i').removeClass( "fa-eye" );
    }else if($('#show_hide_confirmed_password input').attr("type") == "password"){
        $('#show_hide_confirmed_password input').attr('type', 'text');
        $('#show_hide_confirmed_password i').removeClass( "fa-eye-slash" );
        $('#show_hide_confirmed_password i').addClass( "fa-eye" );
    }
});
});
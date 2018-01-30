$(document).ready(function() {
	$('body').on('submit', '#add-form', function(e) {
    e.preventDefault();
    if(formValidation()){
      return false;
    }

    $.ajax({
        type:"POST",
        url:$(this).attr('action'),
        data:$(this).serialize(),
        dataType: 'json',
        success: function(data){
          console.log(data);
          if(data){
            $('input[type="text"]').val("");
            $('textarea').val("");
            $('.response-ajax').html("<p class='success'>Success</p>");
            setTimeout(function() {
              $.fancybox.close();
              location.reload();
            },3000);
          }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
          console.log(XMLHttpRequest);
          $('.response-ajax').html("<p class='error'>"+XMLHttpRequest.responseText+"</p>");
        }
    });
  });

  $('body').on('focus','.error', function() {
    $(this).removeClass('error');
  });
  function formValidation() {
    if($('#add-form input[type="text"]').val() == ""){
      $('#add-form input[type="text"]').addClass("error");
    }
    if($('#add-form textarea').val() == ""){
      $('#add-form textarea').addClass("error");
    }
    if($('#add-form input[type="text"]').val() == "" || $('#add-form textarea').val() == ""){
      return 1;
    }
    return 0;
  }
});
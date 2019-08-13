$('document').ready(function(){

  $('#formContact').unbind('submit').bind('submit',function(){
    var form = $(this);
    $.ajax({
      url: form.attr('action'),
      type: form.attr('method'),
      data: form.serialize(),
      beforeSend: function(){
        document.getElementById('btnEnviarForm').style.display = "none";
        document.getElementById('logoajax').style.display = "inline";
      },
      success: function(response){
        document.getElementById('logoajax').style.display = "none";
        document.getElementById('btnEnviarForm').style.display = "inline";
        alert(response);
        $('#formContact')[0].reset();
      }
    })

    return false;
  })
});
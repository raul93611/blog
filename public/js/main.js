$(document).ready(function(){
  $("#messages").click(function(){
    $("#messagesModal .modal-body").load("/user/messages", function(){
      $('#messagesModal').modal();
    });
    return false;
  });
});

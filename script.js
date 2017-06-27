/*global $*/

// function for add new client button
$("#add_client_button").click(function() { 
    
    alert('add new client button was clicked');
    
    $.ajax({
          type: "POST",
          url: "actions.php?action=addclient",
          data: "firstname=" + $("#client_firstname").val() 
                + "&lastname=" + $("#client_lastname").val() 
                + "&gender=" + $(".client_gender:checked").val() 
                + "&tel=" + $("#client_tel").val()
                + "&hairdresser=" + $("#client_hairdresser option:selected").val()
                + "&email=" + $("#client_email").val()
                + "&password=" + $("#client_password").val(),
          success: function(result) {
            
            alert(result);
            
          }
          
        })
  
})
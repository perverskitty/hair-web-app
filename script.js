/*global $*/

// function for add new client button
$("#add_client_button").click(function() { 
    
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
            
            if (result=='1') {
                
                // display success alert
                alert("New client added!");
                
            } else {
                
                // display error alert
                alert(result);
                
            }
            
          }
          
        })
  
})
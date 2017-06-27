/*global $*/

// function for 'add new client' button
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


// function for 'add new hairdresser' button
$("#add_hd_button").click(function() { 
    
    $.ajax({
          type: "POST",
          url: "actions.php?action=addhairdresser",
          data: "firstname=" + $("#hd_firstname").val() 
                + "&lastname=" + $("#hd_lastname").val() 
                + "&gender=" + $(".hd_gender:checked").val() 
                + "&tel=" + $("#hd_tel").val()
                + "&stafftype=" + $(".hd_type:checked").val()
                + "&email=" + $("#hd_email").val()
                + "&password=" + $("#hd_password").val(),
          success: function(result) {
            
            if (result=='1') {
                
                // display success alert
                alert("New hairdresser added!");
                
            } else {
                
                // display error alert
                alert(result);
                
            }
            
          }
          
    })
  
})
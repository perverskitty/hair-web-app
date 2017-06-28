/*global $*/


/* Add new client function
-------------------------------------------------- */
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


/* Add new hairdresser function
-------------------------------------------------- */
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


/* Book new appointment function
-------------------------------------------------- */
$("#book_appt_button").click(function() { 
    
    $.ajax({
          type: "POST",
          url: "actions.php?action=bookappointment",
          data: "client=" + $("#select_client option:selected").val() 
                + "&service=" + $("#select_service option:selected").val() 
                + "&hairdresser=" + $("#select_hairdresser option:selected").val() 
                + "&date=" + $("#select_date").val()
                + "&time=" + $("#select_time option:selected").val(),
          success: function(result) {
            
            if (result == '1') {
                
                // display success alert
                alert("Appointment booked!");
                
            } else {
                
                // display error alert
                alert(result);
                
            }
            
          }
          
    })
  
})


/* Cancel appointment function
-------------------------------------------------- */
$("#cancel_appt_button").click(function() { 
    
    $.ajax({
          type: "POST",
          url: "actions.php?action=cancelappointment",
          data: "id=" + $("#cancel_id").val(),
          success: function(result) {
            
            if (result == '1') {
                
                // display success alert
                alert("Appointment cancelled");
                
            } else {
                
                // display error alert
                alert(result);
                
            }
            
          }
          
    })
  
})
  <div class="container-fluid">
    
    <div class="row" id="homeRowContent">
      
      <div class="col-sm-8" id="homeCol8" >
        <h1>Cancel an appointment</h1>
        <form>
          <div class="form-group">
            <label for="cancel_id">Appointment ID</label>
            <input type="number" class="form-control" id="cancel_id" placeholder="Enter ID" min="1">
          </div>
          <button type="button" class="btn btn-primary" id="cancel_appt_button">Cancel appointment</button>
        </form>
      </div>
      
      <div class="col-sm-4" id="homeCol4">
        <?php displayNav(); ?>
      </div>
      
    </div>
    

  </div>
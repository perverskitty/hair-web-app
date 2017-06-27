  <div class="container-fluid">
    
    <div class="row" id="homeRowContent">
      
      <div class="col-sm-8" id="homeCol8" >
        <h1>Add an appointment</h1>
        <form>
          <div class="form-group">
            <label for="select_client">Client</label>
            <select class="form-control" id="select_client" required>
              <option value="">Select a client</option>
              <option value="1">Ally Mucha</option>
              <option value="2">Fee Day</option>
              <option value="3">Sue Ochs</option>
              <option value="4">Ben Thomas</option>
              <option value="5">Sammie Smith</option>
              <option value="6">Max Steel</option>
              <option value="7">Robyn Carlsson</option>
              <option value="8">William Goldman</option>
            </select>
          </div>
          <div class="form-group">
            <label for="select_service">Service</label>
            <select class="form-control" id="select_service" required>
              <option value="">Select a service</option>
              <option value="1">Ladies haircut and shampoo</option>
              <option value="2">Mens haircut and shampoo</option>
              <option value="3">Childrens haircut and shampoo</option>
              <option value="4">Shampoo and blow dry only</option>
              <option value="5">Perm</option>
              <option value="6">Straight perm</option>
              <option value="7">Colour</option>
              <option value="8">Highlights quarter-head</option>
              <option value="9">Highlights half-head</option>
              <option value="10">Highlights full-head</option>
              <option value="11">Treatment</option>
            </select>
          </div>
          <div class="form-group">
            <label for="select_hairdresser">Hairdresser</label>
            <select class="form-control" id="select_hairdresser" required>
              <option value="">Select a hairdresser</option>
              <option value="1">Peter Cheung</option>
              <option value="2">Ren Calder</option>
              <option value="3">Lory Gill</option>
              <option value="4">Mike Harley</option>
              <option value="5">Nathan Burton</option>
            </select>
          </div>
          <div class="form-group">
            <label for="select_date">Date</label>
            <input type="date" class="form-control" id="select_date" placeholder="YYYY-MM-DD" required>
          </div>
          <div class="form-group">
            <label for="select_time">Time</label>
            <select class="form-control" id="select_time" required>
              <option value="">Select a time</option>
              <option value="10:00:00">10:00</option>
              <option value="11:00:00">11:00</option>
              <option value="12:00:00">12:00</option>
              <option value="13:00:00">13:00</option>
              <option value="14:00:00">14:00</option>
              <option value="15:00:00">15:00</option>
              <option value="16:00:00">16:00</option>
              <option value="17:00:00">17:00</option>
              <option value="18:00:00">18:00</option>
            </select>
          </div>
          <button type="button" class="btn btn-primary" id="book_appt_button">Book appointment</button>
        </form>
      </div>
      
      <div class="col-sm-4" id="homeCol4">
        <?php displayNav(); ?>
      </div>
      
    </div>
    

  </div>
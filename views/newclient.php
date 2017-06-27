  <div class="container-fluid">
    
    <div class="row" id="homeRowContent">
      
      <div class="col-sm-8" id="homeCol8" >
        <h1>Add new client</h1>
        <form>
          <div class="form-group">
            <label for="client_firstname">First name</label>
            <input type="text" class="form-control" id="client_firstname" placeholder="Enter first name">
          </div>
          <div class="form-group">
            <label for="client_lastname">Last name</label>
            <input type="text" class="form-control" id="client_lastname" placeholder="Enter last name">
          </div>
          <fieldset class="form-group">
            <legend>Gender</legend>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="gender_radios" id="client_gender_m" value="m">
                Male
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="gender_radios" id="client_gender_f" value="f">
                Female
              </label>
            </div>
          </fieldset>
          <div class="form-group">
            <label for="client_tel">Mobile phone</label>
            <input type="text" class="form-control" id="client_tel" placeholder="Enter mobile phone">
          </div>
          <div class="form-group">
            <label for="client_hairdreser">Favourite hairdresser</label>
            <select class="form-control" id="client_hairdresser">
              <option>None</option>
              <option>Peter Cheung</option>
              <option>Ren Calder</option>
              <option>Lory Gill</option>
              <option>Mike Harley</option>
            </select>
          </div>
          <div class="form-group">
            <label for="client_email">Email</label>
            <input type="email" class="form-control" id="client_email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="client_password">Last name</label>
            <input type="password" class="form-control" id="client_password" placeholder="Enter password">
          </div>
          <button type="submit" class="btn btn-primary" id="add_client_button">Add new client</button>
        </form>
      </div>
      
      <div class="col-sm-4" id="homeCol4">
        <?php displayNav(); ?>
      </div>
      
    </div>
    

  </div>
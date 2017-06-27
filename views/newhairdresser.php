  <div class="container-fluid">
    
    <div class="row" id="homeRowContent">
      
      <div class="col-sm-8" id="homeCol8" >
        <h1>Add new hairdresser</h1>
        <form>
          <div class="form-group">
            <label for="hd_firstname">First name</label>
            <input type="text" class="form-control" id="hd_firstname" placeholder="Enter first name">
          </div>
          <div class="form-group">
            <label for="hd_lastname">Last name</label>
            <input type="text" class="form-control" id="hd_lastname" placeholder="Enter last name">
          </div>
          <fieldset class="form-group">
            <legend>Gender</legend>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input hd_gender" name="gender_radios" id="hd_gender_m" value="m">
                Male
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input hd_gender" name="gender_radios" id="hd_gender_f" value="f">
                Female
              </label>
            </div>
          </fieldset>
          <div class="form-group">
            <label for="hd_tel">Mobile</label>
            <input type="text" class="form-control" id="hd_tel" placeholder="Enter mobile number">
          </div>
          <fieldset class="form-group">
            <legend>Staff type</legend>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input hd_type" name="stafftype_radios" id="hd_type_m" value="1">
                Manager
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input hd_type" name="stafftype_radios" id="hd_type_f" value="2">
                Hairdresser
              </label>
            </div>
          </fieldset>
          <div class="form-group">
            <label for="hd_email">Email</label>
            <input type="email" class="form-control" id="hd_email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="hd_password">Password</label>
            <input type="password" class="form-control" id="hd_password" placeholder="Enter password">
          </div>
          <button type="button" class="btn btn-primary" id="add_hd_button">Add new hairdresser</button>
        </form>
      </div>
      
      <div class="col-sm-4" id="homeCol4">
        <?php displayNav(); ?>
      </div>
      
    </div>
    

  </div>
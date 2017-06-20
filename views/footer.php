  <!-- Bootstrap sticky footer -->  
  <footer class="footer">
      
      <div class="container">
        <p>&copy; My Web App 2017</p>
      </div>

    </footer>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <!-- Bootstrap modal that appears when login button is clicked -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="signinModalTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="signinModalTitle">Sign in</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="alert alert-danger" id="signinAlert"></div>
            <div class="alert alert-success" id="signinHelpAlert"></div>
            
            <form>
              <input type="hidden" id="signinActive" name="signinActive" value="1">
              <div class="form-group">
                <label id="emailLabel" for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email address">
              </div>
              <div class="form-group" id="passwordGroup">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
              </div>
            </form>
            
          </div>
          <div class="modal-footer">
            <a id="toggleSignin" href="#">Forgot email or password?</a>
            <button type="button" class="btn btn-primary" id="signinButton">Sign in</button>
          </div>
        </div>
      </div>
    </div>

    <!-- My custom JavaScript to be moved into its own file later in development -->
    <script>
      
      // function for toggling between 'sign in' and 'sign in help' modes
      $("#toggleSignin").click(function() {
        
        if ($("#signinActive").val() == "1") {
          
          // toggle from 'sign in' to 'sign in help'
          $("#signinActive").val("0");
          $("#signinModalTitle").html("Having trouble signing in?");
          $("#emailLabel").html("<p><br>Enter your email and we'll send you a link to reset a forgotten password. If you're having problems, please visit the salon or call us.</p>");
          $("#password").val("");
          $("#passwordGroup").hide();
          $("#signinButton").html("Continue");
          $("#toggleSignin").html("Return to sign in");
          
        } else {
          
          // toggle from 'sign in help' to 'sign in'
          $("#signinActive").val("1");
          $("#signinModalTitle").html("Sign in");
          $("#emailLabel").html("Email");
          $("#passwordGroup").show();
          $("#signinButton").html("Sign in");
          $("#toggleSignin").html("Forgot email or password?");
          
        }
      })
      
      // function for signing in a user or for a password reset 
      $("#signinButton").click(function() {
        
        $.ajax({
          type: "POST",
          url: "actions.php?action=signin",
          data: "email=" + $("#email").val() + "&password=" + $("#password").val() + "&signinActive=" + $("#signinActive").val(),
          success: function(result) {
            
            if (result =="1") {
              
              // do this when signed in
              window.location.assign("http://localhost/projects/hair-web-app/");
              
            } else {
              
              // do this when sign in failed
              $("#signinAlert").html(result).show();
              
            }
            
          }
          
        })
        
      })

    </script>

  </body>

</html>
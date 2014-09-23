

<?php
include 'header.php' ;
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
        <div class="container">
        <div class="row">

            <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title" id="myModalLabel">Please fill all fields</h4>
        <p>NOTE : Password must be at least 6 characters long.Have one upper case , one lower case and one number</p>
           
      </div>
      <div class="modal-body">
          <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">
              <fieldset>
                <div class="form-group">
                  <input class="form-control" placeholder="Username"  type="text" name='username' id='username' >
              </div>
              <div class="form-group">
                  <input class="form-control" placeholder="E-mail"   type="text" name="email" id="email" >
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password"  type="password" name="password" id="password" >
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Confirm Password"  type="password" name="confirmpwd" id="confirmpwd" >
              </div>
              <input class="btn btn-lg btn-primary btn-block" type="button" value="Register" onclick="return regformhash(
                                   this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" >
            </fieldset>
              </form>
              </div> 
    </div><!-- /.modal-content -->
      </div> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
    </body>
</html>
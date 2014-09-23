
<?php
include 'header.php' ;
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';

 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>


        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>

        <div class="container">
        <div class="row">

            <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title" id="myModalLabel">Please enter your email and password</h4>
      </div>
      <div class="modal-body">
        <form action="includes/process_login.php" method="post" name="login_form">                      
            <div class="form-group">
                  <input class="form-control" placeholder="E-mail"   type="text" name="email" id="email" >
              </div>
            <div class="form-group">
                <input class="form-control" placeholder="Password"  type="password" name="password" id="password" >
              </div>
            <input class="btn btn-lg btn-primary btn-block" type="button" value="Login" onclick="formhash(this.form, this.form.password);" /> 
        </form>
            <p>If you don't have a account , please <a href="register.php">click here to register</a></p>
        </div> 
    </div><!-- /.modal-content -->
      </div> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
        </body>
</html>
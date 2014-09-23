<?php
include 'header.php';
?> 

<div class="container">
		<div class="jumbotron hero-spacer text-center" >
        
        <h1>The Daily Question</h1>
        
      </div>
            <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title" id="myModalLabel">What does the http:// in the web adress stand for ?</h4>
      </div>
      <div class="modal-body">
		<div class="row">
       	 <div class="">
        	 	<form method="POST" action="incoints.php"></form>
                <fieldset>
        <div class="radio">
       <label>
       <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" >
        Hypertext Transitional Transfer Protocol
        </label>
         </div>
          <div class="radio">
          <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          Hypertext Transfer Protocol
            </label>
            </div>
             <div class="radio">
          <label>
          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
          Hyperlink Target Transfer Protocol
            </label>
            </div>
			<input class="btn btn-lg btn-primary btn-block" id="submit" type="button" value="Submit Answer">
            </fieldset>
          </form>

          
		     </div>
		</div><!-- /.thumbnail -->
      </div><!-- /.row -->
    </div>
    </div>
    </div>
  </div><!-- /.container -->
<script type="text/javascript">
  $(document).ready(function() {
    $(submit).click(function() {
      if ($(optionsRadios2).is(':checked')) {
         $('div.row').load('request.php');
         setTimeout( "window.location='protected_page.php';",1000 );
      }
      else {

        alert('Sorry , Wrong answer ! Do not give up , Try again tomorrow');
        window.location='protected_page.php';
      };
    });
  });



</script>


</body>
</html>
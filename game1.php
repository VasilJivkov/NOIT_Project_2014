<?php
include 'header.php';
?>



<div class="container">
		<div class="jumbotron hero-spacer text-center" >
        
        <h1>Complete IT </h1>
        
      </div>
		<div class="row">
       	 <div class="col-lg-6 col-xs-6 col-md-6">
        	 <h3>Fill the missing parts of the code<h3>
			<img src="imgs/battle-codes/1.jpg">

			</div> 
				<div class="col-lg-6 col-xs-6 col-md-6 text-center ">
          
              <h3>Chose which one goes where...</h3>
                 <div class="row">
         <div class="col-lg-3 col-xs-3 col-md-3 ">
            
                <form>
            <div class="radio">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios11" value="option1" >
             php
            </label>
            </div>
            <div class="radio">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios12" value="option2">
            html
            </label>
            </div>
             <div class="radio">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios13" value="option3">
            sql
            </label>
            </div></div>
          </form>
             <form>
            <div class="col-lg-3 col-xs-3 col-md-3 ">

            <div class="radio">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios21" value="option1" >
             charset
            </label>
            </div>
            <div class="radio">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios22" value="option2">
            char
            </label>
            </div>
             <div class="radio">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios23" value="option3">
            blanket
            </label>
            </div></div>
                      </form>
             <form>

            <div class="col-lg-3 col-xs-3 col-md-3 ">

            <div class="radio">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios31" value="option1" >
             WHERE
            </label>
            </div>
            <div class="radio">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios32" value="option2">
            FROM
            </label>
            </div>
             <div class="radio">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios33" value="option3">
            GET
            </label>
            </div></div>
                      </form>
             <form>
            <div class="col-lg-3 col-xs-3 col-md-3 ">

            <div class="radio">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios41" value="option1" >
             fetch
            </label>
            </div>
            <div class="radio">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios42" value="option2">
            array
            </label>
            </div>
             <div class="radio">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios43" value="option3">
            length
            </label>
            </div></div>
                     </form>
         
             

      <input class="btn btn-lg btn-primary btn-block" id="submit" type="button" value="Submit Answer">
            </fieldset>
          </form>
		     </div>
		
      </div><!-- /.row -->
  </div><!-- /.container -->

  <script type="text/javascript">
  



  $(document).ready(function() {
    $(submit).click(function() {
      if ($(optionsRadios11).is(':checked')) {
        if ($(optionsRadios22).is(':checked')) {
          if ($(optionsRadios32).is(':checked')) {
            if ($(optionsRadios41).is(':checked')) {
              $('div.row').load('request.php');
              alert('WELL DONE ! 10 Points added to Score.');
              window.location='protected_page.php';
            } else{};
                alert('Sorry , Wrong answer ! Do not give up , Try again tomorrow');
        window.location='protected_page.php';
          } else{};
            alert('Sorry , Wrong answer ! Do not give up , Try again tomorrow');
        window.location='protected_page.php';
        } else{};
         alert('Sorry , Wrong answer ! Do not give up , Try again tomorrow');
        window.location='protected_page.php';
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
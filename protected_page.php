<?php
include 'header.php' ;
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>

    <div class="container text-center">

        <?php if (login_check($mysqli) == true) : ?>
            <h3> <?php echo htmlentities($_SESSION['username']); ?> please choose a game . </h3>
            <p> Have in mind that this is a concept version with only 1 example for the games</p>
            <hr>
               <div class="row">
        <div class="col-lg-12">
 <div class="row text-center">

        <div class="col-lg-4 col-xs-6 col-md-4 hero-feature">
          <div class="thumbnail">
            <img src="imgs/codeBattle.jpg" alt="">
            <div class="caption">
              <h3>Complete IT</h3>
                 
                  <p>You are given a picture with missing parts of the code that you have to complete in order to get Points
                  </p>
                
              <p><a href="game1.php" class="btn btn-primary">Start Game</a> <button type="button" id="popover" rel="popover" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Very basic exercise
              done in all schools when teaching a new language . Very effective  " 
                data-original-title title>More Info</button></p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-xs-6 col-md-4 hero-feature">
          <div class="thumbnail">
            <img src="imgs/bug-found.jpg" alt="">
            <div class="caption">
              <h3>Find the BUG</h3>
              <p>We give a picture of a code and all you have to do in this game , is find the mistake and click on it . 
                Carefull you only have 3 chances for clicking over the image </p>
             <p><a href="game2.php" class="btn btn-primary">Start Game</a> <button type="button" id="popover2" rel="popover" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="This game makes you analyze the code . Find the logic in it and then find where the bug is . Simple , but important !" 
                data-original-title title>More Info</button></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xs-6 col-md-4 hero-feature">
          <div class="thumbnail">
            <img src="imgs/question.png" alt="">
            <div class="caption">
              <h3>The Daily Question</h3>
              <p>The Daily Question is : <strong> What does the http:// in the web adress stand for ? </strong>
                Upload the correct answer and get 10 points daily ! </p>
              <p><a class="btn btn-primary" href="game4.php">Answer</a> <button type="button" id="popover4" rel="popover" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="HTTP stand for Hypertext Transfer Protocol , which is the protocol to exchange or transfer hypertext." 
                data-original-title title>I give up</button></p>
            </div>
          </div>
        </div>

        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
            </p>
        <?php endif; ?>
   
 





 </body>
</html>
<?php
include 'header.php';

?>

    <div class="container">

      <div class="jumbotron hero-spacer">
        
        <h1> &lt; Code &gt; Battle Arena !</h1>
        <p>Compete in our games , show  us your coding skills . Rules are simple - 
          Give your best in the games and earn Points , be in the top 10 of the leaderboard at the end of the month , and you may receive a prize from our sponsors.
        Play , Code , Have fun and Learn something new everyday with us . </p> 
        <p><a class="btn btn-success btn-lg"  href="login.php">Login</a>
          <a class="btn btn-primary btn-lg" href="register.php">Sign in</a></p>
      </div>

<!-- Modal Not Logged -->

  <div class="modal fade" id="myModal0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger fade in">
      <h4>You need to be logged in to access this page!</h4>
      <p>Please select one of the following options</p>
      <p>
        <a class="btn btn-danger btn-lg" href="login.php">Login</a>
        <a class="btn btn-danger btn-lg" href="register.php">Sign in</a>
      </p>
    </div>
      </div> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

      <hr>
      
      <div class="row">
        <div class="col-lg-12">
           
        </div>
      </div><!-- /.row -->

      <div class="row text-center">

        <div class="col-lg-4 col-xs-6 col-md-4 hero-feature">
          <div class="thumbnail">
            <img src="imgs/codeBattle.jpg" alt="">
            <div class="caption">
              <h3>Complete IT</h3>
                 
                  <p>You are given a picture with missing parts of the code that you have to complete in order to get Points</p>
                
              <p><a data-toggle="modal" data-target="#myModal0" class="btn btn-primary">Start Game</a> <button type="button" id="popover" rel="popover" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Very basic exercise
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
                Carefull you only have 3 chances for clicking over the image !</p>
             <p><a data-toggle="modal" data-target="#myModal0" class="btn btn-primary">Start Game</a> <button type="button" id="popover2" rel="popover" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="This game makes you analyze the code . Find the logic in it and then find where the bug is . Simple , but important !" 
                data-original-title title>More Info</button></p>
            </div>
          </div>
        </div>
<!-- Modal Answer -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Who will be the next CEO of Microsoft ? </h4>
      </div>
      <div class="modal-body">
        <form action="#" method="post">
                <fieldset>
        <div class="radio">
       <label>
       <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Gabe Newell
        </label>
         </div>
          <div class="radio">
          <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          Richard Stallman
            </label>
            </div>
             <div class="radio">
          <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          Linus Torvalds
            </label>
            </div>
              
              <input class="btn btn-lg btn-primary btn-block" type="submit" value="Place Bet">
            </fieldset>
              </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <div class="col-lg-4 col-xs-6 col-md-4 hero-feature">
          <div class="thumbnail">
            <img src="imgs/question.png" alt="">
            <div class="caption">
              <h3>The Daily Question</h3>
              <p>The Daily Question is : <strong> What does the http:// in the web adress stand for ? </strong>
                Upload the correct answer and get 10 points daily ! </p>
              <p><a class="btn btn-primary" data-toggle="modal" data-target="#myModal0">Answer</a> <button type="button" id="popover4" rel="popover" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="The point of this game is to teach you something new everyday." 
                data-original-title title>More Info</button></p>
            </div>
          </div>
        </div>
<!-- Modal Answer -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">What does the http:// in the web adress stand for ?</h4>
      </div>
      <div class="modal-body">
        <form action="#" method="post">
                <fieldset>
                <div class="form-group">
                  <input class="form-control" placeholder="Your Answer" name="Answer" type="text">
              </div>
              <input class="btn btn-lg btn-primary btn-block" type="submit" value="Submit Answer">
            </fieldset>
              </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

      </div><!-- /.row -->
      
      <hr>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p> Vasil Zhivkov - NOIT Project 2014</p>
          </div>
        </div>
      </footer>
      
    </div><!-- /.container -->


  </body>

</html>
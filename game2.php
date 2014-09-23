<?php
include 'header.php';
?>
	<style>
.container-2 {
    position:relative;
    height:543px;
    width:516px;
}

.container-2 div {
    position:absolute;
    background-image:url(imgs/battle-codes/1_witherror.jpg);
    background-repeat:no-repeat;
}

.container-2 .bg-image {
    opacity:1;
    height:543px;
    width:516px;
}

.container-2 div.highlight-region {
    height:50px; 
    width:50px;
    opacity:1;
}

.container-2 div.highlight-region:hover {
    opacity:1;
}

	</style>

<div class="container">
		<div class="jumbotron hero-spacer text-center" >
        
        <h1>Find the BUG</h1>
        <p>All you have to do , is find the mistaken part and click on it . 
      </div>
	<div class="thumbnail">
		<div class="row">
			<div class="col-lg-12 col-xs-12 col-md-12 text-center ">
       	 <div class="container-2">
   			<div class="bg-image" ></div>
    			<div class="highlight-region" style="top:109px;left:39px;background-position: -38px -109px;"></div>
			</div>
		</div>
		</div><!-- /.thumbnail -->
      </div><!-- /.row -->
  </div><!-- /.container -->
<script type="text/javascript">
  var clicks = 0 ;
  
$(document).ready(function() {
    $('div.bg-image').click(function(){
        clicks++;
        if ( clicks > 3) {
          alert('Sorry , Wrong answer ! Do not give up , Try again tomorrow');
          window.location='protected_page.php';
        } ;
   });
  });
  



  $(document).ready(function() {
    $("div.highlight-region").click(function() {
      $('div.row').load('request.php');
    });
  });
</script>
</body>
</html> 
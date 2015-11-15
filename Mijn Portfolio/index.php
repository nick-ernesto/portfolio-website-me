<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Demo Contact Form'; 
        $to = 'nickjacobs158@hotmail.com'; 
        $subject = 'Message from Contact Demo ';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">There was an error sending your message. Please try again later</div>';
    }
}
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Portfolio Nick Jacobs</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="animate.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<header>

<nav class="navbar navbar-transparent navbar-fixed-top navfix">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#"><img src="IMG/logo.png"></a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-inner" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right buttonfix">
        <li><a  href="#one" class="active">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#two">About</a></li>
        <li><a href="#three">Projects</a></li>
        <li><a href="#four">contact</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</header>



<section id="one" class="sections navsnap">

<div  class="jumbotron sections" data-stellar-background-ratio = "0.05">
	<div id="box1" class="container">
	<h1 id="fittext1" class="animated zoomInDown">Nick Jacobs</h1>
	<p class="animated fadeInUpBig">webdevelopment & music production</p>
	<div id="cons"<span class="glyphicon glyphicon-menu-down"></span></div>
	</div>
</div>

</section>

<section id="two" class="sections navsnap">
	<div class="sections">
		<div id="box2" class="container">
		<img src="IMG/myface.png" id="profileimage" class="img-circle img-responsive" width="200" height="200">
		<h1>Something about me.</h1>
		<p>My name is nick jacobs. I love webdesign/ programming and music production and I hope to share as much as I can on this webpage.<br/> More info and music page coming soon!</p>
		</div>
	</div>
</section>

<section id="three" class="sections navsnap" data-stellar-background-ratio = "0.05">

	<div id="box3" class="container">
		<div id="carousel-example-generic" class="carousel slide fullpagecar" data-ride="carousel">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
    </li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <!-- First slide -->
    <div class="item active borderaway">
      <div class="carousel-caption carouselinside">
      	<div class="col-md-6 carouselimg">
				<img src="IMG/nfcbots.png" class="img-circle img-responsive imageclass" width="200" height="200" data-animation="animated zoomInUp"/>
			</div>
		<div class="col-md-6">
        <h1 data-animation="animated bounceInLeft">
          NFC-Bots
        </h1>
        <p data-animation="animated bounceInRight" >
          NFC-Bots is a multiplayer turn-based rpg. You can write and read NFC chips using the built-in NFC scanner on your Android device, and trade parts with your friends.
        </p>
        <button class="btn btn-primary btn-lg carouselbtn"
                data-animation="animated zoomInRight"><a href="https://play.google.com/store/apps/details?id=com.nfcbots&hl=en">Download now</a></button>
                </div>
      </div>
    </div><!-- /.item -->

    <!-- Second slide -->
    <div class="item borderaway">
      <div class="carousel-caption carouselinside">
      	<div class="col-md-6 carouselimg">
				<img src="IMG/reffieios.jpg" class="img-circle img-responsive imageclass" width="200" height="200" data-animation="animated zoomInUp"/>
			</div>
      <div class="col-md-6">
        <h1 data-animation="animated bounceInDown">
          Reffey
        </h1>
        <p data-animation="animated bounceInUp">
          With reffey for IOS your can make your own polls anonymously and let the people in your own area answer them. If it's a personal or maybe a political question, it's all up to you. You can even post your polls on facebook!
        </p>
        <button class="btn btn-primary btn-lg carouselbtn"
                data-animation="animated zoomInRight">Download now</button>
            </div>
      </div>
    </div><!-- /.item -->

  </div><!-- /.carousel-inner -->

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic"
     role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic"
     role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div><!-- /.carousel -->
	</div>

</section>

<section id="four" class="sections navsnap">

<div id="box4" class="container">
	<h1 class="headerclass">contact</h1>
  <form class="form-horizontal formclass" role="form" method="post" action="index.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
            <?php echo "<p class='text-danger'>$errHuman</p>";?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary carouselbtn">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>    
        </div>
    </div>
</form> 
	<!-- <form role="form" class="formclass">
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="sample@email.com"/>
		</div>
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Name"/>
		</div>
		<div class="form-group">
			<label for="message">Message:</label>
			<textarea class="form-control" name="message" id="message" placeholder="Enter your message here"></textarea>
		</div>
		<button type="submit" class="btn btn-primary btn-lg carouselbtn">Submit</button>
	</form> -->
</div>

</section>

<!-- footer -->

<footer>
	<div class="navbar navbar-default navbar-fixed-bottom">
		<div class="container footers">
			<div class="navbar-text pull-left">
				<p id="footerstuffs"><span id="copyglyph" class="glyphicon glyphicon-copyright-mark"></span>Nick Jacobs</p>
			</div>
			<div id="social">
				<i class="fa fa-facebook-square icoon"></i>		<!--make into real links-->
				<i class="fa fa-soundcloud icoon"></i>
				<i class="fa fa-twitter-square icoon"></i>
				</div>
		</div>
	</div>
</footer>


	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="stellar.js-master/jquery.stellar.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
  <script type="text/javascript" src="jquery.fittext.js"></script>
	<script type="text/javascript" src="functions.js"></script>
  
</body>
</html>
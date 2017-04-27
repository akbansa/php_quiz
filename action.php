<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Right way to Invest Your Money</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/search.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <script>
    function IsMobileNumber(txtMobId) {
    var mob = /^[7-9]{1}[0-9]{9}$/;
    var txtMobile = document.getElementById(txtMobId);
    if (mob.test(txtMobile.value) == false) {
        alert("Please enter valid 10 digit mobile number.");
        txtMobile.focus();
        return false;
    }
    return true;
	}
    </script>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.html#page-top">Investomoney</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="index.html#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Saving World</div>
                <div class="intro-heading">Invest Your Money</div>
                <div class="intro-lead-in">Answer some questions</div>
                <a href="#result" class="page-scroll btn btn-xl">Questions</a>
            </div>
        </div>
    </header>


    
  <!--Questions-->
<div class="container" id="result">
	<div class="row">
   		<div class="col-xs-12">
    		<div class="form-group">
            	<br><br><br><br><br>
			<form method="post" name="f" action="ress.php" >
						  
<?php
include('db_con.php');
{
$n= $_POST['no'];
if($n <= 100000)
	{
		echo "	<input type='email' placeholder='Enter your E-mail address' class='page-scroll search' size=40 name='mail' required><br><br>";
		$sql=mysqli_query($conn,"select * from quest where noopt=1");

		while($r=mysqli_fetch_array($sql))
			{
					echo "<input type='hidden' name='qid[]' value='ans[$r[qid]]'>"; 
					//echo " <input type='hidden' name='ans[]'   value='ans_$r[qid]' >";
					echo "<input type='hidden' name='ans_$r[qid]' id=an >";
					echo "<input type='hidden' name='res' value='1'>";
					echo "<h3 style='font-family:Comic Sans MS'>".$r['quest']."</h3>";
					echo "<br>";echo "<br>";
					
						echo "<input type='radio' required value='a' class='radio-inline' name='ans[$r[qid]]' id='op' onchange='check(this.name,ans_$r[qid].name)'>"; echo $r['op1']; 
						echo "<input type='radio' required value='b' class='radio-inline' name='ans[$r[qid]]' id='op' onchange='check(this.name,ans_$r[qid].name)'>"; echo $r['op2']; 
						echo "<input type='radio' required value='c' class='radio-inline' name='ans[$r[qid]]' id='op' onchange='check(this.name,ans_$r[qid].name)'>"; echo $r['op3'];  
						
					echo "<br>";echo "<br>";echo "<br>";
					
			}

	}
elseif($n>100000 && $n<500000){
		echo "<input type='email' placeholder='Enter your E-mail address' class='page-scroll search' size=40 name='mail' required><br><br>";
		$sql=mysqli_query($conn,"select * from quest where noopt=2");
		while($r=mysqli_fetch_array($sql))
			{
					echo "<input type='hidden' name='qid[]' value='ans[$r[qid]]'>"; 
					//echo "<input type='hidden' name='ans[]' value=ans_$r[qid] >";
					echo "<input type='hidden' name='ans_$r[qid]' id=an >";
					echo "<input type='hidden' name='res' value='2'>";
					echo "<h3 style='font-family:Comic Sans MS'>".$r['quest']."</h3>";
					echo "<br>";echo "<br>";
					
						echo "<input type='radio' value='a' class='radio-inline' name='ans[$r[qid]]' id='op' onchange='check(this.name,ans_$r[qid].name)'>"; echo $r['op1']; 
						echo "<input type='radio' value='b' class='radio-inline' name='ans[$r[qid]]' id='op' onchange='check(this.name,ans_$r[qid].name)'>"; echo $r['op2']; 
						echo "<input type='radio' value='c' class='radio-inline' name='ans[$r[qid]]' id='op' onchange='check(this.name,ans_$r[qid].name)'>"; echo $r['op3'];  
						
					echo "<br>";echo "<br>";echo "<br>";
					
			}
	}
	else{
		echo "<input type='email' placeholder='Enter your E-mail address' class='page-scroll search' size=40 name='mail' required><br><br>";
		$sql=mysqli_query($conn,"select * from quest where noopt=3");
		while($r=mysqli_fetch_array($sql))
			{
					echo "<input type='hidden' name='qid[]' value='ans[$r[qid]]'>"; 
					//echo "<input type='hidden' name='ans[]' value=ans_$r[qid] >";
					echo "<input type='hidden' name='ans_$r[qid]' id=an >";
					echo "<input type='hidden' name='res' value='3'>";
					echo "<h3 style='font-family:Comic Sans MS'>".$r['quest']."</h3>";
					echo "<br>";echo "<br>";
					
						echo "<input type='radio' value='a' class='radio-inline' name='ans[$r[qid]]' id='op' onchange='check(this.name,ans_$r[qid].name)'>"; echo $r['op1']; 
						echo "<input type='radio' value='b' class='radio-inline' name='ans[$r[qid]]' id='op' onchange='check(this.name,ans_$r[qid].name)'>"; echo $r['op2']; 
						echo "<input type='radio' value='c' class='radio-inline' name='ans[$r[qid]]' id='op' onchange='check(this.name,ans_$r[qid].name)'>"; echo $r['op3'];  
						
					echo "<br>";echo "<br>";echo "<br>";
					
			}
	}
}
?>
<input type="submit" value="Result" name="result" class="page-scroll btn btn-xl">
</form>
			</div>
		</div>
	</div>
</div>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Don&#39t hesitate to contact us.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" name="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" size="10" class="form-control" placeholder="Your Phone *" id="phone" name="phone" onblur="return IsMobileNumber('phone')" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" name="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; INVESTOMONEY 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
<!--                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>-->
            </div>
        </div>
    </footer>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/agency.js"></script>

</body>

</html>
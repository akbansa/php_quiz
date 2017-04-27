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
    var mob = /^[1-9]{1}[0-9]{9}$/;
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
                        <a class="page-scroll" href="index.html#team">Team</a>
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
                <div class="intro-lead-in">Some options where to invest</div>
                <a href="#result" class="page-scroll btn btn-xl">Result</a>
            </div>
        </div>
    </header>


    
  <!--Result-->
<div id="result">
<?php
include('db_con.php');
$id=$_POST['res'];
$uans=array();
$ans=array();
$ans=$_POST['ans'];
$get=" ";
foreach ($ans as $k=>$v) 
{
	//$uans= $uans.$uqid.".".$_POST[$v];
	$uans[$k]=$v;
	//$uqid++;	
}
				$uans_final=implode($uans,' ');
				$get=explode(" ", $uans_final);
				$options= "a b c";
				$op=explode(" ",$options);

$result='';
$final=" ";
if($id==1)
{
//echo $get[0].$get[1];
		if((strcmp($get[2],$op[0])==0))
		{
					if((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."2";
							$result=$result." 24";
							$result=$result." 42";
							$result=$result." 72";
							$final=explode(" ", $result);
				 		}
				 	elseif ((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."3";
							$result=$result." 23";
							$result=$result." 42";
							$result=$result." 81";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[2])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 22";
							$result=$result." 41";
							$result=$result." 81";
							$result=$result." 92";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."2";
							$result=$result." 23";
							$result=$result." 31";
							$result=$result." 42";
							$result=$result." 82";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 22";
							$result=$result." 42";
							$result=$result." 81";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[2])==0))
				 		{
				 			$result=$result."5";
							$result=$result." 21";
							$result=$result." 42";
							$result=$result." 81";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[2])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 22";
							$result=$result." 42";
							$result=$result." 81";
							$result=$result." 92";
							$final=explode(" ", $result);
						}
					elseif ((strcmp($get[0],$op[2])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."5";
							$result=$result." 22";
							$result=$result." 42";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
			 	 	else
						{
							$result=$result."6";
							$result=$result." 22";
							$result=$result." 41";
							$result=$result." 91";
							$final=explode(" ", $result);
					 	}
		}
		elseif((strcmp($get[2],$op[1])==0))
		{
					if((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."3";
							$result=$result." 24";
							$result=$result." 42";
							$result=$result." 71";
							$final=explode(" ", $result);
				 		}
				 	elseif ((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."3";
							$result=$result." 33";
							$result=$result." 42";
							$result=$result." 71";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[2])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 23";
							$result=$result." 42";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."3";
							$result=$result." 23";
							$result=$result." 42";
							$result=$result." 51";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 22";
							$result=$result." 42";
							$result=$result." 81";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[2])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 23";
							$result=$result." 41";
							$result=$result." 51";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[2])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 21";
							$result=$result." 42";
							$result=$result." 52";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[2])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 22";
							$result=$result." 41";
							$result=$result." 51";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
			 	 	else
						{
							$result=$result."6";
							$result=$result." 21";
							$result=$result." 41";
							$result=$result." 51";
							$result=$result." 91";
							$final=explode(" ", $result);
					 	}
		}
		else
		{
			
					if((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."6";
							$result=$result." 33";
							$result=$result." 71";
							$final=explode(" ", $result);
				 		}
				 	elseif ((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."5";
							$result=$result." 32";
							$result=$result." 61";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[2])==0))
				 		{
				 			$result=$result."5";
							$result=$result." 32";
							$result=$result." 62";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."3";
							$result=$result." 32";
							$result=$result." 42";
							$result=$result." 51";
							$result=$result." 61";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."6";
							$result=$result." 31";
							$result=$result." 51";
							$result=$result." 61";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[2])==0))
				 		{
				 			$result=$result."5";
							$result=$result." 22";
							$result=$result." 61";
							$result=$result." 82";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[2])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."6";
							$result=$result." 22";
							$result=$result." 92";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[2])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."6";
							$result=$result." 21";
							$result=$result." 61";
							$result=$result." 92";
							$final=explode(" ", $result);
 						}
			 	 	else
						{
				 			$result=$result."6";
							$result=$result." 22";
							$result=$result." 92";
							$final=explode(" ", $result);
					 	}
		}
}
elseif($id==2)
{
		if((strcmp($get[2],$op[0])==0))
		{
					if((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."2";
							$result=$result." 23";
							$result=$result." 32";
							$result=$result." 41";	
							$result=$result." 61";
							$result=$result." 71";
							$final=explode(" ", $result);
				 		}
				 	elseif ((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."3";
							$result=$result." 22";
							$result=$result." 31";
							$result=$result." 41";
							$result=$result." 81";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[2])==0))
				 		{
							$result=$result."4";
							$result=$result." 22";
							$result=$result." 31";
							$result=$result." 41";
							$result=$result." 82";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."2";
							$result=$result." 22";
							$result=$result." 32";
							$result=$result." 41";
							$result=$result." 61";
							$result=$result." 82";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 22";
							$result=$result." 31";
							$result=$result." 41";
							$result=$result." 81";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[2])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 22";
							$result=$result." 41";
							$result=$result." 61";
							$result=$result." 81";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[2])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 23";
							$result=$result." 41";
							$result=$result." 92";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[2])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."5";
							$result=$result." 23";
							$result=$result." 41";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
			 	 	else
						{
							$result=$result."6";
							$result=$result." 22";
							$result=$result." 41";
							$result=$result." 91";
							$final=explode(" ", $result);
					 	}
		}
		elseif((strcmp($get[2],$op[1])==0))
		{
					if((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."2";
							$result=$result." 12";
							$result=$result." 23";
							$result=$result." 42";
							$result=$result." 71";
							$final=explode(" ", $result);
				 		}
				 	elseif ((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."5";
							$result=$result." 32";
							$result=$result." 61";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[2])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 12";
							$result=$result." 22";
							$result=$result." 41";
							$result=$result." 81";
							$final=explode(" ", $result);	
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."3";
							$result=$result." 12";
							$result=$result." 22";
							$result=$result." 41";
							$result=$result." 51";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."3";
							$result=$result." 11";
							$result=$result." 32";
							$result=$result." 41";
							$result=$result." 51";
							$result=$result." 61";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[2])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 22";
							$result=$result." 31";
							$result=$result." 41";
							$result=$result." 51";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[2])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."3";
							$result=$result." 22";
							$result=$result." 42";
							$result=$result." 52";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[2])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."5";
							$result=$result." 22";
							$result=$result." 41";
							$result=$result." 51";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
			 	 	else
						{
							$result=$result."5";
							$result=$result." 22";
							$result=$result." 41";
							$result=$result." 51";
							$result=$result." 91";
							$final=explode(" ", $result);
					 	}
		}
		else
		{
			
					if((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 35";
							$result=$result." 71";
							$final=explode(" ", $result);
				 		}
				 	elseif ((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."5";
							$result=$result." 3";
							$result=$result." 61";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[2])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 33";
							$result=$result." 62";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 32";
							$result=$result." 61";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."6";
							$result=$result." 32";
							$result=$result." 61";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[2])==0))
				 		{
				 			$result=$result."5";
							$result=$result." 22";
							$result=$result." 31";
							$result=$result." 61";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[2])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."5";
							$result=$result." 22";
							$result=$result." 31";
							$result=$result." 92";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[2])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."5";
							$result=$result." 22";
							$result=$result." 61";
							$result=$result." 92";
							$final=explode(" ", $result);
 						}
			 	 	else
						{
							$result=$result."6";
							$result=$result." 22";
							$result=$result." 61";
							$result=$result." 91";
							$final=explode(" ", $result);
					 	}
		}
}
else
{
		if((strcmp($get[2],$op[0])==0))
		{
					if((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."1";
							$result=$result." 22";
							$result=$result." 35";
							$result=$result." 41";
							$result=$result." 71";
							$final=explode(" ", $result);
				 		}
				 	elseif ((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."3";
							$result=$result." 21";
							$result=$result." 33";
							$result=$result." 41";
							$result=$result." 61";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[2])==0))
				 		{
							$result=$result."4";
							$result=$result." 21";
							$result=$result." 33";
							$result=$result." 61";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."2";
							$result=$result." 22";
							$result=$result." 34";
							$result=$result." 41";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 21";
							$result=$result." 32";
							$result=$result." 41";
							$result=$result." 61";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[2])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 21";
							$result=$result." 31";
							$result=$result." 41";
							$result=$result." 61";
							$result=$result." 81";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[2])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."3";
							$result=$result." 22";
							$result=$result." 31";
							$result=$result." 42";
							$result=$result." 61";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[2])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 22";
							$result=$result." 31";
							$result=$result." 41";
							$result=$result." 61";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
			 	 	else
						{
							$result=$result."5";
							$result=$result." 21";
							$result=$result." 31";
							$result=$result." 42";
							$result=$result." 91";
							$final=explode(" ", $result);
					 	}
		}
		elseif((strcmp($get[2],$op[1])==0))
		{
					if((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."1";
							$result=$result." 12";
							$result=$result." 33";
							$result=$result." 41";
							$result=$result." 61";
							$result=$result." 72";
							$final=explode(" ", $result);
				 		}
				 	elseif ((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."2";
							$result=$result." 12";
							$result=$result." 33";
							$result=$result." 41";
							$result=$result." 61";
							$result=$result." 71";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[2])==0))
				 		{
				 			$result=$result."3";
							$result=$result." 11";
							$result=$result." 33";
							$result=$result." 41";
							$result=$result." 61";
							$result=$result." 81";
							$final=explode(" ", $result);	
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."2";
							$result=$result." 12";
							$result=$result." 32";
							$result=$result." 41";
							$result=$result." 51";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."2";
							$result=$result." 12";
							$result=$result." 32";
							$result=$result." 41";
							$result=$result." 51";
							$result=$result." 61";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[2])==0))
				 		{
				 			$result=$result."3";
							$result=$result." 11";
							$result=$result." 21";
							$result=$result." 32";
							$result=$result." 41";
							$result=$result." 51";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[2])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."3";
							$result=$result." 22";
							$result=$result." 32";
							$result=$result." 41";
							$result=$result." 51";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[2])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 22";
							$result=$result." 31";
							$result=$result." 41";
							$result=$result." 51";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
			 	 	else
						{
							$result=$result."5";
							$result=$result." 22";
							$result=$result." 41";
							$result=$result." 51";
							$result=$result." 91";
							$final=explode(" ", $result);
					 	}
		}
		else
		{
			
					if((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."3";
							$result=$result." 35";
							$result=$result." 61";
							$result=$result." 71";
							$final=explode(" ", $result);
				 		}
				 	elseif ((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 34";
							$result=$result." 61";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[0])==0) && (strcmp($get[1],$op[2])==0))
				 		{
				 			$result=$result."5";
							$result=$result." 33";
							$result=$result." 61";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."3";
							$result=$result." 34";
							$result=$result." 61";
							$result=$result." 82";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."5";
							$result=$result." 33";
							$result=$result." 61";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[1])==0) && (strcmp($get[1],$op[2])==0))
				 		{
				 			$result=$result."4";
							$result=$result." 33";
							$result=$result." 62";
							$result=$result." 81";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[2])==0) && (strcmp($get[1],$op[0])==0))
				 		{
				 			$result=$result."5";
							$result=$result." 21";
							$result=$result." 32";
							$result=$result." 61";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
					elseif ((strcmp($get[0],$op[2])==0) && (strcmp($get[1],$op[1])==0))
				 		{
				 			$result=$result."5";
							$result=$result." 22";
							$result=$result." 31";
							$result=$result." 61";
							$result=$result." 91";
							$final=explode(" ", $result);
 						}
			 	 	else
						{
							$result=$result."6";
							$result=$result." 22";
							$result=$result." 31";
							$result=$result." 91";
							$final=explode(" ", $result);
					 	}
		}
}
echo "<center>";
echo "<h2 class='section-heading' style='font-family:Comic Sans MS;'>You may want to invest here</h3><br>";
foreach($final as $x=>$i)
	{
		$sql=mysqli_query($conn,"select * from result where id=$i");
		while($xyz=mysqli_fetch_array($sql))
		{
			echo "<h4 style='font-family:Comic Sans MS' class='section-subheading'>".$xyz['result']." (".$xyz['percent'].")</h4><br>";
			
		}
	}
echo "</center>";
?>
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
                        <li><a href="https://twitter.com/riseintech9"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/riseintechnology/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/in/risein-tech-983494ab"><i class="fa fa-linkedin"></i></a>
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

    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
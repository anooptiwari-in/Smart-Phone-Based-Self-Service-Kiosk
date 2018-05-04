<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NoQ For You</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

		
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div id="ornament" width="100px"></div>
    	<div class="wrapper">
        	<div id="breadcrumbs"></div>	<div id="content-top"></div>
	<div id="content-border" class="fullwidthpage">
        <div id="content" class="menucard ">
        	<div class="ribbon-container">
                <div class="title-container">
                    <div class="title">
                        <div class="bar-left"></div>
                        <div class="bar-right"></div>
                        <h1 class="post-title">Bill Generator</h1>
                    </div>
                </div>
            </div>
            <a href="" id="card-prev">
            	<div class="arrow_bit_bottom"></div>
                <div class="arrow_bit_top"></div>
                <div class="arrow_bit_left"></div>
                <div class="arrow_bit_right"></div>
                <div class="arrow_bit_middle"></div>
            </a>
            <a href="" id="card-next">
            	<div class="arrow_bit_bottom"></div>
                <div class="arrow_bit_top"></div>
                <div class="arrow_bit_left"></div>
                <div class="arrow_bit_right"></div>
                <div class="arrow_bit_middle"></div>
            </a>
                        
                        
            <div id="card-container" activepage="1">
            	<div id="card-slider">
											<div id="cardpageid-1" class="card-page" width="100px">
                        	                                    <div class="card-cat" id="cardcatid-15" catid="15">
                                        
                                                                                <div class="card-item  has-thumbnail">
	<div class="dottedline"></div>
	<div class="item-text">
	            <div class="item-img">
                <div class="item-img-border">
	
	
	
        <?php
	session_start();
	echo "<font color='red'>";
	echo "Your session ID is ".session_id();
	echo "<br>";
	echo "<a href='logout.php'>Signout</a>";
	echo "</font>";
	echo "<hr>";
	
	
	function IsChecked($chkname,$value)
	{
        if(!empty($_POST[$chkname]))
        {
            foreach($_POST[$chkname] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }
	
	$total = 0;
	$total += IsChecked('dish','A') ? $_POST['drop1']*140.5 : 0;
	$total += IsChecked('dish','B') ? $_POST['drop2']*120 : 0;
	$total += IsChecked('dish','C') ? $_POST['drop3']*110.5 : 0;
	$total += IsChecked('dish','D') ? $_POST['drop4']*140 : 0;
	$total += IsChecked('dish','E') ? $_POST['drop5']*150 : 0;
	
	If(IsChecked('dish','A') == true){
		$_SESSION['dish_1'] = "Seafood Fettucini";
		$_SESSION['q_dish_1'] = $_POST['drop1'];
		$_SESSION['total_dish_1'] = $_POST['drop1']*140.5;
	}
	else {
		$_SESSION['dish_1'] = " ";
		$_SESSION['q_dish_1'] = " ";
		$_SESSION['total_dish_1'] = " ";
	}	
	
	If(IsChecked('dish','B') == true){
		$_SESSION['dish_2'] = "Spring Bay scallops";
		$_SESSION['q_dish_2'] = $_POST['drop2'];
		$_SESSION['total_dish_2'] = $_POST['drop2']*120;
	}
	else {
		$_SESSION['dish_2'] = " ";
		$_SESSION['q_dish_2'] = " ";
		$_SESSION['total_dish_2'] = " ";
	}
	
	If(IsChecked('dish','C') == true){
		$_SESSION['dish_3'] = "Char grilled octopus";
		$_SESSION['q_dish_3'] = $_POST['drop3'];
		$_SESSION['total_dish_3'] = $_POST['drop3']*110.5;
	}
	else {
		$_SESSION['dish_3'] = " ";
		$_SESSION['q_dish_3'] = " ";
		$_SESSION['total_dish_3'] = " ";
	}
	
	If(IsChecked('dish','D') == true){
		$_SESSION['dish_4'] = "Shrimp Scampi";
		$_SESSION['q_dish_4'] = $_POST['drop4'];
		$_SESSION['total_dish_4'] = $_POST['drop4']*140;
	}
	else {
		$_SESSION['dish_4'] = " ";
		$_SESSION['q_dish_4'] = " ";
		$_SESSION['total_dish_4'] = " ";
	}
	
	If(IsChecked('dish','E') == true){
		$_SESSION['dish_5'] = "Linguini Pescatore";
		$_SESSION['q_dish_5'] = $_POST['drop5'];
		$_SESSION['total_dish_5'] = $_POST['drop5']*150;
	}
	else {
		$_SESSION['dish_5'] = " ";
		$_SESSION['q_dish_5'] = " ";
		$_SESSION['total_dish_5'] = " ";
	}
	

	
	echo "<big>";
	echo "Your Bill is generated. It is Rs. " . $total;
	echo "</big>";
	$_SESSION['total'] = $total;
    ?>
	
	<br>
	Take this Generated QR Code to the counter and Pay.  
	<br> <br>
	<img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?php echo $total; ?>" align="center" title="Your Bill" />
	
	<br>
	<form action="file_download.php" method="post"><br>
	<input type="submit" name="Submit" value="Download Your Bill" />
	</form>
	
	
    </body>
</html>

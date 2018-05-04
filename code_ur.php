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
	
	echo "<big>";
	echo "Your Bill is generated. It is Rs. " . $total;
	echo "</big>";
	
    ?>
	
	<br>
	Take this Generated QR Code to the counter and Pay.  
	<br> <br>
	<img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?php echo $total; ?>" align="center" title="Your Bill" />
	
	
    </body>
</html>

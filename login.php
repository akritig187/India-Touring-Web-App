<?php include('server.php') ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>INDIA TOUR</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="./static/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="./static/css/style3.css" />
		<link rel="stylesheet" type="text/css" href="./static/css/animate-custom.css" />
    </head>


    <body class ="body">


        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1> INDIA TOUR</h1>
				<!--nav class="codrops-demos">
					<a href="index3.html" class="current-demo">Demo 3</a>
				</nav-->
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form method='POST' action='login.php'>
                            <?php include('errors.php'); ?>
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="login button"> 
                                    <input type="submit" name="login_user" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="register.php" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
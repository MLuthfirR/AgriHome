<!DOCTYPE html>
<?php
    include "connect.php";
  ?>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>

		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="login.css" />
    </head>
    <body>
        <div class="container">

            <header>
                <h1>Be Part of AgriHome</h1>

            </header>
            <section>
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form role="form" name="create" action="loginproses.php" method="POST">
                                <h1>Log In</h1>
                                <p>
                                    <label for="username" class="uname" > Username or email </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                                </p>
                                <p class="keeplogin">
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
									<label for="loginkeeping">Remember me</label>
								</p>
                                <p class="login button">
                                   <input type="submit" value="Sign In"/>
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Sign up</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form role="form" name="create" action="inputproses.php" method="POST">
                                <h1> Sign up </h1>
                                <p>
                                    <label for="usernamesignup" class="uname" >Your username</label>
                                    <input id="usernamesignup" name="nama" required="required" type="text" placeholder="Your Username" />
                                </p>
                                <p>
                                    <label for="emailsignup" class="youmail"  > Your email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="blablabla@mail.com"/>
                                </p>
                                <p>
                                    <label for="passwordsignup" class="youpasswd" >Your password </label>
                                    <input id="passwordsignup" name="pass" required="required" type="password" placeholder="Your Password" stacksoverflow="4"/>
                                </p>
                                <p>
                                    <label for="passwordsignup_confirm" class="youpasswd" >Address </label>
                                    <input id="passwordsignup_confirm" name="alamat" required="required" type="text" placeholder="Your Address"/>
                                </p>
                                <p class="signin button">
									<input type="submit" value="Sign up"/>
								</p>
                                <p class="change_link">
									Already a member ?
									<a href="#tologin" class="to_register"> log in </a>
								</p>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </body>
</html>

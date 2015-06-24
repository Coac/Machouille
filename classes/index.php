<?php require("classes/Core.class.php");

    $core = new Core();

    if($core->isUserLogged())
    {
      $core->redirect("member/?lang=fr-FR");
      exit(); 
    }

    if(isset($_POST["username"]))
    {
        if($core->tryAuth($_POST["username"], sha1($_POST['password'])))
        {
           $core->redirect("member/");
        }
        else
        {
            $core->redirect("index.php?error");
        }
    }
?>
 
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Casino Facile | C'est pas cher, c'est facile</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/form.css" rel="stylesheet" type="text/css">
    <link href="css/animate-custom.css" rel="stylesheet" type="text/css">
</head>

<body>
                <video autoplay="" loop="" id="bgvid" class="layer">
                    <source src="images/bgmotion.webm" type="video/webm">
                    <source src="images/bgmotion.mp4" type="video/mp4">
                </video>  
                    <div id="container_demo" > 
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="index.php" method="POST" autocomplete="on"> 
                                <h1>Connexion</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="ex : nom.prenom@domain.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Votre mot-de-passe </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="ex: X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
                                      <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
                                      <label for="loginkeeping">Se souvenir de moi</label>
                                    </p>
                                   <p class="login button"> 
                                        <input type="submit" value="Login" /> 
                                    </p>
                                    <p class="change_link">
                                        Pas inscrit ?
                                      <a href="#toregister" class="to_register">Rejoignez-nous</a>
                                    </p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="index.php" autocomplete="on"> 
                                <h1> Inscription </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Nom d'utilisteur</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Votre email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Votre mot-de-passe </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="ex: X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Confirmation du mot-de-passe</label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="ex: X8df!90EO"/>
                                </p>
                                    <p class="signin button"> 
                                      <input type="submit" value="Inscription"/> 
                                    </p>
                                      <p class="change_link">  
                                        Déjà membre ?
                                      <a href="#tologin" class="to_register"> Connexion </a>
                                    </p>
                            </form>
                        </div>
            
                    </div>
                </div>  
        </body> 
</html>
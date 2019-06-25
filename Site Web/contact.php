<?php

require_once "lib/model.php";

 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <title>Hoyde Contact Page</title>
   <link rel="stylesheet" href="stylecontact.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
 <body>
   <div class="container">
     <header>
       <div>
        <img src="img/header_logo.png" alt="" title="">
        <img src="img/header_logo_text.png" alt="" title="">
       </div>
       <div>
         <nav>
                  <ul class="ulNoPuce ulNav">
                    <li>
                      <a href="home.php" title="">Accueil</a>
                    </li>

                    <li>
                      <a href="shop.php" title="">Boutique</a>
                    </li>

                    <li>
                      <a href="about.php" title="">A propos</a>
                    </li>

                    <li>
                      <a href="" title="">Contact</a>
                    </li>

                  </ul>
         </nav>
         <div>
           <img src="img/header_panier.png" alt="" title="">
           <button type="button">Achetez votre Hoyde</button>
         </div>
       </div>
     </header>

     <main>
       <div class="contact_main_div">
         <h1>Nous Contacter</h1>
         <div class="contact_main_div_div">
           <div>
            <img src="img/contact_logo_mail.png">
            <h4>Envoyez nous un mail à infohoyde@hoyde.com</h4>
          </div>
          <div>
            <img src="img/contact_logo_tel.png">
            <h4>Pour toutes questions d'order général, contacter notre support</h4>
          </div>
          <div>
            <img src="img/contact_logo_shop.png">
            <h4>Retrouvez-nous dans nos magasins</h4>
          </div>
          <div>
            <img src="img/contact_logo_date.png">
            <h4>Retrouvez-nous dans nos magasins éphémère</h4>
            <button type="button">Dates</button>
          </div>
        </div>
      </div>
     </main>

     <section>
       <?php
        require_once "./lib/model.php";

        $errors = [];
        $success;


        if(isset($_POST["name"])
        && isset($_POST["firstname"])
        && isset($_POST["email"]) )

        {
            $input_name       = sanitize($_POST["name"]);
            $input_firstname      = sanitize($_POST["firstname"]);
            $input_email = sanitize($_POST["email"]);


            if(count($errors) == 0)
            {
              AddClient($input_name,$input_firstname,$input_email);
            $success = "";
              echo "<h2>".$success."</h2>";
            }else
              $errors[] = "";
            echo "<ul>";
            foreach($errors as $error)
            {
              echo"<li>.$error.</li>";
            }
            echo "</ul>";
          }

          ?>
      <h1>Recevoir nos Newsletters</h1>
      <form action="" method="post">
        <label for="name">Nom</label>
        <input id='name' type='text' name="name" value="" />
        <label for="firstname">Prénom</label>
        <input id='firstname' type='text' name="firstname" value="" />
        <label for="email">email</label>
        <input id='email' type='text' name="email" value="" />

        <input id="submit" type="submit" name="btn-login" value="Envoyer" />
      </form>
    </section>

      <footer>
        <div>
          <img src="img/footer_logo_text.png" alt="" title="" class="footerLogoText">
          <ul class="ulNoPuce ulSocialMedia">
           <li>
                 <a href="" title="">
                   <img src="img/footer_facebook.png" title="Facebook" alt="">
                 </a>
               </li>

               <li>
                 <a href="" title="">
                   <img src="img/footer_instagram.png" title="Instagram" alt="">
                 </a>
               </li>

               <li>
                 <a href="" title="">
                   <img src="img/footer_twitter.png" title="Twitter" alt="">
                 </a>
               </li>

         </ul>
       </div>
          <nav>
                     <ul class="ulNoPuce ulNav">
                       <li>
                         <a href="home.php" title="">Accueil</a>
                       </li>

                       <li>
                         <a href="shop.php" title="">Boutique</a>
                       </li>

                       <li>
                         <a href="about.php" title="">A propos</a>
                       </li>

                       <li>
                         <a href="" title="">Contact</a>
                       </li>

                     </ul>
          </nav>
       <div>
         <h3 class="conditions">Conditions Générales de Vente Mentions légales</h3>
         <h3 class="cookies">En continuant sur notre site vous acceptez l’utilisation des cookies.</h3>
       </div>

      </footer>
    </div>
 </body>
 </html>

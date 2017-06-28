<?php
include("dbconnect.php");
?>
  <!DOCTYPE html>

  <head>
    <title>Nina Williams Jewelry
    </title>
    <meta charset="UTF-8">
    <meta name="description" content="Nina Williams Jewelry handmade glass jewelry artist from Atlanta, Ga.">
    <meta name="keywords" content="Nina Williams, Handmade Glass Jewelry,Atlanta, Ga.">
    <meta name="author" content="Nina Williams">
    <link rel="stylesheet" href="Styles/main.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <div id="discount"><a class="contact" href="contact.php">CONTACT US FOR CUSTOM ORDERS</a></div>
    <div class="wrapper">
      <?php
include("header.php");
?>


        <?php
if(!isset($_GET['page'])) {
    include ("home.php");
}

else {
    $page=$_GET['page'];
    include("$page.php");
}

?>


          </main>

          <div class="footer">

          </div>
    </div>
    <!--wrapper-->

    <footer>
      <p>&copy; NINA WILLIAMS JEWELRY</p>
    </footer>
  </body>

  </html>

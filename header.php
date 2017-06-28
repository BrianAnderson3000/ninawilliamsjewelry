<header class="header">
  <div class="banner">
    <div class="banner1">
      <a href="index.php"><img src="Images/logo.jpg" alt="Nina Williams" /></a>
    </div>
    <div class="banner2">
      <a href="https://www.instagram.com/ninawilliamsjewelry/">
        <img src="Images/Instagram.png" alt="Nina Williams Jewelry Instagram" /></a>
      <a href="https://www.pinterest.com/ganina/"><img src="Images/Pinterest.png" alt="Nina Williams Jewelry Pinterest" /></a>
      <a href="https://www.facebook.com/Nina-Williams-Jewelry-1879136925659348/"><img src="Images/Facebook.png" alt="Nina Williams Jewelry Facebook" /></a>
    </div>

  </div>

  <nav class="nav">
    <a href="index.php">HOME</a>
    <?php 
include("categoryList.php");
?>

      <form id="cart" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
        <input type="image" src="http://ninawilliamsjewelry.com/Images/cart.png" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
      </form>
  </nav>

</header>

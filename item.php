<?php
if(!isset($_GET['stockID'])) {
    header("Location: index.php");
}

$item_sql="SELECT * FROM stock WHERE stockID=".$_GET['stockID'];
if($item_query=mysqli_query($dbconnect, $item_sql)) {
    $item_rs=mysqli_fetch_assoc($item_query);
    ?>
  <div class="item2">
    <div class="item_box2"><img src="Images/<?php echo $item_rs['bigphoto']; ?>" /></div>
    <div class="item_box3">
      <h2 id="name"><?php echo $item_rs['name']; ?></h2>
      <p>$
        <?php echo $item_rs['price']; ?>
      </p>
      <p>
        <?php echo $item_rs['description']; ?>
      </p>
      </br>
      <p>Before making a purchase, please review our <a class="service" href="terms.php">Terms of Service</a></p>
    </div>





  </div>
  <?php
}




?>
<?php
if(!isset($_GET['stockID'])) {
    header("Location: index.php");
}

$item_sql="SELECT * FROM stock WHERE stockID=".$_GET['stockID'];
if($item_query=mysqli_query($dbconnect, $item_sql)) {
    $item_rs=mysqli_fetch_assoc($item_query);
    ?>
  <div class="item2">
    <div class="item_box2"><img src="Images/<?php echo $item_rs['bigphoto']; ?>" /></div>
    <div class="item_box3">
      <h2 id="name"><?php echo $item_rs['name']; ?></h2>
      <p>$
        <?php echo $item_rs['price']; ?>
      </p>
      <p>
        <?php echo $item_rs['description']; ?>
      </p>
      </br>
      <p>Before making a purchase, please review our <a class="service" href="terms.php">Terms of Service</a></p>
    </div>





  </div>
  <?php
}




?>

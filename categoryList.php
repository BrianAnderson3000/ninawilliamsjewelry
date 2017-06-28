<?php
$cat_sql="SELECT * FROM nina_catergory";
$cat_query=mysqli_query($dbconnect, $cat_sql);
$cat_rs=mysqli_fetch_assoc($cat_query);


do { ?>
  <a class="menu" href="index.php?page=catergory&catergoryID=<?php echo $cat_rs['catergoryID']; ?>">
    <?php echo $cat_rs['name']; ?>
  </a>

  <?php
} while ($cat_rs=mysqli_fetch_assoc($cat_query))
?>

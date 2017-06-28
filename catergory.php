<?php
    if(!isset($_GET['catergoryID'])) {
        header("Location:index.php");
    }

    $stock_sql="SELECT stock.stockID, stock.name, stock.price, stock.thumbnail, nina_catergory.name AS catname FROM stock JOIN nina_catergory ON stock.catergoryID=nina_catergory.catergoryID WHERE stock.catergoryID=".$_GET['catergoryID'];
if($stock_query=mysqli_query($dbconnect, $stock_sql)) {
    $stock_rs=mysqli_fetch_assoc($stock_query);
}

if(mysqli_num_rows($stock_query)==0) {
    echo "Sorry, no items to display";
}

else {
   do { 
        ?>
        
        <a href="index.php?page=item&stockID=<?php echo $stock_rs['stockID']; ?>">
        <div class="item">
        <div class="item_box"<p><img src="Images/<?php echo $stock_rs['thumbnail']; ?>"/></p>        
        <p><?php echo $stock_rs['name']; ?></p>
        <p>$<?php echo $stock_rs['price']; ?></p></a>
        </div>
        </div>
<?php
    } while($stock_rs=mysqli_fetch_assoc($stock_query));
    ?>
    
    
    <?php
}
?>
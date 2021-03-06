<?php 
require '../controller/closetManager.php';
require 'includes/header.php'?>

<section>

<div class="topnav">
  <h3>Edit Item</h3> 
  <ul>
  <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
    <li><a href="upload.php"><i class="fas fa-file-upload"></i></a></li>
    <li><a href="outfit.php"><i class="fas fa-calendar-day"></i></a></li>
    <li><a href="favorites.php"><i class="fas fa-heart"></i></a></li>
  </ul>
</div>

<div class="container"> 
 <?=$alert?>
        <?php foreach ($items as $item) : ?>
                <img src=images/<?= $item['image'] ?>>
                <div class="edit-text"> 
                <form method="post">
                    <label for="item_type"> Type of item: </label>
                    <select name="item_type" class="custom-select">
                        <option value="<?= $item['type']?> "><?= ucfirst($item['type'])?></option>
                        <option value="outer wear">Outer Wear</option>
                        <option value="pants">Pants</option>
                        <option value="skirts">Skirts</option>
                        <option value="jeans">Jeans</option>
                        <option value="dress">Dress</option>
                        <option value="shorts">Shorts</option>
                        <option value="blouse">Blouse</option>
                        <option value="knits">Knits</option>
                        <option value="tshirt">T-shirt</option>
                        <option value="jewelry">Jewelry</option>
                        <option value="glasses">Glasses</option>
                        <option value="accessory">Accessory</option>
                        <option value="sneakers">Sneakers</option>
                        <option value="heels">Heels</option>
                        <option value="shoes">Shoes</option>
                        <option value="hat">Hats</option>
                    </select> <br>
                    <label for="item_weather"> Weather type: </label>
                    <select name="item_weather" class="custom-select">
                    <option value="<?= $item['weather']?> "><?= ucfirst($item['weather'])?></option>
                        <option value="hot">Hot</option>
                        <option value="cold">Cold</option>
                        <option value="rain">Rain</option>
                        <option value="all">All</option>
                    </select> <br>
                    <label for="item_ocassion"> Ocassion: </label>
                    <select name="item_ocassion" class="custom-select">
                    <option value="<?= $item['ocassion']?> "><?= ucfirst($item['ocassion'])?></option>
                        <option value="casual">Casual</option>
                        <option value="classy">Classy</option>
                        <option value="party">Party</option>
                        <option value="sporty">Sporty</option>
                        <option value="business">Business</option>
                        <option value="beach">Beach</option>
                    </select>   <br>                 
                    <label for="item_colour"> Colour: </label>
                    <select name="item_colour" class="custom-select">
                    <option value="<?= $item['colour']?> "><?= ucfirst($item['colour'])?></option>
                        <option value="red">Red</option>
                        <option value="orange">Orange</option>
                        <option value="yellow">Yellow</option>
                        <option value="green">Green</option>
                        <option value="blue">Blue</option>
                        <option value="purple">Purple</option>
                        <option value="black">Black</option>
                        <option value="white">White</option>
                        <option value="pink">Pink</option>
                        <option value="off white">Off White</option>
                        <option value="grey">Grey</option>
                        <option value="print">Print</option>
                    </select>   <br>                  
                    <label for="item_time"> Time of Day: </label>
                    <select name="item_time" class="custom-select">
                        <option value="<?= $item['time']?> "><?= ucfirst($item['time'])?></option>
                        <option value="day">Day</option>
                        <option value="evening">Evening</option>
                        <option value="night">Night</option>
                    </select>   
                    <br> 
                    <br> 
                    <input type="submit" name="edit_confirm" value="Edit" class="button-closet editPageButton">
                </form>
                <form action="closet.php" method="post">
                    <input type="submit" value="Cancel" class="button-closet editPageButton">
                </form>
        </div>
        <?php endforeach; ?>
</div>



</section>
<?php require 'includes/undernav.php'?>

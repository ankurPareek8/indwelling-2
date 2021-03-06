<!DOCTYPE html>
<html>
<style>
</style>
<head>

    <meta charset="UTF-8">
    <title> InDwelling | Shop by Category </title>

    <link rel= "stylesheet" type = "text/CSS" href = "shopbycategory.css">

</head>

  <body>

  <section class="section1">

    <ul>

      <div class="logocontainer">

      <a href="index.html">
      <img src="Images/christianarts/indwelling-logo-black.png" class="websitelogo" alt="websitelogo"/>
      </a>

      </div>

      <div class="navlinks">

<!-- CHRISTIAN ARTS PAGE -->
      <li class="dropdown">
        <a href="christianarts.php" class="dropbtn">CHRISTIAN ARTS</a>
        <div class="dropdown-content">
          <a href="">Creative by Design</a>
          <a href="">Gift Books</a>
          <a href="">Journals</a>
          <a href="">Stationary</a>
          <a href="">Kitchenware</a>
          <a href="">Accesories</a>
          <a href="">Impulse Items</a>
          <a href="">Card & Bookmarks</a>
          <a href="">Planners & Calendars</a>
          <a href="">Baby & Kids</a>
        </div>
      </li>


<!-- INDWELLING PAGE -->
      <li class="dropdown">
        <a href="indwelling.php" class="dropbtn">INDWELLING</a>
        <div class="dropdown-content">
          <a href="">Kitchenware</a>
          <a href="">Home & Decor</a>
          <a href="">Tshirt & Accessories</a>
        </div>
      </li>


<!-- TO CORRECT AFTERWARDS - SHOP BY CATEGORY -->
      <li class="dropdown">
        <a href="shopbycategory.php" class="dropbtn">SHOP BY CATEGORY</a>
        <div class="dropdown-content">
          <a href="">Product</a>
          <a href="">Recipient</a>
          <a href="">Occasion</a>
        </div>
      </li>


<!-- ABOUT US PAGE -->
      <li class="dropdown">
        <a href="aboutus/aboutus.html" class="dropbtn">ABOUT US</a>
        <div class="dropdown-content">
          <a href="">Who are we</a>
          <a href="">Vision</a>
          <a href="">Mission</a>
          <a href="">Values</a>
        </div>
      </li>


<!-- EMAIL US PAGE -->
      <li class="dropdown">
        <a href="contact/contact.html" class="dropbtn">CONTACT</a>
      </li>

    </div>


    </ul>

    </section>


    <section class="section2">
      <img src="Images/christianarts/headerimage_christianarts.jpg" class="headerimage" alt="headerimage"></img>

      <a href="#section3" class="visit">VISIT</a>

    </section>


    
<section id="section3">

<h1>Title 1</h1>

<section class="sidebar" alt="sidebar">

  <form method="GET"> 
      <h3>By Brand</h3>
        <button class="btn" type="SUBMIT" name="1">Christian Art</button><hr>
        <button class="btn" type="SUBMIT" name="2" >InDwelling</button><hr>
      <h3>By Products</h3>
        <button class="btn" type="SUBMIT" name="7" >Creative By Design</button><hr>
        <button class="btn" type="SUBMIT" name="2" >Kitchenwear</button><hr>
  </form>
</section>

<div class="showcase" alt="showcase">

    <?php
    if(isset($_GET ['7']))
    {
    /* INDEX*/
    //1. Connect to database
    require("config.php");
    ?>
    
    <?php
    //2. Run database query
          
        /*This is to show the selected rows on the website from the database*/
        $query = "SELECT * FROM  items JOIN byProducts ON products_id = byProducts.id JOIN brands ON brands_id = brands.id WHERE products_id=7" ;
        $result = mysqli_query($connection, $query);
    
    //Test The query
          
        /* if above query doesnt work then this message should be visible on the screen*/
        if (!$result){die("Query has failed.");}
    ?>
    <?php
    //3. Use returned data (loop through the array)
              
        /* Using each return data   */
         while ($row = mysqli_fetch_assoc($result)){ ?>
         
          <div class="eachItem">
    
       <!-- MOVIE POSTER IMAGE -->
       <img class="productimg" src="<?php echo $row["img"]; ?>"/>
    
            <div class="itemInfo">
        <!--Item Name -->
                <h5><?php echo $row["itemName"]; ?></h5>
    
        <!-- Brand Name -->
        <p><strong>Brand Name: </strong><?php echo $row["brandName"]; ?></p>
        <p><strong>Product Name: </strong><?php echo $row["productName"]; ?></p>
    
         <!-- LINK TO VIEW MOVIE FOR MORE INFORMATION -->
                <a href="view.php?id=<?php echo $row["id"]; ?>">View Product</a>
            </div>
                </div>
    <?php        
     }
     } if(isset($_GET ['2'])){
        require("config.php");
    
    //2. Run database query
          
        /*This is to show the selected rows on the website from the database*/
          
        $query = "SELECT * FROM items JOIN byProducts ON products_id = byProducts.id JOIN brands ON brands_id = brands.id WHERE products_id=2 ";
        $result = mysqli_query($connection, $query);
    
    
    //Test The query
          
        /* if above query doesnt work then this message should be visible on the screen*/
        if (!$result){die("Query has failed.");}
    ?>
    <?php
    //3. Use returned data (loop through the array)
              
        /* Using each return data   */
         while ($row = mysqli_fetch_assoc($result)){ ?>
         
          <div class="eachItem">
    
       <!-- MOVIE POSTER IMAGE -->
       <img class="productimg" src="<?php echo $row["img"]; ?>"/>
    
            <div class="itemInfo">
        <!--Item Name -->
                <h5><?php echo $row["itemName"]; ?></h5>
    
        <!-- Brand Name -->
        <p><strong>Brand Name: </strong><?php echo $row["brandName"]; ?></p>
        <p><strong>Product Name: </strong><?php echo $row["productName"]; ?></p>
        <p><strong>Product Code: </strong><?php echo $row["item_code"]; ?></p>
        <p><strong>Price: </strong><?php echo $row["price"]; ?></p>
    
         <!-- LINK TO VIEW MOVIE FOR MORE INFORMATION -->
                <a href="view.php?id=<?php echo $row["id"]; ?>">View Product</a>
            </div>
                </div>
    <?php        
     }
     }if(isset($_GET ['1'])){
        require("config.php");
    
    //2. Run database query
          
        /*This is to show the selected rows on the website from the database*/
          
        $query = "SELECT * FROM items JOIN brands ON brands_id = brands.id JOIN byProducts ON products_id = byProducts.id WHERE brands_id=1 ";
        $result = mysqli_query($connection, $query);
    
    
    //Test The query
          
        /* if above query doesnt work then this message should be visible on the screen*/
        if (!$result){die("Query has failed.");}
    ?>
    <?php
    //3. Use returned data (loop through the array)
              
        /* Using each return data   */
         while ($row = mysqli_fetch_assoc($result)){ ?>
         
          <div class="eachItem">
    
       <!-- MOVIE POSTER IMAGE -->
       <img class="productimg" src="<?php echo $row["img"]; ?>"/>
    
            <div class="itemInfo">
        <!--Item Name -->
                <h5><?php echo $row["itemName"]; ?></h5>
    
        <!-- Brand Name -->
        <p><strong>Brand Name: </strong><?php echo $row["brandName"]; ?></p>
        <p><strong>Product Name: </strong><?php echo $row["productName"]; ?></p>
    
         <!-- LINK TO VIEW MOVIE FOR MORE INFORMATION -->
                <a href="view.php?id=<?php echo $row["id"]; ?>">View Product</a>
            </div>
                </div>
    <?php        
     }
    }
    ?>
    

</div>

</section>


    <section class="section4">

      <div id="connect">
        <h4 class="connect"> Connect with us </h4>

        <p id="textconnect"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <p>

          <div class="subscribe">
  <div class="subscribe__wrapper">
    <input type="text" id="input"/>
    <button id="send">
      <span class="divider"></span>
      <span class="send">SUBSCRIBE</span>
      <svg width="122.6px" height="250px" viewBox="0 0 122.6 77.9">
        <g id="p2" transform="scale(2)" fill="#fff">
          <path d="M62.4,6.9L23.6,45.7c-0.3,0.3-0.9,0.3-1.2,0L0.3,23.7c-0.3-0.3-0.3-0.9,0-1.2l5.4-5.4c0.3-0.3,0.9-0.3,1.2,0l16.1,16.1
	L55.8,0.3c0.3-0.3,0.9-0.3,1.2,0l5.4,5.4C62.8,6,62.8,6.5,62.4,6.9L62.4,6.9z"/>
        </g>
        <g id="p1">
          <path fill="#FFFFFF" d="M113.6,8.1v61.8H8V8.1H113.6 M121.6,0.1H0v77.8h121.6V0.1L121.6,0.1z" />
          <polygon fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="9.9,73.1 60.8,48.8 115.5,73.1 " />
          <polyline id="mail" fill="none" stroke="#FFFFFF" stroke-width="8" stroke-miterlimit="10" points="2.6,3.1 60.8,48.8 118.9,3.6 " />
          <polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="5.4,6.9 60.8,48.8 115.5,6.9 " />
        </g>
      </svg>
    </button>
  </div>
</div>

      </div>

    </section>


    <footer class="footer">
      <h4 class="follow"> Follow us on </h4>

      <div class="sociamedia">
      <?xml version="1.0" encoding="iso-8859-1"?>
      <!-- Generator: Adobe Illustrator 18.1.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

      <a href="christianarts_collection.html"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 155.139 155.139" style="enable-background:new 0 0 155.139 155.139;" xml:space="preserve" width="512px" height="512px">
      <g>
      	<path id="f_1_" d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184   c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452   v20.341H37.29v27.585h23.814v70.761H89.584z" fill="#d4d4d4"/>
      </g>
      </svg> </a>

      &nbsp &nbsp &nbsp

      <?xml version="1.0" encoding="iso-8859-1"?>
      <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <a href="christianarts_collection.html"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px">
      <g>
      	<g>
      		<path d="M352,0H160C71.648,0,0,71.648,0,160v192c0,88.352,71.648,160,160,160h192c88.352,0,160-71.648,160-160V160    C512,71.648,440.352,0,352,0z M464,352c0,61.76-50.24,112-112,112H160c-61.76,0-112-50.24-112-112V160C48,98.24,98.24,48,160,48    h192c61.76,0,112,50.24,112,112V352z" fill="#dedede"/>
      	</g>
      </g>
      <g>
      	<g>
      		<path d="M256,128c-70.688,0-128,57.312-128,128s57.312,128,128,128s128-57.312,128-128S326.688,128,256,128z M256,336    c-44.096,0-80-35.904-80-80c0-44.128,35.904-80,80-80s80,35.872,80,80C336,300.096,300.096,336,256,336z" fill="#dedede"/>
      	</g>
      </g>
      <g>
      	<g>
      		<circle cx="393.6" cy="118.4" r="17.056" fill="#dedede"/>
      	</g>
      </svg> </a>

    </div>

    <p class="footertext"> InDwelling Designs © 2018 | YOUR GIFT IDEAS </p>

  </footer>



</body>
</html>

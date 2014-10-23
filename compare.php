<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); // HTTP head
?>    		

    		
	<title>Cirrus Outdoor Power Equipment</title>
	<meta name="description" content="">

</head>

<body>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); // header and navigation
?>    		

<div class="outer">

  <section id="options" class="clearfix">
    
    
      <h3>Filters</h3>

      <ul id="filters" class="option-set clearfix" data-option-key="filter">
        <li><a href="#filter" data-option-value="*" class="selected">show all</a></li>
        <li><a href="#filter" data-option-value=".Kubota">Kubota</a></li>
        <li><a href="#filter" data-option-value=".LS-Tractor">LS Tractor</a></li>
        <li><a href="#filter" data-option-value=".fourft">Package Includes 4ft Rotary Cutter</a></li>
        <li><a href="#filter" data-option-value=".fiveft">Package Includes 5ft Rotary Cutter</a></li>
        <li><a href="#filter" data-option-value=".sixft">Package Includes 6ft Rotary Cutter</a></li>
        <li><a href="#filter" data-option-value=".sixfthd">Package Includes 6ft Heavy Duty Rotary Cutter</a></li>
        <li><a href="#filter" data-option-value=":not(.fiveft, .sixft, .sixfthd)">no cutter included</a></li>
        <li><a href="#filter" data-option-value=".twentyft">Package Includes 20ft Trailer w/brakes and slide in ramps</a></li>
        <li><a href="#filter" data-option-value=":not(.twentyft)">no trailer included</a></li>
      </ul>

   <h3>Sort</h3>

    <ul id="sort-by" class="option-set clearfix" data-option-key="sortBy">
      <li><a href="#sortBy=original-order" data-option-value="original-order" class="selected" data>original-order</a></li>
      <li><a href="#sortBy=name" data-option-value="name">Engine</a></li>
      <li><a href="#sortBy=symbol" data-option-value="symbol">Product</a></li>
      <li><a href="#sortBy=number" data-option-value="number">Transmission</a></li>
      <li><a href="#sortBy=weight"  data-option-value="weight">Cash Price</a></li>
      <li><a href="#sortBy=weight"  data-option-value="price">Financed Price</a></li>
      <li><a href="#sortBy=category" data-option-value="category">Brand</a></li>
      <li><a href="#sortBy=random" data-option-value="random">random</a></li>
    </ul>

    <h3>Direction</h3>

    <ul id="sort-direction" class="option-set clearfix" data-option-key="sortAscending">
      <li><a href="#sortAscending=true" data-option-value="true" class="selected">sort ascending</a></li>
      <li><a href="#sortAscending=false" data-option-value="false">sort descending</a></li>
    </ul>


  </section> <!-- #options -->
  
  <div id="container" class="clearfix">
    
      
          
    <a href="/B2320DT.php" class="fancybox fancybox.iframe element Kubota fourft twentyft" data-symbol="Hg" data-category="Kubota">
    	<img src="/_images/Kubota-B2320DT-Tractor-Package.jpg">
      <h3 class="symbol"> 
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 1";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 1";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
       Package Deal</h3>
      <h2 class="name"><span>Engine: </span> 
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 1";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 1";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 1";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 1";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
              
    <a href="/B2620HSD.php" class="fancybox fancybox.iframe element Kubota fourft twentyft" data-symbol="Te" data-category="Kubota">
    	<img src="/_images/Kubota-B2620HSD-Tractor-Package.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 2";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 2";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine: </span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 2";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission: </span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 2";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 2";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 2";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
    
    <a href="/L3200F.php" class="fancybox fancybox.iframe element Kubota fiveft twentyft" data-symbol="Bi" data-category="Kubota">
    	<img src="/_images/Kubota-L3200F-Tractor-Package.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 3";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 3";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine: </span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 3";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 3";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 3";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 3";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
          
    <a href="/L3200DT.php" class="fancybox fancybox.iframe element Kubota fiveft twentyft" data-symbol="Cd" data-category="Kubota">
    	<img src="/_images/Kubota-L3200DT-Tractor-Package.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 4";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 4";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine: </span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 4";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 4";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 4";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 4";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
          
    <a href="/L3200HST.php" class="fancybox fancybox.iframe element Kubota fiveft twentyft" data-symbol="Ca" data-category="Kubota">
    	<img src="/_images/Kubota-L3200HST-Tractor-Package.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 5";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 5";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine: </span> 
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 5";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 5";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 5";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 5";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
          
    <a href="/L3800DT.php" class="fancybox fancybox.iframe element Kubota sixft twentyft" data-symbol="Re" data-category="Kubota">
    	<img src="/_images/Kubota-L3800DT-Tractor-Package.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 6";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 6";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine: </span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 6";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 6";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 6";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 6";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
          
    <a href="/L3800HST.php" class="fancybox fancybox.iframe element Kubota sixft twentyft" data-symbol="Tl" data-category="Kubota">
    	<img src="/_images/Kubota-L3800HST-Tractor-Package.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 7";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 7";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine: </span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 7";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 7";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 7";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 7";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
          
    <a href="/L4600F.php" class="fancybox fancybox.iframe element Kubota sixft twentyft" data-symbol="Sb" data-category="Kubota">
    	<img src="/_images/Kubota-L4600F-Tractor-Package.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 8";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 8";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine: </span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 8";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 8";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 8";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 8";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
          
    <a href="/L4600DT.php" class="fancybox fancybox.iframe element Kubota sixft twentyft" data-symbol="Co" data-category="Kubota">
    	<img src="/_images/Kubota-L4600DT-Tractor-Package.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 9";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 9";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 9";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 9";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 9";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 9";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
          
    <a href="/L4600HST.php" class="fancybox fancybox.iframe element Kubota sixft twentyft" data-symbol="Lu" data-category="Kubota">
    	<img src="/_images/Kubota-L4600HST-Tractor-Package.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 10";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 10";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 10";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 10";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 10";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 10";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
          
    <a href="/M5640SUD.php" class="fancybox fancybox.iframe element Kubota sixfthd " data-symbol="Ar" data-category="Kubota">
    	<img src="/_images/Kubota-M5640SUD-Tractor-Package.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 11";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 11";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 11";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 11";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 11";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 11";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
          
    <a href="/M7040SUHD.php" class="fancybox fancybox.iframe element Kubota sixfthd " data-symbol="Rb" data-category="Kubota">
    	<img src="/_images/Kubota-M7040SUHD-Tractor-Package.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 12";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 12";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 12";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 12";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 12";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 12";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
    
      
          
    <a href="/info.php" class="fancybox fancybox.iframe element LS-Tractor  " data-symbol="N" data-category="LS-Tractor">
        <img src="/_images/no-image.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 13";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 13";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 13";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 13";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 13";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 13";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
          
    <a href="/info.php" class="fancybox fancybox.iframe element LS-Tractor  " data-symbol="N" data-category="LS-Tractor">
        <img src="/_images/LS-Tractor-J2030H.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 14";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 14";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 14";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 14";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 14";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 14";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>

    <a href="/info.php" class="fancybox fancybox.iframe element LS-Tractor  " data-symbol="N" data-category="LS-Tractor">
        <img src="/_images/LS-Tractor-G3033.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 15";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 15";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 15";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 15";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 15";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 15";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
      
    <a href="/info.php" class="fancybox fancybox.iframe element LS-Tractor  " data-symbol="N" data-category="LS-Tractor">
        <img src="/_images/LS-Tractor-G3033H.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 16";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 16";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 16";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 16";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 16";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 16";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
      
    <a href="/info.php" class="fancybox fancybox.iframe element LS-Tractor  " data-symbol="N" data-category="LS-Tractor">
        <img src="/_images/LS-Tractor-G3038.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 17";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 17";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 17";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 17";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 17";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 17";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
      
    <a href="/info.php" class="fancybox fancybox.iframe element LS-Tractor  " data-symbol="N" data-category="LS-Tractor">
        <img src="/_images/LS-Tractor-G3038H.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 18";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 18";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 18";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 18";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 18";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 18";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
    
    <a href="/info.php" class="fancybox fancybox.iframe element LS-Tractor  " data-symbol="N" data-category="LS-Tractor">
        <img src="/_images/no-image.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 19";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 19";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 19";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 19";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 19";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 19";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
      
    <a href="/info.php" class="fancybox fancybox.iframe element LS-Tractor  " data-symbol="N" data-category="LS-Tractor">
        <img src="/_images/no-image.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 20";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 20";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 20";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 20";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 20";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 20";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
      
    <a href="/info.php" class="fancybox fancybox.iframe element LS-Tractor  " data-symbol="N" data-category="LS-Tractor">
        <img src="/_images/LS-Tractor-R4041.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 21";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 21";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 21";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 21";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 21";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 21";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
    
    <a href="/info.php" class="fancybox fancybox.iframe element LS-Tractor  " data-symbol="N" data-category="LS-Tractor">
        <img src="/_images/LS-Tractor-R4041H.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 22";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 22";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 22";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 22";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 22";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 22";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
      
    <a href="/info.php" class="fancybox fancybox.iframe element LS-Tractor  " data-symbol="N" data-category="LS-Tractor">
        <img src="/_images/LS-Tractor-R4047.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 23";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 23";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span> 
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 23";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 23";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 23";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 23";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
      
    <a href="/info.php" class="fancybox fancybox.iframe element LS-Tractor  " data-symbol="N" data-category="LS-Tractor">
        <img src="/_images/no-image.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 24";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 24";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 24";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 24";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 24";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 24";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
    
    <a href="/info.php" class="fancybox fancybox.iframe element LS-Tractor  " data-symbol="N" data-category="LS-Tractor">
        <img src="/_images/no-image.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 25";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 25";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 25";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 25";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 25";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 25";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
      
    <a href="/info.php" class="fancybox fancybox.iframe element LS-Tractor  " data-symbol="N" data-category="LS-Tractor">
        <img src="/_images/no-image.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 26";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 26";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 26";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 26";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 26";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 26";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
      
    <a href="/info.php" class="fancybox fancybox.iframe element LS-Tractor  " data-symbol="N" data-category="LS-Tractor">
        <img src="/_images/no-image.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 27";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 27";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 27";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 27";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 27";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 27";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>
    
    <a href="/info.php" class="fancybox fancybox.iframe element LS-Tractor  " data-symbol="N" data-category="LS-Tractor">
        <img src="/_images/no-image.jpg">
      <h3 class="symbol">
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 28";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['brand'];} 
        ?>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 28";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['model_number'];} 
        ?>
      Package Deal</h3>
      <h2 class="name"><span>Engine:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 28";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['engine'];} 
        ?>
      </h2>
      <p class="number"><span>Transmission:</span>
        <?php
          $sql = "SELECT * FROM products WHERE product_id = 28";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['transmission'];} 
        ?>
      </p>
      <p class="weight"><span>Cash Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 28";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['cash_price'];} 
        ?>
      </p>
      <p class="price"><span>Financed Price: </span>$<?php
          $sql = "SELECT * FROM products WHERE product_id = 28";
          $res = mysql_query($sql);
          while($row = mysql_fetch_array($res, MYSQL_ASSOC))
          {echo $row['financed_price'];} 
        ?>
      </p>
    </a>

  </div> <!-- #container -->
  

<div class="clear"></div>

</div><!--outer-->

 

	<script type="text/javascript">
		$(document).ready(function() {

			$('.fancybox').fancybox();

		});
	</script>


<script>
$('#container').isotope({ layoutMode : 'fitRows' });

    $(function(){
      
      var $container = $('#container');

      $container.isotope({
        itemSelector : '.element'
      });
      
      
      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }
        
        return false;
      });

      
    });
  
    $(function(){
      
      var $container = $('#container');
      
      $container.isotope({
        itemSelector : '.element',
        getSortData : {
          symbol : function( $elem ) {
            return $elem.attr('data-symbol');
          },
          category : function( $elem ) {
            return $elem.attr('data-category');
          },
          number : function( $elem ) {
            return parseInt( $elem.find('.number').text(), 10 );
          },
          weight : function( $elem ) {
            return parseFloat( $elem.find('.weight').text().replace( /[\(\)]/g, '') );
          },
          name : function ( $elem ) {
            return $elem.find('.name').text();
          }
        }
      });
      
      
      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }
        
        return false;
      });

      
    });
</script>


<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/footer.php'); // footer, close body and html
?>    		
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Home</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Didact_Gothic_400.font.js"></script>
<script type="text/javascript" src="js/Shanti_400.font.js"></script>
<script src="js/roundabout.js" type="text/javascript"></script>
<script src="js/roundabout_shapes.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.2.js" type="text/javascript"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.bg {behavior:url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
	</div>
<![endif]-->
</head>

<body id="page1">
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
	  <div class="wrapper">
    <nav> </nav>
    <span class="date">Monday, June 6, 2011  &nbsp; &nbsp; 17:19</span> </div>
  <div class="wrapper">
    <h1><a href="index.html" id="logo">prosoft</a></h1>
    <nav>
      <ul id="menu">
        <li><a href="index.html"><span><span>Home</span></span></a></li>
        <li id="menu_active"><a href="Features.php"><span><span>Products & Services</span></span></a></li>
        <li><a href="Support.html"><span><span>Profile</span></span></a></li>
        <li><a href="Downloads.html"><span><span>Features</span></span></a></li>
        <li><a href="Contacts.html"><span><span>Contacts</span></span></a></li>
      </ul>
    </nav>
  </div>
  <div class="wrapper">
    <div class="text"><span class="tittle">SAIDEEP & VAISHDEEP</span><span><br><span class="color1">CONSTRUCTIONS</span></span><br><br>
       <p>We are the manufacturer of Cement Poles, Barbed wire with angle Fencing, Barbed wire with Cement Pole Fencing, Chainlink Fencing, Concrete walls.</span></p>
    </div>
    <div id="gallery">
      <ul id="myRoundabout">
        <li><img src="images/img1.png" alt=""></li>
        <li><img src="images/img2.png" alt=""></li>
        <li><img src="images/img3.png" alt=""></li>
      </ul>
    </div>
  </div>
		</header>
<!-- content -->
		<article id="content">
			<section class="col1">
            <br>
				<h2>Our Products</h2><br>
                
                <?php
				
echo"<a href='Features.php?id'><h4><div class='titlecolor'>Cement Pole</h4></a>";
echo"<br>";
echo"<a href='Features.php?id1'><h4><div class='titlecolor'>Chainlink Fencing</h4></a>";
echo"<br>";
echo"<a href='Features.php?id2'><h4><div class='titlecolor'>Concrete Walls</h4></a>";
echo"<br>";
echo"<h2>Provide Services</h2><br>";
echo"<a href='Features.php?id3'><h4><div class='titlecolor'>Barbed wire with cement pole fencing</h4></a>";
echo"<br>";
echo"<a href='Features.php?id4'><h4><div class='titlecolor'>WBM road work</h4></a>";
echo"<br>";
echo"<a href='Features.php?id5'><h4><div class='titlecolor'>Fencing work</h4></a>";
echo"<br>";
echo"<a href='Features.php?id6'><h4><div class='titlecolor'>Compound wall</h4></a>";
echo"<br>";
echo"<a href='Features.php?id7'><h4><div class='titlecolor'>Excavation & leveling</h4></a>";
echo"<br>";
?>

 </section>
 <section>
 <div class="color4">
 <?php
            if(isset($_REQUEST['id']))
			{
				echo"<h3><div class='titlecolor'>Cement Poles</h3>";
				echo"<br><div class='iborder img'><img src='images/cement.jpg' height='150' width='250'></div><br><p>Fencing Compound Cement Poles are simple and easy to install. Used along with barbed and other wires, they protect any territory from unauthorized entry. They also serve us a boundary for a specific piece of land. Made using premium quality of cement and other materials, the fencing poles are long-lasting and durable. They are extremely tolerable to sun and rain.</p>";	
			}
			  if(isset($_REQUEST['id1']))
			{
				echo"<h3><div class='titlecolor'>Chainlink Fencing</h3>";
				echo"<br><div class='iborder img'><img src='images/page2_img2.jpg' height='150' width='250'></div><br><p>A chain-link fence also referred to as wire netting, wire-mesh fence, chain-wire fence or diamond-mesh fence is a type of woven fence usually made from galvanized or coated steel wire. The wires run vertically and are bent into a zig-zag pattern so that each 'zig' hooks with the wire immediately on one side and each 'zag' with the wire immediately on the other. This forms the characteristic diamond pattern seen in this type of fence.</p>";	
			}
			  if(isset($_REQUEST['id2']))
			{
				echo"<h3><div class='titlecolor'>Concrete Walls</h3>";
				echo"<br><div class='iborder img'><img src='images/page2_img3.jpg' height='150' width='300'></div><br><p>Concrete walls can be categorized as short, or stocky, slender, braced and unbraced. A short wall is one whose ratio height to minimum thickness is more than 15, while a braced wall is one that is laterally stabilized by walls.</p>";	
			}
			  if(isset($_REQUEST['id3']))
			{
				echo"<h3><div class='titlecolor'>Barbed wire with cement pole fencing</h3>";
				echo"<br><div class='iborder img'><img src='images/id3.jpg' height='150' width='300'></div><br><p>Barbed wire, sometimes known as bob-wire or bobbed wire, is a type of steel fencing wire constructed with sharp edges or points arranged at intervals along the strand. It is used to construct inexpensive fences and is used atop walls surrounding secured property. It is also a major feature of the fortifications in trench warfare as a wire obstacle.</p>";	
			}
			  if(isset($_REQUEST['id4']))
			{
				echo"<h3><div class='titlecolor'>WBM road work</h3>";
				echo"<br><div class='iborder img'><img src='images/wbm.jpg' height='150' width='300'></div><br><p>WBM stands for Water Bound Macadam who designed and formulated this road section. This road is laid by binding the in-situ layers ,stones, fine aggregates and fillers. The filler is made from the mixture of sand combined with either moorum quary dust or soil that is avilable in that locality. The filler is mixed with water and is used to fix stone and the layers of coarse stones of varying sizes by compacting with a road roller to form the base of a road.</p>";	
			}
			 if(isset($_REQUEST['id5']))
			{
				echo"<h3><div class='titlecolor'>Fencing Work</h3>";
				echo"<br><div class='iborder img'><img src='images/fencework.jpg' height='150' width='300'></div><br><p>Fencing Compound Cement Poles are simple and easy to install. Used along with barbed and other wires, they protect any territory from unauthorized entry. They also serve us a boundary for a specific piece of land. Made using premium quality of cement and other materials, the fencing poles are long-lasting and durable. They are extremely tolerable to sun and rain.</p>";	
			}
			 if(isset($_REQUEST['id6']))
			{
				echo"<h3><div class='titlecolor'>Compound Walls</h3>";
				echo"<br><div class='iborder img'><img src='images/wall.jpg' height='150' width='300'></div><br><p>A compound wall serves to demarcate the site, protect one's property, ensure privacy and enhance aesthetic appeal. The most important reason for having a fence is security. Most city houses are independent units and therefore have their compound walls. Fencing ensures privacy to the residents. The most commonly used fencing option is the compound wall made of concrete. A brick wall allows private properties to screen themselves from the road, in terms of visibility, dust and noise pollution.</p>";	
			}
			 if(isset($_REQUEST['id7']))
			{
				echo"<h3><div class='titlecolor'>Excavation and Leveling</h3>";
				echo"<br><div class='iborder img'><img src='images/excavation.jpg' height='150' width='300'></div><br><p>The personnel responsible for the formwork's assembling must be notified of the excavation drawing because every possible mistake during the excavations will have an effect upon the formworks implementation. The building's foundation is faintly presented in the excavation drawing so as to confirm the general dimensions of the excavation. Moreover, this helps the growth of the building's entire concept in all the materialization bodies involved in the work.</p>";	
			}	
			?>
				</div>
    		</section>
            <section><br><br>
            
            </section>
		</article>
	</div>
</div>
		</article>
	</div>
</div>
<div class="body2">
	<div class="main">
		<article id="content2">
			<section class="col_1">
				<h3>Clients</h3>
				<ul class="list1">
					<li>Gammon India Pvt Ltd</li>
					<li>Amit Builders</li>
					<li>Suyojit Infrastucture Pvt Ltd</li>
					<li>Samrat Group</li>
					<li>Kamal Infrabuilds</li>
                    <li>Cobra Instalacians Pvt Ltd</li>
                    <li>Sagar Construction</li>
                    <li>Pawa Construction</li>
                    <li>Green Spaces Realtors</li>
				</ul>
        	</section>
			<section class="col_1">
				<h3>Why Us?</h3>
				<p class="whyus" align="justify">We provide the best quality wire fence with good flat and smooth appearance, texture. It requires low maintenance and are easy to install and economical as well</p>
        	</section>
			<section class="col_2">
				<h3>Follow Us</h3>
				<ul id="icons">
					<li><a href="#"><img src="images/icon1.jpg" alt="">Facebook</a></li>
					<li><a href="#"><img src="images/icon2.jpg" alt="">Twitter</a></li>
					<li><a href="#"><img src="images/icon3.jpg" alt="">LinkedIn</a></li>
				</ul>
        	</section>
			<section class="col_1">
				<h3>Address</h3>
				<p class="address">
					<span>
						22, Matale Nagar Co.Op.Soc, Opp Vodafone Showroom, Kamatwade, New Nashik-422009.<br>
						Ph: 0253-2397428<br>
						Mo: 9823060612
					</span>
					Email1:<a href="mailto:">constructionsaideep@gmail.com</a>
					Email2:<a href="mailto:">vaishdeepconstruction@gmail.com</a>
				</p>		
       		</section>
		</article>
<!-- / content -->
	</div>
</div>
<div class="main">
<!-- footer -->
	<footer>
		Copyright @ 2013 Saideep and Constructions. All rights reserved. 
		<!-- {%FOOTER_LINK} -->
	</footer>
   <div class="login">
    <a href="http://www.wavetechline.com" target="_new">
    <img src="images/wavetechline.png">
    </a>
    </div>
<!-- / footer -->
</div>
<script type="text/javascript"> Cufon.now();</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#myRoundabout').roundabout({
			 shape: 'square',
        	 minScale: 0.89, // tiny!
        	 maxScale: 1, // tiny!
			 easing:'easeOutExpo',
			 clickToFocus:'true',
			 focusBearing:'0',
			 duration:800,
			 reflect:true
		});
	});
</script>
</body>
</html>
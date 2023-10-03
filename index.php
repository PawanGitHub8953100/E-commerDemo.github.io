<?php include_once("includes/header.php")?>
<div style="background-color:white;width:94.4em;">
	<div class="main-div-heading">
	<h2>Product</h2>
	<div class="container-div">
	<div class="img-div">
		<img id="ecom-img-style-1" src="images/apple_iPhone 13.webp" alt="images/apple_iPhone 13.webp">
	</div>
	<div>
		<center>
			<p class="para-name">Mobile</p>
			<p class="price">From <sup>&#8377</sup>  52,499</p>
		</center>
		
	</div>
</div>
</div>
<div class="main-div-heading">
	<div class="container-div">
		<div class="img-div">
			<img  class="ecom-img-style" id="ecomimg" src="images/HpSSD512.webp" alt="images/Laptop" >
	</div>
	<div>
		<center>
		<p class="para-name">HP Laptop</p>
		<p class="price">From <sup>&#8377</sup> 54,990 </p>
	</center>
	</div>
</div>
</div>
<div class="main-div-heading">
	<div class="container-div">
		<div class="img-div" >
			<img src="images/noise_Colorfit Icon 21.8.webp" id="ecom-img-style" alt="images/Watch">
		</div>
		<div>
		<center>
			<p class="para-name">Smart Watch</p>
			<p class="price">From <sup>&#8377</sup>  4,999 </p>
		</center>	
		
	</div>
</div>
</div>
</div>
<div id="perform-div">
	<div id="img-size">
		<!-- <img src="images/noise_Colorfit Icon 21.8.webp" 	alt="images/Watch"> -->
	</div>
	<div>
		
		
		
	</div>
		<!-- <div class="msg" id=""></div>
	<div class="msg" id=""></div> -->
</div>

<script>
	//image Listener for Image mouseover 
	let image =	document.getElementById("ecom-img-style");
	let status=	document.getElementById("perform-div");
	let details =	document.getElementById("details");
	image.addEventListener('mouseover',function(){
		let imageSource = image.getAttribute("src");
		status.innerHTML = '<img id="simg" src="' + imageSource + '" alt="Hovered Image"><div  class="msg" id="details"><p><b>AppleApple Watch SE (2nd Gen) [GPS 44 mm] Smart Watch w/Midnight Aluminium Case & Midnight Sport Band. Fitness & Sleep Tracker, Crash Detection, Heart Rate Monitor, Retina...</b></p><p><span class="star">&#10027;</span><span class="star">&#10027;</span><span class="star">&#10027;</span><span class="star">&#10027;</span></p><p id="para-color">Deal of the Day</p><p><sup>&#8377</sup><span id="rs">4,999</span><sub>&nbsp;&nbsp;M.R.P:&nbsp;</sub><sub><del>&#8377  5,999</del></sub></p><p id="per">(20% off)</p><p class="text-p">10% off on select cards</p></div>';
		let imgSize =	document.getElementById('simg');
		imgSize.style.width="300px";
		status.style.display = "block";
		// status.style.display="block";
	});
	//image Listener for Image mouseout 
	let imageShow =	document.getElementById("ecom-img-style");
	let status1 =	document.getElementById("perform-div");
imageShow.addEventListener('mouseout',function(){
	status1.style.display = "none";
	details.style.display="block";
});

//image Listener for Image mouseover1
var image1 =	document.getElementById("ecom-img-style-1");
	let statuss =	document.getElementById("perform-div");
image1.addEventListener('mouseover',function(){
   var imageSourceData = image1.getAttribute("src");
 statuss.innerHTML = '<img src="' + imageSourceData + '" alt="Hovered Image"><div  class="msg" id="details"><p><b>Apple iPhone 13 (128GB) - Blue</b></p><p><span class="star">&#10027;</span><span class="star">&#10027;</span><span class="star">&#10027;</span><span class="star">&#10027;</span></p><p id="para-color">Deal of the Day</p><p><sup>&#8377</sup><span id="rs">52,499</span><sub>&nbsp;&nbsp;M.R.P:&nbsp;</sub><sub><del>&#8377  69,900</del></sub></p><p id="per">(25% off)</p><p class="text-p">Save extra with No Cost EMISave extra with No Cost EMI</p></div>';
 statuss.style.display = "block";
});

	//image Listener for Image mouseout 
	let imageShow1 =	document.getElementById("ecom-img-style-1");
	let status2 =	document.getElementById("perform-div");
imageShow1.addEventListener('mouseout',function(){
 status2.style.display = "none";
});

//image Listener for Image mouseover2
var imageShowDiv =document.getElementById("ecomimg");
	let statusDisp =	document.getElementById("perform-div");
imageShowDiv.addEventListener('mouseover',function(){
   var imageSource1 = imageShowDiv.getAttribute("src");
 statusDisp.innerHTML = '<img src="' + imageSource1 + '" alt="Hovered Image"><div  class="msg" id="details"><p><b>HP Laptop 15s, 11th Gen Intel Core i5-1155G7, 15.6-inch (39.6 cm), FHD, 16GB DDR4, 512GB SSD, Intel Iris Xe Graphics, Backlit KB, Thin & Light (Win 11, MSO 2021, Silver, 1.69...</b></p><p><span class="star">&#10027;</span><span class="star">&#10027;</span><span class="star">&#10027;</span><span class="star">&#10027;</span></p><p id="para-color">Deal of the Day</p><p><sup>&#8377</sup><span id="rs">59,990</span><sub>&nbsp;&nbsp;M.R.P:&nbsp;</sub><sub><del>&#8377  59,327</del></sub></p><p id="per">(07% off)</p><p class="text-p">Save extra with No Cost EMI</p></div>';
 statusDisp.style.display = "block";
});

	//image Listener for Image mouseout 
	let imag =	document.getElementById("ecomimg");
	let stat =	document.getElementById("perform-div");
imag.addEventListener('mouseout',function(){
 stat.style.display = "none";
});

</script>
	<?php include_once("includes/footer.php")?>
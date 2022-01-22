<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://wwww.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body {
			font-family: "Lato", sans-serif;


		}

		.sidenav {
			height: 100%;
			width: 200px;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			background-color: #111;
			overflow-x: hidden;
			padding-top: 20px;
			background-color: purple;
			margin-top: 7.5%;
		}

		.sidenav a {
			padding: 6px 6px 6px 32px;
			text-decoration: none;
			font-size: 20px;
			color: white;
			display: block;
		}

		.sidenav a:hover {
			color: #f1f1f1;
		}

		.main {
			margin-left: 200px;
			margin-width:200px;
		}

		
			@media screen and (max-height: 450px)
		{
			.sidenav {padding-top: 15px;}
			.sidenav a {font-size: 14px;}
		}

		.dropdown {
			position: relative;
			display: inline-block;
			font-family: "Lato", sans-serif;
			font-size: 17px;
			color: white;
			

		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: white;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			padding: 12px 16px;
			z-index: 1;
			text-decoration: none;
		}

		.dropdown-content a {
			padding: 6%;
			text-decoration: none;
			font-size: 20px;
			color: purple;
			display: block;

		}

		.dropdown-content a:hover {
			color: brown;
			
		}

		.dropdown:hover .dropdown-content {
			display: block;
		}
	</style>
</head>
<body>

	<div class="sidenav">

		<a class="nav-link active" href="">
              <span data-feather="home"></span>
              Home</span>
        </a>


        <div class="dropdown" style="padding-left: 15%;	padding-top: 15%;"><span>My Account</span>

        	<div class="dropdown-content">

        		<p><a href="" class="inner-content">Order</a></p>

        		<p><a href="" class="inner-content">Pending Reviews</a></p>

        		<p><a href="" class="inner-content">Voucher Credit</a></p>

        		<p><a href="" class="inner-content">Saved Items</a></p>
        		
        	</div>
        	

        </div>

        <div class="dropdown" style="padding-left: 15%;	padding-top: 15%;"><span>9jamall Categories</span>

        	<div class="dropdown-content">

        		<p><a href="" class="inner-content">Food/Beverages</a></p>

        		<p><a href="" class="inner-content">Phone</a></p>

        		<p><a href="" class="inner-content">Electronics</a></p>

        		<p><a href="" class="inner-content">Fashion</a></p>
        		
        	</div>
        	

        </div>

        <div class="dropdown" style="padding-left: 15%;	padding-top: 15%;"><span>Our Services</span>

        	<div class="dropdown-content">

        		<p><a href="" class="inner-content">Shop Handling</a></p>

        		<p><a href="" class="inner-content">Purchase Handling</a></p>

        		<p><a href="" class="inner-content">Logistics</a></p>

        		<p><a href="" class="inner-content">Sell & Purchase</a></p>
        		
        	</div>
        </div>
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<?php

	    $logo = array(
	    	'src' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ32818BLtUq-jgATBiCh4ill7EcCoOn5foRg&usqp=CAU',
	    	'dimension' => array(
	    		'width' => 80,
	    		'height' => 80
	    	)
	    );

		$menu = array(
			'home' => array(
				'label' => 'home',
				'url' => '/',
			),
			
			'about_us'=> array(
				'label' => 'About Us',
				'url' => '/about-us'
			),
			
			'blog' => array(
				'label' => 'Blog',
				'url' => '/blog'

			),
			'contact_us' => array(
				'label' => 'Contact Us',
				'url' => '/contact-us'

			),

		);


		$products = array(
			array(
				'name' => 'Product A',
				'price' => 200,
				'description' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
			),
			array(
				'name' => 'Product B',
				'price' => 700,
				'description' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
			),
			array(
				'name' => 'Product C',
				'price' => 900,
				'description' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
			),
			array(
				'name' => 'Product D',
				'price' => 2900,
				'description' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
			),
			array(
				'name' => 'Product E',
				'price' => 2500,
				'description' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
			),
			array(
				'name' => 'Product F',
				'price' => 6200,
				'description' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
			),
		)


	 ?>



	
		<header>
			<div class="logo">
				<img src="<?php echo  $logo['src']; ?>" width="<?php echo $logo['dimension']['width']; ?>" height="<?php echo $logo['dimension']['height']; ?>">
			</div>
			<div class="menu-wrapper">
				<div class="menu-content">
					<ul id="menu">

						<?php

							foreach($menu as $menuItem){


								?>

								<li class="item">
									<a class="link" href="<?php echo $menuItem['url']; ?>"><?php
										echo $menuItem['label'];
									 ?></a>
								</li>


								<?php
							}

						 ?>
						




						
					</ul>
				</div>
			</div>
		</header>
		<div class="main-content">
			<div class="products">
				<div class="row">
					<?php
						foreach ($products as $key => $item) {

							
					?>		
						
					<div class="product">
						<div class="image-wrapper">
							<img src="">
						</div>
						<div class="description-wrapper">
							<p class="desc">
								<?php echo $item['description']; ?>
							</p>
						</div>
						<div class="price-box">
							<span class="price">
								<?php echo $item['price']; ?>
							</span>
						</div>
						<div class="button-wrapper">
							<a class="btn btn-link">
								Add To Cart
							</a>
						</div>
					</div>
					<?php
					}
					?>

				</div>
			</div>
		</div>
		<footer></footer>
	

</body>
</html>
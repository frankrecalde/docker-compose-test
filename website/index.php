<html>
	<head>
		<title>Products</title>
	</head>
	
	<body>
		<h1>List of products</h1>
		<ul>
			<?php
				$json= file_get_contents('http://product');
				$ob = json_decode($json);
				
				$products = $ob->products;
				foreach($products as $product) {
					print '<li>' . $product . '</li>';
				}
			?>
		</ul>
	</body>
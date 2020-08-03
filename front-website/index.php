<html>
	<head>
		<title>Docker Scale Service Testing</title>
	</head>
	
	<body>
		<h1><center>Welcome to my test: Docker Scale Service Testing<center/></h1>
		<h2>
		<?php
			$docker_cid = getenv('HOSTNAME'); 
			echo "Docker ID FRONT-END:$docker_cid";
		?>
		</h2>
		
			
			<?php
				for ($i = 1;$i <=5;$i++){
					$json = file_get_contents('http://back-api0'.$i);
					$obj = json_decode($json);
					$products = $obj->hostname;
					foreach ($products as $product){
						echo "<h3>Docker ID BACK-END API0$i: $product<h3/>";
					}
				}
				
			?>
	</body>
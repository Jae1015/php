<html>
	<head>
		<title>Class 2</title>
	</head>
	<body>
		<?php
			class car
			{
				var $brand;
				var $price;
				function set_details($brand,$price)
				{
					$this->brand=$brand;
					$this->price=$price;
				}
				function get_cname(){
					return $this->brand;
				}
				function get_cprice(){
					return $this->price;
				}
			}
		?>
	</body>
</html>

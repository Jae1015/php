<html>
	<head>
		<title>Class 4</title>
	</head>
	<body>
		<?php
			class univ
			{
				var $name;
				var $rank;
				function __construct( $par1,$par2)
				{ 
					$this->name = $par1; 
					$this->rank=$par2;
				} 
				function get_name()
				{
					return $this->name;
				}
				function get_rank()
				{
					return $this->rank;
				}
			}
		?>
	</body>
</html>

<html>
	<head>
		<title>Class 3</title>
	</head>
	<body>
		<?php
			class cafe
			{
				var $name;
				function __construct( $par1)
				{ 
					$this->name = $par1; 
				} 
				function get_cafe()
				{
					return $this->name;
				}
			}
		?>
	</body>
</html>

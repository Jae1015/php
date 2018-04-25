<?php
class One
	{
	public function __construct()
	{
		echo "In class 1";
	}
}
class Two
{
	public function __construct()
	{
		echo "IN class 2";
	}
}
$obj=new Two();
echo "<br>";
$obj=new One();
?>

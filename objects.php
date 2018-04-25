<html>
	<head>
		<title>Classes & Objects</title>
	</head>
	<body>
		<?php
			include("class1.php");
			include("class2.php");
			include("class3.php");
			include("class4.php");
			include("class5.php");
			$ob1=new person();
			$ob1->set_name("jack");
			$ob1->set_age(21);
			echo "person name is ".$ob1->get_name();
			echo "\n and age is ".$ob1->get_age();
			?><br><?php
			$ob2=new car();
			$ob2->set_details("XUV",15,00,000);
			echo "car name is ".$ob2->get_cname();
			echo "\n and price is ".$ob2->get_cprice();
			?><br><?php
			$ob3=new cafe("Social");
			echo "My fav cafe is ".$ob3->get_cafe();
			?><br><?php
			$ob4=new univ("NTU","15");
			echo $ob4->get_rank();
			echo "\n is going to ".$ob4->get_rank();
			?><br><?php
			$ob5=new sibling("rahul","rita");
			echo "my brother is ".$ob5->get_bro();
			echo "\n and my sister is ".$ob5->get_sis();
		?>
	</body>
</html>

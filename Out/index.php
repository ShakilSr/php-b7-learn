<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php

	//    public class learn 
	//    {
	// 	    $fname = "Shakil";
	// 		$lastname = "Rahman";

	// 		echo "my name is $fname $lastname";

	//    }

	   $a = 8;            //variable declare 
	   $b = "Shakil";     //string
	   $c =6;             // int
	   $x = $a + $c;      //arithmatic method oparators
	   
	   //printing command using echo 
	   echo $x . "<br>";
	   var_dump($a,$b,$c,$x);    //datatype knowing command

	   var_dump(is_int($a));   //variable datatypes checking
	   echo "<br>";
	   var_dump(is_string($b));   //variable datatypes checking

	   echo $x ."<br>" . $b ."<br>";

	   if($a>$c){

		echo "I will learn php"."<br>";     //If else condition
	   }

	   else{
		echo "I will not learn php" ."<br>";
	   }

        $p = "Red";
	   switch($p)

			{case"Red" :
				echo "My favourite color is Red";
			    break;
			case"Yellow" :
			     echo "My favourite color is Yellow";
				 break;

			}

		 for($a=1; $a<20; $a+=2 ){
			echo $a ."<br>";

		 }

		 while($c<20){

			echo "everything is good". "<br>";
			$c+=2;
		 }

		 do{
			echo "nothing" ."<br>";
			$x++;
		 }while($x<24);



		 function testing(){
			$a = 5;
			$c = 7;

			if($a > $c){

				echo "I will learn php"."<br>";     //If else condition
			   }
		
			   else{
				echo "I will not learn php" ."<br>";
			   }
		}		

		
		$color = array('white', 'green', 'red');
		foreach ($color as $c)
		{
		echo "$c, ";
		}
		// sort($color);
		// echo "<ul>";
		// foreach ($color as $y)
		// {
		// echo "<li>$y</li>";
		// }
		// echo "</ul>";
		
		
		
		foreach($color as $y){
			echo "<li>$y</li>";


		}
		sort($color);
		foreach($color as $z){
			echo "<br> $z ";
		}

		echo "<br>";

		$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

		asort($ceu);
		foreach($ceu as $p => $q){
			echo "The capital of $p is $q<br>";
		}
		$f = array(1, 2, 3, 4, 5);

		var_dump($f);

		echo "
		<br>
		";
		unset($f[3]);
		var_dump($f);

		$color = array(4 => 'white', 6 => 'green', 11=> 'red');

		echo "$color[4]";

		

	
		// $x = array {
		// 	"Title " : "The Cuckoos Calling",
		// 	"Author": "Robert Galbraith",
		// 	"Detail": {
		// 	"Publisher": "Little Brown"
		// 	}
		// }

			
	?>

	<a href="form.php"><Button>add</Button></a>



</body>
</html>
<?php
$Fruits = array('apple','banana','mango');
echo "<pre>";
print_r($Fruits);
echo "</pre>";

$Snacks=['cake','biscuit','potato chips'];
echo "<pre>";
print_r($Snacks);
echo "</pre>";

echo "I want to have ".$Snacks[0]." and ". $Fruits[2];

$Fruits[3]="Grapes";

echo "<pre>";
print_r($Fruits);
echo "</pre>";

$fruit_length=count($Fruits);
#echo $fruit_length;
#echo "<br>";

for ($i=0 ; $i < $fruit_length ; $i++) { 
	# code...
	echo $Fruits[$i];
	echo "<br>";
}

//Assosciative array
$students = array('Peter'=> 20 , 'John'=> 18 , 'Doe'=> 15);
echo "<pre>";
print_r($students);
echo "</pre>";

$marks=['Peter'=> 20 , 'John'=> 18 , 'Doe'=> 15];
echo "<pre>";
print_r($marks);
echo "</pre>";

foreach ($marks as $key => $value) {
	# code...
	echo "The student ".$key . " scored ".$value;
	echo "<br>";
}

/*$data = [
	'Game of Thrones'=> ['Jaime Lannister','Catelyn Stark','Cersei Lannister']
	'Black Mirror'=> ['Nanette Cole','Selme Telse','Karin Parke']		
];

echo '<h1>Famous TV Series and Actors</h1';

foreach($data as $series => $actors){
	echo "<h2>$series</h2>";
	foreach ($actors as $actor) {
		# code...
		echo "<div>actor</div>";
	}
}*/

?>
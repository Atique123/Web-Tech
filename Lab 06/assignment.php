<?php
$dom = simplexml_load_file("assignment.xml");

foreach($dom->student as $s)
{
	echo "<h1>Student Name: $s->name</h1>";
	echo "<h1>ID: $s->id</h1>";
	echo "<h1>CGPA: $s->cgpa</h1>";
	echo "<h1>Courses Taken:</h1>";
	
	foreach($s->courses as $c){
		echo "<li>".$c->Cname."</li>".$c->Csection."|".$c->Cgrade;
		
	}
}
?>
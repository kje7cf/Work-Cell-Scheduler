 <!DOCTYPE html>
 <html>
 <head>
<!-- Person Edit Copyright 2014 by WebIS Spring 2014 class License Apache 2.0 -->
  <meta charset="UTF-8">
 <title>WCS</title>
 </head>
 <body>
 
<?php
require_once 'Work-Cell-Scheduler/App/personApp.php';
$a=new \WCS\PersonApp();
$a->process("person.php");
?>

<table border='1'>

<tr><th></th>
<?php 
require_once 'Work-Cell-Scheduler/App/trainingApp.php';
$t=new WCS\TrainingMatrix();
foreach($t->getWorkstations() as $w){
	echo "<th>$w\n";
}
?>
</tr>
<?php 
foreach($t->getPeople() as $p){
	echo "<tr><th>$p</th>";
	foreach($t->getWorkstations() as $w) {
		echo "<td>".$t->getTraining($p,$w)."</td>";
	}		
	echo "\n";
}
?>

</table>
</body>
</html>
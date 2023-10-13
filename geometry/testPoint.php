<?php
include 'Point.php';


$p1 = new Point();
$p2 = new Point(5);
$p3 = new Point(5, 10);

var_dump($p1, $p2, $p3);
?>
<hr>

<?php
echo $p3;
?>
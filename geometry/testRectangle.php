<?php
include 'Point.php';
include 'Rectangle.php';

$position = new Point(3, 4);

$rect = new Rectangle(3, 4, $position);



var_dump($rect);

?>
<hr>
<?php
echo $rect;
?>

<hr>
<?php
echo 'périmetre : ' . $rect->perimetre() . '<br>';

echo 'superficie : ' . $rect->superficie() . '<br>';


echo 'moveby : +(3,6)' . $rect->moveBy(3, 6) . '<br>';

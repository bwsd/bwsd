<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1><?=$title?></h1>

<?php

foreach ($row as $key => $val) {    
    echo "<p>$val[name]</p>";
}

?>

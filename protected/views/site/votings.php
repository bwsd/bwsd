<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Голосования</h1>

<?php

foreach ($row as $key => $val) {
    $title = $val['title'];
    $id = $val['id'];
    echo "<a href ='http://yii/voting?voting=$id&name=$title'>$title</a><br/>";
}


?>

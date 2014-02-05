<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<h1><?= $title ?></h1>

<?php
if (!empty($row)) {
    foreach ($row as $key => $val) {
        echo "<p>$val[name]</p>";
    }
} else {
    echo 'Вариантов ответа для данного голосования нет.';
}
?>

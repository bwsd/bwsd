<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
$this->breadcrumbs=array(
	'PhpInfo',
);
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php

echo $info;

if(isset($_GET['modules']) and $_GET['modules'] == 1)  {   
    echo '<pre>';
    print_r(get_loaded_extensions());
    echo '</pre>';
}


        
        
?>



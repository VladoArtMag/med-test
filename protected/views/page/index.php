<?php
/* @var $this PageController */

$this->breadcrumbs=array(
	'Page',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<?PHP

foreach($model as $models){
	echo CHtml::link($models->title,$models->id).'<br />' ;
}

?>

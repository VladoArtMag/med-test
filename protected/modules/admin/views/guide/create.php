<?php
/* @var $this GuideController */
/* @var $model Guide */

$this->breadcrumbs=array(
	'Guides'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Guide', 'url'=>array('index')),
	array('label'=>'Manage Guide', 'url'=>array('admin')),
);
?>

<h1>Create Guide</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
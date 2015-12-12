<?php
/* @var $this GuideCatController */
/* @var $model GuideCat */

$this->breadcrumbs=array(
	'Guide Cats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GuideCat', 'url'=>array('index')),
	array('label'=>'Manage GuideCat', 'url'=>array('admin')),
);
?>

<h1>Create GuideCat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
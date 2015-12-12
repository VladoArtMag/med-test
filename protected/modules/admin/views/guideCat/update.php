<?php
/* @var $this GuideCatController */
/* @var $model GuideCat */

$this->breadcrumbs=array(
	'Guide Cats'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GuideCat', 'url'=>array('index')),
	array('label'=>'Create GuideCat', 'url'=>array('create')),
	array('label'=>'View GuideCat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GuideCat', 'url'=>array('admin')),
);
?>

<h1>Update GuideCat <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
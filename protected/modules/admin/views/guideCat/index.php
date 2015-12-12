<?php
/* @var $this GuideCatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Guide Cats',
);

$this->menu=array(
	array('label'=>'Create GuideCat', 'url'=>array('create')),
	array('label'=>'Manage GuideCat', 'url'=>array('admin')),
);
?>

<h1>Guide Cats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

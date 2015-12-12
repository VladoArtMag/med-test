<?php
/* @var $this GuideController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Guides',
);

$this->menu=array(
	array('label'=>'Create Guide', 'url'=>array('create')),
	array('label'=>'Manage Guide', 'url'=>array('admin')),
);
?>

<h1>Guides</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

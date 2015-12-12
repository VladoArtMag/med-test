<?php
/* @var $this PageController */
if(Yii::app()->user->checkAccess('2')){
    echo "hello, I'm administrator";
}
$this->breadcrumbs=array(
	'Страница',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<?PHP


	echo '<h4>'.$model->title.'</h4><br />' ;
	echo $model->text;


?>

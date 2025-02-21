<?php
$this->breadcrumbs=array(
	'Pessoas'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pessoa', 'url'=>array('index')),
	array('label'=>'Create Pessoa', 'url'=>array('create')),
	array('label'=>'View Pessoa', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Manage Pessoa', 'url'=>array('admin')),
);
?>

<h1>Update Pessoa <?php echo $model->codigo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
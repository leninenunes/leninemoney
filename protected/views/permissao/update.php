<?php
$this->breadcrumbs=array(
	'Permissaos'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Permissao', 'url'=>array('index')),
	array('label'=>'Create Permissao', 'url'=>array('create')),
	array('label'=>'View Permissao', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Manage Permissao', 'url'=>array('admin')),
);
?>

<h1>Update Permissao <?php echo $model->codigo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
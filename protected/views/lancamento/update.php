<?php
$this->breadcrumbs=array(
	'Lancamentos'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Lancamento', 'url'=>array('index')),
	array('label'=>'Create Lancamento', 'url'=>array('create')),
	array('label'=>'View Lancamento', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Manage Lancamento', 'url'=>array('admin')),
);
?>

<h1>Update Lancamento <?php echo $model->codigo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
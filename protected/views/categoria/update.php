<?php
$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Categoria', 'url'=>array('index')),
	array('label'=>'Create Categoria', 'url'=>array('create')),
	array('label'=>'View Categoria', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Manage Categoria', 'url'=>array('admin')),
);
?>

<h1>Update Categoria <?php echo $model->codigo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
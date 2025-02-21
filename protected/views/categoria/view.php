<?php
$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'List Categoria', 'url'=>array('index')),
	array('label'=>'Create Categoria', 'url'=>array('create')),
	array('label'=>'Update Categoria', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Delete Categoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage Categoria', 'url'=>array('admin')),
);
?>

<h1>View Categoria #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'nome',
	),
)); ?>

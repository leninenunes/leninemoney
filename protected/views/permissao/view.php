<?php
$this->breadcrumbs=array(
	'Permissaos'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'List Permissao', 'url'=>array('index')),
	array('label'=>'Create Permissao', 'url'=>array('create')),
	array('label'=>'Update Permissao', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Delete Permissao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage Permissao', 'url'=>array('admin')),
);
?>

<h1>View Permissao #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'descricao',
	),
)); ?>

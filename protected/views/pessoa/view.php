<?php
$this->breadcrumbs=array(
	'Pessoas'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'List Pessoa', 'url'=>array('index')),
	array('label'=>'Create Pessoa', 'url'=>array('create')),
	array('label'=>'Update Pessoa', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Delete Pessoa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage Pessoa', 'url'=>array('admin')),
);
?>

<h1>View Pessoa #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'nome',
		'logradouro',
		'numero',
		'complemento',
		'bairro',
		'cep',
		'cidade',
		'estado',
		'ativo',
	),
)); ?>

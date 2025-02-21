<?php
$this->breadcrumbs=array(
	'Lancamentos'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'List Lancamento', 'url'=>array('index')),
	array('label'=>'Create Lancamento', 'url'=>array('create')),
	array('label'=>'Update Lancamento', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Delete Lancamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage Lancamento', 'url'=>array('admin')),
);
?>

<h1>View Lancamento #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'descricao',
		'data_vencimento',
		'data_pagamento',
		'valor',
		'observacao',
		'tipo',
		'codigo_categoria',
		'codigo_pessoa',
	),
)); ?>

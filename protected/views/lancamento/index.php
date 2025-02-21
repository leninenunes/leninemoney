<?php
$this->breadcrumbs=array(
	'Lancamentos',
);

$this->menu=array(
	array('label'=>'Create Lancamento', 'url'=>array('create')),
	array('label'=>'Manage Lancamento', 'url'=>array('admin')),
);
?>

<h1>Lancamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

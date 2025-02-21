<?php
$this->breadcrumbs=array(
	'Permissaos',
);

$this->menu=array(
	array('label'=>'Create Permissao', 'url'=>array('create')),
	array('label'=>'Manage Permissao', 'url'=>array('admin')),
);
?>

<h1>Permissaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

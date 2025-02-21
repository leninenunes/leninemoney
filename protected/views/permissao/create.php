<?php
$this->breadcrumbs=array(
	'Permissaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Permissao', 'url'=>array('index')),
	array('label'=>'Manage Permissao', 'url'=>array('admin')),
);
?>

<h1>Create Permissao</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
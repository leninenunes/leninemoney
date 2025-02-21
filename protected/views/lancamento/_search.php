<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_vencimento'); ?>
		<?php echo $form->textField($model,'data_vencimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_pagamento'); ?>
		<?php echo $form->textField($model,'data_pagamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor'); ?>
		<?php echo $form->textField($model,'valor',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observacao'); ?>
		<?php echo $form->textField($model,'observacao',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_categoria'); ?>
		<?php echo $form->textField($model,'codigo_categoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_pessoa'); ?>
		<?php echo $form->textField($model,'codigo_pessoa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
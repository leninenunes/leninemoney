<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lancamento-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_vencimento'); ?>
		<?php echo $form->textField($model,'data_vencimento'); ?>
		<?php echo $form->error($model,'data_vencimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_pagamento'); ?>
		<?php echo $form->textField($model,'data_pagamento'); ?>
		<?php echo $form->error($model,'data_pagamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model,'valor',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observacao'); ?>
		<?php echo $form->textField($model,'observacao',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'observacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_categoria'); ?>
		<?php echo $form->textField($model,'codigo_categoria'); ?>
		<?php echo $form->error($model,'codigo_categoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_pessoa'); ?>
		<?php echo $form->textField($model,'codigo_pessoa'); ?>
		<?php echo $form->error($model,'codigo_pessoa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pessoa-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logradouro'); ?>
		<?php echo $form->textField($model,'logradouro',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'logradouro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero'); ?>
		<?php echo $form->textField($model,'numero',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'complemento'); ?>
		<?php echo $form->textField($model,'complemento',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'complemento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bairro'); ?>
		<?php echo $form->textField($model,'bairro',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'bairro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cep'); ?>
		<?php echo $form->textField($model,'cep',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'cep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cidade'); ?>
		<?php echo $form->textField($model,'cidade',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'cidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ativo'); ?>
		<?php echo $form->textField($model,'ativo'); ?>
		<?php echo $form->error($model,'ativo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
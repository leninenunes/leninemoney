<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo), array('view', 'id'=>$data->codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_vencimento')); ?>:</b>
	<?php echo CHtml::encode($data->data_vencimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_pagamento')); ?>:</b>
	<?php echo CHtml::encode($data->data_pagamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacao')); ?>:</b>
	<?php echo CHtml::encode($data->observacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_categoria')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_categoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_pessoa')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_pessoa); ?>
	<br />

	*/ ?>

</div>
<?php
/* @var $this DocumentsInboundController */
/* @var $model DocumentsInbound */

$this->breadcrumbs=array(
	'Documents Inbounds'=>array('index'),
	$model->id,
);
?>

<h1>View DocumentsInbound #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'uuid',
		'sender_id',
		'recipient_id',
		'document_type',
		'process_type',
		'received_date',
		'document_data',
		'status',
		'sync_date',
	),
)); ?>

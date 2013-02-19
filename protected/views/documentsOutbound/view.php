<?php
/* @var $this DocumentsOutboundController */
/* @var $model DocumentsOutbound */

$this->breadcrumbs=array(
	'Documents Outbounds'=>array('index'),
	$model->id,
);
?>

<h1>View DocumentsOutbound #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ehfportal_uuid',
		'peppol_uuid',
		'document_id',
		'sender_id',
		'recipient_id',
		'document_type',
		'process_type',
		'received_date',
		'send_date',
		'document_data',
		'file',
		'status',
		'biztalkqueue_id',
		'sync_date',
	),
)); ?>

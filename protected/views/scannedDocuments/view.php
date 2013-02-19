<?php
/* @var $this ScannedDocumentsController */
/* @var $model ScannedDocuments */

$this->breadcrumbs=array(
	'Scanned Documents'=>array('index'),
	$model->id,
);
?>

<h1>View ScannedDocuments #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sender_email',
		'document_id',
		'protocol',
		'original_received_date',
		'received_date',
		'filename',
		'document_data',
		'comments',
		'status',
		'sync_date',
	),
)); ?>

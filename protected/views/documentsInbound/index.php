<?php
/* @var $this DocumentsInboundController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Documents Inbounds',
);
/*
$this->menu=array(
	array('label'=>'Create DocumentsInbound', 'url'=>array('create')),
	array('label'=>'Manage DocumentsInbound', 'url'=>array('admin')),
);
 * 
 */
?>

<h1>Documents Inbounds</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'filter'=>$data,
    'columns'=>array(array(
            'name'  => 'id',
            'value' => 'CHtml::link(CHtml::encode($data->id), array("view","id"=>$data->id))',
            'type'  => 'raw'),
            uuid, sender_id, recipien_id,document_type,process_type, received_date, document_data, status, sync_data
))); ?>

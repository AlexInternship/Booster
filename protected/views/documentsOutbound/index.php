<?php
/* @var $this DocumentsOutboundController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Documents Outbounds',
);
/*
$this->menu=array(
	array('label'=>'Create DocumentsOutbound', 'url'=>array('create')),
	array('label'=>'Manage DocumentsOutbound', 'url'=>array('admin')),
);
 * 
 */
?>

<h1>Documents Outbounds</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'filter'=>$data,
    'columns'=>array(array(
            'name'  => 'id',
            'value' => 'CHtml::link(CHtml::encode($data->id), array("view","id"=>$data->id))',
            'type'  => 'raw'),
            ehfportal_uuid, peppol_uuid, document_id,sender_id,recipent_id, document_type,process_type, received_date, send_data, document_data,file,status,biztalkqueue_id,sync_data
))); ?>

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
 $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(array(
            'name'  => 'id',
            'value' => 'CHtml::link(CHtml::encode($data->id),"index.php?r=documentsOutbound/view&id=".$data->id, array("id"=>"fancy-link"))',
            'type'  => 'raw'),
             array(
            'name'  => 'logs',
            'value' => 'CHtml::link(CHtml::encode("logs"), array("log/viewlag","document_table"=>"documents_outbound" ,"id"=>$data->id))',
            'type'  => 'raw'),
            'ehfportal_uuid', 'peppol_uuid', 'document_id','sender_id','recipent_id', 'document_type','process_type', 'received_date', 'send_data','file','status','biztalkqueue_id','sync_data'
))); 

//put fancybox on page
$this->widget('fancybox.EFancyBox', array(
        'target'=>'a#fancy-link',
        'config'=>array(),));  
?>

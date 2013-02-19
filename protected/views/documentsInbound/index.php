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
    'columns'=>array(array(
            'name'  => 'id',
            'value' => 'CHtml::link(CHtml::encode($data->id),"index.php?r=documentsInbound/view&id=".$data->id, array("id"=>"fancy-link"))',
            'type'  => 'raw'),
                     array(
            'name'  => 'logs',
            'value' => 'CHtml::link(CHtml::encode("logs"), array("log/viewlag","document_table"=>"documents_inbound" ,"id"=>$data->id))',
            'type'  => 'raw'),
            uuid, sender_id, recipien_id,document_type,process_type, received_date, status, sync_data
)));
 
//put fancybox on page
$this->widget('fancybox.EFancyBox', array(
        'target'=>'a#fancy-link',
        'config'=>array(),));    
?>

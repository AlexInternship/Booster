<?php
/* @var $this ScannedDocumentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Scanned Documents',
);
/*
$this->menu=array(
	array('label'=>'Create ScannedDocuments', 'url'=>array('create')),
	array('label'=>'Manage ScannedDocuments', 'url'=>array('admin')),
);
 * 
 */
 $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(array(
            'name'  => 'id',
            'value' => 'CHtml::link(CHtml::encode($data->id),"index.php?r=ScannedDocuments/view&id=".$data->id, array("id"=>"fancy-link"))',
            'type'  => 'raw'),
             array(
            'name'  => 'logs',
            'value' => 'CHtml::link(CHtml::encode("logs"), array("log/viewlag","document_table"=>"scanned_documents" ,"id"=>$data->id))',
            'type'  => 'raw'),
            'sender_email', 'document_id', 'protocol','original_received_date','received_date','file_name','comments','status','sync_data'
)));

//put fancybox on page
$this->widget('fancybox.EFancyBox', array(
        'target'=>'a#fancy-link',
        'config'=>array(),));  
?>

<?php
/* @var $this LogController */
/* @var $model Log */

$this->breadcrumbs=array(
	'Logs'=>array('index'),
	$model->id,
);

?>

<?php 

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(array(
            'name'  => 'id',
            'value' => 'CHtml::link(CHtml::encode($data->id), array("view","id"=>$data->id))',
            'type'  => 'raw'),
            log_code, document_table, document_id,date,message,cleaned_message,status,
)));

$this->widget('fancybox.EFancyBox', array(
        'target'=>'a#fancy-link',
        'config'=>array(),)); 
?>
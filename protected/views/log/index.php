<?php
/* @var $this LogController */
/* @var $dataProvider CActiveDataProvider */


$this->breadcrumbs=array(
	'Logs',
);


/*	
$this->menu=array(
	array('label'=>'Create Log', 'url'=>array('create')),
	array('label'=>'Manage Log', 'url'=>array('admin')),
);
*/
?>

<?php 

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'filter'=>$data,
    'columns'=>array(array(
            'name'  => 'id',
            'value' => 'CHtml::link(CHtml::encode($data->id),"index.php?r=Log/view&id=".$data->id, array("id"=>"fancy-link"))',
            'type'  => 'raw'),
            log_code, document_table, document_id,date,message,cleaned_message,status,
)));
 
//put fancybox on page
$this->widget('fancybox.EFancyBox', array(
        'target'=>'a#fancy-link',
        'config'=>array(),));  
?>

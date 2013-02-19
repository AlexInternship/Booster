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
            'value' => 'CHtml::link(CHtml::encode($data->id), array("view","id"=>$data->id))',
            'type'  => 'raw'),
            log_code, document_table, document_id,date,message,cleaned_message,status,
)));
 
/*
 * 

"CHtml::link(CHtml::encode(id), array('view', 'id'=>id)"
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));
 * 
 */

?>

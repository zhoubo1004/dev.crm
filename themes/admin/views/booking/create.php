<?php
/* @var $this BookingController */
/* @var $model Booking */

$this->breadcrumbs=array(
	'Bookings'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Booking', 'url'=>array('list')),
	array('label'=>'Manage Booking', 'url'=>array('admin')),
);
?>

<h1>Create Booking</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
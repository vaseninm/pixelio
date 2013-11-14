<?php
/* @var $this ClientsController */
/* @var $model Clients */
?>

<?php
$this->breadcrumbs = array(
    'Клиенты' => array('index'),
    $model->ip,
);
?>

<h1>Информация о клиенте <?php echo $model->ip; ?></h1>

<?php
$this->widget('yiiwheels.widgets.detail.WhDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        'ip',
        'visits',
        'email',
        'phone',
        'message',
        'comfortTime',
        'firstVisit:time',
        'lastVisit:time',
        'referrerUrl',
        'referrerKey',
    ),
));
?>
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

<ul>
    <li>ID: <?= $model->id ?></li>
    <li>IP: <?= $model->ip ?></li>
    <li>Посещения: <?= $model->visits ?></li>
    <li>Имя: <?= CHtml::encode($model->name) ?></li>
    <li>Почта: <?= CHtml::encode($model->email) ?></li>
    <li>Телефон: <?= CHtml::encode($model->phone) ?></li>
    <li>Сообщение: <?= CHtml::encode($model->message) ?></li>
    <li>Удобное время: <?= CHtml::encode($model->comfortTime) ?></li>
    <li>Первое посещение: <?= date('d.m.Y H:i', $model->firstVisit) ?></li>
    <li>Пследнее посещение: <?= date('d.m.Y H:i', $model->lastVisit) ?></li>
</ul>

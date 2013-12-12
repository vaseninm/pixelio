<h1>Информация о визите <?php echo $visit->id; ?></h1>

<?php
$this->widget('yiiwheels.widgets.detail.WhDetailView', array(
    'data'=>$visit,
    'attributes'=>array(
        'id',
        'client.ip',
        'time',
        'referrerUrl',
        'referrerKey',
    ),
));
?>
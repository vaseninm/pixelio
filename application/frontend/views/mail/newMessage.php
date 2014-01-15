Новое сообщение на лид на <?= $domain->domain ?>:
<?= $message->getAttributeLabel('name') ?>: <?= CHtml::encode($message->name) ?>
<?= $message->getAttributeLabel('email') ?>: <?= CHtml::encode($message->email) ?>
<?= $message->getAttributeLabel('phone') ?>: <?= CHtml::encode($message->phone) ?>
<?= $message->getAttributeLabel('message') ?>: <?= CHtml::encode($message->message) ?>
<?= $message->getAttributeLabel('comfortTime') ?>: <?= CHtml::encode($message->comfortTime) ?>
<?= $client->getAttributeLabel('ip') ?>:  <?= CHtml::encode($client->ip) ?>
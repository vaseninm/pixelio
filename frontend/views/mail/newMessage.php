<p><b>Новое сообщение на лид на <?= $domain->domain ?>:</b></p>
<hr>
<p><?= $message->getAttributeLabel('name') ?>: <?= CHtml::encode($message->name) ?></p>
<p><?= $message->getAttributeLabel('email') ?>: <?= CHtml::encode($message->email) ?></p>
<p><?= $message->getAttributeLabel('phone') ?>: <?= CHtml::encode($message->phone) ?></p>
<p><?= $message->getAttributeLabel('message') ?>: <?= CHtml::encode($message->message) ?></p>
<p><?= $message->getAttributeLabel('comfortTime') ?>: <?= CHtml::encode($message->comfortTime) ?></p>
<p><?= $client->getAttributeLabel('ip') ?>:  <?= CHtml::encode($client->ip) ?></p>
<hr>
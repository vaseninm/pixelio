<div class="row">
    <?php foreach (Yii::app()->params->itemAt('adminCategories') as $category) { ?>
    <div class="span4">
        <h2><?= $category['title'] ?></h2>

        <p><?= $category['desc'] ?></p>

        <?php echo TbHtml::linkButton('Перейти &raquo;', array(
            'color' => TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
            'url' => $this->createUrl('/' . $category['controller']),
        )); ?>
    </div>
    <?php } ?>
</div>


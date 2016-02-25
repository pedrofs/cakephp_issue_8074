<?= $this->Paginator->sort('name'); ?>

<?php foreach ($problems as $problem): ?>
    <?= debug($problem); ?>
<?php endforeach; ?>

<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Books:</h1>
<ul>
<?php foreach ($books as $book): ?>
    <li>
        <?= Html::encode("{$book->id}. {$book->name}") ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $word \core\entities\Word\Word */
/* @var $model \core\forms\manage\Word\WordForm */

$this->title = $word->name;
$this->params['breadcrumbs'][] = ['label' => 'Words', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $word->name, 'url' => ['view']];
\yii\web\YiiAsset::register($this);
?>
<div class="word-image">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php

    $form = ActiveForm::begin([
        'options' => ['enctype'=>'multipart/form-data']
    ]); ?>
    <div class="post-form-image" style="margin-top: 30px">
        <? if ($word): ?>
            <img src="<?= $word->getImagePath() ?>" class="img-responsive">
        <? endif; ?>
    </div>
    <?= $form->field($model, 'image')->fileInput(['options' => ['accept' => 'image/*']]) ?>
    <div style="margin-top: 40px">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


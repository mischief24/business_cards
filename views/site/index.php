<?php

/* @var $this yii\web\View */

$this->title = 'Generator wizytówek';
?>
<div class="panel panel-default">
    <div class="panel-heading">Generator - krok 1 z 4</div>
    <div class="panel-body">
        <h4>Wybierz format</h4>
        <form>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="size" id="size1" value="size1" checked>
                    50mm x 90mm (pionowy)
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="size" id="size2" value="size2">
                    90mm x 50mm (poziomy)
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="size" id="size3" value="size3">
                    74mm x 52mm  (poziomy)
                </label>
            </div>
        </form>
        <a href="<?= \yii\helpers\Url::to(['site/step2']); ?>" class="btn btn-primary btn-next">Dalej</a>
    </div>
</div>
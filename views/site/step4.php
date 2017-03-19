<?php

/* @var $this yii\web\View */

$this->title = 'Generator wizytówek';
?>
<div class="panel panel-default">
    <div class="panel-heading">Generator - krok 4 z 4</div>
    <div class="panel-body">
        <h4>Podgląd</h4>

        <div class="row end-preview">
            <img src="../web/static/img/example.png"/>
        </div>
        <div class="row file-properties">
            <form>
                <div class="form-group col-md-4">
                    <label>Format:</label>
                    <label class="radio-inline">
                        <input type="radio" value="">.pdf
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="">.doc
                    </label>
                </div>
                <div class="form-group col-md-6">
                    <label>Liczba elementów na stronie:</label>
                    <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </form>
        </div>
        <a href="<?= \yii\helpers\Url::to(['site/step3']); ?>" class="btn btn-primary btn-back">Powrót</a>
        <a href="<?= \yii\helpers\Url::to(['site/step4']); ?>" class="btn btn-primary btn-download">Pobierz</a>
    </div>
</div>

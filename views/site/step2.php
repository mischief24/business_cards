<?php

/* @var $this yii\web\View */

$this->title = 'Generator wizytówek';
?>
<div class="panel panel-default">
    <div class="panel-heading">Generator - krok 2 z 4</div>
    <div class="panel-body">
        <h4>Wybierz wzór</h4>

        <form>
            <div class="business-cards">
                <div class="row">
                    <div class="col-md-4 card-example">
                        <img src="../web/static/img/example.png" />
                    </div>
                    <div class="col-md-4 card-example">
                        <img src="../web/static/img/example.png" />
                    </div>
                    <div class="col-md-4 card-example">
                        <img src="../web/static/img/example.png" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 card-example">
                        <img src="../web/static/img/example.png" />
                    </div>
                    <div class="col-md-4 card-example">
                        <img src="../web/static/img/example.png" />
                    </div>
                    <div class="col-md-4 card-example">
                        <img src="../web/static/img/example.png" />
                    </div>
                </div>
            </div>
        </form>
        <a href="<?= \yii\helpers\Url::to(['site/index']); ?>" class="btn btn-primary btn-back">Powrót</a>

        <a href="<?= \yii\helpers\Url::to(['site/step3']); ?>" class="btn btn-primary btn-next">Dalej</a>
    </div>
</div>

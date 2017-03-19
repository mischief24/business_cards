<?php

/* @var $this yii\web\View */

$this->title = 'Generator wizytówek';
?>
<div class="panel panel-default">
    <div class="panel-heading">Generator - krok 3 z 4</div>
    <div class="panel-body">
        <h4>Edycja</h4>

        <section class="row">
            <div class="col-md-5">
                <form>
                    <div class="editable-fields">
                        <input type="text" class="form-control" placeholder="Imię i nazwisko" />
                        <input type="text" class="form-control" placeholder="Stanowisko" />
                        <input type="text" class="form-control" placeholder="Adres e-mail" />
                        <input type="text" class="form-control" placeholder="Telefon" />
                        <input type="text" class="form-control" placeholder="Nazwa firmy" />
                        <input type="text" class="form-control" placeholder="Ulica" />
                        <input type="text" class="form-control" placeholder="Kod pocztowy" />
                        <input type="text" class="form-control" placeholder="Miasto" />
                    </div>
                </form>
            </div>
            <div class="col-md-7 preview-card">
                <img src="../web/static/img/example.png" />
            </div>
        </section>


        <a href="<?= \yii\helpers\Url::to(['site/step2']); ?>" class="btn btn-primary btn-back">Powrót</a>

        <a href="<?= \yii\helpers\Url::to(['site/step4']); ?>" class="btn btn-primary btn-next">Dalej</a>
    </div>
</div>

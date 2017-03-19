<?php

/* @var $this yii\web\View */

$this->title = 'Generator wizytówek';
?>
<div class="panel panel-default" ng-controller="PaginationCtrl">
    <div class="panel-heading">Generator - krok {{currentPage}} z 4</div>
    <div class="panel-body">
        <form name="myForm">
            <div ng-show="currentPage==1">
                <?php include('step1.php'); ?>
            </div>
            <div ng-show="currentPage==2">
              <?php include('step2.php'); ?>
            </div>

            <div ng-show="currentPage==3">
                <?php include('step3.php'); ?>

            </div>
            <div ng-show="currentPage==4">
                <?php include('step4.php'); ?>
            </div>

            <button ng-hide="currentPage==1" ng-click="BackPage()"  class="btn btn-primary btn-back">Powrót</button>
            <button ng-hide="currentPage==4" ng-click="NextPage()" class="btn btn-primary btn-next">Dalej</button>
            <button ng-show="currentPage==4" ng-click="NextPage()" class="btn btn-primary btn-download">Pobierz</button>
        </form>
    </div>
</div>



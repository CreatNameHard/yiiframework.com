<?php

use yii\helpers\Html;

/** @var $dataProvider \yii\data\ActiveDataProvider */
/** @var $category \app\models\ExtensionCategory */
/** @var $version string */
/** @var $tag \app\models\ExtensionTag */
/** @var $this \yii\web\View */


$this->title = 'Official Extensions';

?>
<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-2 col-lg-2">
            <?= $this->render('_sidebar', [
                'category' => null,
                'tag' => null,
                'sort' => $dataProvider->sort,
                'version' => null,
                'hideCategoryAndTags' => true,
            ]) ?>
        </div>

        <div class="col-sm-9 col-md-10 col-lg-10" role="main">

            <h1>Official Extensions <small>Maintained by the Yii Team</small></h1>

            <div class="panel panel-default">
                <div class="panel-body">

                    <p>
                        Official Extensions are Yii extensions that are developed and reviewed
                        by Yii core <?= Html::a('team members', ['site/team'] ) ?>.<br>
                        These extensions follow the same quality standards as the framework
                        but are released independently.
                    </p>

                </div>
            </div>

            <?= \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_view',
                'itemOptions' => ['class' => 'col-xs-12 col-sm-6 col-lg-4'],
                'layout' => "<div class=\"row\">{items}</div>\n{pager}",
            ]) ?>

<!--            <nav class="extension-pagination-holder">
              <ul class="pagination pagination-lg extension-pagination">
                <li class="prev disabled">
                    <span><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><a href="#">10</a></li>
                <li class="next">
                    <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </li>
              </ul>
            </nav>-->

        </div>
    </div>
</div>
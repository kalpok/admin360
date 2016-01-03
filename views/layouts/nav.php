<?php
use yii\helpers\Url;
use yii\helpers\Html;
use themes\admin360\widgets\AdminSidebarMenu;

?>

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="page-title">
        <h1 class="page-header"><?= Html::encode($this->title) ?></h1>
    </div>

    <ul class="nav navbar-top-links navbar-left">
        <li><?php echo \Yii::$app->user->identity->email ?></li>
        <li>
            <?php echo Html::a('<i class="fa fa-power-off fa-fw"></i>  خروج', ['/user/auth/logout']) ?>
        </li>
    </ul>

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <?php echo Html::a('Kalpok Admin', Url::home(), ['class'=>'navbar-brand']) ?>
    </div>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav">
                <li class="lg-brand">
                    <?php echo Html::a(\Yii::$app->name, Url::home()) ?>
                </li>
                <!-- <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </li> -->
            </ul>
            <?= AdminSidebarMenu::widget([
                'options' => [
                    'class' => "nav",
                    'id' => "side-menu"
                ],
                'submenuTemplate' => '<ul class="nav nav-second-level">{items}</ul>'
            ]); ?>
        </div>
    </div>
</nav>

<?php

namespace theme\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class Panel extends Widget
{
    public $title = false;
    public $footer = false;
    public $options = array();
    public $visible = true;
    private $content;
    public $tools;
    public $showCloseButton = false;

    public function init()
    {
        parent::init();
        if (empty($this->options['class'])) {
            Html::addCssClass($this->options, 'panel panel-default');
        } else {
            Html::addCssClass($this->options, 'panel');
        }
        if ($this->showCloseButton) {
            $this->registerJsForCloseButton();
            $this->tools = $this->tools . Html::a(
                '<span class="glyphicon glyphicon-remove"></span>',
                null,
                [
                    'class' => 'close-panel-button'
                ]
            );
        }
        ob_start();
    }

    public function run()
    {
        $this->content = ob_get_clean();
        if (!$this->visible) {
            return;
        }
        echo Html::beginTag('div', $this->options);
        $this->renderHeader();
        $this->renderContent();
        $this->renderFooter();
        echo Html::endTag('div') . "\n";
    }

    public function renderHeader()
    {
        if ($this->title !== false) {
            echo Html::beginTag('div', array('class'=>'panel-heading'));
            $this->renderTools();
            if ($this->title) {
                echo '<h3 class="panel-title"> ' . $this->title . '</h3>';
            }
            echo Html::endTag('div');
        }
    }

    public function renderTools()
    {
        if ($this->tools) {
            echo Html::beginTag('div', ['class' => 'btn-group pull-left']);
            echo $this->tools;
            echo Html::endTag('div');
        }
    }

    public function renderContent()
    {
        echo Html::beginTag('div', array('class'=>'panel-body'));
        if (!empty($this->content)) {
            echo $this->content;
        }
        echo Html::endTag('div');
    }

    public function renderFooter()
    {
        if ($this->footer !== false) {
            echo Html::beginTag('div', array('class'=>'panel-footer'));
            if (!empty($this->footer)) {
                echo $this->footer;
            }
            echo Html::endTag('div');
        }
    }

    public function registerJsForCloseButton()
    {
        $this->addId();
        $view = $this->getView();
        $view->registerJs("
            $(document).on('click', 'a.close-panel-button', function(event) {
                event.preventDefault();
                $('.panel#{$this->id}').slideUp(500);
            });
        ");
    }

    public function addId()
    {
        if (isset($this->options['id'])) {
            $this->options['id'] .= " {$this->id}";
        } else {
            $this->options['id'] = $this->id;
        }
    }
}

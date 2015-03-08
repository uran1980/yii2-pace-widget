<?php

namespace uran1980\yii\widgets\pace;

use Yii;

class Pace extends \yii\base\Widget
{
    public $color = 'blue';
    public $theme = 'flash';

    /**
     * @inheritdoc
     */
    public function init()
    {
        Yii::$app->assetManager->getBundle('uran1980\yii\widgets\pace\PaceAsset')->css = [
            "themes/{$this->color}/pace-theme-{$this->theme}.css",
        ];

        $view = $this->getView();
        PaceAsset::register($view);
    }
}

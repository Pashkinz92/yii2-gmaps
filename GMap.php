<?php

namespace pashkinz92\gmaps;


class GMap extends \yii\base\Widget
{

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->registerScript();
    }

    /**
     * Registers gmap.js
     */
    public function registerScript()
    {
        ChosenAsset::register($this->getView());
        /*$clientOptions = Json::encode($this->clientOptions);
        $id = $this->options['id'];
        $this->getView()->registerJs("jQuery('#$id').chosen({$clientOptions});");*/
    }

    public function run()
    {
        return ;
    }
}

<?php

namespace pashkinz92\gmaps;


class GMap extends \yii\base\Widget
{

    var $lat = false;
    var $lng = false;
    var $model = false;
    var $lat_id = false;
    var $lng_id = false;

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
        GMapAsset::register($this->getView());
        /*$clientOptions = Json::encode($this->clientOptions);
        $id = $this->options['id'];*/
        $this->getView()->registerJs("var LAT_ID = '#".$this->lat_id."'; var LNG_ID = '#".$this->lng_id."'; ", \yii\web\View::POS_END, 'lat-lng-ids');
    }

    public function run()
    {
        return $this->render('index', ['lat'=>$this->lat, 'lng'=>$this->lng]);
    }
}

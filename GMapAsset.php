<?php
    /**
     * Created by PhpStorm.
     * User: Pavlo
     * Date: 21.02.2016
     * Time: 19:34
     */

    namespace pashkinz92\gmaps;


    class GMapAsset
    {
        public $sourcePath = '@vendor/pashkinz92/yii2-google-maps/assets';

        /*public $css = [
            'css/chosen.bootstrap.css'
        ];*/

        public $js = [
            '//maps.googleapis.com/maps/api/js?v=3&amp;sensor=false',
            'js/gmap.js'
        ];

        public $depends = [
            //'yii\bootstrap\BootstrapAsset',
            'yii\web\JqueryAsset',
        ];
    }
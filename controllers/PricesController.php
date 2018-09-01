<?php
include_once  ROOT. '/models/Prices.php';

class PricesController
{
    public function actionIndex()
    {
        require_once (ROOT . '/views/inc/prices.php');
        return true;
    }
}
<?php
include_once  ROOT. '/models/Home.php';

class HomeController
{
    public function actionIndex()
    {
        require_once (ROOT . '/views/inc/home.php');
        return true;
    }

}

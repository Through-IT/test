<?php
include_once  ROOT. '/models/About.php';

class AboutController
{
    public function actionIndex()
    {
        require_once (ROOT . '/views/inc/about-us.php');
        return true;
    }
}
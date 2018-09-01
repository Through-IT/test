<?php
include_once  ROOT. '/models/Protfolio.php';

class PortfolioController
{
    public function actionIndex()
    {
        require_once (ROOT . '/views/inc/portfolio.php');
        return true;
    }
}
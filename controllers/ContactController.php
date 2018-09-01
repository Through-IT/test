<?php
include_once  ROOT. '/models/Contact.php';

class ContactController
{
    public function actionIndex()
    {
        require_once (ROOT . '/views/inc/contact.php');
        return true;
    }
}
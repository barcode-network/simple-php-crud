<?php
require 'RegistrationModel.php';
require 'RegistrationView.php';

class Registration extends Page
{
    public function makeModel() : Model
    {
        return new RegistrationModel(DB_USER, DB_PASS, DB_NAME, DB_HOST);
    }

    public function makeView() : AbstractView
    {
        return new RegistrationView();
    }
}
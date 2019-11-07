<?php
abstract class Page
{
    protected $model = null;
    protected $view = null;

    abstract public function makeModel() : Model;

    abstract public function makeView() : AbstractView;
}
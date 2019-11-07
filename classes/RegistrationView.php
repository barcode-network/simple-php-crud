<?php
class RegistrationView extends AbstractView
{
    public function setTemplate(string $filename)
    {
        if (empty($filename)) {
            die('Invalid filename received');
        }
        if (!file_exists($filename)) {
            die('HTML template does not exist');
        }
        $this->_tpl = $filename;
    }
}
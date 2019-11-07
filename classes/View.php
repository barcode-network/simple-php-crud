<?php
abstract class AbstractView
{
    // stores the data from the database
    protected $_vars = [];

    // stores the HTML file name
    protected $_tpl = '';

    // sets the HTML file to use as the page view
    abstract public function setTemplate(string $filename);

    // store data from the database in the view for display
    public function addVar($name, $value)
    {
        if (!preg_match('^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$', $name)) {
            trigger_error('Invalid variable name received');
        }
        $this->_vars[$name] = $value;
    }

    // displays the page with the stored data
    public function display()
    {
        extract($this->_vars);
        require $this->_tpl;
    }
}
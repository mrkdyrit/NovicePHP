<?php

namespace App;

class Template
{
    private $errorHandler;

    public function __construct()
    {
        $this->errorHandler = new ErrorHandler();
    }

    public function get_template(string $template_name)
    {
        $template_path = __DIR__.'/../../resources/templates/temp.' . $template_name . '.php';

        if(!file_exists($template_path)) {
            return $this->errorHandler->displayError('Unknown Template');
        }
    }
}

<?php

namespace Spree;

use Dust\Dust;

class Duster
{
    public $viewsPath = 'views';
    protected $dust;

    public function __construct(Dust $dust)
    {
        $this->dust = $dust;
    }

    public function render($file, $data)
    {
        # complile template
        $template = $this->dust->compileFile($this->viewsPath . '/' . $file);

        # render template
        return $this->dust->renderTemplate($template, $data);
    }

    public function setViews($views = 'views')
    {
        $this->viewsPath = $views;
    }

}
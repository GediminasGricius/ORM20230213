<?php

namespace helper;

use eftec\bladeone\BladeOne;

class Blade extends BladeOne
{
    public function run($view = null, $variables = []): string
    {
        $str = parent::run($view, $variables);
        echo $str;
        return "";
        // echo $this->run($template);
    }
}
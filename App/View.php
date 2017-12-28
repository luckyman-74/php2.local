<?php

namespace App;

use App\Traits\GetSetTrait;


class View
{
    use GetSetTrait;

    public function render(string $template): string
    {
        ob_start();
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }
        include $template;
        return ob_get_clean();
    }

    public function display(string $template): void
    {
      echo $this->render($template);
    }

}
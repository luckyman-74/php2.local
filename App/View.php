<?php

namespace App;

use App\Models\Article;
use App\Traits\GetSetTrait;

/**
 * Class View
 * @package App
 * @property Article[] $news
 * @property Article $article
 */
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
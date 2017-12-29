<?php

namespace App;

use App\Traits\GetSetTrait;
use App\Traits\IteratorTrait;

/**
 * Class View
 * @package App
 */
class View
    implements \Countable, \Iterator
{
    use GetSetTrait;
    use IteratorTrait

    /**
     * @param string $template
     * @return string
     */
    public function render(string $template): string
    {
        ob_start();
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }
        include $template;
        return ob_get_clean();
    }

    /**
     * @param string $template
     */
    public function display(string $template): void
    {
        echo $this->render($template);
    }
    /**
     * @return int
     */
    public function count()
    {
        return count($this->data);
    }
}
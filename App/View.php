<?php

namespace App;

use App\Traits\GetSetTrait;


class View
    implements \Countable, \Iterator
{
    use GetSetTrait;

    private $position = 0;
    private $myData = array(1, 2, 3);

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

    public function count()
    {
        return count($this->data);
    }


    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->myData[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        ++$this->position;
    }

    public function valid()
    {
        return isset($this->myData[$this->position]);
    }
}
<?php

namespace App\Models;

use App\Model;

class Article extends Model

{
    protected static $table = 'news';

    public function __get($name)
    {
        if ('author' === $name && null !== $this->author_id) {

            if (!isset($this->author)) {
                $this->author = Author::findById($this->author_id);
                return $this->author;
            }
        }
        return null;
    }
}
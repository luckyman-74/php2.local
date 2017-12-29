<?php

namespace App\Models;

use App\Model;

/**
 * Class Article
 * @package App\Models
 * @property int    $id
 * @property string $title
 * @property string $text
 * @property int    $author_id
 * @property Author $author
 */
class Article extends Model

{
    protected static $table = 'news';

    public function __get($name)
    {
        if ('author' === $name && null !== $this->author_id) {
            return $this->author = Author::findById($this->author_id);
        }
        return null;
    }
}

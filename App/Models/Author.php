<?php

namespace App\Models;

use App\Model;

/**
 * Class Author
 * @package App\Models
 * @property  int    $id
  */
class Author extends Model
{
    /**
     * @var string $name
     */
    public $name;
    /**
     * @var string $table
     */
    protected static $table = 'authors';

}



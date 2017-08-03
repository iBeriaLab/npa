<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * @property array|string title
 * @property array|string body
 * @property array|string code
 * @property array|string image
 * @property array|string slug
 * @property array|string like
 * @property array|string dislike
 * @property array|string author
 * @property array|string views
 */
class Posts extends Model
{
    protected $table = 'posts';
}

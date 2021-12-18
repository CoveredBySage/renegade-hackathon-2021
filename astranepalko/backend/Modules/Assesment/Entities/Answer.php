<?php

namespace Modules\Assesment\Entities;

use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answer extends Model
{
    use HasFactory;

    protected $connection = "mongodb";
    protected $guard = [];

    protected static function newFactory()
    {
        return \Modules\Assesment\Database\factories\AnswerFactory::new();
    }
}

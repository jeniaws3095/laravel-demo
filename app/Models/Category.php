<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Jenssegers\Laravel\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;


class Category extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'categories';

}

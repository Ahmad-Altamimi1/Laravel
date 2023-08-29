<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
}
class Post1 extends Model
{
    protected $table = 'posts'; // Replace with your actual table name

    // Define relationships and other methods here
}
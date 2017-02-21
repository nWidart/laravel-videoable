<?php

namespace Nwidart\LaravelVideoable\tests\Stubs;

use Illuminate\Database\Eloquent\Model;
use Nwidart\LaravelVideoable\Traits\HasVideos;

class Product extends Model
{
    use HasVideos;

    protected $fillable = ['product_name'];
    public $timestamps = false;
}

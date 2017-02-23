<?php

namespace Nwidart\LaravelVideoable\Models;

use Illuminate\Database\Eloquent\Model;
use Nwidart\LaravelVideoable\Exceptions\VideoPresenterNotFound;

class Video extends Model
{
    protected $table = 'laravel_videoables';
    protected $fillable = ['source', 'code', 'title', 'width', 'height', 'videoable_id', 'videoable_type'];

    public function videoable()
    {
        return $this->morphTo();
    }

    public function getEmbed()
    {
        $sourceClass = config("laravel-videoable.sources.{$this->source}");

        if (class_exists($sourceClass) === false) {
            throw new VideoPresenterNotFound($sourceClass);
        }

        return (new $sourceClass(get_object_vars($this)))->getEmbedCode();
    }
}

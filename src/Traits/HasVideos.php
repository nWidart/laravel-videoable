<?php

namespace Nwidart\LaravelVideoable\Traits;

use Nwidart\LaravelVideoable\Models\Video;

trait HasVideos
{
    /**
     * @return mixed
     */
    public function video()
    {
        return $this->morphOne(Video::class, 'videoable');
    }

    /**
     * @param array $data
     */
    public function addVideo(array $data)
    {
        $this->video()->updateOrCreate(['videoable_id' => $this->id, 'videoable_type' => get_class($this)], $data);
    }

    /**
     * Remove linked video
     */
    public function removeVideo()
    {
        foreach ($this->video()->get() as $video) {
            $video->delete();
        }
    }
}

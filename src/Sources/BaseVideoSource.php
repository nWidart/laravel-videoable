<?php

namespace Nwidart\LaravelVideoable\Sources;

use Nwidart\LaravelVideoable\Models\Video;

abstract class BaseVideoSource
{
    /**
     * @var \Nwidart\LaravelVideoable\Models\Video
     */
    protected $entity;

    public function __construct(array $vars)
    {
        $this->entity = new Video(array_get($vars, 'attributes', []));
    }

    /**
     * @return string
     */
    abstract public function getEmbedCode();
}

<?php

namespace Nwidart\LaravelVideoable\Sources;

final class YoutubePresenter extends BaseVideoSource
{
    /**
     * @return string
     * @throws \Throwable
     */
    public function getEmbedCode()
    {
        return view('videoable::sources.youtube', ['code' => $this->entity->code])->render();
    }
}

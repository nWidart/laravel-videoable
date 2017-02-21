<?php

namespace Nwidart\LaravelVideoable\Sources;

final class VimeoPresenter extends BaseVideoSource
{
    /**
     * @var string
     */
    private $template = <<<HTML
<div>
    <div class="video">
        <iframe src="https://player.vimeo.com/video/{videocode}?byline=0&portrait=0&badge=0" width="100%" height="100%" frameborder="0"
        webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
</div>
HTML;

    /**
     * @return string
     */
    public function getEmbedCode()
    {
        return str_replace('{videocode}', $this->entity->code, $this->template);
    }
}

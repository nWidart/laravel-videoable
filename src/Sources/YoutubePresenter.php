<?php

namespace Nwidart\LaravelVideoable\Sources;

final class YoutubePresenter extends BaseVideoSource
{
    /**
     * @var string
     */
    private $template = <<<HTML
<div>
    <div class="video">
        <iframe id="ytplayer" type="text/html" width="100%" height="100%"
                src="https://www.youtube.com/embed/{videocode}?rel=0"
                frameborder="0" allowfullscreen></iframe>
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

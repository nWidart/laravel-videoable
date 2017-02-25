<?php

namespace Nwidart\LaravelVideoable\Tests\Stubs;

use Nwidart\LaravelVideoable\Sources\BaseVideoSource;

class TestPresenter extends BaseVideoSource
{
    /**
     * @return string
     */
    public function getEmbedCode()
    {
        return 'My custom presenter content.';
    }
}

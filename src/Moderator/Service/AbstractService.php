<?php

namespace Moderator\Service;

use Moderator\Content;

abstract class AbstractService implements ServiceInterface
{
    /**
     * checkContent
     *
     * @param Content $content
     * @return boolean
     */
    public function checkContent(Content $content) {

    }
}

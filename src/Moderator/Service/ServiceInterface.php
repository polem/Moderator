<?php

namespace Moderator\Service;

use Moderator\Content;

interface ServiceInterface
{
    function checkContent(Content $content);
}

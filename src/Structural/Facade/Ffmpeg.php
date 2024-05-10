<?php

namespace Codenip\Structural\Facade;

class Ffmpeg
{

    public function convert(string $source, string $destination, string $format): void
    {
        // more complex logic here to convert the video file
        echo sprintf('Using Ffmpeg to convert %s to %s (%s)', $source, $destination, $format);
    }

}
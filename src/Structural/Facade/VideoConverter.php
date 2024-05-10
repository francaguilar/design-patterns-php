<?php

namespace Codenip\Structural\Facade;

readonly class VideoConverter
{
    public function __construct(private Ffmpeg $ffmpeg)
    {
    }

    public function convert(string $source, string $destination, string $format): void
    {
        $video = new VideoFile($source);
        $this->ffmpeg->convert($video->getFilePath(), $destination, $format);
//        echo sprintf('Using Ffmpeg to convert %s to %s (%s)', $video->getFilePath(), $destination, $format);
    }
}
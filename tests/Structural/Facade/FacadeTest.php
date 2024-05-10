<?php

namespace Codenip\Tests\Structural\Facade;

use Codenip\Structural\Facade\Ffmpeg;
use Codenip\Structural\Facade\VideoConverter;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testConvertVideo(): void
    {
       $converter = new VideoConverter(new Ffmpeg());

       ob_start();

       $converter->convert('video1.mp4', 'video1.avi', 'avi');

       $output = ob_get_clean();

//        'Using Ffmpeg to convert %s to %s (%s)'
       $expectedOutput = 'Using Ffmpeg to convert video1.mp4 to video1.avi (avi)';

       self::assertEquals($expectedOutput, $output);
    }
}
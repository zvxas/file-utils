<?php

use PHPUnit\Framework\TestCase;
use Zvxas\FileUtils\FileUtils;

class FileUtilsTest extends TestCase
{
    public function testDirectorySize()
    {
        $fileUtils = new FileUtils();
        $sizeBytes = $fileUtils->getPathSize(
            './tests/4000bytes/'
        );

        $this->assertEquals(4000, $sizeBytes);
    }
}

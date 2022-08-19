<?php

namespace Zvxas\FileUtils;

use FilesystemIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class FileUtils
{
    /**
     * @param string $path
     * @return int Size in bytes.
     */
    public function getPathSize(
        string $path
    ): int
    {
        // TODO maybe throw an exception
        if ($path === '' || !file_exists($path)) {
            return 0;
        }

        $pathIterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator(
                $path,
                FilesystemIterator::SKIP_DOTS
            ));

        $totalBytes = 0;
        foreach ($pathIterator as $object) {
            $totalBytes += $object->getSize();
        }

        return $totalBytes;
    }
}
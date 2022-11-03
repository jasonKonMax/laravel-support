<?php

namespace Jasonkonmax\LaravelSupport;

use \Aws\S3\S3Client;

class Support
{
    /**
     * @return void
     */
    public static function dirSyncS3(S3Client $client, $dest, $source)
    {
        $manager = new \Aws\S3\Transfer($client, $source, $dest);
        $manager->transfer();
    }
}
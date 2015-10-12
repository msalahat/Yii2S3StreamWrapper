<?php
namespace startappz;

use Aws\S3\S3Client;

/**
 * This is just an example.
 */
class S3SteamWrapper
{

    public $secret;

    public $key;

    public $bucket;

    private $s3;

    public function __construct()
    {
        $this->s3 = S3Client::factory(array(
            'credentials' => array(
                'key' =>  $this->key,
                'secret' => $this->secret
            )
        ));
        
        $this->s3->registerStreamWrapper();
    }
    
    
}

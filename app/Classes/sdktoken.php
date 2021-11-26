<?php
// Import Composer to manage dependencies
    require __DIR__ . '/vendor/autoload.php';
    use Netless\Token\Generate;
    $netlessToken = new Generate;
    $sdkToken = $netlessToken->sdkToken(
        "Your AK", // Fill in the AK you get from Agora Console
        "Your SK", // Fill in the SK you get from Agora Console
        1000 * 60 * 10, // Token validity period in milliseconds. If you set it to 0, the token will never expire
        array(
            "role" => Generate::AdminRole, // Define the permissions granted by the token. You can set it to AdminRole, WriterRole, or ReaderRole
        )
    );
    echo $sdkToken;

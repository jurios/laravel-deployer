<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Ignore Files
    |--------------------------------------------------------------------------
    |
    | Here you can list the paths which will be ignored in the deployment.
    | Files like configuration files which are not related with the application
    | in production can be ignored. Files ignored will make your
    | deployment process faster.
    |
    */
    'ignore' => [],

    /*
    |--------------------------------------------------------------------------
    | Include Files
    |--------------------------------------------------------------------------
    |
    | Here you can list the paths which will be included in the deployment.
    | This is the place where you should add files which are not tracked in git
    | but they are autogenerated before deploy. For example, assets which are
    | compiled in a CI environment.
    |
    | An included file which is ignored will be ignored anyway.
    */
    'include' => [],

    'manager' => [

        /*
        |--------------------------------------------------------------------------
        | Protocol
        |--------------------------------------------------------------------------
        |
        | Here you choose which protocol Deployer is going to use. At this moment,
        | you can choose "simulate", "sftp" of "ftp" string. Then you should fill in
        | the respective configuration.
        */
        'protocol' => 'simulate',

        /*
        |--------------------------------------------------------------------------
        | FTP Configuration
        |--------------------------------------------------------------------------
        |
        | FOR SECURITY REASONS, USING ENVIRONMENT VARIABLES IS RECOMMENDED.
        */
        'ftp' => [
            'host' => null,
            'port' => null,
            'user' => null,
            'password' => null,
            'path' => null
        ],

        /*
        |--------------------------------------------------------------------------
        | SFTP Configuration
        |--------------------------------------------------------------------------
        |
        | FOR SECURITY REASONS, USING ENVIRONMENT VARIABLES IS RECOMMENDED.
        */
        'sftp' => [
            'host' => null,
            'port' => null,
            'user' => null,
            'password' => null,
            'path' => null
        ],

        /*
        |--------------------------------------------------------------------------
        | Simulate Configuration
        |--------------------------------------------------------------------------
        */
        'simulate' => [],
    ]
];
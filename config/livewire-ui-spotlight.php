<?php

    use App\Spotlight\Dashboard;
    use App\Spotlight\Expenses;
    use App\Spotlight\QueryFollowUps;
    use App\Spotlight\SmsHub;

    return [

    /*
    |--------------------------------------------------------------------------
    | Shortcuts
    |--------------------------------------------------------------------------
    |
    | Define which shortcuts will activate Spotlight CTRL / CMD + key
    | The default is CTRL/CMD + K or CTRL/CMD + /
    |
    */

    'shortcuts' => [
        'k',
        'slash',
    ],

    /*
    |--------------------------------------------------------------------------
    | Commands
    |--------------------------------------------------------------------------
    |
    | Define which commands you want to make available in Spotlight.
    | Alternatively, you can also register commands in your AppServiceProvider
    | with the Spotlight::registerCommand(Logout::class); method.
    |
    */

    'commands' => [
        Dashboard::class,

        QueryFollowUps::class,

        Expenses::class,
        SmsHub::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Include CSS
    |--------------------------------------------------------------------------
    |
    | Spotlight uses TailwindCSS, if you don't use TailwindCSS you will need
    | to set this parameter to true. This includes the modern-normalize css.
    |
    */
    'include_css' => false,


    /*
    |--------------------------------------------------------------------------
    | Include JS
    |--------------------------------------------------------------------------
    |
    | Spotlight will inject the required Javascript in your blade template.
    | If you want to bundle the required Javascript you can set this to false,
    | call 'npm install fuse.js' or 'yarn add fuse.js',
    | then add `require('vendor/livewire-ui/spotlight/resources/js/spotlight');`
    | to your script bundler like webpack.
    |
    */
    'include_js' => true,

];

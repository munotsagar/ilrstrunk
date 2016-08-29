<?php

//file : config/constants.php

/**
 * Note: Specify Constants Name in Upper Case
 * Here is how these can be used in code -
 *      Config::get('constants.ADMIN_NAME');
 */

return [

    'APPLICATION_NAME' => 'iLRS',

    'ADMIN_NAME' => 'administrator',

    'HEADERS' => [
        'API_KEY' => 'apikey',
        'API_MODE' => 'apimode',
        'API_USERNAME' => 'apiusername',
        'API_PASSWORD' => 'apipassword'
    ],

    'API_MODE' => [
        'INTERNAL' => 'internal',
        'EXTERNAL' => 'external',
        'BOTH' => 'both'
    ],

    'CONTROLLERS' => [
        'STATEMENT' => 'StatementController',
        'REPORTS' => 'ReportsController'
    ],

    'ROUTES' => [
        'STATEMENT' => 'statements',
        'ACTIVITY_LOG' => 'activitylog'
    ],
    'JSON_FORMAT' => [
        'true' => JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES,
        'false' => JSON_UNESCAPED_SLASHES
    ],

];
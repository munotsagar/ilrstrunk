<?php

/*
|------------------------------------------------------------------
| Contains global iLRS Configuration Settings / Values
|------------------------------------------------------------------
*/

return [
    'BASE_URL' => 'http://ec2-54-226-70-79.compute-1.amazonaws.com/ilrs',
    'BASE_XAPI_URL' => 'http://ec2-54-226-70-79.compute-1.amazonaws.com/ilrs/xapi',
    'RECORD_PER_PAGE' => 10,
    'API_KEY' => 'ilrsapikey',
    //'IS_API_KEY_AUTH' => true,
    'IS_HTTP_AUTH_ENABLE' => false,
    'IS_OAUTH_ENABLE' => false,
    //'locationHeaderUrl' => 'http://ec2-54-226-70-79.compute-1.amazonaws.com/ilrs/xapi/statements?statementId='
    'READABLE_OUTPUT_JSONFORMAT' => "false"
];
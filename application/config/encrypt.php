<?php

defined('SYSPATH') or die('No direct script access.');

return array(
    'default' => array(
        'key' => 'owsencryptkey',
        'cipher' => MCRYPT_RIJNDAEL_128,
        'mode' => MCRYPT_MODE_NOFB,
    ),
);

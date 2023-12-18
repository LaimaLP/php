<h1> Const'anta </h1>

<?php

define('MY_CONST', 'My constant value');
echo MY_CONST;
echo '<br>';
define(
    'MY_ARRAY',
    [
        'key' => 'value1',
        'key2' => 'value2'
    ]
);
echo MY_ARRAY['key'];

//konstanntu negalima pakeisti ir jos keliauja visur kiaurai;

//php predefined constant
echo '<br>';
echo PHP_INT_MIN;

echo '<br><br>';
echo __DIR__ .'/test1.txt';

//rekomenduoja rasyti absoliucius kelius, o ne reliatyvius;

file_put_contents(__DIR__ . '/test1.txt','test1');
file_put_contents('test2.txt','test2');

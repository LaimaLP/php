<?php

file_put_contents('test.txt','Are you still here?');

$fileContent = file_get_contents('file.text');
echo $fileContent;
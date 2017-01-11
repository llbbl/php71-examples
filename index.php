<?php

$allfiles = scandir(__DIR__);

$justPHPfiles = preg_grep("/^(\.|\.\.|index\.php|\.git|\S+\.md|\S+\.sh)$/",
     $allfiles, PREG_GREP_INVERT);


foreach($justPHPfiles as $files)
{
    echo '<a href="'.$files.'">'.$files. '</a><br/>';
}


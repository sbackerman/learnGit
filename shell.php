<?php

// 项目地址
$path = "/home/wwwroot/learnGit";
$cmd  = "cd {$path} && /usr/bin/git reset --hard origin/master && /usr/bin/git clean -f && /usr/bin/git pull 2>&1" ;
$ret  =  shell_exec($cmd);
file_put_contents('/tmp/learnGit.log', $ret ,FILE_APPEND);
echo $cmd . "\n" ;
echo $ret . "\n" ;
exit('done');




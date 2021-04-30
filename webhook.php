<?php

if (!function_exists('getallheaders')) 
{ 
    function getallheaders() 
    { 
       $headers = array (); 
       foreach ($_SERVER as $name => $value) 
       { 
           if (substr($name, 0, 5) == 'HTTP_') 
           { 
               $headers[str_replace(' ', '-',  strtolower(str_replace('_', ' ', substr($name, 5))) )] = $value; 
           } 
       } 
       return $headers; 
    } 
} 


// GitHub Webhook Secret.
// GitHub项目 Settings/Webhooks 中的 Secret
$secret = "aliyunWebHook";

// Path to your respostory on your server.
// e.g. "/var/www/respostory"
// 项目地址 

// Headers deliveried from GitHub
//$signature = isset($_SERVER['HTTP_X_HUB_SIGNATURE']) ? $_SERVER['HTTP_X_HUB_SIGNATURE'] : '' ;
//file_put_contents('/tmp/git.log', $signature,FILE_APPEND);



function gitee($secret) {

	$headers = getallheaders();

	$signature = isset($headers['x-gitee-token']) ?  $headers['x-gitee-token'] : '';
	$timestamp = isset($headers['x-gitee-timestamp']) ? $headers['x-gitee-timestamp'] : '';


	$secret_str = "$timestamp\n$secret";
	$compute_token = base64_encode(hash_hmac('sha256', $secret_str, $secret, true));

	
	$isMatched = $signature === $compute_token;
	if ($isMatched) {
		echo '验证成功';
	} else {
		echo '验证失败';
	}

	return $isMatched ;

}

function github() {
	/*
	if (0 && $signature) {
	  $hash = "sha1=".hash_hmac('sha1', file_get_contents("php://input"), $secret);
	  if (strcmp($signature, $hash) == 0) {
		echo shell_exec("cd {$path} && /usr/bin/git reset --hard origin/master && /usr/bin/git clean -f && /usr/bin/git pull 2>&1");
		exit();
	  }
	}
	*/
}



// 检测是否通过验证密钥
$isMatched = gitee($secret);

// Path to your respostory on your server.
// e.g. "/var/www/respostory"
// 项目地址
$path = "/home/wwwroot/learnGit";


if($isMatched) {
	$cmd = "cd {$path} && /usr/bin/git reset --hard origin/master && /usr/bin/git clean -f && /usr/bin/git pull 2>&1" ;
	$ret =  shell_exec($cmd);
	file_put_contents('/tmp/git.log', $ret ,FILE_APPEND);
	echo $cmd ;
	echo $ret ;
	exit();
} else {
	http_response_code(404);
}
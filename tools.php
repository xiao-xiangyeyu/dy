<?php
/**
 * [d composer打印测试]
 * @王守莹:http://
 * @url示例:
 * @DateTime    2018-08-27
 * @逻辑:
 * @Author      王守莹
 * @param       [type]     $param [description]
 * @return      [type]            [description]
 */

if(!function_exists('dy')){
	function dy($param){
		
		echo '<pr>';
		print_r($param);
		exit;
	}
}


if(!function_exists('d')){
	function d($param){
		
		echo '<pr>';
		print_r($param);
		echo '<hr>';
		exit;
	}
}








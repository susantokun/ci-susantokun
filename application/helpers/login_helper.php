<?php
#===================================================|
# Please DO NOT modify this information :			      |
#---------------------------------------------------|
# @Author 		: Susantokun
# @Date 		  : 2018-05-26T18:52:44+07:00
# @Email 		  : support@susantokun.com
# @Project 		: CodeIgniter
# @Filename 	: login_helper.php
# @Instagram 	: susantokun
# @Website 		: http://www.susantokun.com
# @Youtube 		: http://youtube.com/susantokun
# @Last modified time: 2018-05-27T04:37:39+07:00
#===================================================|

defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('get_hash')){
    function get_hash($PlainPassword){
        $option=[
                'cost'=>5,
    	        ];
    	return password_hash($PlainPassword, PASSWORD_DEFAULT, $option);
   }
}

if(!function_exists('hash_verified')){
    function hash_verified($PlainPassword,$HashPassword){
    	return password_verify($PlainPassword,$HashPassword) ? true : false;
   }
}

<?php

echo hashPass(123456);
function hashPass($password) {

	$PASSWORD_HASH_SALT = 'the quick brown fox jumped over the lazy dog';
	$string = $PASSWORD_HASH_SALT . $password;
	return sha1($string);
}
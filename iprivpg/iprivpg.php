<?php

// start of iprivpg module

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7 &gt;= 7.0.0)<br/>
 * Sign message
 * @param string $message message to be signed
 * @param string $sec content of secret.key file
 * @param string $passwd code phrase for this secret key
 * @return array first element is error code. <br/>
 * if error code is 0, then second member is the result of an operation<br/>
 * if error code is not 0, then the second member is an error message
 */
function ipriv_sign($message, $sec, $passwd) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7 &gt;= 7.0.0)<br/>
 * Verify message
 * @param string $message signed message that we want to verify
 * @param string $pub content of public.key file
 * @param string|null $serial serial number of specific public key in a file<br>
 *                   If omitted function will use a first public key in a file
 * @return array first element is error code. <br/>
 * if error code is 0, then second member is the result of an operation<br/>
 * if error code is not 0, then the second member is an error message
 */
function ipriv_verify($message, $pub, $serial = null) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7 &gt;= 7.0.0)<br/>
 * Encrypt message
 * @param string $message short string (about 50 symbols long) that should be encrypted
 * @param string $pub public key of a recipient
 * @param string $serial serial number of specific key in a file
 * @return array [0] is a length of encrypted string or a negative error code<br>
 * [1] is encrypted string
 */
function ipriv_encrypt($message, $pub, $serial) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7 &gt;= 7.0.0)<br/>
 * Decrypt message
 * @param string $message unencrypted string
 * @param string $sec content of secret.key file
 * @param string $passwd code phrase for this secret key
 * @return array [0] is a length of decrypted string or a negative error code<br>
 * [1] is decrypted string
 */
function ipriv_decrypt($message, $sec, $passwd) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7 &gt;= 7.0.0)<br/>
 * Create deatached signature for the message
 * @param string $message message to be signed
 * @param string $sec content of secret.key file
 * @param string $passwd code phrase for this secret key
 * @return array first element is error code. <br/>
 * if error code is 0, then second member is the deatached signature<br/>
 * if error code is not 0, then the second member is an error code
 */
function ipriv_sign2($message, $sec, $passwd) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7 &gt;= 7.0.0)<br/>
 * Verify deatached signature for message
 * @param string $message message that we want to verify
 * @param string $signature deatached signature
 * @param string $pub content of public.key file
 * @param string|null $serial serial number of specific public key in a file
 * @return array [0] contains 0 if the signature verifies and error code otherwise
 */
function ipriv_verify2($message, $signature, $pub, $serial) {}

// end of iprivpg module
?>
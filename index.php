<?php

//$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define('APP_PATH',__DIR__.DIRECTORY_SEPARATOR.'APP'.DIRECTORY_SEPARATOR);
define('FILES_PATH',__DIR__.DIRECTORY_SEPARATOR.'transaction_files'.DIRECTORY_SEPARATOR);
define('VIEWS_PATH',__DIR__.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR);

require APP_PATH.'app.php';

$files = getTransactionFiles(FILES_PATH);
$transactions = [];

foreach($files as $file){

    $transactions  = array_merge($transactions, getTransactions($file));
}

$total = calculateTotal($transactions);

require VIEWS_PATH.'transactions.php';
?>
<?php
require dirname(__DIR__) . '/vendor/autoload.php';

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

$path = dirname(__DIR__) . '/logs';
// create a log channel
$log = new Logger('log');
$log->pushHandler(new StreamHandler("$path/first.log", Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apache</title>
</head>
<body>
    <h1>Testando logger</h1>
</body>
</html>

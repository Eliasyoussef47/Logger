<?php

require 'FileLogger.php';


$everythingLogger = new FileLogger("ALL", "2018-05-16_all_log.txt");
$errorLogger = new FileLogger("ERROR", "2018-05-16_all_log.txt");

$everythingLogger->Error("Dit is een foutbericht");
$everythingLogger->Warning("Dit is een waarschuwing");
$everythingLogger->Info("Dit is een informatiebericht");

$errorLogger->Error("Dit is een foutbericht");
$errorLogger->Warning("Dit is een waarschuwing");       // deze moet door de FileLogger genegeerd worden, want we willen alleen errors in deze logger
$errorLogger->Info("Dit is een informatiebericht");     // deze moet door de FileLogger genegeerd worden, want we willen alleen errors in deze logger



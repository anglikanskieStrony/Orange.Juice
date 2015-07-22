<?php
if(!$isset($startPath))
    $startPath = "";
include_once($_SERVER["DOCUMENT_ROOT"].$startPath."/lib/include/EventLogger.php");
set_include_path($_SERVER["DOCUMENT_ROOT"].$startPath."/lib/include/");
function __autoload($className)
{
    include $className.".php";
    EventLogger::logDebug("Loaded class ".$className);
}

?>
<?php

class EventLogger
{
    const MAIN_LOG_PATH="/logs/main.log";
    const ERROR_LOG_PATH="/logs/error.log";
    const USER_LOG_PATH="/logs/users.log";
    const DEBUG_LOG_PATH="/logs/debug.log";
    private static $lastLogged;
    private static $debugMode;
    private static $userActivityLogEnabled;

    public static function log($message)
    {
        file_put_contents($_SERVER["DOCUMENT_ROOT"].self::MAIN_LOG_PATH,"[INFO] ".$message."\t\t\t".date("Y/m/d H:i:s")."\n",FILE_APPEND);
    }
    public static function logWarning($message)
    {
        file_put_contents($_SERVER["DOCUMENT_ROOT"].self::MAIN_LOG_PATH,"[WARNING] ".$message."\t\t\t".date("Y/m/d H:i:s")."\n",FILE_APPEND);
    }
    public static function logError($message, $isFatal = false)
    {
        file_put_contents($_SERVER["DOCUMENT_ROOT"].self::ERROR_LOG_PATH,"[".self::$isFatal == true ? "FATAL ": ""."ERROR] ".$message."\t\t\t".date("Y/m/d H:i:s")."\n",FILE_APPEND);
    }
    public static function logDebug($message)
    {
        if(self::$debugMode)
            file_put_contents($_SERVER["DOCUMENT_ROOT"].self::DEBUG_LOG_PATH,"[DEBUG INFO] ".$message."\t\t\t".date("Y/m/d H:i:s")."\n",FILE_APPEND);
    }
    public static function logUserActivity($message)
    {
        if(self::$userActivityLogEnabled)
            file_put_contents($_SERVER["DOCUMENT_ROOT"].self::USER_LOG_PATH,"[INFO] ".$message."\t\t\t".date("Y/m/d H:i:s")."\n",FILE_APPEND);
    }
    public static function isdebugMode()
    {
        return self::$debugMode;
    }
    public static function enableDebug()
    {
        self::$debugMode = true;
    }
    public static function disableDebug()
    {
        self::$debugMode = false;
    }
    public static function isUserActivityLogEnabled()
    {
        return self::$userActivityLogEnabled;
    }
    public static function enableUserActivityLog()
    {
        self::$userActivityLogEnabled = true;
    }
    public static function disableUserActivityLog()
    {
        self::$userActivityLogEnabled = false;
    }
    public static function getLastLoggedMessage()
    {
        return self::$lastLogged;
    }
    public static function getErrorLog()
    {
       return file_get_contents($_SERVER["DOCUMENT_ROOT"].self::ERROR_LOG_PATH);
    }
    public static function getMainLog()
    {
        return file_get_contents($_SERVER["DOCUMENT_ROOT"].self::MAIN_LOG_PATH);
    }
    public static function getDebugLog()
    {
        return file_get_contents($_SERVER["DOCUMENT_ROOT"].self::DEBUG_LOG_PATH);
    }
    public static function getUsersLog()
    {
        return file_get_contents($_SERVER["DOCUMENT_ROOT"].self::USERS_LOG_PATH);
    }
}

?>
<?php

namespace AmericanTechnologies\TerminalLogger;

use Illuminate\Support\Facades\Log;

class TerminalLogger
{

  /*
  * Log function - logs data to log file,
  */
  public static function log($text, $type, $data = array(), $consoleOnly = false) {
    if($consoleOnly == false) {
      // set log based on log type
      switch ($type) {
        case 'warning':
          Log::warning($text, $data);
          break;
        case 'error':
          Log::error(config('app.name') . ' - ' . $text, $data);
          break;
        default :
          Log::info($text, $data);
          break;
      }
    }


    // log to command line
    if(app()->runningInConsole()) {
      switch ($type) {
        case 'warning':
          $color = "\e[33m";
          break;
        case 'error':
          $color = "\e[31m";
          break;
        case 'success':
          $color = "\e[32m";
          break;
        case 'notice':
          $color = "\e[35m";
          break;
        case 'title':
          $color = "\e[39m";
          break;
        case 'announcement':
          $color = "\e[34m";
          break;
        default :
          $color = "\e[36m";
          break;
      }


      echo $color . $text . PHP_EOL;
    }
  }
}

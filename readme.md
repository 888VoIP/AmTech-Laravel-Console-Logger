# AmTech Laravel Console Logger

THe AmTech Console Logger is an addon to Laravel's log system that auto logs to whatever log system is setup and also logs to the terminal window with color coding depending on log type.

## Installation

Use the Composer to install into Laravel project.

```bash
composer install american-technologies/laravel-console-logger
```

## Usage

```php
use AmericanTechnologies\ConsoleLogger;

/*
*
* $message (String) : The log message
* $type (String) : Is the log type (info, warning, error, title, announcement, notice, success)
* $data (Array) : Array of data associated with log (does not output to console/terminal window)
* $consoleOnly (Bool) : True or False for whether it is solely meant for the console
*
*/
ConsoleLogger::log($message, $type, $data, $consoleOnly);

```

## License
[MIT](https://choosealicense.com/licenses/mit/)
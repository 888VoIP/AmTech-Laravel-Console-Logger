# AmTech Laravel Console Logger

The AmTech Console Logger is an addon to Laravel's log system that auto logs to whatever log system is setup and also logs to the terminal window with color coding depending on log type.

## Installation

Use the Composer to install into Laravel project.

```bash
composer require american-technologies/laravel-console-logger
```

## Usage

```php
use AmericanTechnologies\ConsoleLogger\ConsoleLogger;

...

ConsoleLogger::log($message, $type, $data, $consoleOnly);

```


### Options

| Option            | Type     | Required | Description                                     |
| ----------------- | -------- | -------- | ----------------------------------------------- |
| `message`         | `string` | yes      | Message you want to log                         |
| `type`            | `string` | yes      | Type of log (info, success, warning, error)     |
| `data`            | `array`  | no       | Array of data (will not be logged to console)   |
| `consoleOnly`     | `bool`   | no       | Log to console only versus log file             |


## License
[MIT](https://choosealicense.com/licenses/mit/)
# Oracle Connector

## Installation

### 1. Clone or download

1. [Clone](https://github.com/francisceril/oracle-connector.git) or [download](https://github.com/francisceril/oracle-connector/archive/master.zip)  this repository.
2. Unzip the archive if needed and rename the folder to `oracle-connector`.

### 2. Git Submodule

If you know your way around Git, you can download this plugin as a submodule:

```
$ cd path/to/kirby
$ git submodule add https://github.com/francisceril/oracle-connector site/plugins/oracle-connector
```

## Setup

### Configuration

Add your database configuration in your ```site/config/config.php```

```sh
<?php

return [
    'db' => [
        'type'      => 'oracle',
        'host'      => 'host',
        'port'      => 'port',
        'database'  => 'database',
        'user'      => 'user',
        'pass'      => 'pass'
    ]
];
```

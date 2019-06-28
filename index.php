
<?php

use Kirby\Database\Database;
use Kirby\Exception\InvalidArgumentException;

/**
 * Oracle database connector
 */

 Database::$types['oracle'] = [

    'dsn' => function (array $params) {

        if (isset($params['host']) === false) {
            throw new InvalidArgumentException('The oracle connection requires a "host"');
        }

        if (isset($params['port']) === false) {
            throw new InvalidArgumentException('The oracle connection requires a "port"');
        }

        if (isset($params['database']) === false) {
            throw new InvalidArgumentException('The oracle connection requires a "database" parameter');
        }

        return 'oci:dbname=' . $params['host'] . ':' . $params['port'] . '/' . $params['database'];
    }
];

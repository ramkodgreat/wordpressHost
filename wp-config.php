if(isset($_ENV[`CLEARDB_DATABASE_URL`])) {
    $db = parse_url($_ENV[`CLEARDB_DATABASE_URL`]);
    define(‘DB_NAME’, trim($db[`path`],`/`));
    define(‘DB_USER’, $db[`user`]);
    define(‘DB_PASSWORD’, $db[`pass`]);
    define(‘DB_HOST’, $db[`host`]);
    define(‘DB_CHARSET’, ‘utf8’);
    define(‘DB_COLLATE’, ‘’);
} else {
    die(‘No Database credentials!’);
}
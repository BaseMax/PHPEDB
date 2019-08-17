# PHP Easy Database

## EDPHP

PHP Easy DB (Database) is an easy library to manage and control the database.

## PHPED

## Features

- Tiny
- Easy and fast query builder
- Support most of the sql function

### Using

```php
$db=new database();
$db->connect("localhost", "username", "*****");
$db->db="database_name";
$db->create_database($db->db, false);
```
[See more tests php file](/test/)

### Functions
```php
function connect($host="localhost", $user="root", $pass="") {...}
function check() {...}
function disconnect() {...}
function query($query, $error=true) {...}
function create_database($name, $error=true) {...}
function selects($table, $clause=[], $after="", $__sql="") {...}
function select($table, $clause=[], $after="") {...}
function count($table, $clause=[]) {...}
function delete($table, $clause=[]) {...}
function insert($table, $values) {...}
function update($table, $clause, $values) {...}

```

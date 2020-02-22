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
function selectRaw($query) {...}
function selectsRaw($query) {...}
```

## Example

```
$count=$db->count("account", $clauses);

$accountID=$db->insert("account", $values);

$result=$db->selectRaw("SELECT floor(avg(value)) as star FROM `$db->db`.`rate` WHERE `postID` = " . $id);

$result=$db->selectsRaw("SELECT * FROM `$db->db`.`account` INNER JOIN `$db->db`.`team` ON account.id = team.accountID WHERE team.postID=". $id .";");

$result=$db->selectsRaw("SELECT `accountID` FROM `$db->db`.`rate` WHERE `postID`=". $id ." ORDER BY `id`,`value` DESC LIMIT 4");
```

---------

# Max Base

My nickname is Max, Programming language developer, Full-stack programmer. I love computer scientists, researchers, and compilers. ([Max Base](https://maxbase.org/))

## Asrez Team

A team includes some programmer, developer, designer, researcher(s) especially Max Base.

[Asrez Team](https://www.asrez.com/)

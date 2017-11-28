<?php

$dbHost = 'localhost';
$dbUser = 'goods';
$dbPassword = 'goods';
$dbName = 'goods';

$connection = mysqli_connect(
    $dbHost,
    $dbUser,
    $dbPassword,
    $dbName
);
$connection->query('SET NAMES utf8;');
$connection->query('SET CHARSET utf8;');
$tablesMap = [
    'category' => 'category',
    'product' => 'product'
];

///** Get entity */
//
///**
// * @param null $id
// * @param null $from
// * @param null $count
// * @return bool|mysqli_result
// */
//function categoryList($id = null, $from = null, $count = null)
//{
//    return getList($GLOBALS['tablesMap']['category'], $id, $from, $count);
//}
//
//
///**
// * @param null $id
// * @param null $from
// * @param null $count
// * @return bool|mysqli_result
// */
//function productList($id = null, $from = null, $count = null)
//{
//    return getList($GLOBALS['tablesMap']['product'], $id, $from, $count);
//}
//
///**
// * @param $tableName
// * @param null $id
// * @param null $from
// * @param null $count
// * @return bool|mysqli_result
// */
//function getList($tableName, $id = null, $from = null, $count = null)
//{
//    global $connection;
//
//    $where = '';
//
//    if ($id > 0) {
//        $where = ' WHERE id = '.$id;
//    }
//
//    if (isset($from)) {
//        if (isset($count)) {
//            $query = "SELECT * FROM $tableName LIMIT $from, $count;";
//        } else {
//            $query = "SELECT * FROM $tableName LIMIT $from;";
//        }
//    } else {
//        $query = "SELECT * FROM $tableName $where;";
//    }
//    $result = mysqli_query(
//        $connection, $query
//    );
//
//    return $result;
//}
//
//
///** Create entity */
//
///**
// * @param $fields
// * @return bool|mysqli_result
// */
//function createCategory($fields)
//{
//    return createEntity(
//        $GLOBALS['tablesMap']['category'],
//        $fields
//    );
//}
//
//function createProduct($fields)
//{
//    return createEntity(
//        $GLOBALS['tablesMap']['product'],
//        $fields
//    );
//}
//
///**
// * @param $tableName
// * @param $data
// * @return bool|mysqli_result
// */
//function createEntity($tableName, $data)
//{
//    global $connection;
//
//    foreach ($data as &$val) {
//        $val = mysqli_escape_string($connection, $val);
//    }
//
//    $cols = implode(',', array_keys($data));
//    $values = "'".implode("','", $data)."'";
//
//    return mysqli_query(
//        $connection,
//        "INSERT INTO $tableName ($cols) VALUES ($values);"
//    );
//}
//
///** Update entity */
//
///**
// * @param $id
// * @param $data
// * @return bool|mysqli_result
// */
//function updateCategory($id, $data)
//{
//    return updateEntity(
//        $GLOBALS['tablesMap']['category'],
//        $id,
//        $data
//    );
//}
//
//function updateProduct($id, $data)
//{
//    return updateEntity(
//        $GLOBALS['tablesMap']['product'],
//        $id,
//        $data
//    );
//}
//
///**
// * @param $tableName
// * @param $id
// * @param $data
// * @return bool|mysqli_result
// */
//function updateEntity($tableName, $id, $data)
//{
//    global $connection;
//
//    $values = [];
//
//    foreach ($data as $key => $val) {
//        $val = mysqli_escape_string($connection, $val);
//        $values[] = "$key = '$val'";
//    }
//
//    $values = implode(',', $values);
//
//    return mysqli_query(
//        $connection,
//        "UPDATE $tableName SET $values WHERE id = $id;"
//    );
//}
//
///** Delete entity */
//
///**
// * @param $id
// * @return bool|mysqli_result
// */
//function deleteCategory($id)
//{
//    return deleteEntity(
//        $GLOBALS['tablesMap']['category'],
//        $id
//    );
//}
//
//function deleteProduct($id)
//{
//    return deleteEntity(
//        $GLOBALS['tablesMap']['product'],
//        $id
//    );
//}
//
///**
// * @param $tableName
// * @param $id
// * @return bool|mysqli_result
// */
//function deleteEntity($tableName, $id)
//{
//    global $connection;
//
//    return mysqli_query(
//        $connection,
//        "DELETE FROM $tableName WHERE id = $id;"
//    );
//}
//
//function getCountItems($tableName)
//{
//    global $connection;
//
//    $product_count = "SELECT * FROM $tableName";
//    $find_count = mysqli_query($connection, $product_count);
//    $count = mysqli_num_rows($find_count);
//    return $count;
//}
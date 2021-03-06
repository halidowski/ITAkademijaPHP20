<?php

include "connection.php";

$db = new Database();
$connection = $db->getConnection();

$request_method = $_SERVER['REQUEST_METHOD'];

switch($request_method){

    case 'GET':

        if(!empty($_GET['id'])){

            $id = intval($_GET['id']);
            get_employees($id);

        }else{

            get_employees();
        }

    break;

    case 'POST':

        insert_employee();

    break;

    case 'PUT':

        $id = intval($_GET['id']);
        update_employees($id);

    break;

    case 'DELETE':

        $id = intval($_GET['id']);
        delete_employees($id);

    break;

    default :

        header("HTTP/1.0 405 Method Not Allowed");
    break;

}

function get_employees($id = 0){

    global $connection;
    $query = 'SELECT * FROM employees';

    if($id != 0){

        $query .= ' WHERE id=' . $id . ' LIMIT 1';

    }

    $response = array();
    $result = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($result)){
        $response[] = $row;
    }

    header('Content-Type: application/json');
    echo json_encode($response);

}

function insert_employee(){

    global $connection;

    $data = json_decode(file_get_contents('php://input'), true);
    $employee_name = $data['employee_name'];
    $employee_salary = $data['employee_salary'];
    $employee_age = $data['employee_age'];

    $query = "INSERT INTO employees SET name = '{$employee_name}', salary = '{$employee_salary}', age = '{$employee_age}'";

    if(mysqli_query($connection, $query)){

        $response = array(

            'status' => 1,
            'status_message' => 'Employee Added Successfully'
        );
    }else{

        $response = array(

            'status' => 2,
            'status_message' => 'Employee Addition Failed'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

function update_employee($id){

    global $connection;

    $data = json_decode(file_get_contents('php://input'), true);
    $employee_name = $data['employee_name'];
    $employee_salary = $data['employee_salary'];
    $employee_age = $data['employee_age'];

$query = "UPDATE emplayees SET name = '{$employee_name}', salary = '{$employee_salary}', age = '{$employee_age}' WHERE id = {$id}";

    if(mysqli_query($connection, $query)){

        $response = array(

            'status' => 1,
            'status_message' => 'Employee Updated Successfully'
        );
    }else{

        $response = array(

            'status' => 2,
            'status_message' => 'Employee Updated Failed'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

function delete_employee($id){

    global $connection;

    $query = "DELETE FROM employees WHERE id = {$id}";

    if(mysqli_query($connection, $query)){

        $response = array(

            'status' => 1,
            'status_message' => 'Employee Deleted Successfully'
        );
    }else{

        $response = array(

            'status' => 2,
            'status_message' => 'Employee Deletion Failed'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

?>
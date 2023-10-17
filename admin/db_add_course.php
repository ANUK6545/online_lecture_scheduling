<?php include '../dbcon.php' ; 

$data = $_REQUEST;

if ($data['function'] == 'add_course') {

    // $multiple_batches = substr($data['multiple_batches'],0, -1);

  echo  $query = " INSERT INTO  course ( course_name ,  level ,  description ,  multple_batches ) VALUES ('" . $data['course_name'] . "' ,'" . $data['level'] . "', '" . $data['description'] ."' , '" . $data['multiple_batches'] ."')";
    $result = mysqli_query($conn, $query);
    exit;
}
?>
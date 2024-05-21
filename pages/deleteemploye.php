<?php
require_once('./class/class.employee.php');

if(isset($_GET['ssn'])){
    $objEmployee = new Employee();
    $objEmployee->ssn = $_GET['ssn'];
    $objEmployee->Deleteemployee();

    echo "<script> alert('$objEmployee->message'); </script>";
    echo "<script>window.location = 'index.php?P=employeelist'</script>";
}
else{
echo '<script>window.history.back()</script>';
}

?>

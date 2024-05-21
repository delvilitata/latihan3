<?php
require_once ('./class/class.employee.php');
$objEmployee = new Employee();
if (isset($_POST['btnSubmit'])) {
    $objEmployee->ssn = $_POST['ssn'];
    $objEmployee->fname = $_POST['fname'];
    $objEmployee->address = $_POST['address'];

    if (isset($_GET['ssn'])) {
        $objEmployee->ssn = $_GET['ssn'];
        $objEmployee->UpdateEmployee();
    } else {
        $objEmployee->Addemployee();
    }
    echo "<script> alert('$objEmployee->message'); </script>";
    
    if ($objEmployee->hasil) {
        echo '<script> window.location ="index.php?p=employeelist" </script>';
    }
} else if (isset($_GET['ssn'])) {
    $objEmployee->ssn = $_GET['ssn'];
    $objEmployee->SelectOneemployee();
}

?>
<h4 class="title"><span class="text"><strong>Employee</strong></span></h4>
<form action="" method="post">
    <table class="table">
        <tr>
            <td>SSN</td>
            <td>:</td>
            <td><input type="text" class="form-control" name="ssn" value="<?php echo $objEmployee->ssn; ?>"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" class="form-control" ssn="fname" name="fname"
                    value="<?php echo $objEmployee->fname; ?>"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td>:</td>
            <td><textarea class="form-control" name="address" rows="3" cols="19">
<?php echo $objEmployee->address; ?></textarea></td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td><input type="submit" class="btn btn-success" value="Save" name="btnSubmit">
                <a href="index.php?p=employeelist" class="btn btn-warning">Cancel</a>
            </td>
        </tr>
    </table>
</form>
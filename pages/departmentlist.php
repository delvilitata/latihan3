<h4 class="=title">
    <span class="text">
        <strong>Department List</strong>
    </span>
</h4>
<a class="btn btn-primary" href="index.php?p=employee">Add</a>
<table class="table table-bordered">
    <tr>
        <th>dnumber</th>
        <th>dname</th>
        <th>mgr_ssn</th>
        <th>mgr_start_date</th>
    </tr>
    </h4>

    <?php
    require_once ('./class/class.department.php');
    $objDepartment = new Department();
    $arrayResult = $objDepartment->SelectAlldepartment();

    if (count($arrayResult) == 0) {
        echo '<tr><td colspan="5"> tidak ada data!</td></tr>';
    } else {
        $no = 1;
        foreach ($arrayResult as $datadepartment) {
            echo '<tr>';
            echo '<td>' . $no . '</td>';
            echo '<td>' . $datadepartment->dnumber . '</td>';
            echo '<td>' . $datadepartment->dname . '</td>';
            echo '<td>' . $datadepartment->mgr_ssn . '</td>';
            echo '<td>' . $datadepartment->mgr_start_date . '</td>';


            echo '<td>
            <a class="btn btn-warning"href="index.php?p=employee&ssn=' . $datadepartment->dnumber . '"> Edit </a>
            <a class="btn btn-danger"href="index.php?p=deleteemployee&ssn=' . $datadepartment->dnumber . '" 
             onclick="return confirm(\'apakah anda yakin ingin menghapus?\')">
             delete </a> </td>';
            
             echo'</tr>';
             $no++;
            
        }
    }
    ?>
</table>

  

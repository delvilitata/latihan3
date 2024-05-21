<h4 class="=title">
    <span class="text">
        <strong>Employee List</strong>
    </span>
</h4>
<a class="btn btn-primary" href="index.php?p=employee">Add</a>
<table class="table table-bordered">
    <tr>
        <th>No.</th>
        <th>SSN</th>
        <th>Name</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
    </h4>

    <?php
    require_once ('./class/class.employee.php');
    $objEmployee = new Employee();
    $arrayResult = $objEmployee->SelectAllemployee();

    if (count($arrayResult) == 0) {
        echo '<tr><td colspan="5"> tidak ada data!</td></tr>';
    } else {
        $no = 1;
        foreach ($arrayResult as $dataemployee) {
            echo '<tr>';
            echo '<td>' . $no . '</td>';
            echo '<td>' . $dataemployee->ssn . '</td>';
            echo '<td>' . $dataemployee->fname . '</td>';
            echo '<td>' . $dataemployee->address . '</td>';

            echo '<td>
            <a class="btn btn-warning"href="index.php?p=employee&ssn=' . $dataemployee->ssn . '"> Edit </a>
            <a class="btn btn-danger"href="index.php?p=deleteemployee&ssn=' . $dataemployee->ssn . '" 
             onclick="return confirm(\'apakah anda yakin ingin menghapus?\')">
             delete </a> </td>';
            
             echo'</tr>';
             $no++;
            
        }
    }
    ?>
</table>

  

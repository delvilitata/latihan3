<?php

class Employee extends Connection
{
    private $ssn = "";
    private $fname = "";
    private $address = "";

    public $hasil = false;
    public $message = "";

    public function __get($atribute)
    {
        if (property_exists($this, $atribute)) {
            return $this->$atribute;
        }
    }

    public function __set($atribute, $value)
    {
        if (property_exists($this, $atribute)) {
            $this->$atribute = $value;
        }
    }

    public function Addemployee()
    {
        $sql = "INSERT INTO employee (ssn, fname, address)
        VALUES ('$this->ssn', '$this->fname', '$this->address')";

        $this->hasil = mysqli_query($this->connection, $sql);

        if ($this->hasil)
            $this->message = 'Data berhasil ditambahkan!';
        else
            $this->message = 'Data gagal ditambahkan!';
    }

    public function Updateemployee()
    {
        $sql = "UPDATE employee
SET fname ='$this->address'
WHERE ssn = '$this->ssn'";
$this->hasil = mysqli_query($this->connection, $sql);

if($this->hasil)
$this->message ='Data berhasil diubah!';
else
$this->message='Data gagal diubah!';
    }

    public function Deleteemployee()
    {
 $sql = "DELETE FROM employee
WHERE ssn = '$this->ssn'";
$this->hasil = mysqli_query($this->connection, $sql);

if($this->hasil)
$this->message ='Data berhasil dihapus!';
else
$this->message='Data gagal dihapus!';
    }
    
    public function SelectAllemployee(){
    
            $sql = "SELECT * FROM employee";
            $result = mysqli_query($this->connection, $sql);
            $arrResult = Array();
            $count=0;
            if(mysqli_num_rows($result) > 0){
            
            while ($data = mysqli_fetch_array($result))
            {
            $objEmployee = new Employee();
            $objEmployee->ssn=$data['ssn'];
            $objEmployee->fname=$data['fname'];
            $objEmployee->address=$data['address'];
            $arrResult[$count] = $objEmployee;
            $count++;
            }
            
            }
            return $arrResult;
    }
    
    public function SelectOneemployee()
    {
        $sql = "SELECT * FROM employee WHERE ssn='$this->ssn'";
        $resultOne = mysqli_query($this->connection, $sql);

        if(mysqli_num_rows($resultOne) == 1){
            $this->hasil = true;
            $data = mysqli_fetch_assoc($resultOne);
            $this->fname = $data['fname'];
            $this->address=$data['address'];
        }
    }    
             
 
}
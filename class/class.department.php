<?php

class Department extends Connection
{
    private $dnumber = "";
    private $dname = "";

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

    function __construct(){
        parent:: __construct(); 
    }

    public function Adddepartment()
    {
        $sql = "INSERT INTO department (dnumber, dname)
        VALUES ($this->dnumber, '$this->dname')";

        $this->hasil = mysqli_query($this->connection, $sql);

        if ($this->hasil)
            $this->message = 'Data berhasil ditambahkan!';
        else
            $this->message = 'Data gagal ditambahkan!';
    }

    
    public function SelectAlldepartment(){
    
            $sql = "SELECT * FROM department";
            $result = mysqli_query($this->connection, $sql);

            $arrResult = Array();
            $count=0;
            if(mysqli_num_rows($result) > 0){
            while ($data = mysqli_fetch_array($result))
            {
            $objDepartment = new Department();
            $objDepartment->dnumber=$data['dnumber'];
            $objDepartment->dname=$data['dname'];
            $arrResult[$count] = $objDepartment;
            $count++;
            }
            
            }
            return $arrResult;
    }
    
    public function SelectOnedepartment()
    {
        $sql = "SELECT * FROM department WHERE dnumber= $this->dnumber";
        $resultOne = mysqli_query($this->connection, $sql);
        if(mysqli_num_rows($resultOne) == 1){
            $this->hasil = true;
            $data = mysqli_fetch_assoc($resultOne);
            $this->dnumber = $data['dnumber'];
            $this->dname = $data['dname'];
        }
    }    
             
 
}
<?php
class Model
{
	public $con="";
    public function __construct()
    {
        $this->con = new mysqli('localhost','root','','projectdb');
    }	

    public function selectall($table)
    {
        $sql = "SELECT * FROM $table";
        $q = $this->con->query($sql);
        while($fetch=$q->fetch_object())
        {
            $res[]=$fetch;
        }
        return $res;
    }

    public function insertdata($table,$data)
    {
        $dk = array_keys($data);
        $key = implode(",",$dk);

        $dv = array_values($data);
        $value = implode("','",$dv);



        $sql = "INSERT INTO $table ($key) values ('$value')";
        $q = $this->con->query($sql);
        //echo $sql;exit;
        return $q;
    }

    function select_where($table,$where)
    {
        $sql = "SELECT * FROM $table WHERE 1=1";
        $key = array_keys($where);
        $val = array_values($where);
        $i=0;
        foreach($where as $w)
        {
            $sql.= " AND $key[$i]= '$val[$i]' ";
            $i++;
        }
        //echo $sql;exit;
        $q = $this->con->query($sql);
        return $q;
    }


}
?>
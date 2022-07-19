<?php

class model
{
    public $con= "";
    public function __construct()
    {
        $this->con = new mysqli('localhost','root','','projectdb');
    }

    public function select_where($table,$where)
    {
      $sql = "SELECT * FROM $table where 1=1";
      $key = array_keys($where);
      $val = array_values($where);
      $i = 0;
      foreach($where as $w)
      {
        $sql.= " AND $key[$i]= '$val[$i]' ";
            $i++;
        }
        // echo $sql;exit;
        $q = $this->con->query($sql);
        return $q;
      
    }

    public function insertdata($table,$data)
    {
        $dk = array_keys($data);
        $key = implode(",",$dk);

        $dv = array_values($data);
        $value = implode("','",$dv);



        $sql = "INSERT INTO $table ($key) values ('$value')";
        $q = $this->con->query($sql);
        // echo $sql;exit;
        return $q;
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

    function join_two($table1,$table2,$on)
    {
        $sql = "select * from $table1 join $table2 on $on";
        //echo $sql;exit;
        $q = $this->con->query($sql);
        while($fetch = $q->fetch_object())
        {
            $res[]=$fetch;
        }
        return $res;
    }

    function delete_data($table,$where)
    {
        $key = array_keys($where);
        $val = array_values($where);

        $sql = "DELETE from $table where 1=1 ";
        $i=0;
        foreach($where as $w)
        {
            $sql.= " and $key[$i]='$val[$i]'";
            $i++;
        }
        //echo $sql;exit;
        $q = $this->con->query($sql);
        return $q;
    }

    function update_data($table,$data,$where)
    {
        //update register set name="",pass="" where id=65
        $sql = "UPDATE $table SET ";
        $dk = array_keys($data);
        $dv = array_values($data);

        $count = count($data);
        $i=0;
        foreach($data as $d)
        {
            if($count == $i+1)
            {
                $sql.= "$dk[$i] = '$dv[$i]'";
            }
            else
            {
               $sql.= "$dk[$i]='$dv[$i]',";
            }
            $i++;
        }
        $sql.= "  WHERE 1=1 ";
        $wk = array_keys($where);
        $wv = array_values($where);
        $j=0;
        foreach($where as $w)
        {
            $sql.= "AND $wk[$j]='$wv[$j]'";
            $j++;
        }
        //echo $sql;exit;
        $q = $this->con->query($sql);
        return $q;
    }
}



?>

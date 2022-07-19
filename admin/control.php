<?php
ob_start();
include_once 'model.php';
class adcontrol extends model
{
    public function __construct()
    {
        parent::__construct();
        $url = $_SERVER['PATH_INFO'];
        //echo $url;
        $country = $this->SelectAll('country');
        $category = $this->SelectAll('category');
        switch($url)
        {
            case '/index':
                        // include_once 'header.php';
                        // include_once 'sidebar.php';
                        // include_once 'footer.php';
                        if(isset($_POST['submit']))
                        {
                            $email = $_POST['email'];
                            $password = $_POST['password'];

                            $where = array('email'=>$email,'password'=>$password);
                            // print_r($where);exit;
                            $login = $this->select_where('admin',$where);
                            $res= $login->num_rows;
                            if($res>0)
                            {
                                echo "<script>alert('Login Successfull!')</script>";
                                header('location:user_details');
                            }
                            else
                            {
                                echo "<script>alert('Invalid Data!')</script>";
                            }
                        }
                        include_once 'login.php';
                        break;

            case '/user_details':
                        include_once 'header.php';
                        include_once 'sidebar.php';
                        $data = $this->join_two('register','country','register.country=country.cid');
                        include_once 'user_details.php';
                        include_once 'footer.php';

            case '/delete':
                        if(isset($_GET['delid']))
                        {
                            $delid = $_GET['delid'];
                            $where = array('r_id'=> $delid);
                            $this->delete_data('register',$where);
                            header('location:user_details');
                        }
                        break;

            case '/edit':
                        include_once 'header.php';
                        include_once 'sidebar.php';
                        if(isset($_GET['eid']))
                        {
                            $eid = $_GET['eid'];
                            $where = array('r_id'=>$eid);
                            $all_data = $this->select_where('register',$where);
                            $fetch_user = $all_data->fetch_object();

                            //update
                            if(isset($_POST['update']))
                            {
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $password = $_POST['password'];
                                $bio = $_POST['bio'];
                                $gender = $_POST['gender'];
                                $lan = $_POST['language'];
                                $l= implode(",",$lan);
                                $cou = $_POST['country'];

                                $data = array('name'=>$name,
                                            'email'=>$email,
                                            'password'=>$password,
                                            'bio'=>$bio,
                                            'gender'=>$gender,
                                            'language'=>$l,
                                            'country'=>$cou);
                                $update = $this->update_data('register',$data,$where);
                                
                                header('location:user_details');
                            }
                        }

                        include_once 'edit_users.php';
                        include_once 'footer.php';
                        break;

            case '/add_category':
                        include_once 'header.php';
                        include_once 'sidebar.php';
                        if(isset($_POST['submit']))
                        {
                            $cat = $_POST['category'];
                            $data = array('cat_name'=>$cat);
                            $add_cat = $this->insertdata('category',$data);
                            echo "<script>alert('Data Inserted');</script>";
                        }
                        include_once 'add_category.php';
                        include_once 'footer.php';
                        break;

            case '/view_category':
                        include_once 'header.php';
                        include_once 'sidebar.php'; 
                        $data = $this->selectall('category');
                        include_once 'view_category.php';
                        include_once 'footer.php';    
                        break;    
            
            case '/delete_category':
                if(isset($_GET['delid']))
                    {
                        $delid = $_GET['delid'];
                        $where = array('cat_id'=> $delid);
                        $this->delete_data('category',$where);
                        header('location:view_category');
                    }
                    break;

            case '/edit_category':
                        include_once 'header.php';
                        include_once 'sidebar.php'; 
                        if(isset($_GET['eid']))
                        {
                            $eid = $_GET['eid'];
                            $where = array('cat_id'=>$eid);
                            $c_data = $this->select_where('category',$where);
                            $fetch_c = $c_data->fetch_object();

                            if(isset($_POST['update']))
                            {
                                $category = $_POST['cat_name'];
                                $data = array('cat_name'=>$category);
                                $c_update = $this->update_data('category',$data,$where);
                                header('location:view_category');
                            }
                        }
                        include_once 'edit_category.php';
                        include_once 'footer.php';   
                        break; 
                    
            case '/add_product': 
                        include_once 'header.php';
                        include_once 'sidebar.php'; 
                        $all_cat=$this->selectall('category');
                        if(isset($_POST['submit']))
                        {
                            $cat = $_POST['category'];
                            $pro_name = $_POST['pro_name'];
                            $image = $_FILES['pimg']['name'];
                            $pro_price = $_POST['pro_price'];
                            move_uploaded_file($_FILES['pimg']['tmp_name'],"upload/".$_FILES['pimg']['name']);
                            $data = array('cat_id'=>$cat,
                                          'pro_name'=>$pro_name,
                                          'pro_image'=>$image,
                                          'pro_price'=>$pro_price);
                            $this->insertdata('product',$data);
                            echo "<script>alert('Data Inserted');</script>";
                        }
                        include_once 'add_product.php';
                        include_once 'footer.php';   
                        break; 
                        
            case '/view_product': 
                        include_once 'header.php';
                        include_once 'sidebar.php'; 
                        $data = $this->selectall('product');
                        include_once 'view_product.php';
                        include_once 'footer.php';   
                        break; 
                        
            case '/delete_product':
                        if(isset($_GET['delid']))
                        {
                            $delid = $_GET['delid'];
                            $where = array('pro_id'=>$delid);
                            $this->delete_data('product',$where);
                            header('location:view_product');
                        }
                        break; 

            case '/edit_product':
                    include_once 'header.php';
                    include_once 'sidebar.php'; 
                    $all_cat=$this->selectall('category');
                    if(isset($_GET['eid']))
                    {
                        $eid = $_GET['eid'];
                        $where = array('pro_id'=>$eid);
                        $p_data = $this->select_where('product',$where);
                        $fetch_p = $p_data->fetch_object();

                        //update
                        if(isset($_POST['update']))
                        {
                            $cat = $_POST['category'];
                            $pro_name = $_POST['pro_name'];
                            $pro_image = $_FILES['pimg']['name'];
                            $pro_price = $_POST['pro_price'];
                             move_uploaded_file($_FILES['pimg']['tmp_name'],"upload/".$_FILES['pimg']['name']);

                             $data = array('cat_id'=>$cat,
                                           'pro_name'=>$pro_name,
                                           'pro_image'=>$pro_image,
                                           'pro_price'=>$pro_price);
                            $p_update = $this->update_data('product',$data,$where);
                            header('location:view_product');
                            
                        }
                    }
                    include_once 'edit_product.php';
                    include_once 'footer.php';   


                        break;
        }
    }
}

$obj = new adcontrol;
ob_flush();
?>
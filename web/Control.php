<?php
ob_start();
include_once 'Model.php';
class MyControl extends Model
{
	public function __construct()
	{
		parent::__construct();
		$url = $_SERVER['PATH_INFO'];
		$menu = $this->selectall('category');
		session_start();
		// echo $url;
		switch($url)
		{
			case '/index':
				include_once 'header.php';
				//country select
				$country = $this->selectall('country');

				//insert data
				if(isset($_POST['submit']))
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

					 $this->insertdata('register',$data);
					//  echo 'inserted';
					 header('location:login');

				}
                include_once 'Register.php';
                include_once 'footer.php';
				break;

				case '/login':
							include_once 'header.php';

							//login
							if(isset($_POST['login']))
							{
								$email = $_POST['email'];
								$pass = $_POST['password'];

								$where= array('email'=>$email,
											  'password'=>$pass
											 );
								$result = $this->select_where("register",$where);
								$r= $result->num_rows;
								if($r>0)
								{
									setcookie("uname",$email,time()+40);
									setcookie("password",$pass,time()+40);
									$session_data = $result->fetch_object();
									$_SESSION['uid']=$session_data->r_id;
									$_SESSION['uname']=$session_data->name;	
									echo "<script>alert('Login Successfull!')</script>";
									header('location:home');
								}
								else
								{
									echo "<script>alert('Invalid Login!')</script>";
								}

							}
							include_once 'login.php';
							include_once 'footer.php';
							break;
				case '/home':
							if(isset($_SESSION['uid']))
							{
							include_once 'header.php';
							include_once 'home.php';
							include_once 'footer.php';
							}
							else
							{
								header('location:login');
							}
						break;
							break;
				case '/product':
							if(isset($_SESSION['uid']))
							{
								if(isset($_GET['cat_id']))
								{
									$catid= $_GET['cat_id'];
									$where = array('cat_id'=>$catid);
									$women = $this->select_where('product',$where);
									while($pro = $women->fetch_object())
									{
										$product_data[] = $pro;
									}
								}
							include_once 'header.php';
							include_once 'women_product.php';
							include_once 'footer.php';
							}
							else
							{
								header('location:login');
							}
							break;
				
				case '/logout':
							session_destroy();
							header('location:login');
							break;
							
				case '/men_product':
							if(isset($_SESSION['uid']))
							{
							include_once 'header.php';
							$product_data = $this->selectall('product');
							include_once 'men_product.php';
							include_once 'footer.php';
							}
							else
							{
							header('location:login');
							}
							break;
		}
	}
}
$obj = new Mycontrol;
ob_flush();
?>
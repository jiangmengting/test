<?php
$link=mysql_connect("localhost","root","root");
header("Content-type:text/html;charset=utf-8");
//addHeader();
/*function addHeader(){
	$header = 'Content-type: text/html; charset=utf-8';
	if(!in_array($header, headers_list())){
		header($header);
	}
}
*/
//$link=mysqli_connect("localhost", "root", "root", "db_user");
if($link)
{
  $select=mysql_select_db("db_user",$link);
  if($select)
  {
    if(isset($_POST["sub"]))
    {
      $name=$_POST["username"];
      $password=$_POST["password"];
      $str="select password from myuser where username="."'"."$name"."'";
      mysql_query('SET NAMES UTF8');20;      
      $result=mysql_query($str,$link);
      $pass=mysql_fetch_row($result);
      $pa=$pass[0];
      if($pa==$password)//判断密码与注册时密码是否一致
      {
        echo"登录成功！";
        echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."success.html"."\""."</script>";    
        }
      {  
        echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."登录失败！"."\"".")".";"."</script>";
        echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."login.html"."\""."</script>";  
    }   
  }
  }
}
?>

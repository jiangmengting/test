<?php
$link=mysql_connect("localhost","root","root");//链接数据库
header("Content-type:text/html;charset=utf-8");
if($link)
  {  
    //echo"链接数据库成功";
    $select=mysql_select_db("db_user",$link);//选择数据库
   if($select)
    {
      //echo"选择数据库成功！";
      if(isset($_POST["sub"]))
      {
        $name=$_POST["username"];
        $password=$_POST["password"];//获取表单数据
        $sql="insert into myuser(username,password) values('".$name."','".$password."')";
        mysql_query($sql,$link);
        mysql_query('SET NAMES UTF8');
        $close=mysql_close($link);
        if($close)
        {
         echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."regsuccess.html"."\""."</script>";    
        }
        }
        else
        {
          echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."register.html"."\""."</script>";    
        }
    }
  }
?>

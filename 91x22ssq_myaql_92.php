<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>双色球mysqli李，复活版版   

数据库动态随机，0是扩展种子，基数不变，

并用传值随机分裂随机</title>




<script src="jquery.min.js">
</script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("div").hide();
  });
  $("#show").click(function(){
    $("div").show();
  });
});
</script>


<body>




<h1 style=color:#888888>


双色球mysqli李，复活版版 <br>

数据库动态随机，0是扩展种子，基数不变，

并用传值随机分裂随机，<br>

数据库随机，......<br>

0=是扩展种子





</h1>


<h1  style=color:#888888>如果你点击“显示” 按钮，我将会出现。</h1>



<button id="show"  style="font-size:35px;


color:#FF0000"  >显示前区动态</button>


<h1  style=color:#888888>如果你点击“隐藏” 按钮，我将会消失。</h1>


<button id="hide"  style="font-size:35px;

color:#FF0000"  >隐藏前区动态</button>




<h1 style=color:#888888>


数据库动态随机，0是扩展种子，基数不变，

并用传值随机分裂随机，<br>

数据库随机，......<br>

0=是扩展种子



</h1>


<br><hr>

<a href="91x22ssq_myaql_92.php" style="font-size:35px;">开始动态控位</a>


<br><hr>





<div  style="display:none";>




<?php

/*
error_reporting(E_ALL^E_NOTICE^E_WARNING);     //php关闭错误报告

*/

echo "<h1  style=color:#FF0000>前区动态换位         
  
 </>";
 
 
$dbhost = 'localhost';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = '';          // mysql用户名密码
$con = mysqli_connect($dbhost, $dbuser, $dbpass);

if(! $con)
{
    die('Could not connect: ' . mysqli_error());
}
echo '数据库连接成功！6+关联1+关联0=';

 echo  "<br>";

if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
//"dltxuanhaoku"是库名
mysqli_select_db($con, "ssqxuanhaoku");

$kongwei=mt_rand(6,10);

$result = mysqli_query($con, "SELECT * FROM `ssqxh6`ORDER BY rand() LIMIT $kongwei");         // 'dltxh5' 是数据库表名称 


 $i=1;
 
 
 
// 关联数组
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
printf ("%s : %s",$row["xh6"],$row["占位用"]);
 
 


while($row = mysqli_fetch_array($result))
      
       {            

echo  "第".$i."=";                                 
  
  echo $row['xh6'] . " " ;      



  $i++;

   
   //$row['xh5']  xh5是数据库表中的列 名称 
   
       }

   echo "<h1 style=color:#FF0000>后区动态控位0=          
    </>";        



$kongwei2=mt_rand(2,2);


$result = mysqli_query($con, "SELECT * FROM `ssqxh1`   ORDER BY rand() LIMIT $kongwei2");            

//'dltxh2'是数据库表名


 $i=1;
 
 
// 关联数组
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
printf ("%s : %s",$row["xh1"],$row["占位用"]);
 
 

while($row = mysqli_fetch_array($result))
  {          
               

echo  "第".$i."=";            
                          
 echo    $row['xh1'] . " " ;   
                           


  $i++;

     }
        
      mysqli_close($con);





/*

例子举例说明以双色球为例

{//
ssqxuanhaoku是库名称


ssqxh6是表名称

//}


{//
$row['xh6']  xh6是数据库表中的列名称

一库，两表，一表一列，一表一列，一个列里面添加数字1_33,一个列里面添加数字1_16,一个列名xh6,一个列名xh1,注意是一表一列.数据类型int,
一个表建一个列，在列里面添加数据

insert添加，把数字写在value里保存即可


//}


*/

?>


</div>



</body>

</html>

  

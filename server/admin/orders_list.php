<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title></title>
</head>


<body>
<table border="1" width="586" id="rounded-corner" summary="2007 Major IT Companies' Profit">
  <thead>
    <tr>
      
      <th width="97" class="rounded" scope="col">姓名</th>
      <th width="97" class="rounded" scope="col">地址</th>
      <th width="158" class="rounded" scope="col">电话</th>
      <th width="97" class="rounded" scope="col">所订餐品</th>
     
      
    </tr>
  </thead>

  <tbody>
  
          <?php

include '../api/connf/conn.php';

$b_id = $_POST['b_id'];

$sql = "
	SELECT user_.u_name,u_address,u_phone,meal.m_name
	FROM orders
	JOIN user_
	ON orders.u_name = user_.u_name
	JOIN meal
	ON orders.m_id = meal.m_id
	JOIN business
	ON meal.b_id = business.b_id
	WHERE business.b_id = '$b_id'
	


";

$rs = mysql_query($sql,$conn);



 
while($row = mysql_fetch_row($rs)) 
	echo "
	
	<tr>
      
      <td>$row[0]</td>
      <td>$row[1]</td>
      <td>$row[2]</td>
      <td>$row[3]</td>
     
      
    </tr>
	
	
	
	
	
	
	
	";   //显示数据  
 

mysql_close($conn);
?>
    
   
  
   
    
  </tbody>
</table>
</body>
</html>








<?php
   include('config.php');
   
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <title>Search page in php</title>
   </head>
   <body>
      <form method="post" id="frm" name="frm" action="search.php">
         <table width="500" border="0">
            <tr>
               <td>Search page in php</td>
               <td>
                  <input type="text"  name="fullname" id="fullname"/>    
               </td>
            </tr>
            <tr>
               <td>
                  <input type="submit" name="Submit" value="Search" />   
               </td>
               <td>&nbsp;</td>
            </tr>
         </table>
      </form>
      <?php
         if($_REQUEST["Submit"]=="Search")
         
         {
         
           $sql="select * from employee where fullname like '%$_REQUEST[fullname]%' OR address like '%$_REQUEST[fullname]%' OR city like '%$_REQUEST[fullname]%' OR state like '%$_REQUEST[fullname]%' OR id='$_REQUEST[fullname]'";
         
           $sql_row=mysql_query($sql);
         
           $num=@mysql_num_rows($sql_row);
         
           if($num > 0)
         
         {
         
         ?>
 
   </body>
</html>
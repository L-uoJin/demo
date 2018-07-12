<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    
<div>
<?php 
    include_once 'top.php' ;
?>
</div>



<table width="1200" border="0" cellspacing="0" cellpadding="0" style="width:1200px;margin:0 auto;">
<tr><td width="335" align="left" valign="top">
    <?php
       include_once 'login.php';
    ?>
    </td>
     <td width="800"  align="left" valign="top">
    <!--    <?php 
        // include_once 'search.php';
        ?>-->
        <?php
        if(empty($_GET['page']))$_GET['page']='';
        switch ($_GET['page']) {
            case '':
                include_once 'nominate.php';
                break;
            case  "hyzx":include_once 'member.php' ;break;
            case "queryform": include_once 'queryform.php';break;
           
            //case 'hot' :include_once 'allhot.php';break;
         case 'shopcar':include_once 'myshopcar.php';break;
            case 'settle': include_once 'settle.php';break;
            default:
                 include_once 'nominate.php';
             //    include_once 'newhot.php';
         }
        ?>
    </td>
</tr>
</table> 


<?php 
    include_once 'bottom.php' ;
?>

</body>
</html>

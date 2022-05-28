<?php
$_SESSION['cart'] = "";
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_To_Cart']))
    {
        if (!isset($_SESSION['cart']))
            
        {
            $_SESSION['cart']=array();
            
           
        }
        $myitems=array_column($_SESSION['cart'],'Item_Name');
          if(in_array($_POST['Item_Name'],$myitems))
            {
              echo"<script>
                alert('Item Already Added');
              window.location.href='index1.php';
              </script>";    
            }
            else
            {
                $_SESSION ['cart'][]=array('Item_Name'=>$_POST['Item_Name'],'price'=>$_POST['price'],'Quantity'=>1);
                    
            }
        
       
            
            
        }
    }
              

?>
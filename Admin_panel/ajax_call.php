<?php
include_once "../Database/connect.php";
include_once "../Database/Database.php";
spl_autoload_register(function($class){
	include 'layout/Class/'.$class.'.php';
});
$db=new Database;
if(isset($_POST['quantity']) && isset($_POST['id']))
{
    $quantity=$_POST['quantity'];
    $id=$_POST['id'];
    $medicine_quantity=$db->select("medicine_list","id=$id")->fetch_assoc();
    $new_quantity=$medicine_quantity['quantity']+$quantity;
    $update=$db->update("medicine_list","quantity='$new_quantity'","id='$id'");
    if($update)
    {
      echo "true";
    }
    else
    {
      echo "false";
    }
}

if (isset($_POST['id']))
{
	$id=$_POST['id'];
	$medicine=$db->select("medicine_list","id=$id")->fetch_assoc();
	if($medicine)
	{
		$data=json_encode($medicine);
		echo $data;
	}
}


if (isset($_POST['ex_edit_id'])) 
{
    $id=$_POST['ex_edit_id'];
    $expanse_data=$db->select("expenses_list","id='$id'")->fetch_assoc();
    if ($expanse_data) 
    {
        $data=json_encode($expanse_data);
        echo $data;
    }
}
?>

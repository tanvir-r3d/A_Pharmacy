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


if(isset($_POST['ex_edit_id']))
{
    $id=$_POST['ex_edit_id'];
    $expanse_data=$db->select("expenses_list","id='$id'")->fetch_assoc();
    if($expanse_data)
    {
        $data=json_encode($expanse_data);
        echo $data;
    }
}


if(isset($_POST['update_ex']))
{
    $id=$_POST['update_ex'];
    $category=$_POST['category'];
    $amount=$_POST['amount'];

    $update_expanse=$db->update("expenses_list","category='$category',amount='$amount'","id='$id'");
    if($update_expanse)
    {
        echo "true";
    }
    else
    {
        echo "false";
    }
}

if(isset($_POST['category']) && isset($_POST['description']))
{
    $category=$_POST['category'];
    $description=$_POST['description'];

    $ex_category=$db->insert("expanse_category_list","category='$category',description='$description'");
    if($ex_category)
    {
        echo "true";
    }
    else
    {
        echo "false";
    }
}

if(isset($_POST['cat_id']))
{
    $id=$_POST['cat_id'];
    $category_data=$db->select("expanse_category_list","id='$id'")->fetch_assoc();
    if($category_data)
    {
        $data=json_encode($category_data);
        echo $data;
    }
}


if(isset($_POST['cat_edit_id']))
{
    $id=$_POST['cat_edit_id'];
    $category=$_POST['edit_category'];
    $description=$_POST['edit_description'];

    $update_cat_ex=$db->update("expanse_category_list","category='$category',description='$description'","id='$id'");
    if($update_cat_ex)
    {
        echo "true";
    }
    else
    {
        echo "false";
    }
}



?>

<?php
/**
 *
 */
class medicine
{
  private $db;
  function __construct()
  {
    $this->db=new Database;
  }

  public function add($data)
  {
    $medicine_name=$data['medicine_name'];
    $category=$data['category'];
    $purchase_price=$data['purchase_price'];
    $selling_price=$data['selling_price'];
    $store_box=$data['store_box'];
    $quantity=$data['quantity'];
    $genric_name=$data['genric_name'];
    $company=$data['company'];
    $effects=$data['effects'];
    $expire_date=$data['expire_date'];
    if (empty($medicine_name)||empty($category)||empty($purchase_price)||empty($selling_price)||empty($store_box)||empty($quantity)||empty($genric_name)||empty($company)||empty($effects)||empty($expire_date))
    {
      ?>
      <div class="alert bg-warning" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Empty Field Require <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
      <?php
    }
    else
    {
      $add=$this->db->insert("medicine_list"," medicine_name='$medicine_name', category='$category', purchase_price='$purchase_price', selling_price='$selling_price', store_box='$store_box', quantity='$quantity', genric_name='$genric_name', company='$company', effects='$effects', expire_date='$expire_date'");
      if ($add)
      {
        ?>
        <div class="alert bg-teal" role="alert"><em class="fas fa-check-circle">&nbsp;</em> Successfully added Medicine <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
        <?php
      }
    }
  }


  public function list()
  {
    $data=$this->db->select_all("medicine_list");
    if ($data)
    {
      return $data;
    }
  }

  public function delete($id)
  {
    $erase=$this->db->destroy("medicine_list","id='$id'");
    if ($erase)
    {
      ?>
      <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-danger">&nbsp;</em> Successfully Deleted <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
      <?php
    }
  }

  public function add_category($data)
  {
    $category=$data['category'];
    $description=$data['description'];
    if (empty($category)||empty($description))
    {
      ?>
      <div class="alert bg-warning" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Empty Field Require <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
      <?php
    }
    else
    {
        $add_category=$this->db->insert("category_list","category='$category',description='$description'");
        if ($add_category)
        {
        ?>
        <div class="alert bg-teal" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> Successfully Added Category <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
        <?php
        }
    }
  }

  public function show_category()
  {
    $category_data=$this->db->select_all("category_list");
    if ($category_data)
    {
      return $category_data;
    }
    else
    {
        echo "Something Went Wrong";
    }
  }

  public function category_delete($data)
  {
    $id=$data;
    $erase=$this->db->destroy("category_list","id='$id'");
    if ($erase)
    {
      ?>
      <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-danger">&nbsp;</em> Successfully Deleted <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
      <?php
    }
  }

  }
?>

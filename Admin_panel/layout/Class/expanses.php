<?php

class expanses
{
	private $db;
	function __construct()
	{
		$this->db=new Database;
	}

	public function add($data)
	{
		$category=$data['category'];
		$amount=$data['amount'];
		if(empty($category)||empty($amount))
		{
			?>
			<div class="alert bg-warning" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Empty Field Require <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
			<?php
		}
		else
		{
			 $add=$this->db->insert("expenses_list","category='$category', amount='$amount'");
			 if($add)
			 {
			 	?>
			 	<div class="alert bg-teal" role="alert"><em class="fas fa-check-circle">&nbsp;</em> Successfully added Expenses <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
			 	<?php
			 }
			 else
			 {
			 	?>
			 	<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-danger">&nbsp;</em> Data Not Inserted<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
			 	<?php
			 }
		}
	}


	public function list()
	{
		$data=$this->db->select_all("expenses_list");
		if($data)
		{
			return $data;
		}
		else
		{
			echo "Somethin Went Wrong";
		}
	}

	public function delete($id)
	{
		$delete=$this->db->destroy("expenses_list","id='$id'");
		if($delete)
		{
			?>
    <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-danger">&nbsp;</em> Data Deleted <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
    <?php
		}
	}

}
?>
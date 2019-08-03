<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<?php
$expanses=new expanses;
extract($_POST);
if(isset($_GET['cat_del_id']))
{
	$id=$_GET['cat_del_id'];
	$category_del=$expanses->cat_del($id);
}

?>

<tr>
	<td>
		<button style="margin-top:5px;" class="btn btn-md btn-primary" type="button" name="button" get_attr="<?=$data_fetch['id']?>" data-toggle="modal" data-target="#category_id">Add Category</button>
	</td>
</tr>


<form method="post">
	<div class="modal fade" id="category_id">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" name="button">x</button>
					<h4 class="modal-title"><i class="fa fa-edit"></i>Add Category</h4>
				</div>

				<div class="modal-body">

					<div class="form-group">
              			<label>Category</label>
              			<input class="form-control category" type="text" name="category">
            		</div>

					
					<div class="form-group">
              			<label>Description</label>
              			<input class="form-control description" type="text" name="description">
            		</div>


            		<button type="button"  name="submit" class="btn btn-primary submit">Submit Button</button>
				</div>
			</div>
		</div>
	</div>
</form>


	<table id="example" class="table table-striped table-bordered" style="width:100%; margin-top:10px;">
          <thead>
              <tr>
                  <th>SL. No</th>
                  <th>Category</th>
                  <th>Description</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
          	<?php
          	$data=$expanses->ex_category_list();
          	$i=0;
          	while($category_data_fetch=$data->fetch_assoc())
          	{
          		$i++;
          	?>
              <tr>
                  <td><?=$i?></td>
                  <td><?=$category_data_fetch['category']?></td>
                  <td><?=$category_data_fetch['description']?></td>
                  <td>
                    <a href="?page=expanse_category&&cat_del_id=<?=$category_data_fetch['id']?>"><button class="btn btn-danger btn-sm" type="button" name="delete">Delete</button></a>
                    <button class="btn btn-info btn-sm edit" type="button" name="button" get_attr="<?=$category_data_fetch['id']?>" data-toggle="modal" data-target="#cat_edit">Edit</button>
                  </td>
                  <?php

              }
              ?>
              </tr>
              </tbody>
      <tfoot>
               <tr>

              </tr>
      </tfoot>
</table>

</div>



<form method="post">
	<div class="modal fade" id="cat_edit">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" name="button">x</button>
					<h4 class="modal-title"><i class="fa fa-edit"></i>Edit Category</h4>
				</div>

				<div class="modal-body">
					<div class="form-group">
              			<label>Category</label>
              			<input class="form-control edit_category" type="text" name="category">
            		</div>

					
					<div class="form-group">
              			<label>Description</label>
              			<input class="form-control edit_description" type="text" name="description">
            		</div>

            		<div class="form-group">
              			<input class="form-control cat_id" type="hidden" name="id">
            		</div>


            		<button type="button"  name="update" class="btn btn-primary update">Update Button</button>
				</div>

			</div>
		</div>
	</div>
</form>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$(".submit").click(function(){
			var category=$(".category").val();
			var description=$(".description").val();

			$.ajax({
				url:'ajax_call.php',
				type:'post',
				data:{'category':category,'description':description},

				success:function(data){
					if(data=='true')
					{
						swal('Successfull!','Data Inserted', 'success');
					}
					else
					{
						swal('Opps!','Something Went Wrong', 'error');
					}

					setInterval(function(){location.reload()},1000);
				}
			});
		});
		$(document).on("click",".edit",function(){
			var cat_id=$(this).attr("get_attr");
			$(".cat_id").val(cat_id);

			$.ajax({
				url:'ajax_call.php',
				type:'post',
				dataType:'json',
				data:{'cat_id':cat_id},
				success:function(data){
					$(".edit_category").val(data.category);
          			$(".edit_description").val(data.description);
				}
			});
			$(".update").click(function(){
				var cat_edit_id=$(".cat_id").val();
				var edit_category=$(".edit_category").val();
				var edit_description=$(".edit_description").val();

				$.ajax({
					url:'ajax_call.php',
					type:'post',
					data:{'cat_edit_id':cat_edit_id,'edit_category':edit_category,'edit_description':edit_description},
					success:function(data){
						if(data=='true')
						{
							swal('Success!', 'Category Updated','success');
						}
						else
						{
							swal('Opps!', 'Something Went Wrong','error');
						}

						setInterval(function(){ location.reload()},1000);
					}
				});
			})
		});

	});
</script>







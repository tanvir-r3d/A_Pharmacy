<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<?php
$medicine=new medicine;
if (isset($_GET['del_id']))
{
  $id=$_GET['del_id'];
  $del=$medicine->category_delete($id);
}
?>
<button style="margin-top:10px;" type="button" class="btn btn-info" name="add_category" data-toggle="modal" data-target="#category">Add Category</button>
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
            $list=$medicine->show_category();
            $i=0;
            while($data_fetch=$list->fetch_assoc())
            {
              $i++;
            ?>
            <tr>
              <td><?=$i?></td>
              <td><?=$data_fetch['category']?></td>
              <td><?=$data_fetch['description']?></td>
              <td>
                <a href="?page=category_list&&del_id=<?=$data_fetch['id']?>"><button class="btn btn-danger btn-sm" type="button" name="delete">DELETE</button></a>
                <button class="btn btn-info btn-sm edit_category" get_attr="<?=$data_fetch['id']?>" type="button" name="edit" data-toggle="modal" data-target="#edit">EDIT</button>
              </td>
            </tr>
            <?php
            }
            ?>
            </tbody>
    <tfoot>
             <tr>

            </tr>
    </tfoot>
</table>

</div>

<!-- Add Machine -->
<div class="modal fade" id="category" >
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4 class="modal-title"><i class="fa fa-edit"></i>Add Category</h4>
    </div>

    <div class="modal-body">
      <form method="post">
        <div class="panel-body">
          <div class="col-md-6">

            <div class="form-group">
              <label>Category</label>
              <input class="form-control category" name="category">
            </div>

            <div class="form-group">
              <label>Description</label>
              <textarea name="description" class="description" rows="5" cols="50"></textarea>
            </div>
            <button  name="submit" type="button" class="btn btn-primary submit">Submit</button>

          </div>
        </div>
      </form>
    </div>

  </div>
</div>
</div>
<!-- Add Machine -->

<!-- Edit Machine -->
<div class="modal fade" id="edit">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h4 class="modal-title">Edit Category</h4>
      </div>

      <div class="modal-body">
        <form method="post">

            <div class="panel-body">
              <div class="col-md-6">

                <div class="form-group">
                  <label>Category</label>
                  <input class="form-control e_category"  name="e_category">
                </div>

                <div class="form-group">
                  <label>Description</label>
                  <textarea name="e_description" class="e_description" rows="5" cols="50"></textarea>
                </div>
                <input type="hidden" class="category_id" >
                <button type="button" class="btn btn-primary update">Update</button>

              </div>
            </div>

        </form>
      </div>

    </div>
  </div>
</div>
<!-- Edit Machine -->

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
          success:function(data)
          {
            if (data=="true")
            {
              swal('Successful!','Successfully category Added','success');
            }
            else
            {
              swal('Oops!','Something Went Wrong','error');
            }
            setInterval(function(){location.reload()},1000);
          }
        });
  });


  $(".edit_category").click(function(){
    var category_id=$(this).attr("get_attr");
    $(".category_id").val(category_id);
    $.ajax({
      url:'ajax_call.php',
      type:'post',
      dataType:'json',
      data:{'category_id':category_id},
      success:function(data)
      {
        $(".e_category").val(data.category);
        $(".e_description").val(data.description);
      }
    });
    $(".update").click(function(){
        var e_category=$(".e_category").val();
        var e_description=$(".e_description").val();
        $.ajax({
          url:'ajax_call.php',
          type:'post',
          data:{'category_id':category_id,'e_category':e_category,'e_description':e_description},
          success:function(data)
          {
            if (data=="true")
            {
              swal('Successful!','Successfully Category Updated','success');
            }
            else
            {
              swal('Oops!','Something Went Wrong','error');
            }
            setInterval(function(){location.reload()},1000);
          }
        });
    });

  });
  });
</script>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<?php
$expanses=new expanses;
extract($_POST);
if(isset($_GET['del_id']))
{
  $id=$_GET['del_id'];
  $del= $expanses->delete($id);
}

?>


  <a href="?page=add_expanse"><button style="margin-top:5px;" type="button" class="btn btn-md btn-primary">Add Expanses</button></a>
  <table id="example" class="table table-striped table-bordered" style="width:100%; margin-top:10px;">
          <thead>
              <tr>
                  <th>SL. No</th>
                  <th>Category</th>
                  <th>Amount</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
            <?php
            $data=$expanses->list();
            $i=0;
            while ($data_fetch=$data->fetch_assoc())
            {
              $i++;
            ?>
              <tr>
                  <td><?=$i?></td>
                  <td><?=$data_fetch['category']?></td>
                  <td><?=$data_fetch['amount']?></td>
                  <td>
                    <a href="?page=expanse_list&&del_id=<?=$data_fetch['id']?>"><button class="btn btn-danger btn-sm" type="button" name="delete">Delete</button></a>
                    <button class="btn btn-info btn-sm edit" type="button" name="button" get_attr="<?=$data_fetch['id']?>" data-toggle="modal" data-target="#edit">Edit</button>
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
<div class="fade modal" id="edit">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" name="button">x</button>
        <h4 class="model-title"><i class="fa fa-edit"></i>Edit Expanse</h4>
      </div>

      <div class="modal-body">
        

          <div class="form-group">
            <label>Category</label>
            <select name="category" class="form-control category">
              <option value="aqua">Aqua</option>
              <option value="tissue">Tissue</option>
              <option value="travel">Travel</option>
              <option value="salary">Salary</option>
              <option value="utolity">Utility</option>
              <option value="fuel">Fuel</option>
              <option value="gasolina">Gasolina</option>
            </select>
          </div>


          <div class="form-group">
              <label>Amount</label>
              <input class="form-control amount" type="number" name="amount" value="">
            </div>


          <div class="form-group">
              <input class="form-control ex_edit_id" type="hidden" name="id">
            </div>

            <button  name="update" class="btn btn-primary update">Update</button>

      </div>

    </div>
    
  </div>
</div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(document).on("click",".edit",function(){
      var ex_edit_id=$(this).attr("get_attr");
      $(".ex_edit_id").val(ex_edit_id);

    $.ajax({
      url:'ajax_call.php',
      type:'post',
      dataType:'json',
      data:{'ex_edit_id':ex_edit_id},
      success:function(data)
      {
        // alert(data);
        $(".category").val(data.category);
        $(".amount").val(data.amount);
      }
    });
    });
  });
</script>
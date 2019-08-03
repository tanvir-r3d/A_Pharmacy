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

<!-- Edit Machine -->
<form method="post">
  <div class="modal fade" id="edit">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" name="button">x</button>
          <h4 class="modal-title"><i class="fa fa-edit"></i>Edit Expanse</h4>
        </div>

        <div class="modal-body">
          
          <div class="form-group">
            <label>Category</label>
            <select name="category" class="form-control category">
              <?php
              $category=$expanses->ex_category_list();
              while($category_fetch=$category->fetch_assoc())
              {
                ?>
                <option value="<?=$category_fetch['category']?>"><?=$category_fetch['category']?></option>
                <?php
              }

              ?>
            </select>
          </div>

          <div class="form-group">
              <label>Amount</label>
              <input class="form-control amount" type="number" name="amount">
            </div>


           <div class="form-group">
              <input class="form-control ex_edit_id" type="hidden" name="id">
            </div> 


            <button type="button"  name="update" class="btn btn-primary update">Update Button</button>

        </div>

      </div>
    </div>
  </div>
</form>

<!-- Edit id show -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
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
          $(".category").val(data.category);
          $(".amount").val(data.amount);
        }
      });

      $(".update").click(function(){
        var update_ex=$(".ex_edit_id").val();
        var category=$(".category").val();
        var amount=$(".amount").val();

        $.ajax({
          url:'ajax_call.php',
          type:'post',
          data:{'update_ex':update_ex,'category':category,'amount':amount},

          success:function(data){

            if(data=='true')
            {
              swal('Success!', 'Expanse Updated', 'success');
            }
            else
            {
              swal('Opps!', 'Somehing Went Wrong', 'error');
            }

            setInterval(function(){ location.reload()},1000);
          }
        });
      });
    });
  });
</script>
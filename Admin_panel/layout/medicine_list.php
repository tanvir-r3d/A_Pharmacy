<?php
$medicine=new medicine;
extract($_POST);
if (isset($_GET['del_id']))
{
  $erase= $medicine->delete($_GET['del_id']);
  if ($erase)
  {
    ?>
    <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Welcome to the admin dashboard panel bootstrap template <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
    <?php
  }
}
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <a href="?page=add_medicine"><button style="margin-top:5px;" type="button" class="btn btn-md btn-primary">Add Medicine</button></a>
  <table id="example" class="table table-striped table-bordered" style="width:100%; margin-top:10px;">
          <thead>
              <tr>
                  <th>SL. No</th>
                  <th>Medicine Name</th>
                  <th>Category</th>
                  <th>Purchase Price</th>
                  <th>Selling Price</th>
                  <th>Store Box</th>
                  <th>Qunatity</th>
                  <th>Genric Name</th>
                  <th>Company</th>
                  <th>Effects</th>
                  <th>Expire Date</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
            <?php
            $data=$medicine->list();
            $i=0;
            while ($data_fetch=$data->fetch_assoc())
            {
              $i++;
            ?>
              <tr>
                  <td><?=$i?></td>
                  <td><?=$data_fetch['medicine_name']?></td>
                  <td><?=$data_fetch['category']?></td>
                  <td><?=$data_fetch['purchase_price']?></td>
                  <td><?=$data_fetch['selling_price']?></td>
                  <td><?=$data_fetch['store_box']?></td>
                  <td><?php
                  if ($data_fetch['quantity']<1)
                  {
                  ?>
                  <button type="button" class="btn btn-danger btn-xs">Stock Out</button>
                  <button type="button" class="btn btn-info btn-xs btn_width load no-print" get_attr="<?=$data_fetch['id']?>" data-toggle="modal" data-target="#demo"> Load</button>
                  <?php
                  }
                  else
                  {
                  echo $data_fetch['quantity'];
                  ?>

                  <button type="button" class="btn btn-info btn-xs btn_width load no-print" get_attr="<?=$data_fetch['id']?>" data-toggle="modal" data-target="#demo"> Load</button>
                  <?php
                  }
                  ?></td>
                  <td><?=$data_fetch['genric_name']?></td>
                  <td><?=$data_fetch['company']?></td>
                  <td><?=$data_fetch['effects']?></td>
                  <td><?=$data_fetch['expire_date']?></td>
                  <td>
                    <a href="?page=medicine_list&&del_id=<?=$data_fetch['id']?>"><button class="btn btn-danger btn-sm" type="button" name="delete">Delete</button></a>
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
<?php
// if (isset($_POST['submit']))
// {
//   $medicine->add_qty($qty,$id);
// }
 ?>
 <!-- Load Medicine -->
 <form role="form" method="post" enctype="multipart/form-data">
 <div class="modal fade" id="demo">
   <div class="modal-dialog">
     <div class="modal-content">

       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         <h4 class="modal-title"><i class="fa fa-edit"></i>  Load Medicine</h4>
       </div>

       <div class="modal-body">
         <div class="form-group">
           <label> Add Quantity</label>
           <input type="number" class="form-control qty" name="qty">
         </div>
         <input type="hidden" name="id" class="load_id">
         <button type="button" name="submit" class="btn btn-info new_add"> Submit</button>
       </div>

     </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
 </form>
 </div>

<!-- Edit Machine -->
<form method="post">
  <div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" name="button">x</button>
            <h4 class="modal-title"><i class="fa fa-edit"></i>Edit Medicine</h4>
          </div>

          <div class="modal-body">
            <div class="form-group">

              <div class="form-group">


                <label>Medicine Name</label>
                <input class="form-control medicine_name" name="medicine_name" value="">
              </div>

                <div class="form-group">
                  <label>Category</label>
                  <select  name="category" class="form-control category">
                    <option value="injection">Injection</option>
                    <option value="tablet">Tablet</option>
                    <option value="capsule">Capsule</option>
                    <option value="syrup">Syrup</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Purchase Price</label>
                  <input class="form-control purchase_price" type="number" name="purchase_price" value="">
                </div>

                <div class="form-group">
                  <label>Selling Price</label>
                  <input class="form-control selling_price" type="number" name="selling_price" value="">
                </div>

                <div class="form-group">
                  <label>Store Box</label>
                  <input class="form-control store_box" value="" name="store_box">
                </div>

                <div class="form-group">
                  <label>Quantity</label>
                  <input class="form-control quantity" value="" type="number" name="quantity">
                </div>

                <div class="form-group">
                  <label>Genric Name</label>
                  <input class="form-control genric_name" value="" name="genric_name">
                </div>

                <div class="form-group">
                  <label>Company</label>
                  <input class="form-control company" value="" name="company">
                </div>

                <div class="form-group">
                  <label>Effects</label>
                  <input class="form-control effects" value="" name="effects">
                </div>

                <div class="form-group">
                  <label>Expire Date</label>
                  <input class="form-control expire_date" type="date" value="" name="expire_date">
                </div>

                <input type="hidden" class="edit_id" value="">
                <button  name="update" type="button" class="btn btn-primary update">Update</button>

            </div>
          </div>
        </div>
    </div>
  </div>
</form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
 <script type="text/javascript">
     $(document).ready(function(){
        $(document).on("click",".load",function(){
              var id=$(this).attr("get_attr");

              $(".load_id").val(id);
        });

        $(".new_add").click(function(){
            var quantity=$(".qty").val();
            var id=$(".load_id").val();
            $.ajax({
                url:'ajax_call.php',
                type:'post',
                data:{'quantity':quantity,'id':id},
                success:function(data){

                  if(data=='true')
                  {
                    $(".qty").val('');
                    swal("Success!", "Quantity Updated", "success");

                  }
                  else
                  {
                      swal("Opps!", "Something Went Wrong", "error");
                  }

                  setInterval(function(){ location.reload()}, 3000);

                }

            });
        });
     });
 </script>
 <!-- Load Medicine -->

<!-- Edit Machine -->
<script type="text/javascript">
 $(document).ready(function(){

   $(document).on("click",".edit",function(){
     var id=$(this).attr("get_attr");

        $(".edit_id").val(id);
     $.ajax({
       url:'ajax_call.php',
       type:'post',
       dataType:'json',
       data:{'id':id},
       success:function(medicine)
       {
         $(".medicine_name").val(medicine.medicine_name);
         $(".category").val(medicine.category);
         $(".purchase_price").val(medicine.purchase_price);
         $(".selling_price").val(medicine.selling_price);
         $(".store_box").val(medicine.store_box);
         $(".quantity").val(medicine.quantity);
         $(".genric_name").val(medicine.genric_name);
         $(".company").val(medicine.company);
         $(".effects").val(medicine.effects);
         $(".expire_date").val(medicine.expire_date);
       }
     });

      $(".update").click(function(){
       var edit_id=$(".edit_id").val();
       var medicine_name=$(".medicine_name").val();
       var category=$(".category").val();
       var purchase_price=$(".purchase_price").val();
       var selling_price=$(".selling_price").val();
       var store_box=$(".store_box").val();
       var quantity=$(".quantity").val();
       var genric_name=$(".genric_name").val();
       var company=$(".company").val();
       var effects=$(".effects").val();
       var expire_date=$(".expire_date").val();
       $.ajax({
         url:'ajax_call.php',
         type:'post',
         data:{'edit_id':edit_id,'medicine_name':medicine_name,'category':category,'purchase_price':purchase_price,'selling_price':selling_price,'store_box':store_box,'quantity':quantity,'genric_name':genric_name,'company':company,'effects':effects,'expire_date':expire_date},

         success:function(data){

           if(data=='true')
           {
             $(".qty").val('');
             swal("Success!", "Quantity Updated", "success");

           }
           else
           {
               swal("Opps!", "Something Went Wrong", "error");
           }

           setInterval(function(){ location.reload()}, 1000);

         }


       });
     });
     });

 });
</script>

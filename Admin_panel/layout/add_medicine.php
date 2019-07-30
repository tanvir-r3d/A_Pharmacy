  <div class="panel panel-default" style="max-width:800px;">
<?php
if(isset($_POST['submit']))
{
  $medicine=new medicine;
  $add_med=$medicine->add($_POST);
  if ($add_med)
  {
    ?>
    <div class="alert bg-teal" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Succefully Added Medicine<a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
    <?php
  }
}
?>

    <div class="panel-heading">Add Medicine</div>
    <div class="panel-body">
      <div class="col-md-6">
        <form role="form" method="post">

          <div class="form-group">
            <label>Medicine Name</label>
            <input class="form-control" name="medicine_name">
          </div>

            <div class="form-group">
              <label>Category</label>
              <select  name="category" class="form-control">
                <option value="injection">Injection</option>
                <option value="tablet">Tablet</option>
                <option value="capsule">Capsule</option>
                <option value="syrup">Syrup</option>
              </select>
            </div>

            <div class="form-group">
              <label>Purchase Price</label>
              <input class="form-control" type="number" name="purchase_price">
            </div>

            <div class="form-group">
              <label>Selling Price</label>
              <input class="form-control" type="number" name="selling_price">
            </div>

            <div class="form-group">
              <label>Store Box</label>
              <input class="form-control" name="store_box">
            </div>

            <div class="form-group">
              <label>Quantity</label>
              <input class="form-control" type="number" name="quantity">
            </div>

            <div class="form-group">
              <label>Genric Name</label>
              <input class="form-control" name="genric_name">
            </div>

            <div class="form-group">
              <label>Company</label>
              <input class="form-control" name="company">
            </div>

            <div class="form-group">
              <label>Effects</label>
              <input class="form-control" name="effects">
            </div>

            <div class="form-group">
              <label>Expire Date</label>
              <input class="form-control" type="date" name="expire_date">
            </div>

            <button  name="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-default">Reset</button>
          </div>
        </form>
      </div>
    </div>

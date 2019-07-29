<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="panel panel-default">

<?php
if(isset($_POST['submit']))
{
  $expenses=new expenses;
  $add_ex=$expenses->add($_POST);
  if($add_ex)
  {
    ?>
    <div class="alert bg-teal" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Welcome to the admin dashboard panel bootstrap template <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
    <?php
  }
}

?>

  	<div class="panel-heading">Add Medicine</div>
    <div class="panel-body">
      <div class="col-md-6">
        <form role="form" method="post">

          <div class="form-group">
            <label>Category</label>
            <select name="category" class="form-control">
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
              <input class="form-control" type="number" name="amount">
            </div>


            <button  name="submit" class="btn btn-primary">Submit Button</button>
            <button type="reset" class="btn btn-default">Reset Button</button>
          </div>
        </form>
      </div>
    </div>

 </div>
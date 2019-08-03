<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<?php
if (isset($_POST['submit']))
{
  $medicine=new medicine;
  $medicine->add_category($_POST);
}
?>
<div class="panel panel-default" style="max-width:800px;">

<form method="post">

  <div class="panel-heading">Add Category</div>
    <div class="panel-body">
      <div class="col-md-6">

        <div class="form-group">
          <label>Category</label>
          <input class="form-control" name="category">
        </div>

        <div class="form-group">
          <label>Description</label>
          <textarea name="description" rows="5" cols="50"></textarea>
        </div>
        <button  name="submit" class="btn btn-primary">Submit</button>

      </div>
    </div>

</form>
</div>
</div>

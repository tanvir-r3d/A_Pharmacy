<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
  <div class="profile-sidebar">
    <div class="profile-userpic">
      <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
    </div>
    <div class="profile-usertitle">
      <div class="profile-usertitle-name">Username</div>
      <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="divider"></div>
  <form role="search">
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Search">
    </div>
  </form>
  <ul class="nav menu">

    <li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>

    <li><a href="?page=pos"><i class="far fa-money-bill-alt">&nbsp;</i>POS</a></li>

    <li class="parent "><a data-toggle="collapse" href="#medicine">
      <em class="fa fa-navicon">&nbsp;</em> Medicine <span data-toggle="collapse" href="#medicine" class="icon pull-right"><em class="fa fa-plus"></em></span>
      </a>
      <ul class="children collapse" id="medicine">
        <li><a class="" href="?page=add_medicine">
          <span><i class="fas fa-plus-circle">&nbsp;</i></span> Add Medicine
        </a></li>
        <li><a class="" href="?page=medicine_list">
          <span><i class="fas fa-pills">&nbsp;</i></span> Medicine List
        </a></li>
        <li><a class="" href="?page=add_category">
          <span><i class="fas fa-plus-circle">&nbsp;</i></span> Add Category
        </a></li>
        <li><a class="" href="?page=category_list">
          <span><i class="far fa-calendar-plus">&nbsp;</i></span> Category List
        </a></li>
      </ul>
    </li>

    <li><a href="?page=clients"><i class="fas fa-users">&nbsp;</i>Clients</a></li>

    <li><a href="?page=payment"><i class="far fa-list-alt">&nbsp;</i>All Sales</a></li>

    <li class="parent "><a data-toggle="collapse" href="#expanses">
      <em class="fa fa-navicon">&nbsp;</em> Expanses <span data-toggle="collapse" href="#expanses" class="icon pull-right"><em class="fa fa-plus"></em></span>
      </a>
      <ul class="children collapse" id="expanses">
        <li><a class="" href="?page=add_expanse">
          <span><i class="fas fa-plus-circle">&nbsp;</i></span> Add Expanse
        </a></li>
        <li><a class="" href="?page=expanse_list">
          <span><i class="fas fa-dollar-sign">&nbsp;</i></span> Expanse List
        </a></li>
        <li><a class="" href="?page=expanse_category">
          <span><i class="far fa-list-alt">&nbsp;</i></span> Expanse Category
        </a></li>
      </ul>
    </li>

    <li><a href="?page=report"><i class="fas fa-poll-h">&nbsp;</i>Reporting</a></li>

    <li><a href="?page=staff"><i class="fas fa-user-friends">&nbsp;</i>Staff</a></li>

    <li><a href="?page=settings"><i class="fas fa-users-cog">&nbsp;</i>Settings</a></li>

    <li><a href="?page=profile"><i class="fas fa-user-circle">&nbsp;</i>Profile</a></li>

    <li><a href="?page=widgets"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>

    <li><a href="?page=charts"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>

    <li><a href="?page=elements"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>

    <li><a href="?page=panels"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>

    <li class="parent "><a data-toggle="collapse" href="#sub-item-1">

      <em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
      </a>

      <ul class="children collapse" id="sub-item-1">
        <li><a class="" href="#">
          <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
        </a></li>
        <li><a class="" href="#">
          <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
        </a></li>
        <li><a class="" href="#">
          <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
        </a></li>
      </ul>

    </li>

    <li><a href="../Login_panel/login.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

  </ul>

</div>

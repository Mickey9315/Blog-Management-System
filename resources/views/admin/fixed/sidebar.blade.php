<div class="sidebar-menu sticky-sidebar-menu">

<!-- logo start -->
<div class="logo">
  <h1><a href="index.html">BMS</a></h1>
</div>

<div class="logo-icon text-center">
  <a href="index.html" title="logo"><img src="{{url('Backend/assets/images/logo.png')}}" alt="logo-icon"> </a>
</div>
<!-- //logo end -->

<div class="sidebar-menu-inner">

  <!-- sidebar nav start -->
  <ul class="nav nav-pills nav-stacked custom-nav">
    <li class="active"><a href="{{route('dashboard')}}"><i class="fa fa-tachometer"></i><span> Dashboard</span></a>
    </li>
    <li class="menu-list">
      <a href="#"><i class="fa fa-cogs"></i>
        <span>Posts<i class="lnr lnr-chevron-right"></i></span></a>
      <ul class="sub-menu-list">
          <li><a href="{{route('post.list')}}">Manage Posts</a> </li>
          <li><a href="{{route('post.create')}}">Add Post</a> </li>  
      </ul>
    </li>
    <li class="menu-list">
      <a href="#"><i class="fa fa-cogs"></i>
        <span>Categories<i class="lnr lnr-chevron-right"></i></span></a>
      <ul class="sub-menu-list">
          <li><a href="{{route('category.list')}}">Manage Category</a> </li>
          <li><a href="{{route('createCategory')}}">Add Category</a> </li>  
      </ul>
    </li>
    <li><a href="blocks.html"><i class="fa fa-th"></i> <span>Comments</span></a></li>
    <li><a href="forms.html"><i class="fa fa-file-text"></i> <span>User</span></a></li>
  </ul>
  <!-- //sidebar nav end -->
  <!-- toggle button start -->
  <a class="toggle-btn">
    <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
    <i class="fa fa-angle-double-right menu-collapsed__right"></i>
  </a>
  <!-- //toggle button end -->
</div>
</div>
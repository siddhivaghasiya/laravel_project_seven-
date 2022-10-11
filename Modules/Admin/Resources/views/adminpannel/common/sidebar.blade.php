  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Blog Management</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('blog.index')}}">Blog</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('categories.index')}}">Categories</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('tags.index')}}">Tags</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Common-Modules" aria-expanded="false" aria-controls="form-elements">
          <i class="icon-columns menu-icon"></i>
          <span class="menu-title">Common Modules</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Common-Modules">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="">Banner</a></li>
            <li class="nav-item"> <a class="nav-link" href="">Email Template</a></li>
            <li class="nav-item"> <a class="nav-link" href="">Social Media</a></li>
            <li class="nav-item"> <a class="nav-link" href="">Contact Us</a></li>
            <li class="nav-item"> <a class="nav-link" href="">NewsLetter</a></li>
          </ul>
        </div>
      </li>



    </ul>
  </nav>
  <!-- partial -->

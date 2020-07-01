<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{ route('index') }}">Skyshop</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ route('index') }}">SS</a>
    </div>
    <ul class="sidebar-menu">
      <li class="nav-item active">
        <a href="{{ route('admin.index') }}" class="nav-link"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
      </li>
      <li class="nav-item dropdown">
        <a href="{{ route('admin.product') }}" class="nav-link has-dropdown"><i class="fas fa-dolly-flatbed"></i><span>Products</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('admin.product') }}">Product Lists</a></li>
          <li><a class="nav-link" href="index.html">Add Product</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link"><i class="fas fa-tags"></i><span>Categories</span></a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link"><i class="fas fa-comment-alt"></i><span>Discussion</span></a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link"><i class="far fa-thumbs-up"></i><span>Review</span></a>
      </li>
      <li class="menu-header">Website Settings</li>
      <li class="nav-item">
        <a href="#" class="nav-link"><i class="fas fa-bullhorn"></i><span>Announcement</span></a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link"><i class="fas fa-images"></i><span>Slideshow</span></a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Offer</span></a>
      </li>
    </ul>
  </aside>
</div>
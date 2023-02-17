<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    </ul>
  </form>
</nav>
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{ route('dashboard') }}">Lelang Juara</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ route('dashboard') }}">LJ</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="dropdown {{ (request()->is('dashboard')) ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      </li>
      <li class="dropdown {{ (request()->is('dashboard/auction')) ? 'active' : '' }}">
        <a href="#" class="nav-link"><i class="fas fa-bullhorn"></i></i><span>Auctions</span></a>
      </li>
      <li class="dropdown {{ (request()->is('dashboard/produk')) ? 'active' : '' }}">
        <a href="#" class="nav-link"><i class="fas fa-luggage-cart"></i><span>Products</span></a>
      </li>
      <li class="menu-header">Database Master</li>
      <li class="dropdown {{ (request()->is('dashboard/users')) ? 'active' : '' }}">
        <a href="{{ route('users.index') }}" class="nav-link"><i class="fas fa-users"></i><span>User</span></a>
      </li>
      <li class="dropdown {{ (request()->is('dashboard/roles')) ? 'active' : '' }}">
        <a href="{{ route('roles.index') }}" class="nav-link"><i class="fas fa-user-tag"></i><span>Roles</span></a>
      </li>
      <li class="dropdown {{ (request()->is('dashboard/#')) ? 'active' : '' }}">
        <a href="#" class="nav-link"><i class="fas fa-tags"></i><span>Categories</span></a>
      </li>
      @can('read menu')
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-columns"></i><span>Pages</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link " href="utilities-contact.html">Produk</a></li>
          <li><a class="nav-link {{ (request()->is('dashboard/event')) ? 'active' : '' }}" href="utilities-invoice.html">Event</a></li>
          <li><a class="nav-link {{ (request()->is('dashboard/roles')) ? 'text-primary' : '' }}" href="{{ route('roles.index') }}">Roles</a></li>
        </ul>
      </li>          
      @endcan
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
      <form action="{{ route('logout') }}" method="post">
        @csrf
        <button class="btn btn-primary btn-lg btn-block btn-icon-split" type="submit">
          <i class="fas fa-rocket"></i> Logout
        </button>
      </form>
    </div>        
  </aside>
</div>

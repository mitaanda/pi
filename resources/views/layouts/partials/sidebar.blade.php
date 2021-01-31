<!-- BEGIN: Sidebar Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('landingpage') }}">
              <div class="brand-logo"></div>
              <h2 class="brand-text mb-0">PPLP/D</h2>
          </a></li>
  </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item {{ request()->is('dashboard') ? 'active' : '' }}"><a href="{{ route('home') }}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
          </li>
          <li class=" navigation-header"><span>PUSAT DATA</span>
          </li>
          <li class=" nav-item"><a href="#"><i class="feather icon-list"></i><span class="menu-title" data-i18n="User">PPLP</span></a>
            <ul class="menu-content">
                <li class="{{ request()->is('pplp/atlet') || request()->is('pplp/atlet/tambah') || request()->is('pplp/atlet/edit') || request()->is('pplp/atlet/show') || request()->is('pplp/atlet/kejuaraan/tambah') || request()->is('pplp/atlet/kejuaraan/edit') ? 'active' : '' }}"><a href="{{ route('pplp.atlet.index') }}"><i class="feather icon-users"></i><span class="menu-item" data-i18n="List">Atlet</span></a>
                </li>
                <li class="{{ request()->is('pplp/pelatih') || request()->is('pplp/pelatih/tambah') || request()->is('pplp/pelatih/edit') || request()->is('pplp/pelatih/show') ? 'active' : '' }}"><a href="{{ route('pplp.pelatih.index') }}"><i class="feather icon-user"></i><span class="menu-item" data-i18n="Edit">Pelatih</span></a>
                </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="feather icon-list"></i><span class="menu-title" data-i18n="User">PPLPD</span></a>
            <ul class="menu-content">
                <li class="{{ request()->is('pplpd/atlet') || request()->is('pplpd/atlet/tambah') || request()->is('pplpd/atlet/edit') || request()->is('pplpd/atlet/show') || request()->is('pplpd/atlet/kejuaraan/tambah') || request()->is('pplpd/atlet/kejuaraan/edit') ? 'active' : '' }}"><a href="{{ route('pplpd.atlet.index') }}"><i class="feather icon-users"></i><span class="menu-item" data-i18n="List">Atlet</span></a>
                </li>
                <li class="{{ request()->is('pplpd/pelatih') || request()->is('pplpd/pelatih/tambah') || request()->is('pplpd/pelatih/edit') || request()->is('pplpd/pelatih/show') ? 'active' : '' }}"><a href="{{ route('pplpd.pelatih.index') }}"><i class="feather icon-user"></i><span class="menu-item" data-i18n="Edit">Pelatih</span></a>
                </li>
            </ul>
          </li>
      </ul>
  </div>
</div>
<!-- END: Sidebar Menu-->
<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('lic-clientes.index') }}" class="nav-link {{ Request::is('lic-clientes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Lic Clientes</p>
    </a>
</li>
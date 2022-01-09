<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item {{request()->routeIs('home') ? 'active' : ''}}">
            <a class="nav-link" href="{{ url('/home') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Главная</span>
            </a>
        </li>
        <li class="nav-item nav-category">SELF</li>
        <li class="nav-item {{request()->routeIs('new.*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ url('/news') }}">
                <i class="menu-icon  mdi mdi-clipboard-text"></i>
                <span class="menu-title">Новости</span>
            </a>
        </li>
        <li class="nav-item {{request()->routeIs('product.*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('product.index') }}">
                <i class="menu-icon mdi mdi-water"></i>
                <span class="menu-title">Товары</span>
            </a>
        </li>
        <li class="nav-item {{request()->routeIs('category.*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('category.index') }}">
                <i class="menu-icon mdi mdi-water"></i>
                <span class="menu-title">Категории</span>
            </a>
        </li>
        <li class="nav-item nav-category">Clients</li>
        <li class="nav-item {{request()->routeIs('order.*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ url('/orders') }}">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Заказы</span>
            </a>
        </li>
        <li class="nav-item {{request()->routeIs('user.*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ url('/users') }}">
                <i class="menu-icon mdi mdi-account-multiple"></i>
                <span class="menu-title">Пользователи</span>
            </a>
        </li>
        <li class="nav-item {{request()->routeIs('feedback.*') ? 'active' : ''}}">
            <a class="nav-link" href="{{ url('/feedback') }}">
                <i class="menu-icon  mdi mdi-contact-mail "></i>
                <span class="menu-title">Обратная связь</span>
            </a>
        </li>
    </ul>
</nav>

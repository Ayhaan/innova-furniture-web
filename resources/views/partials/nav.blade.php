<div class="sidebar open">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">Innova </div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
        {{-- <li>
            <i class='bx bx-search'></i>
            <input type="text" placeholder="Search...">
            <span class="tooltip">Search</span>
        </li> --}}
        <li>
            <a href="#">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-user'></i>
                <span class="links_name">User</span>
            </a>
            <span class="tooltip">User</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-folder'></i>
                <span class="links_name">Products Indoor</span>
            </a>
            <span class="tooltip">Products</span>
        <li>
        <li>
            <a href="#">
                <i class='bx bx-folder'></i>
                <span class="links_name">Products Outdoor</span>
            </a>
            <span class="tooltip">Products</span>
        <li>
            <a href="#">
                <i class='bx bx-chat'></i>
                <span class="links_name">Comments</span>
            </a>
            <span class="tooltip">MesCommentssages</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-pie-chart-alt-2'></i>
                <span class="links_name">FAQ</span>
            </a>
            <span class="tooltip">FAQ</span>
        </li>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-cart-alt'></i>
                <span class="links_name">Click and collect</span>
            </a>
            <span class="tooltip">Click and collect</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-heart'></i>
                <span class="links_name">Partners</span>
            </a>
            <span class="tooltip">Partners</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-cog'></i>
                <span class="links_name">Setting</span>
            </a>
            <span class="tooltip">Setting</span>
        </li>
        <li class="profile">
            <div class="profile-details">
                <img src="{{ asset('img/innova/innovalogo.jpg') }}" alt="profileImg">
                <div class="name_job">
                    <div class="name">{{ Auth::user()->firstname }} {{ Auth::user()->name }}</div>
                    <div class="job">CEO</div>
                </div>
            </div>
            
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button>
                    <i style="cursor: pointer" class='bx bx-log-out ' id="log_out"></i>
                </button>
            </form>
        </li>
    </ul>
</div>
<section class="home-section">
    @yield('content')
</section>

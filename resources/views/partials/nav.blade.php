<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="/"><img src="{{ asset("img/innova/innovalogo.jpg") }}" alt="innova-logo" srcset="">Furniture  </a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ request()->path() == 'admin/dashboard' ? 'active' : '' }} ">
                    <a href="{{ route('admin') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="{{ route('users.index') }}" class='sidebar-link'>
                        <i class="bi bi-people-fill"></i>
                        <span>Users</span>
                    </a>
                </li>

    

                <li class="sidebar-title">Innova Web</li>
                {{-- <li class="sidebar-item  {{ request()->path() == 'admin/products-indoor' ? 'active' : '' }}">
                    <a href="{{ route('product.index') }}" class="sidebar-link ">
                        <i class="bi bi-collection-fill"></i>
                        <span>Indoor</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="index.html" class='sidebar-link'>
                        <i class="bi bi-collection-fill"></i>
                        <span>Outdoor</span>
                    </a>
                </li> --}}

                <li class="sidebar-item {{ request()->path() == 'admin/products-indoor' ? 'active' : '' }} has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-pen-fill"></i>
                        <span>Products</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route('product.index') }}">Indoor</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="form-editor-ckeditor.html">Outdoor</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="form-editor-summernote.html">Comments</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  ">
                    <a href="ui-file-uploader.html" class='sidebar-link'>
                        <i class="bi bi-file-ppt-fill"></i>
                        <span>Customers opignion</span>
                    </a>
                </li>
    
                <li class="sidebar-item  ">
                    <a href="ui-file-uploader.html" class='sidebar-link'>
                        <i class="bi bi-question-square-fill"></i>
                        <span>FAQ</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="ui-file-uploader.html" class='sidebar-link'>
                        <i class="bi bi-file-ppt-fill"></i>
                        <span>Parteners</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="ui-file-uploader.html" class='sidebar-link'>
                        <i class="bi bi-info-circle-fill"></i>
                        <span>About</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="ui-file-uploader.html" class='sidebar-link'>
                        <i class="bi bi-rainbow"></i>
                        <span>Moving</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="ui-file-uploader.html" class='sidebar-link'>
                        <i class="bi bi-envelope-fill"></i>
                        <span>Contact</span>
                    </a>
                </li>

          




                <li class="sidebar-title">Click and Collect</li>
                <li class="sidebar-item  ">
                    <a href="ui-file-uploader.html" class='sidebar-link'>
                        <i class="bi bi-bag-check-fill"></i>                        
                        <span>General</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="ui-file-uploader.html" class='sidebar-link'>
                        <i class="bi bi-bar-chart-fill"></i>
                        <span>Stat</span>
                    </a>
                </li>



            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link @if(Route::currentRouteName() == 'dashboard') active @endif" href="{{route('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            @role('default')

                            <a class="nav-link @if(Route::currentRouteName() == 'post.create') active @endif" href="{{route('post.create')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Add Post
                            </a>
                            @endrole
                            @can('manage users')
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link @if(Route::currentRouteName() == 'role.create') active @elseif(Route::currentRouteName() == 'role.index') active 
                            @elseif(Route::currentRouteName() == 'permission.index') active
                            @elseif(Route::currentRouteName() == 'permission.create') active
                              @else collapsed @endif" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="@if(Route::currentRouteName() == 'role.index') true @elseif(Route::currentRouteName() == 'permission.index') true @endif" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Roles & Permissions
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse @if(Route::currentRouteName() == 'role.index')  collapse show @elseif(Route::currentRouteName() == 'role.create') collapse show 
                            @elseif(Route::currentRouteName() == 'permission.create') collapse show
                            @elseif(Route::currentRouteName() == 'permission.index') collapse show @endif" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link @if(Route::currentRouteName() == 'role.index')  active @elseif(Route::currentRouteName() == 'role.create') active  @endif" href="{{route('role.index')}}">Roles </a>
                                    <a class="nav-link @if(Route::currentRouteName() == 'permission.index')  active @elseif(Route::currentRouteName() == 'permission.create') active @endif" href="{{route('permission.index')}}">Permissions</a>
                                </nav>
                            </div>
                            <a class="nav-link @if(Route::currentRouteName() == 'users.create') active @elseif(Route::currentRouteName() == 'users.index') active
                              @else collapsed @endif" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="@if(Route::currentRouteName() == 'users.create') true @endif" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Users 
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse @if(Route::currentRouteName() == 'users.index')  collapse show @elseif(Route::currentRouteName() == 'users.create') collapse show @endif " href="{{route('post.create')}}" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                   
                                   <a class="nav-link @if(Route::currentRouteName() == 'users.create')  active @endif" href="{{route('users.create')}}">Add Users </a>
                                    <a class="nav-link @if(Route::currentRouteName() == 'users.index') active @endif" href="{{route('users.index')}}">Manage Users</a>
                                   
                                </nav>
                            </div>

                            <a class="nav-link @if(Route::currentRouteName() == 'product.create') active @elseif(Route::currentRouteName() == 'product.index') active
                              @else collapsed @endif" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePage" aria-expanded="@if(Route::currentRouteName() == 'product.create') true @endif" aria-controls="collapsePage">
                                <div class="sb-nav-link-icon"><i class="fas fa-star"></i></div>
                                Products 
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse @if(Route::currentRouteName() == 'product.index')  collapse show @elseif(Route::currentRouteName() == 'product.create') collapse show @endif " href="{{route('product.create')}}" id="collapsePage" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                   
                                   <a class="nav-link @if(Route::currentRouteName() == 'product.create')  active @endif" href="{{route('product.create')}}">Add Product </a>
                                    <a class="nav-link @if(Route::currentRouteName() == 'product.index') active @endif" href="{{route('product.index')}}">Manage Product</a>
                                   
                                </nav>
                            </div>


                            <div class="sb-sidenav-menu-heading">Posts </div>
                            <a class="nav-link @if(Route::currentRouteName() == 'post.pending')  active @endif" href="{{route('post.pending')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Posts Management
                            </a>
                            <a class="nav-link @if(Route::currentRouteName() == 'post.index')  active @endif" href="{{route('post.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                All Posts
                            </a>
                            
                        </div>
                        @endcan
                    </div>

                    <div class="sb-sidenav-footer ">
                        <div class="small">Logged in as:</div>
                        {{Auth::user()->name}}
                    </div>
                </nav>
            </div>
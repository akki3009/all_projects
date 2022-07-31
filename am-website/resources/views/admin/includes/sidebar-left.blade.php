<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-dark-info">
    <!-- Brand Logo -->
    <a href="javascript:;" class="brand-link text-center">
        <span class="brand-text font-weight-light" style="font-size:20px !important;">{{ siteName() }} Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ adminAssets('dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="javascript:;" class="d-block">{{ _admin('name') }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-compact nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                      with font-awesome or any other icon font library -->
                <?php
                $menuArr = [
                  ['route' => 'admin.dashboard', 'title' => 'Dashboard', 'icon' => 'nav-icon fas fa-tachometer-alt'],
                  [
                      'route' => '',
                      'title' => 'User Management',
                      'icon' => 'nav-icon fas fa-users',
                      'sub_links' => [
                          ['route' => 'admin.beneficiary.index', 'title' => 'Beneficiary'],
                          ['route' => 'admin.advertiser.index', 'title' => 'Advertiser'],
                          ]
                  ],
                  ['route' => 'admin.logout', 'title' => 'Logout', 'icon' => 'nav-icon fas fa-power-off'],
                ];

                foreach($menuArr as $k => $menu){
                            $menu['active'] = '';
                            if(routeActive($menu['route'])){
                                $menu['active'] = 'active';
                            }
                            if(isset($menu['extra_routes'])){
                                foreach($menu['extra_routes'] as $r)
                                    if(routeActive($r))
                                        $menu['active'] = 'active';
                            }

                  if(isset($menu['sub_links']) && $menu['sub_links']){
                    foreach($menu['sub_links'] as $ks => $submenu){
                                    $submenu['active'] = '';
                      if(routeActive($submenu['route'])){
                                        $submenu['active'] = $menu['active'] = 'active';
                                    }
                                    if(isset($submenu['extra_routes'])){
                                        foreach($submenu['extra_routes'] as $r)
                                            if(routeActive($r))
                                                $submenu['active'] = $menu['active'] = 'active';
                                    }
                                    $menu['sub_links'][$ks] = $submenu;
                    }
                  }

                  $menuArr[$k] = $menu;
                }

                foreach($menuArr as $menu){
                  if(isset($menu['sub_links']) && $menu['sub_links']){
                    ?>
                    <li class="nav-item has-treeview {{$menu['active'] ? 'menu-open' : ''}}">
                      <a href="javascript:;" class="nav-link {{$menu['active']}}">
                        <i class="{{$menu['icon'] ?? 'far fa-circle nav-icon'}}" style="vertical-align:text-top;"></i>
                        <p>
                          {{$menu['title']}}
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <?php foreach($menu['sub_links'] as $submenu){ ?>
                        <li class="nav-item">
                          <a href="{{ routePut($submenu['route']) }}" class="nav-link {{$submenu['active']}}" {!! $submenu['target'] ?? '' !!} >
                            <i class="far fa-circle nav-icon" style="vertical-align:text-top;"></i>
                            <p>{{$submenu['title']}}</p>
                          </a>
                        </li>
                        <?php } ?>
                      </ul>
                    </li>
                    <?php
                  }
                  else{
                    ?>
                    <li class="nav-item">
                      <a href="{{ routePut($menu['route']) }}" class="nav-link {{$menu['active']}}">
                        <i class="{{$menu['icon'] ?? 'far fa-circle nav-icon'}}" style="vertical-align:text-top;" ></i>
                        <p>{{$menu['title']}}</p>
                      </a>
                    </li>
                    <?php
                  }
                }
                ?>
              </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

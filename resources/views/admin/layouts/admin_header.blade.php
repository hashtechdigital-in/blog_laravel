<section class="menu-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('admin/admin_dashboard')}}" class="menu-top-active">DASHBOARD</a></li>
                       
                        <li><a href="{{ url('admin/form')}}">FORMS</a></li>
                        <li>
                            <a href="{{ url('admin/admin_dashboard')}}" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">UI ELEMENTS <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('admin/ui')}}">UI ELEMENTS</a></li>
                                 <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('')}}">EXAMPLE LINK</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('admin/tab')}}">TABS & PANELS</a></li>
                         <li><a href="{{ url('admin/table')}}">TABLES</a></li>
                        <li><a href="{{ url('admin/blank')}}">BLANK PAGE</a></li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
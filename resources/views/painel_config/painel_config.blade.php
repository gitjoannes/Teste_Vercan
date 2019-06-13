
    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b></b>JOAN</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>TestTecnico</b>JW</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                        </a>
                    </li>

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('/img/Joannes.jpg')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">Joannes</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{asset('/img/Joannes.jpg')}}" class="img-circle"
                                     alt="User Image">
                                <p>Joannes Waquim - Web Developer
                                    <small>Membro desde Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Seguidores</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Vendas</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Amigos</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sair</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/Joannes.jpg')}}" class="img-circle" alt="User Image">
                </div>

                <div class="pull-left info">
                    <p>Joannes Waquim</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>

            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Sua area</li>
                <li class="active">
                    <a href="{{route('principal')}}"><i class="fa fa-home"></i> <span>Home</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-plus"></i><span>Cadastros</span>
                        <span class="pull-right-container"></span>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="{{ route('listar.fornecedor') }}"><i class="fa fa-circle-o"></i> Fornecedores</a></li>
                    </ul>
                </li>

                <li class="header">Mais</li>
                <li><a href="#"><i class="fa fa-power-off"></i> <span>Sair</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

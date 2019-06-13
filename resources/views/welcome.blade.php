@include('templates_fixos.header')
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('painel_config.painel_config')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Principal<small>Area demonstração</small></h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-12 connectedSortable">
                        <!-- quick email widget -->
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Você esta na Home</h3><br><div id="status"></div>
                            </div>
                            <div class="box-body">
                                <!-- Custom tabs (Charts with tabs)-->
                                <div class="nav-tabs-custom">
                                    <h1 class="text-center">Sem Bem Vindo</h1>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs"></div>
            <strong>Dashboard 2019 </strong>
        </footer>
    </div>
@include('templates_fixos.footer')

@include('templates_fixos.header')

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('painel_config.painel_config')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Fornecedores <small>Listar</small></h1>
            </section>

            <a href="{{route('cadastrar.fornecedor')}}" class="pull-right btn btn-success right -align-justify" >
                <i class="fa fa-plus"></i> Cadastrar
            </a>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    {{--inicio form--}}
                    @include('listagem.listar')
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
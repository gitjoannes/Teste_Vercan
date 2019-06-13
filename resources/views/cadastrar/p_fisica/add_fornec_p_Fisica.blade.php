@include('templates_fixos.header')
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('painel_config.painel_config')
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Fornecedores<small>Cadastrar</small></h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    {{--inicio form--}}
                    @include('cadastrar.p_fisica._form_p_Fisica')
                </div>
            </section>

        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs"></div>
            <strong>Dashboard 2019 </strong>
        </footer>

    </div>
@include('templates_fixos.footer')
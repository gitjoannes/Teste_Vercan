@include('templates_fixos.header')
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('painel_config.painel_config')
        <div class="content-wrapper">
            <script>
                $(document).ready(function () {
                    function fecharMensagem() {
                        setTimeout(function () {
                            $('#status').html('');
                            $('#cnpj').prop('disabled', false);
                        }, 2000);
                    }

                    $('#cnpj').receitaws({
                        afterRequest: function () {
                            var cnpj = $('#cnpj').val();
                            $('#status').html('<div class="alert alert-info">Buscando CNPJ</div>');
                            $('form').find("input[type=text]").val("");
                            $('#cnpj').val(cnpj);
                            $('#cnpj').prop('disabled', true);
                        },
                        success: function (data) {
                            $('#status').html('<div class="alert alert-success">CNPJ Encontrado</div>');

                            fecharMensagem();
                        },
                        fail: function (message) {
                            $('#status').html('<div class="alert alert-danger">' + message + '</div>');

                            fecharMensagem();
                        },
                        notfound: function (message) {
                            $('#status').html('<div class="alert alert-warning">CNPJ inexistente</div>');

                            fecharMensagem();
                        },

                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        fields: {

                            nome: '#razaoSocial',
                            fantasia: '#nomeFantasia',


                            telefone: function (data) {
                                var separa = data.split('/');
                                if (typeof separa[0] != 'undefined') {
                                    $('#fone1').val(separa[0]);
                                }
                            },
                            qsa: function (data) {
                                var responsaveis = [];
                                $.each(data, function(i, val) {
                                    if (typeof val != 'undefined') {
                                        responsaveis[i] = val.nome
                                    }
                                });
                                $('#responsavel').val(responsaveis.join(','));
                            }
                        }
                    });

                });
            </script>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Fornecedores<small>Cadastrar</small></h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    {{--inicio form--}}
                    @include('cadastrar._form')
                </div>
            </section>

        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs"></div>
            <strong>Dashboard 2019 </strong>
        </footer>

    </div>
@include('templates_fixos.footer')
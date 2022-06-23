<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
        <link href="css.css" rel="stylesheet">
        <title>AdminLoja</title>
    </head>
    <body class="bg-secondary text-white">
        <ul class="nav justify-content-center bg-dark mb-5">
            <li class="nav-item">
                <a class="nav-link" href="{{route('cliente.index')}}">Usuários</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('produto.index')}}">Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('pedidos.index')}}">Pedidos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('status.index')}}">Status</a>
            </li>
        </ul>

        <div class="container">@yield('content')</div>

        <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        <script>
            $(document).ready( function () {
                $('.dataTables').DataTable({
                    "language": {
                        "lengthMenu": 'Exibição de _MENU_ linhas por página.',
                        "zeroRecords": 'Resultado não encontrado.',
                        "info": 'Mostrando página _PAGE_ de _PAGES_',
                        "infoEmpty": 'Sem registro encontrado',
                        "infoFiltered": '(buscado em _MAX_ registros)',
                        "sSearch": 'Pesquisar:',
                        "oPaginate":{
                            "sNext": 'Proximo', 
                            "sPrevious": 'Anterior',
                            "sFirst": 'Primeiro',
                            "sLast": 'Último',
                        },
                    },
                    
                    "lengthMenu": [
                        [20, 40, 60, 80, 100, -1],
                        [20, 40, 60, 80, 100, 'TODAS'],
                    ],
                });
            } );
        </script>
    </body>
</html>
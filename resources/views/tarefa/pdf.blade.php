<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <style>
            .page-break {
                page-break-after: always;
            }

            .titulo {
                border:1px;
                background-color:#c2c2c2;
                text-align:center;
                width:100%;
                text-transform:uppercase;
                font-weight:bold;
                margin-bottom:25px;
            }

            table th {
                text-align:left;
            }
        </style>
    </head>

    <body>

        <div class="titulo">Agenda de Consultas</div>

        <table style="width:100%">
            <thead>
                <tr>
                    <th>Consulta</th>
                    <th>Data Agendada</th>
                </tr>
            </thead>

            <tbody>
                @foreach($tarefas as $key => $tarefa)
                    <tr>
                        <td>{{ $tarefa->tarefa }}</td>
                        <td>{{ date('d/m/Y', strtotime($tarefa->data_limite_conclusao)) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="page-break"></div>
        <h2></h2>

        <div class="page-break"></div>
        <h2></h2>

        <div class="page-break"></div>
        <h2></h2>
    </body>
</html>
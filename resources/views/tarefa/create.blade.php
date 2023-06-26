@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agendar Consulta</div>

                <div class="card-body">
                    <form method="post" action="{{ route('tarefa.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Consulta:</label>
                            <input type="text" class="form-control" name="tarefa">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Data Agendada:</label>
                            <input type="date" class="form-control" name="data_limite_conclusao">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <a href="{{ route('tarefa.index') }}" class="btn btn-primary">Visualizar Consultas</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

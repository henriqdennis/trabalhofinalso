@component('mail::message')
# {{ $tarefa }}

Data limite: {{ $data_limite_conclusao }}

@component('mail::button', ['url' => $url])
Visualizar Tarefa
@endcomponent

Att,<br>
{{ config('app.name') }}
@endcomponent

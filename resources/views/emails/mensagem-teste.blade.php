@component('mail::message')
# Introdução

O corpo da mensagem.

- Opção 1
- Opção 2
- Opção 3

@component('mail::button', ['url' => ''])
Texto do botão 1
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')

<h1>Você recebeu um e-mail do site</h1>

<ul>
    <li><b>Nome:</b> {{ $nome }}</li>
    <li><b>E-mail:</b> {{ $email }}</li>
    <li><b>Telefone:</b> {{ $telefone }}</li>
    <li><b>Cargo:</b> {{ $cargo }}</li>
    <li><b>Mensagem:</b><br> {{ $mensagem }}</li>
</ul>

<p>E-mail enviado em {{ date('d/m/Y H:i:s') }}</p>

@endcomponent
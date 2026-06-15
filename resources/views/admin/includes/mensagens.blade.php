@if ($mensagem = session()->get('success')) 
    <div class="card green darken-1">
        <div class="card-content white-text">
            <span class="card-title">Feito!</span>
            <p>{{ $mensagem }}</p>
        </div>
    </div>
@endif
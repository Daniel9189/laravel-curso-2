@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{$error}} <br>
    @endforeach
@endif


<form action="{{ route('users.store') }}" method="POST">
    @csrf
    Nome: <br> <input type="text" name="firstName" > <br><br>
    Sobrenome: <br> <input type="text" name="lastName"> <br><br>
    E-mail: <br> <input type="email" name="email"> <br><br>
    Senha: <br> <input type="password" name="password">
    <button type="submit">Cadastrar</button>
</form>
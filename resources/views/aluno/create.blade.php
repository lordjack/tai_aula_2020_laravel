<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{action('AlunoController@store')}}" method="post">
        @csrf
        <label>Nome</label> </br>
        <input type="text" name="nome" /> </br>

        <label>Curso</label> </br>
        <input type="text" name="curso" /> </br>
        <label>Turma</label> </br>
        <input type="text" name="turma" /> </br>
        <button type="submit">Salvar</button>
    </form>
</body>

</html>
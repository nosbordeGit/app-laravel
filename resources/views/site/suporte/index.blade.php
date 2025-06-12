<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suporte</title>
</head>
<body>
  <h1>Formulario de Suporte</h1>

  <form action="{{route('suporte.create')}}" method="post">
    @csrf
    <label for="">Nome</label>
    <input type="text" name="nome" id="">
    <br><br>
    <label for="">Email</label>
    <input type="email" name="email" id="">
    <br><br>
    <label for="">Descrição</label>
    <br>
    <textarea name="descricao" id="" rows="10"></textarea>
    <br><br>
    <button type="submit">Enviar</button>
  </form>
</body>
</html>
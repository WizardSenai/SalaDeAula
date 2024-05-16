<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(isset($success))
    <span>{{ $success }}</span>
    @endif 
    <form method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nome da sala" value="{{ $reservas->name ?? ''}}"/>
        <input type="date" name="date" value="{{ $reservas->date ??''}}" >
        <input type="text" name="hour" placeholder="Horário" value="{{ $reservas->hour ?? ''}}">
        <input type="text" name="responsible" placeholder="Responsável pela reserva" value="{{ $reservas->responsible ?? ''}}">
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
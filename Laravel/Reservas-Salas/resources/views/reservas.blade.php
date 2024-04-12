<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reservar.css">
    <title>Reserva de Sala de Aula: Tela Reservar Sala</title>

</head>
<body>
    <div class="container">
        <h1>Reserva de Sala de Aula: Tela Reservar Sala</h1>
        
        <form id="reservationForm">
            <table>
                <tr>
                    <th>Sala que vai reservar:</th>
                    <td><input type="text" name="sala" required></td>
                </tr>
                <tr>
                    <th>Data e Hora:</th>
                    <td><input type="datetime-local" name="dataHora" required></td>
                </tr>
                <tr>
                    <th>Professor:</th>
                    <td><input type="text" name="professor" required></td>
                </tr>
                <tr>
                    <th>Turma:</th>
                    <td><input type="text" name="turma" required></td>
                </tr>
                <tr>
                    <th>Finalidade:</th>
                    <td><input type="text" name="finalidade" required></td>
                </tr>
            </table>
            <button type="submit" class="btn">Reservar</button>
        </form>
    </div>
</body>
</html>
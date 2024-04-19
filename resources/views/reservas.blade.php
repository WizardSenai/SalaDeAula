<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/reservar.css', 'resources/js/reserva.js'])
    <title>Reserva de Sala de Aula: Tela Reservar Sala</title>

</head>
<body>
    <div class="container">
        <h1>Reserva de Sala de Aula: Tela Reservar Sala</h1>

        <form id="reservationForm" class="form">
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
            <div class="btn-container">
                <button type="submit" class="btn">Reservar</button>
                <button type="submit" class="btn">Editar</button>
                <button type="submit" class="btn">Excluir</button>
            </div>
        </form>
    </div>
</body>
</html>

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
        <h1>Reserva de Sala de Aula: Criar Sala</h1>

        <form id="reservationForm" class="form">
            <table>
                <tr>
                    <th>Número da sala:</th>
                    <td><input type="text" name="sala" required></td>
                </tr>
                <tr>
                    <th>Bloco:</th>
                    <td><input type="text" name="bloco" required></td>
                </tr>
                <tr>
                    <th>Responsável pelo gerenciamento:</th>
                    <td><input type="text" name="professor" required></td>
                </tr>
                <tr>
                    <th>Capacidade de alunos:</th>
                    <td><input type="text" name="turma" required></td>
                </tr>
                <tr>
                    <th>Finalidade:</th>
                    <td><input type="text" name="finalidade" required></td>
                </tr>
            </table>
            <div class="btn-container">
                <button type="submit" class="btn">Criar sala</button>
                <button type="submit" class="btn">Editar</button>
                <button type="submit" class="btn">Excluir</button>
                <button type="submit" class="btn">Exibir menos</button>
            </div>
        </form>
    </div>
</body>
</html>

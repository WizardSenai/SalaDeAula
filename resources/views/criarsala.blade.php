<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programação de Salas</title>
    @vite(['resources/css/criarsala.css'])
</head>
<body>
    <div class="container">
        <h1>Salas existentes</h1>
        <table class="minha-tabela">
            <thead>
                <tr>
                    <th>Número da Sala</th>
                    <th>Capacidade</th>
                    <th>Bloco</th>
                    <th>Responsável Gerenciamento</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>6</td>
                    <td>35 alunos</td>
                    <td>A</td>
                    <td>Marcia Garcia</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>34 alunos</td>
                    <td>A</td>
                    <td>Vraldecir</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>32 alunos</td>
                    <td>B</td>
                    <td>Kelvius</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>35 alunos</td>
                    <td>A</td>
                    <td>Carol</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('reservas') }}" class="criar-sala-btn">Criar nova sala</a>
    </div>
</body>
</html>

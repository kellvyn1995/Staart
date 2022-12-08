<?php
require_once '../controller/lista_matricula.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/matriculas.css">
    <title>Pedido de Matricula</title>
</head>
<body>
    <div class="estrutura">
        <div class="titulo">
            <h1>Matrículas Abertas ESPAÇO PEQUENO APRENDIZ</h1>
        </div>
        <div class="corpo">

        <form action="../controller/matriculas.php" method="POST">
            <input class="input_padrao" placeholder="Nome do Aluno" type="text" name="nome_aluno">
            <label class="label_data" for="">Data de nascimento do Aluno:</label>
            <input class="input_padrao" placeholder="Data de nacimento do Aluno" type="date" name="nascimento_aluno">
            <input class="input_padrao" placeholder="Email do Aluno" type="text" name="email_aluno">
            <input class="input_padrao" placeholder="Nome da Mãe" type="text" name="mae_aluno">
            <input class="input_padrao" placeholder="Contato da Mãe" type="text" name="contato_mae_aluno">
            <input class="input_padrao" placeholder="Nome do Pai" type="text" name="pai_aluno">
            <input class="input_padrao" placeholder="Contato do Pai" type="text" name="contato_pai_aluno">
            <input class="input_padrao" placeholder="Escola do Aluno" type="text" name="escola_aluno">
            <input class="input_padrao" placeholder="Carga horária" type="number" name="total_h_aluno">
            <input type="hidden" name="valor_h_aluno" id="" value="0">
            <div class="check">
                    <input type="radio" id="presenca1" name="radios" value="1" checked>
                    <label class="label_padrao" for="presenca1">Turno da manhã</label>
                    <input type="radio" id="presenca2" name="radios" value="2">
                    <label class="label_padrao" for="presenca2" >Turno da Tarde</label>
                    <button class="btn_laranja">+</button>
            </div>
            <hr>
        </form>
            
            <div class="tabela_diario">
                <table>
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>Escola</td>
                            <td>Turno</td>
                        </tr>
                    </thead>
                    <?php while ($lista = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
                        <tr>
                        <td><?php echo  $lista["nome_aluno"]; ?></td>
                        <td><?php echo $lista["escola"];?></td>
                        <td><?php if ($lista["turno"] == 1) {
                            echo 'Manhã';
                        } else {
                            echo 'Tarde';
                        }?></td>
                    </tr>
                    <?php } ?>

                </table>
            </div>
        </div>
        <div class="final">

        </div>
    </div>
</body>
</html>
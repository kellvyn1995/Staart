<?php
include_once '../controller/alunos.php';
include_once '../controller/verifica.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../estilo/global.css">
    <link rel="stylesheet" type="text/css" href="../estilo/formulario.css">
    <link rel="stylesheet" type="text/css" href="../estilo/addProfessor.css">
    <title>Alunos</title>
</head>
<body>
    <div class="container">
    <div class="alinhamento-bv">
        <div class="container-b">
            <form action="" method="post">
                <div class="formulario-Header">
                    <h3 class="formulario-Header-h3" >Alunos</h3>
                </div>
                <div class="row">
                    <div class="container p-3">
                        <form action="../controller/alunos.php" method="POST">
                        <table class="table formulario-Header-h2-animacao col-md-6">
                                <thead>
                                  <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Diário</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php while ($lista = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
                                  <tr>
                                    <th scope="row"><?php echo $lista["nome_aluno"]; ?></th>
                                    <input type="hidden" name="id_aluno" value="<?php echo $lista["id_aluno"]; ?>">
                                    <td><div class="position-relative"> <button type="submit" class="btn btn-outline-dark"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                    </svg></button></div></td>
                                  </tr>
                                <?php } ?>
                                </tbody>
                              </table>
                        </form>
                    </div>
                </div>

                    
            </form>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
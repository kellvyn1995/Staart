<?php
require_once '../model/conexao.php';
require_once '../model/classeAluno.php';


//verificar ser formulario foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // verificar se os campos tem valor
    if (!isset($_POST['nome_aluno']) || !empty($_POST['nome_aluno']) && !isset($_POST['mae_aluno']) || !empty($_POST['mae_aluno']) && !isset($_POST['contato_mae_aluno']) || !empty($_POST['contato_mae_aluno']) && !isset($_POST['escola_aluno']) || !empty($_POST['escola_aluno']) && !isset($_POST['nascimento_aluno']) || !empty($_POST['nascimento_aluno']) && !isset($_POST['total_h_aluno']) || !empty($_POST['total_h_aluno']) && !isset($_POST['valor_h_aluno']) || !empty($_POST['valor_h_aluno']) && !isset($_POST['radios']) || !empty($_POST['radios'])){ 
        // os construtor receber os valores para fazer o valor da mensalidade
        $novo_aluno = new Aluno(addslashes($_POST['total_h_aluno']),addslashes($_POST['valor_h_aluno']));
        $novo_aluno->setNome(addslashes($_POST['nome_aluno']));
        $novo_aluno->setEmail(addslashes($_POST['email_aluno']));
        $novo_aluno->setNome_mae(addslashes($_POST['mae_aluno']));
        $novo_aluno->setNome_pai(addslashes($_POST['pai_aluno']));
        $novo_aluno->setContato_mae(addslashes($_POST['contato_mae_aluno']));
        $novo_aluno->setContato_pai(addslashes($_POST['contato_pai_aluno']));
        $novo_aluno->setEscola(addslashes($_POST['escola_aluno']));
        $novo_aluno->setNascimento(addslashes($_POST['nascimento_aluno']));
        $novo_aluno->setCarga_hora(addslashes($_POST['total_h_aluno']));
        $novo_aluno->setValor_hora(addslashes($_POST['valor_h_aluno']));
        $novo_aluno->setTurno(addslashes($_POST['radios']));
        
    
        $aluno_matriculado = $novo_aluno->matricula_aluno($novo_aluno);
        if ($aluno_matriculado == true) {
            // echo "<script>top.window.location='../view/matriculas.php';</script>";
        }else{
    
            // echo "<script>top.window.location='../view/matriculas.php?aviso=3';</script>";
        }
        
    } else {
        // echo "<script>top.window.location='../view/matriculas.php?aviso=2';</script>";
    }
}else{
    echo "<script>top.window.location='../view/matriculas.php??aviso=1';</script>";
}
?>
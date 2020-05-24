<?

session_start();

//VARIAVEL QUE VERIFICA SE A AUTENTICAÇÃO FOI REALIZADA
$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

//Colocando administração de conteudo
$perfis = [1 => 'Administrativo', 2 => 'Usuário'];

//USUARIOS DO SISTEMA
$usuarios_app = [
    array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123123', perfil_id => 1, 'nome' => 'Adm'),
    array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '123123',perfil_id => 1, 'nome' => 'User'),
    array('id' => 3, 'email' => 'rodrigo@teste.com.br', 'senha' => '123123',perfil_id => 2, 'nome' => 'Rodrigo'),
    array('id' => 4, 'email' => 'silvana@teste.com.br', 'senha' => '123123',perfil_id => 2, 'nome' => 'Silvana')
];

foreach($usuarios_app as $user){
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil_id'];
        $nome_usuario = $user['nome'];
    }
}

    if($usuario_autenticado){
        echo 'Usuário autenticado.';

        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        $_SESSION['nome'] = $nome_usuario;

        //Direcionando o login, direto para home.php
        header('Location: home.php');
    }else{  
        $_SESSION['autenticado'] = 'NÃO';
        //Se ouver erro, é direcionado para a página de login
        header('Location: index.php?login=erro');
      }
?>
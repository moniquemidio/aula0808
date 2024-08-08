<!DOCTYPE html>
<html lang="en">

    <head> 
        <meta charset="utf-8" />
        <title>App Help Desk</title>
    </head>

<body> 

    <?php

    //iniciando a seção
    session_start();
    $_SESSION['X']='Seção oficialmente aberta';
    print_r($_SESSION['X']);
    echo '<hr>';

        $usuario_autenticator=false; /* é para criar uma condição*/

            $usuarios_app= array( /*é para criar um array*/
                array( /*criar um array dentro do array ^^*/
                    'email' => 'isabelli@gmail.com',
                    'senha' => 'asdfg'
                ),
                array(
                    'email' => 'isabelli@hotmail.com',
                    'senha' => 'asdfg'
                )
            );
            
            foreach ($usuarios_app as $user){ /*foreach é pra procurar/buscar no servidor/exemplos acima dos arreys e ai volta se é true or false*/
                if($user['email']==$_POST['email'] && $user['senha']==$_POST['senha']) {
                    $usuario_autenticator=true;
                 }
            } /* -se o email e a senha for igual os arreys é true */

            if($usuario_autenticator) {
                echo "Usuario Autenticado";
                $_SESSION['autenticado'] = 'SIM';
            }
            else{ /*se não encontrar devolver usuario não encontrado*/
                $_SESSION['autenticado'] = 'NAO';
                header('Location: index.php?login=erro');
            }

    ?>
</body>
    
</html>
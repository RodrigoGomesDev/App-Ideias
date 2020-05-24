<!DOCTYPE html>
<html lang="en">

<head>
    <title>Index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="style_index.css" />
    <link href="https://fonts.googleapis.com/css2?family=Francois+One&display=swap" rel="stylesheet">
</head>
<body class="text-center">
    <form action="validando_login.php" method="post">
        <div class="form-signin">

            <img class="mb-4" src="https://image.flaticon.com/icons/png/512/149/149071.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            
            <!-- EMAIL -->
            <label for="inputEmail" class="sr-only">Email address</label>
            <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            
            <!-- PASSWORD -->
            <label for="inputPassword" class="sr-only">Password</label>
            <input name="senha" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            
            <!-- ERRO DE LOGIN -->
            <!-- Se o usuario tentar iniciar, sem fazer login acontecera isso -->
            <!-- <?if(isset($_GET['login']) && $_GET['login'] == 'erro'){?>
                
                <div class="text-danger">
                    Usuário ou senha inválido(s)
                </div>
                
                <? } ?> -->
                
                <?if(isset($_GET['login']) && $_GET['login'] == 'error'){?>
                    <div class="text-danger">
                        Por favor, faça login antes de acessar
                    </div>
                    <? } ?>
                    
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </div>
                </form>
            </body>
            </html>
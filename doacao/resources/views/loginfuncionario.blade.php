<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/acesso.css">
    <title>Login Doação</title>
    
</head>
<body>
        <!-- Início do formulário -->
        <form class="form" method="post" action="/logar">
                @csrf
                    <div class="card">
                    <div class="card-top">
                        <img class="imglogin" src="/img/dlogo.png" alt=""><!-- imagem Logo -->
                        <figcaption>DoAção</figcaption>
                        <h2 class="title">Login</h2> <!-- Titulo embaixo da imagem-->
                    </div>
                    <!--Campo do email e css de classe "card-group"-->
                    <div class="card-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Digite seu email">
                    </div>
                    <!--Campo do senha e css de classe "card-group"-->
                    <div class="card-group">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" placeholder="Digite sua senha">
                    </div>

                   

                    <div class="flex items-center justify-end mt-4">
                
                    <div class="card-group btn"><!--Campo classe "card-group btn" onde faz o efeito do mouse passando por cima do botão aceesar fazendo ele ficar cinza-->
                    <button type="submit">Entar</button>
                    </div>
</div>
        </div>
    </form>
</body>
</html>
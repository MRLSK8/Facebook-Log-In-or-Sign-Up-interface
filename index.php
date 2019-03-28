<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Facebook - Log In or Sign Up </title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <header> 
        <div class="center">
            <div class="logo">
                <a href="http://localhost/Facebook-Log-In-or-Sign-Up-interface/"><img src="./img/logo.PNG" alt="logo"></a>
            </div>

            <form method="POST" class="form-login">
                <div class="form-element">
                    <p> Email ou telefone </p>
                    <input type="email">
                </div>
                <div class="form-element">
                    <p> Senha </p>
                    <input type="password">
                </div>
                <div class="form-element">
                    <input type="submit" name="acao" value="Entrar">
                </div>
                <p class="forgotten-account">Esqueceu a conta?</p>
            </form>
            <div class="clear"></div>
        </div>
    </header>
    <section class="main">
        <div class="center">
            <div class="mensagem">O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</div>
            <div class="img-pessoas">
                <img src="./img/imagem1.png"/>
            </div>

            <div class="abrir-conta">
                <h2>Abra uma conta</h2>
                <h3>É gratuito e sempre será!</h3>

                <form action="" class="criar-conta">
                    <div class="w50">
                        <input type="text" placeholder="Nome"/>
                    </div>
                    <div class="w50">
                        <input type="text" placeholder="Sobrenome"/>
                    </div>
                    <div class="w100">
                        <input type="email" placeholder="Celular ou email"/>
                    </div>
                    <div class="w100">
                        <input type="password" placeholder="Nova senha"/>
                    </div>

                    <div class="w100">
                        <h2>Data de nascimento</h2>
                        <select name="nascimento-dia" class="nascimento">
                            <!-- Codigo em php -->
                            <?php 
                                for($i = 1; $i <= 31; $i++){
                            ?>
                            <option value="<?php echo $i ?>"> <?php echo $i ?> </option>
                            <?php } ?>
                            <!-- Fim do codigo em php -->
                        </select>
                        <select name="nascimento-mes" class="nascimento">
                            <option value="0">Jan</option>
                            <option value="1">Fev</option>
                            <option value="2">Mar</option>
                            <option value="3">Abr</option>
                            <option value="4">Mai</option>
                            <option value="5">jun</option>
                            <option value="6">Jul</option>
                            <option value="7">Ago</option>
                            <option value="8">Set</option>
                            <option value="9">Out</option>
                            <option value="10">Nove</option>
                            <option value="11">Dez</option>
                        </select>
                        <select name="nascimento-ano" class="nascimento">
                            <!-- Codigo em php -->
                            <?php 
                                for($i = 2019; $i >= 1905; $i--){
                            ?>
                            <option value="<?php echo $i ?>"> <?php echo $i ?> </option>
                            <?php } ?>
                            <!-- Fim do codigo em php -->
                        </select>
                        <div class="clear"></div>
                    </div>

                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" id="fem" name="sexo" value="feminino"/><label for="fem">Feminino</label>
                        </div> 
                        <div class="input-radio">
                            <input type="radio" id="mas" name="sexo" value="masculino"/><label for="mas">Masculino</label>
                        </div>                   
                    </div>

                    <div class="w50">
                        <input type="submit" name="acao" value="Inscreva-se"/>
                    </div>
                    <div class="criar-conta-celebridade">
                        <span> Criar uma Página </span> para uma celebridade, banda ou empresa.
                    </div>

                    <div class="clear"></div>
                </form>

            </div>
        </div>
    </section>
</body>
</html>
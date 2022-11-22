<?php

require_once("../login/headerLogin.php");

echo '
    <div class="login">
        <img src="../images/logo.png" alt="" width="100%">
        <h1 class="titulo">Central do Assinante</h1>
        <form action="login.php" method="post">
            <input type="hidden" name="acao" value="CADASTRA_LOGIN">
            <label>CPF/CNPJ</label>
            <input type="text" name="cpfcnpj" value="" required>
            
            <label>SENHA</label>
            <input type="text" name="password" value="" required>
            
            <input class="btn btn-lg btn-success btn-block" type="submit" value="Acessar">
        </form>

        <br><span>È seu primeiro acesso?<a href="#">Clique aqui</a></span>
        <br><span>Esqueceu sua senha?<a href="esqueceusenhausuario">Clique aqui</a></span>
        <br><span>Quero alterar minha senha?<a href="#">Clique aqui</a></span>
        
    </div>';

require_once("../login/footerLogin.php");

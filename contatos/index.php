<?php

/**
 * Arquivo que faz a configuração incial da página.
 * Por exemplo, conecta-se ao banco de dados.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');


/**
 *Variável que define o título desta página
 *Referências:
 * → https://www.w3schools.com/php/php_variables.asp
 * → https://www.php.net/manual/pt_BR/language.variables.basics.php
 * → https://www.php.net/manual/pt_BR/language.variables.superglobals.php
 */
    $title = "Faça contato";
    //inclui o cabeçalo da página e se de erro vai para o programa.
    require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');

    //inclui o cabeçalo da página e se de erro vai continuar o programa.
/**
 *Inclui o cabeçalho da página 
 *Referências:
 * → https://www.w3schools.com/php/php_includes.asp
 * → https://www.php.net/manual/pt_BR/function.include.php
 * → https://www.php.net/manual/pt_BR/language.variables.superglobals.php
 */
    //include('_header.php');

?>    
<section>
<h2>Faça contato</h2>

    <form action="envia.php" method="post">

        <p>Preencha todos os campos para entrar em contato com a equipe do Vitugo.</p>

        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required minlength="3" value="Joca da Silva">
        </p>

        <p>
            <label for="emil">E-mail:</label>
            <input type="email" name="email" id="email" required value="joca@silva">
        </p>

        <p>
            <label for="assunto">Assunto:</label>
            <input type="text" name="assunto" id="assunto" required minlength="5" value="Assunto do Joca">
        </p>

        <p>
            <label for="mensagem">Mensagem:</label>
            <textarea name="mensagem" id="mensagem" required minlength="5">Mensagem do Joca</textarea>
        </p>

        <p>
            <button type="submit">Enviar</button>
        </p>




    </form>




</section>

<aside>

<h3>Lateral</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, iste aliqu</p>

</aside>

<?php

    //inclui o rodapé da página e se de erro vai para o programa.
    require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');

    
    //inclui o rodapé da página e se de erro vai continuar o programa.
    //include('_header.php')

?>
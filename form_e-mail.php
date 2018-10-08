  
    <div class="container theme-showcase" role="main">      
      <div class="page-header">
<br><br><br><br>

        <h1>Formulario de E-mail</h1>



      </div>
      <div class="row">
        
          <form class="form-horizontal" method="POST" action="administrativo.php?link=5">

  <div class="container "> 

    <div class="col-sm-12  col-xs-12 jumbotron">
        
             <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>Contato</title>
    </head>
    <body>
        <form action="mail_send.php" method="post">
            <fieldset>
                <label for="nome">Nome: </label>
                <input required name="nome" type="nome" placeholder="Digite seu nome">
            </fieldset>
            <br>
            <fieldset>
                <label for="email">E-mail: </label>
                <input required name="email" type="email" placeholder="Digite seu e-mail">
            </fieldset>
            <fieldset>
                <label for="mensagem">Mensagem: </label>
                <br>
                <textarea name="textfield" cols="70" rows="5" required name="mensagem" placeholder="Digete aqui sua mensagem"></textarea>
            </fieldset>
            <fieldset>
                <button type="submit" onclick="funcao1()" value="Exibir Alert">Enviar</button>
                <script>
                        function funcao1()
                        {
                        alert("E-mail Enviado com Sucesso!");
                        }
                        header("Location:administrativo.php?link=5");
                </script>

            </fieldset>
        </form>
    </body>
</html>

</div> <!-- /container -->

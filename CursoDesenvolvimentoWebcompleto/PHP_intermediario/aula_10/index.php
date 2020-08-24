<!DOCTYPE html>
<html>

    <head>
        <title>Formulário</title>
    </head>
    <body>
        <?php
            /*
            if(isset($_GET['acao'])){
                $nome = @$_GET['nome'];
                $email = @$_GET['email'];
                echo '<br />';
                echo $email;
            }
            */
            /*
            if(isset($_POST['acao'])){
                $nome = @$_POST['nome'];
                $email = @$_POST['email'];
                echo '<br />';
                echo $email;
            }
            */
            /*
            if(isset($_POST['acao'])){
                echo $_POST['numero1'] + $_POST['numero2'];
            }
            */     
        /*    
        ?>
        <form method="post">
            <input type="text" name="nome" />
            <input type="text" name="nome" />
            <input type="submit" name="acao" value="Enviar" />
        </form>
        */
        
        if(isset($_POST['acao'])){
            foreach ($_POST['valor'] as $key => $value) {
                echo $key;
                echo '=>';                
                echo $value;

                echo '<hr>';
                
            }
        }        

        ?>
        <form method="post">
            <select name="nome">
                <option value="Lagreca">Lagreca</option>
                <option value="Charlinho">Charlinho</option>
            </select>
            <input type="checkbox" name="valor[]" value="10">10
            <input type="checkbox" name="valor[]" value="10">20
            <input type="checkbox" name="valor[]" value="10">30
            <input type="checkbox" name="valor[]" value="10">40
            <input type="submit" name="acao[]" value="Enviar" />
        </form>
    </body>
</html>


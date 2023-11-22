<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="style.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">


</head>
<body>
    <main class="fundoo">

        <section class="base">
            

            
            
                    <form action="insert.php" method="post">
                    <table>
                    <tr>
                        <td colspan="2">Cadastro de Funcionários</td>
                    </tr>
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="nome"></td>
                    </tr>
                    <tr>
                        <td>Cargo:</td>
                        <td><input type="text" name="cargo"></td>
                    </tr>
                <tr>
                    <td>Descrição cargo:</td>
                    <td><textarea name="descCargo" cols="15"
                    rows="15"></textarea></td>
                </tr>
                <tr>
                    <td>Setor:</td>
                    <td><input type="text" name="setor"></td>
                </tr>
                <tr>
                    <td>Salario:</td>
                    <td><input type="text" name="salario"></td>
                </tr>
                    </table>
                <br><br>
                <input type="submit" name="Gravar">
                </form>


                <section>
                <img src="src/2.svg" class="img" alt="">

            </section>



        </section>
            

    </main>
</body>
</html>
    
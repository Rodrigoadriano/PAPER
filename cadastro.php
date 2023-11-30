<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="script.js"></script>

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
            <div class="dir cards">
                <img src="src/2.svg" alt="svg2">
            
            </div>

            <div class="esq cards">
                <form id="meuForm" method="post">
                        <table>
                        <tr>
                            <td colspan="2">Cadastro de Funcionários</td>
                        </tr>
                        <tr>
                            <td>Nome:</td>
                            <td><input type="text" name="nome" required ></td>
                        </tr>
                        <tr>
                            <td>Cargo:</td>
                            <td><input type="text" name="cargo" required></td>
                        </tr>
                    <tr>
                        <td>Descrição cargo:</td>
                        <td><textarea name="descCargo" cols="20"
                        rows="5" required></textarea></td>
                    </tr>
                    <tr>
                        <td>Setor:</td>
                        <td><input type="text" name="setor" required></td>
                    </tr>
                    <tr>
                        <td>Salario:</td>
                        <td><input type="text" name="salario" required></td>
                    </tr>
                        </table>
                    <br><br>
                    <input type="submit" name="Gravar" class="button" onclick="send()">
                    <button type="button" id="voltarBtn" class="button" onclick="home()">Voltar</button>
            </form>
            
            
            </div>
        </section>
            

    </main>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<form action="insert.php" method="post">
<table>
<tr>
<td colspan="2">Cadastro de Funcionário</td>
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
</body>
</html>
    
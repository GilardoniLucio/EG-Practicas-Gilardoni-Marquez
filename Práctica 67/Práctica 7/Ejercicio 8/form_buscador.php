<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Buscador de Canciones</title>
</head>
<body>
    <h2 align="center">Buscador de Canciones</h2>
    <form action="buscador.php" method="POST">
        <table width="300" align="center" border="0">
            <tr>
                <td>Palabra:</td>
                <td><input type="text" name="palabra" size="20" maxlength="40" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <br>
                    <input type="submit" value="Buscar!">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
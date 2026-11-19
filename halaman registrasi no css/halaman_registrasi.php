<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman registrasi</title>
</head>
<body>
    <h1>Halaman Registrasi</h1>

    <form method="post">
        <ul>
            <li>Username: <input type="text" name="username"></li>
            <br>
            <li>Password: <input type="password" name="password"></li>
            <br>
            <li>Konfirmasi Password: <input type="password" name="konfirmasi_password"></li>
            <br>
            <li>Role:
                <select name="rols">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </li>   
            <br> 
            <li><input type="submit" name="register!"></li>
        </ul>
</form>
</body>
</html>
<html>
<head>
        <meta charset="UTF-8">
        <title>Sound Biscuit</title>
        <link rel="stylesheet" type="text/css" href="">
</head>
<body>
    <div>
        <h1>
            Sound Biscuit
        </h1>

        <a style="float:right" href="login.php">Sign In</a><br>
    </div>

    <hr><br>

    <div>
        <h1>Upload New Sound:</h1>
        <form action="insert.db.php" method="post"><br>
            <input type="text" name="name" placeholder="Sound name"><br>
            <input type="text" name="author" placeholder="Author"><br>
            <input type="date" name="created" placeholder="Date uploaded"><br>
            <button type="submit" name="insert-submit">Upload</button><br>
        </form>
    </div>

    <div>
        <h1>Remove Sound From Library:</h1><br>
        <form action="delete.db.php" method="post">
            <input type="text" name="name" placeholder="Sound name"><br>
            <button type="submit" name="delete-submit">Delete</button><br>
        </form>
    </div>

    <div>
        <h1>Edit Sound In Library:</h1><br>
        <form action="update.db.php" method="post">
            <input type="text" name="name" placeholder="Username"><br>
            <input type="password" name="author" placeholder="Author"><br>
            <input type="date" name="date" placeholder="Date edited"><br>
            <button type="submit" name="edit-submit">Edit</button><br>
        </form>
    </div>
</body>
</html>
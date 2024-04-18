<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <h1>To Do List</h1>
    <div class="container">
        <form action="" method="post">
            <div class="input-container">
                <input type="text" name="inputBox" id="inputBox">
                <button type="submit" id="add">ADD</button>
            </div>
            <ul class="list">
                <li class="item">
                    <p>Item</p>
                    <button type="submit" id="check"><i class="fas fa-check"></i></button>
                    <button type="submit" id="delete"><i class="fas fa-trash-alt"></i></button>
                </li>
            </ul>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Blog_Radaxian</title>
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg menu">
            <div class="left">
                <a href="index.php" class="nav-options home">Home</a>
                <a href="index.php?page=about" class="nav-options">About</a>
            </div>
            <div class="right">
                <a href="index.php?page=admin&method=index" class="nav-options">Admin</a>
            </div>    
        </nav>
    </header>
    <main class="content">
        {{dynamic_area}}
    </main>
    <footer class="footer">
        <span class="info-footer">Radaxian Blog</span>
    </footer>
</body>
</html>

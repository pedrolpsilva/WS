<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WS - Login</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../CSS/headerLogin.css">
        <link rel="stylesheet" href="../CSS/allLogin.css">
        <link rel="stylesheet" href="../CSS/button.css">
        <link rel="stylesheet" href="../CSS/text.css">
    </head>
    <body>

        <main>
            <a href="../index.php">
                <img src="../IMG/LogoLogin.svg">
            </a>
            
            <div>
                <div>
                    <div>
                        <h1>Área administrativa</h1>
                    </div>
                    <form method='post'>
                        <input type="email" name='email' id="mail" class="input" placeholder="E-mail" required>
                        <br>
                        <input type="password" name='password' id="password" class="input" placeholder="Senha" required>
                        <?php
                            include('conn.php');

                            if(isset($_POST['btLogin'])) {
                                $data = [$_POST['email'],$_POST['password']];

                                $SQL = $conn->prepare('SELECT * FROM user WHERE user = ? AND password = ?');
                                $SQL->execute($data);
                                $result = $SQL->fetchAll();

                                if ($SQL->rowCount() > 0) {
                                    // header('location: PHP/panel.php');
                                    echo "<script>window.location.href = '../PHP/panel.php'</script>";
                                } else {
                                    echo '<h2 id="alert">Usuario não encontrado!</h2>';
                                }
                            }
                        ?>
                        <label id="loginArea">
                            <input type="submit" name='btLogin' id="login" >
                        </label>
                    </form>
                </div>
            </div>
        </main>

    </body>
</html>
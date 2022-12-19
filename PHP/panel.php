<?php
    include ('conn.php');
    if (isset($_POST['btAlterate'])) {
        $data = [$_POST['titleProduct'], $_POST['nameProduct'], $_POST['linkProduct'], $_POST['idProduct']];

        $SQL = $conn->prepare('UPDATE product SET title = ?, name = ?, link = ? WHERE IDProduct = ?');
        $SQL->execute($data);
    }
    
    if (isset($_POST['btDelete'])) {
        $data = [$_POST['idProductDelete']];

        $SQL = $conn->prepare('DELETE FROM product WHERE IDProduct = ?');
        $SQL->execute($data);
    }


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WS - Painel de Controle</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../CSS/headerPanel.css">
        <link rel="stylesheet" href="../CSS/allPanel.css">
        <link rel="stylesheet" href="../CSS/button.css">
        <link rel="stylesheet" href="../CSS/text.css">
        <link rel="stylesheet" href="../CSS/alteratePanel.css">
    </head>
    <body>

        <div class='modal' id="deleteOption">
            <form method='post'>
                <p>Tem certeza que deseja excluir este produto?</p>
                <input type="hidden" id="idProductDelete" name="idProductDelete">
                <div>
                    <input class="button btGreen btMedium" type="submit" name="btDelete" value="Sim">
                    <input class="button btRed btMedium" type="button" name="deleteOptionNo" value="Não" onClick="clickBackDelete()">
                </div>
            </form>
        </div>

        <div class='modal' id="alterateProduct">
                <form method='POST'>
                    <section class="section" id="section1">
                        <input type='hidden' name='idProduct' value='' id='idProduct' />
                        <div id="alterateProductTitle">
                            <label for="title">Título</label>
                            <input type="text" id="title" class="input" placeholder="Título" value="" name='titleProduct'>
                        </div>
                                                                    
                        <div id="alterateProductName">
                            <label for="name">Nome do produto</label>
                            <input type="text" id="name" class="input" placeholder="Nome" value="" name="nameProduct">
                        </div>
                                        
                    </section>
                    <section class="section" id="section2">
                        <div id="alterateProductLink">
                            <label for="link">Link</label>
                            <input type="text" id="link" class="input" placeholder="Link" value="" name="linkProduct">
                        </div>
                    </section>
                    <section id="productButton">
                        <input class="button btGreen btMedium" type="submit" name="btAlterate" value='Alterar'>
                        <label class="button btRed btMedium" onClick="clickBack()">Cancelar</label>
                    </section>
                </form>
        </div>

        <header>
                <a href="../index.php">
                    <img src="../IMG/logo.svg">
                </a>
        </header>

        <main>
            <div id="titleAlterate">
                <h1>Seus produtos</h1>
            </div>
            <div id="content">
                <div id="contentProduct">
                <?php

                    $SQL = $conn->prepare('SELECT * FROM product');
                    $SQL->execute();
                    $result = $SQL->fetchAll();

                        foreach ($result as $item) {
                            $id = "'".$item['IDProduct']."'";
                            $title = "'".$item['title']."'";
                            $name = "'".$item['name']."'";
                            $link = "'".$item['link']."'";

                            $onClickEnter = "fInputs(".$id.",".$title.",".$name.",".$link.")";
                            $onClickDelete = "fDelete(".$id.")";

                            echo'<div style="background: url(../';
                            echo    $item['image'];
                            echo');">';
                            echo    '<div>';
                            echo        '<p class="productTitle">';
                            echo            $item['title'];
                            echo        '</p>';
                            echo        '<p class="productName">';
                            echo            $item['name'];
                            echo        '</p>';
                            echo    '</div>';
                            echo    '<section>';
                            echo        '<button class="productAlterateEdit" name="btEdit" onClick="'.$onClickEnter.'">';
                            echo            '<p>Editar</p>';
                            echo        '</button>';
                            echo        '<button class="productAlterateDelete" name="btDelete" onClick="'.$onClickDelete.'">';
                            echo            '<p>Excluir</p>';
                            echo        '</button>';
                            echo    '</section>';
                            echo'</div>';
                    }
                ?>
                </div>
            </div>

        </main>
        <script>
            function clickBackDelete() {
                $('#deleteOption').css('display','none')
            }
            function clickBack() {
                $('#alterateProduct').css('display','none')
            }
            function fInputs(IDProduct, title, name, link) {
                $('#alterateProduct').css('display','flex')
                $('#idProduct').val(IDProduct)
                $('#title').val(title)
                $('#name').val(name)
                $('#link').val(link)
            }
            function fDelete(IDProduct) {
                $('#deleteOption').css('display','flex')
                $('#idProductDelete').val(IDProduct)
            }
        </script>
    </body>
</html>    
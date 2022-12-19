<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WS</title>
        <link rel="icon" href="IMG/LogoV2.svg" type="image/icon type">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="CSS/all.css">
        <link rel="stylesheet" href="CSS/header.css">
        <link rel="stylesheet" href="CSS/button.css">
        <link rel="stylesheet" href="CSS/text.css">
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    </head>
    <body>
        <div id="initial"></div>
        <header>
            <section>
                <a href="#initial">
                    <img id="logo" src="IMG/logo.svg" alt="Logo" loading='lazy'>
                </a>
                <div id="hamburger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <a href="#initial">
                    <img id="logo-mobile" src="IMG/logo.svg" alt="Logo" loading='lazy'>
                </a>
                <nav>
                    <ul>
                        <li><a href="#product">Produtos</a></li>
                        <li><a href="#">Saiba mais</a></li>
                        <!-- <li><a href="#nos">Nós</a></li> -->
                        <li><a href="#form">Contato</a></li>
                    </ul>
                </nav>
                <div id="spaceQueroConhecer">
                    <a href="https://api.whatsapp.com/send?phone=5561994088040" id="queroConhecer" class="button btBorder btBorderGreen txtWhite">Quero conhecer</a>
                </div>
            </section>
        </header>

        <a id="chat" href="https://api.whatsapp.com/send?phone=5561994088040" target="_blank"></a>

        <section id="menuPhone">
            <a href="#initial">
                <img src="IMG/logo.svg" alt="" loading='lazy'>
            </a>
            <nav>
                <ul>
                    <li><a href="#product">Produtos</a></li>
                    <li><a href="#">Saiba mais</a></li>
                    <!-- <li><a href="#nos">Nós</a></li> -->
                    <li><a href="#form">Contato</a></li>
                </ul>
            </nav>
            <button id="closeMenu" class="button btBorder btBorderGreen btBigger txtWhite txt600">Fechar Menu</button>
        </section>

        <main>

            <section class="apresentation">
                <div>
                    <h1 class="txtTitle">Para usar como quiser!</h1>
                    <h2 class="txtDescription">Realize seus sonhos<br>
                        da melhor forma possível: contratando<br>
                        a WS!<br></h2>
                    <div>
                        <a href="https://api.whatsapp.com/send?phone=5561994088040" class="button btBorder btBorderBlue btMedium txtBlue">Quero conhecer</a>
                        <a href="#product" class="button btBlue btMedium txtWhite">Contratar</a>
                    </div>
                </div>
            </section>

            <!-- <section id="nos"> 
                <p>Um resumo sobre nós!</p>
                <div>
                    <p>Empresa com atuação desde 2010 de forma reginal e desde 2020 de forma nacional.
                    </p>
                </div>
            </section> -->

            <section id="topic3">

                <div class="topic3-topic">
                    <p class="topic3-title">Missão</p>
                    <p>Incentivar pessoas a realizar seus sonhos e projetos, proporcionando-lhes segurança em soluções financeiras e seguros para sua vida.</p>
                </div>
                <hr>
                <div class="topic3-topic">
                    <p class="topic3-title">Visão</p>
                    <p>Atuar sendo referência nos segmentos de seguros e serviços financeiros, buscando aperfeiçoamento e desenvolvimento a cada dia .</p>
                </div>
                <hr>
                <div class="topic3-topic">
                    <p class="topic3-title">Valores</p>
                    <p>Ética, profissionalismo, compromisso, foco no cliente, resultados e honestidade.</p>
                </div>

            </section>

            <section id="info1">

                <div>
                    <div>
                        <p>O empréstimo consignado SIAPE oferece taxas de juros mais baixas que outras modalidades e o prazo para pagamento das parcelas pode ser de até 96 meses</p>
                        <div>
                            <a class="button btBlue btMedium txtWhite" href="#form">Solicitar</a>
                        </div>
                    </div>
                </div>

            </section>

            <section id="topic1">
                <a href="#product">
                    <p>O SAQUE-ANIVERSÁRIO FGTS:</p>
                    <p>O empréstimo consiste em uma antecipação do valor do saque disponibilizado no mês do seu aniversário. O saldo do FGTS é utilizado como garantia da operação, trazendo simplicidade e agilidade para a contratação.</p>
                </a>
            </section>

            <section id="product">
                <p>Nossos produtos:</p>
                <div id="productArea">
                <?php
                    include ('PHP/conn.php');

                    $SQL = $conn->prepare('SELECT * FROM product');
                    $SQL->execute();
                    $result = $SQL->fetchAll();
                        foreach ($result as $item) {
                            echo'<a target="_blank" href="';
                            echo $item['link'];
                            echo'" style="background: url(';
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
                            echo'</a>';
                    }
                ?>
                </div>
            </section>

            <section id="simulate">

                <div class="simulate-background">
                    <div class="simulate-background-margin">
                        <p>Simule agora!</p>

                        <div class="simulate-background-choose">
                            <div class="simulate-background-choose-left">
                                <div>
                                
                                    <p>De quanto você precisa?</p>
                                    <div>
                                        <p>R$1.000,00</p>
                                        <p id="textValue">R$ 1.000</p>
                                        <p>R$20.000,00</p>
                                    </div>
                                    <input type="range" id="ipValue" min="1000" max="20000" step="1000" value="1000">
                                    <p>Escolha um prazo</p>
                                    <div>
                                        <p>24 meses</p>
                                        <p id="textTime">24 meses</p>
                                        <p>84 meses</p>
                                    </div>
                                    <input type="range" id="ipTime" min="24" max="84" step="12" value="12">

                                    <input type="hidden" id="ipValueFinally" name="ipValueFinally" value="1000">
                                    <input type="hidden" id="ipTimeFinally" name="ipTimeFinally" value="24">
                                    <input type="hidden" id="ipTotal" name="ipTotal" value="0">
                                    <script>
                                        function calc() {
                                            const time = document.getElementById('ipTimeFinally').value

                                            let value = document.getElementById('ipValueFinally').value

                                            switch (time) {
                                                case 24:
                                                    break;
                                            }

                                            value = (value / time) * 2.14

                                            // TEXT
                                            const timeText = document.getElementById('textTimeFinally')
                                            timeText.innerHTML = document.getElementById('textTime').innerHTML

                                            const valueText = document.getElementById('textValueFinally')
                                            valueText.innerHTML = 'R$ ' + new Intl.NumberFormat('de-DE').format(value)
                                        }

                                        const ipValue = document.getElementById('ipValue')
                                        ipValue.addEventListener('input', (evt) => {
                                            const value = document.getElementById('textValue')
                                            value.innerHTML = 'R$ ' + new Intl.NumberFormat('de-DE').format(evt.target.value)

                                            const input = document.getElementById('ipValueFinally')
                                            input.value = evt.target.value

                                            calc()
                                        })

                                        const ipTime = document.getElementById('ipTime')
                                        ipTime.addEventListener('input', (evt) => {
                                            const value = document.getElementById('textTime')
                                            value.innerHTML = evt.target.value + ' meses'

                                            const input = document.getElementById('ipTimeFinally')
                                            input.value = evt.target.value

                                            calc()
                                        })
                                    </script>
                                </div>
                            </div>

                            <div class="simulate-background-choose-right">
                                    <p id="textTimeFinally">24 meses</p>
                                    <p id="textValueFinally">R$ 0,00</p>
                                    <p>*Juros de 2,14% podendo haver alterações.</p>
                            </div>
                        </div>

                        <div class="simulate-simulate">
                            <p id="simulate-simulate-txt">*Este é apenas um simulador, não é um meio oficial para orçamentos e afins.</p>
                            <a href="#contact" class="button btMedium btGreen txtBlue">Fale conosco</a>
                        </div>

                        <div id="simulate-simulate-txt-mobile">
                            <p>*Este é apenas um simulador, não é um meio oficial para orçamentos e afins.</p>
                        </div>

                    </div>   
                </div>

                <div class="simulate-column"></div>

            </section>

            <section id="topic2">

                <div class="topic2-topic">
                    <img src="IMG/iRapido.svg">
                    <p>Rápido</p>
                </div>
                <div class="topic2-topic">
                    <img src="IMG/iPratico.svg">
                    <p>Prático</p>
                </div>
                <div class="topic2-topic">
                    <img src="IMG/iSeguro.svg">
                    <p>Seguro</p>
                </div>
                <div class="topic2-topic">
                    <img src="IMG/iAtual.svg">
                    <p>Atual</p>
                </div>
                <div class="topic2-topic">
                    <img src="IMG/iSemBurocracia.svg">
                    <p>Sem Burucracia</p>
                </div>

                
            </section>
    
            <section id="topic1">
                <a href="#product">
                    <p>O EMPRÉSTIMO NO CARTÃO:</p>
                    <p>Seu limite do cartão de crédito vira dinheiro. Para conseguir seu empréstimo não é necessário ter nome limpo, apenas um cartão de crédito com limite disponível.</p>
                </a>
            </section>

            <section id="witness">
                <p class="witness-title">Feedbacks</p>
                <div id="witness-margin" class="sliderWitness">

                            <div class="witness">
                                <div id="witnessImg1" class="witness-img"></div>
                                <div class="witness-txt">
                                    <p class="witness-topic-tittle">Francielle</p>
                                    <p>Gostei muito da experiência. Contratei empréstimo com a WS Crédito e fiquei encantada não só com a taxa, mas com a segurança do processo. Fácil , seguro e tempo recorde para liberar o dinheiro.</p>
                                </div>
                            </div>
                            <div class="witness">
                                <div id="witnessImg2" class="witness-img"></div>
                                <div class="witness-txt">
                                    <p class="witness-topic-tittle">Neyane</p>
                                    <p>Solicitei um crédito com a WS Crédito e fiquei super satisfeita pois, em pouco tempo estava na conta. Foi rápido e  seguro. É uma empresa que eu confio e super índico</p>
                                </div>
                            </div>
                            <div class="witness">
                                <div id="witnessImg3" class="witness-img"></div>
                                <div class="witness-txt">
                                    <p class="witness-topic-tittle">Diego</p>
                                    <p>Contratei um empréstimo com a Ws Crédito, e graças a Deus deu tudo certo. Ótimo atendimento e sem burocracia.</p>
                                </div>
                            </div>

                </div>
            </section>

            <script type="text/javascript">
                $(document).ready(function(){
                $('.sliderWitness').slick({
                    zIndex:1000,
                    swipeToSlide:true,
                    centerPadding:'0px',
                    arrows:false,
                    infinite:false,
                    
                });
                });
            </script>

            <section id="info2">

                <div>
                    <div>
                        <p>O Empréstimo pessoal FGTS é uma modalidade de empréstimo que faz a antecipação de 12 anos do seu saque-aniversário. É um dinheiro fácil e rápido para dar aquele gás na vida financeira</p>
                        <div>
                            <a class="button btBlue btMedium txtWhite" href="#form">Solicitar</a>
                        </div>
                    </div>
                </div>

            </section>

            <section id="topic1">
                <a href="#product">
                    <p>O CONSIGNADO INSS:</p>
                    <p>Empréstimo destinado a aposentados ou pensionistas do INSS, com a cobrança das prestações diretamente no benefício, com prazo de até 84 meses</p>
                </a>
            </section>

            <section id="form" name="form" method="post" action="PHP/form.php">
                <div>
                        <p>Nos mande um email</p>
                        <form method='post' action='PHP/form.php'>
                            <section>
                                <div>
                                    <label for="formName">Nome</label>
                                    <input id="formName" name="formName" class="input" type="text" required>
                                </div>    
                                <div>
                                    <label for="formPhone">Celular</label>
                                    <input id="formPhone" name="formPhone" class="input" type="nunmber" required>
                                </div>
                                <div>
                                    <label for="formEmail">E-mail</label>
                                    <input id="formEmail" name="formEmail" class="input" type="email" required>
                                </div>
                            </section>   
                            <section> 
                                <div>
                                    <label for="formCEP">CEP</label>
                                    <input id="formCEP" name="formCEP" class="input" type="number" required>
                                </div>
                                <div>
                                    <label for="formAdress">Endereço</label>
                                    <input id="formAdress" name="formAdress" class="input" type="text" required>
                                </div>
                                <div>
                                    <label for="formNumber">Número</label>
                                    <input id="formNumber" name="formNumber" class="input" type="number" required>
                                </div>
                                <div>
                                    <label for="formCPF">CPF</label>
                                    <input id="formCPF" name="formCPF" class="input" type="text">                                  
                                </div>
                            </section>   
                            <section>
                                <div>
                                    <label for="formProduct">Produto</label>
                                    <input type="hidden" id="" >
                                    <select id="formProduct" name="formProduct" required>
                                        <?php
                                            include ('PHP/conn.php');

                                            $SQL = $conn->prepare('SELECT * FROM product');
                                            $SQL->execute();
                                            $result = $SQL->fetchAll();
                                                foreach ($result as $item) {

                                                    $onClickFormProduct = "fFormIdProduct";

                                                    echo'<option id="formIdProduct" name="formIdProduct" onClick="'.$onClickFormProduct.'"value="';
                                                    echo    $item['title'], $item['name'];
                                                    echo'">';
                                                    echo $item['title'];
                                                    echo '<p> </p>';
                                                    echo $item['name'];
                                                    echo'</option>';
                                                }
                                        ?>
                                    </select>
                                </div>
                                <p>
                                    *Ao enviar este formulário você concorda em compartilhar estas <br>informações e aceita que nossa equipe entre em contato
                                </p>    
                                <input name="btSendForm" class="button btGreen btMedium" type="submit"/>
                            </section>   
                            
                        </form>
                    <div>
                        
                    </div>
                </div>

            </section>

            <section id="contact">
                <div>
                    <p>Ou fale conosco!</p>
                    <p>Ligue ou nos mande uma mensagem através do WhatsApp e tire todas as suas dúvidas conosco.</p>
                </div>
                <div>
                    <div>
                        <p>Telefone:</p>
                        <p>61 3376-1626</p>
                    </div>
                    <div>
                        <p>WhatsApp:</p>
                        <p>61 99408-8040</p>
                    </div>
                </div>   
            </section>
        </main>

        <footer>
            <a href="#initial">
                <img src="IMG/logo.svg" loading='lazy'>
            </a>
            <div>
                <ul>
                    <a href="#initial">
                        <li>Início</li>
                    </a>
                    <a href="#product">
                        <li>Produtos</li>
                    </a>
                    <a href="">
                        <li>Saiba mais</li>
                    </a>
                    <!-- <a href="#nos">
                        <li>Nós</li>
                    </a> -->
                    <a href="#form">
                        <li>Contato</li>
                    </a>
                    <a href="">
                        <li>Conhecer</li>
                    </a>
                </ul>
            </div>
            <a href="PHP/login.php">Login</a>
            <div>
                <p>Todos os direitos reservados a WS Representações.</p>
                <p>Desenvolvido por OnPush.</p>
            </div>
        </footer>

        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>

        <script>
            function fFormIdProduct(IDProduct) {
                $('#formProduct').val(title+" "+name)
            }
        </script>

    </body>
    <script src="JS/header.js"></script>
</script>
</html>
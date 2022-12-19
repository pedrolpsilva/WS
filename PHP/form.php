<?php 
            if(isset($_POST['btSendForm'])){
                $fName = $_POST['formName'];
                $fEmail = $_POST['formEmail'];
                $fPhone = $_POST['formPhone'];
                $fCEP = $_POST['formCEP'];
                $fAdress = $_POST['formAdress'];
                $fNumber = $_POST['formNumber'];
                $fCPF = $_POST['formCPF'];
                $fProduct = $_POST['formProduct'];

                $msg =  "Nome: ".$fName. "\r\n".
                        "Email: ".$fEmail. "\r\n".
                        "Contato: ".$fPhone. "\r\n".
                        "CEP: ".$fCEP. "\r\n".
                        "Endereço: ".$fAdress. "\r\n".
                        "Nº: ".$fNumber. "\r\n".
                        "CPF: ".$fCPF. "\r\n".
                        "Produto: ".$fProduct
                ;

                // $to = "pedro.lpo.oficial@gmail.c om";
                // $subject = "VOCÊ TEM UMA NOVA MENSAGEM!";
                // $body = "Nome: ".$fName. "\r\n";
                //         "Email: ".$fEmail. "\r\n";
                //         "Contato: ".$fPhone. "\r\n";
                //         "CEP: ".$fCEP. "\r\n";
                //         "Endereço: ".$fAdress. "\r\n";
                //         "Nº: ".$fNumber. "\r\n";
                //         "Complemento: ".$fComp. "\r\n";
                //         "Produto: ".$fProduct.
                // $header = "From:"."\r\n"."Reply-To:".$fEmail."/r/n"."X-Mailer:PHP".phpversion();    

                mail("pedro.lpo.oficial@gmail.com","VOCÊ TEM UMA NOVA MENSAGEM!",$msg);
                header('location:https://wscredito.com.br/');
                
            }
?>

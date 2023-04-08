<?php
    ob_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&family=Lato:wght@100;300;400;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Jost:wght@100;200;300;400;500;600;700;800;900&family=Lato:wght@100;300;400;700;900&family=Martel+Sans:wght@200;400;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">

    <!-- link icones  -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://kit.fontawesome.com/18e21c191e.js" crossorigin="anonymous"></script>
    
    <!-- link css -->
    <link rel="stylesheet" href="components/principal.css">
    <link rel="stylesheet" href="../adm/components/principal.css">
    <link rel="stylesheet" href="../adm/style.css">
    


</head>
<body>

    <!-- cabeçalho -->
    <header class="cabecalho fixed-top">
        <div class="navbar">
            
            <div class="logo">
                <a href="#"><img src="../usuario/img/logo 11.png" alt=""></a>
            </div>
            <div class="menu">
                <ul class="ativar">
                    <li><a href="../adm/index.php">Home</a></li>
                    <li><a href="../produto/produtos.php">Produtos</a></li>
                    <li><a href="../outros/sobre.php">Sobre</a></li>
                    <li><a href="../outros/contato.php">Contato</a></li>
                    

                    <div class="login-2">

                    <?php
                        if(!isset($_SESSION)){
                            session_start();
                        }
                        if(isset($_SESSION['cpf'])){
                            $cpf = $_SESSION['cpf'];
                            $nome = $_SESSION['nome'];
                            $nivel = $_SESSION['nivel'];

                            

                            if($nivel == "adm"){
                                
                                echo
                                "
                                <div class='login-2'>
                                        <li><a href='../adm/adm.php'>Administração</i></a></li>
                                    </div>
                                ";

                            }
                       
                        echo "
                            <div class='login-2'>
                                <li><a href='../usuario/usuario_perfil.php'>Minha conta</a></li>
                                <li><a href='../adm/logout.php'>Sair</a>;</li>
                            </div>
                             ";
                    }else{
                        echo "
                            <li><a href='../adm/login.php'>Login</a></li>
                            <li><a href='../usuario/cadastro.php'>Cadastre-se</a></li>
                        ";                       

                    }
                    
                        ?>
                    </div>
                    
                </ul>
            </div>

            <div class="perfil">
                
                
                <div class="perfil-container">

                    <div class="loginAcessar">
                        
                        <?php

                            if(!isset($_SESSION)){
                                session_start(); //iniciando a sessão.
                            }
                            if(isset($_SESSION['cpf'])){
                                $cpf = $_SESSION['cpf'];
                                $nome = $_SESSION['nome'];
                                $nivel = $_SESSION['nivel'];     

                                echo "<a href='../adm/logout.php'><i class='bx bx-log-out btn_ico' ></i> </a>";

                                    if($nivel == "adm"){
                                        echo "<a href='../adm/adm.php'><i class='bx bxs-cog btn_ico'></i></a>";
                                    }
                               
                                echo "
                                    <ul>
                                        <i class='bx bx-user perfil_btn btn_ico'></i>
                                        <ul class='dropUser'>
                                            <li class='perfilNome'>$nome</li>
                                            <li class='perfilCPF'>$cpf</li>
                                            <li class='perfilConta'><a href='../usuario/usuario_perfil.php'>Minha conta</a></li>
                                        </ul>
                                    </ul>
                                    ";
                            }else{
                            
                                ?>

                            
                        </div>

                        <div class="acesso">
                            <ul>
                                <li>
                                    <i class='bx bxs-user'></i>
                                    <ul class="dropdown">
                                        <li><a href="../adm/login.php">Login</a></li>
                                        <li><a href="../usuario/cadastro.php">Cadastre-se</a></li>

                                    </ul><?php } ?>
                                </li>

                            </ul>
                           
                        </div>
                        
                        <div class="carrinho">
                            <i class='bx bxs-cart-alt'></i>
                        </div>
                    </div>
            </div>

            <div class="bx bx-menu" id="menu-ico"></div>
        </div>
    </header>
        <!-- WhatsApp -->
        <a class="whatsapp-link" href="https://web.whatsapp.com/" target="_blank">
            <i class="fa fa-whatsapp"></i>
        </a>
        <script src="../script.js"></script>
    <section class="principal-container">
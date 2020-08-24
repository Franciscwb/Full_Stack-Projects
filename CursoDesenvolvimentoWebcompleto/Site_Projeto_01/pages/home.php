
<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Projeto 01</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet"> 
    
    <link href="<?php echo INCLUDE_PATH; ?>style/style.css" rel="stylesheet" />
  
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <meta name="description" content="Descrição do meu site">
    <meta charset="utf-8" />
</head>
<body>
    <header>
        <div class="center">
            <div class="logo left"><a href="/"></a>Logomarca</div><!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>        
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
        <div class="clear"></div><!--clear-->        
        </div><!--center-->
    </header>

    <section class="banner-principal">
        <div class="overlay"></div><!--overlay-->
        <div class="center">
            <form>
                <h2>Qual o seu melhor e-mail?</h2>
                <input type="email" name="acao" required />
                <input type="submit" name="acao" value="Cadastrar!">
            </form>
        </div><!--center-->
    </section><!--banner-principal-->

    <section class="descricao-autor">
        <div class="center">
            <div class="w50 left">
                <h2>Francis de Almeida</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet soluta ipsa illum, eaque debitis sed, 
                odio delectus assumenda in molestiae, eos dolor est aliquid facilis veritatis tempora quo labore nostrum.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet soluta ipsa illum, eaque debitis sed, 
                odio delectus assumenda in molestiae, eos dolor est aliquid facilis veritatis tempora quo labore nostrum.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet soluta ipsa illum, eaque debitis sed, 
                odio delectus assumenda in molestiae, eos dolor est aliquid facilis veritatis tempora quo labore nostrum.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet soluta ipsa illum, eaque debitis sed, 
                odio delectus assumenda in molestiae, eos dolor est aliquid facilis veritatis tempora quo labore nostrum.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet soluta ipsa illum, eaque debitis sed, 
                odio delectus assumenda in molestiae, eos dolor est aliquid facilis veritatis tempora quo labore nostrum.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet soluta ipsa illum, eaque debitis sed, 
                odio delectus assumenda in molestiae, eos dolor est aliquid facilis veritatis tempora quo labore nostrum.</p>
            </div><!--w50-->
            <div class="w50 left">
                <img class="right" src="<?php echo INCLUDE_PATH; ?>images/avatar.jpg">
            </div><!--w50-->
            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </section><!--descrição-autor-->

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="w33 left box-especialidade">
                <h3><i class="fa fa-css3" aria-hidden="true"></i></h3>
                <h4>CSS3</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet soluta ipsa illum, eaque debitis sed, 
                odio delectus assumenda in molestiae, eos dolor est aliquid facilis veritatis tempora quo labore nostrum.</p>
            </div><!--box-especialidades-->
            <div class="w33 left box-especialidade">  
                <h3><i class="fa fa-html5" aria-hidden="true"></i></h3>
                <h4>HTML5</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet soluta ipsa illum, eaque debitis sed, 
                odio delectus assumenda in molestiae, eos dolor est aliquid facilis veritatis tempora quo labore nostrum.</p>
            </div><!--box-especialidades-->
            <div class="w33 left box-especialidade">  
                <h3><i class="fa fa-gg-circle" aria-hidden="true"></i></h3>
                <h4>JAVASCRIPT</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet soluta ipsa illum, eaque debitis sed, 
                odio delectus assumenda in molestiae, eos dolor est aliquid facilis veritatis tempora quo labore nostrum.</p>
            </div><!--box-especialidades-->
            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </section><!--especialidades-->

    <section class="extras">

        <div class="center">
            <div id="depoimentos" class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos dos nossos clientes</h2>
                <div class="depoimento-single">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet soluta ipsa illum, eaque debitis sed, 
                    odio delectus assumenda in molestiae, eos dolor est aliquid facilis veritatis tempora quo labore nostrum.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet soluta ipsa illum, eaque debitis sed, 
                    odio delectus assumenda in molestiae, eos dolor est aliquid facilis veritatis tempora quo labore nostrum.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->
                <div class="depoimento-single">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet soluta ipsa illum, eaque debitis sed, 
                    odio delectus assumenda in molestiae, eos dolor est aliquid facilis veritatis tempora quo labore nostrum.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet soluta ipsa illum, eaque debitis sed, 
                    odio delectus assumenda in molestiae, eos dolor est aliquid facilis veritatis tempora quo labore nostrum.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimentos-single-->
                <div class="depoimento-single">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet soluta ipsa illum, eaque debitis sed, 
                    odio delectus assumenda in molestiae, eos dolor est aliquid facilis veritatis tempora quo labore nostrum.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet soluta ipsa illum, eaque debitis sed, 
                    odio delectus assumenda in molestiae, eos dolor est aliquid facilis veritatis tempora quo labore nostrum.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimentos-single-->
            </div><!--w50-->
            <div id="servicos" class="w50 left servicos-container">
                <h2 class="title">Serviços</h2>
                    <div class="servicos">
                        <ul>
                            <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet soluta ipsa illum, eaque debitis sed, 
                           odio delectus assumenda in molestiae, eos dolor est aliquid facilis veritatis tempora quo labore nostrum.</li>
                            <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet soluta ipsa illum, eaque debitis sed, 
                            odio delectus assumenda in molestiae, eos dolor est aliquid facilis veritatis tempora quo labore nostrum.</li>
                            <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet soluta ipsa illum, eaque debitis sed, 
                            odio delectus assumenda in molestiae, eos dolor est aliquid facilis veritatis tempora quo labore nostrum.</li>
                        </ul>
                    </div><!--servicos-->
            </div><!--w50-->
            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </section><!--extras-->
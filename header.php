<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>

    <header>

		<div class="navbar-fixed">
            <nav class="white">            
                <div class="nav-wrapper">

                    <a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>" class="brand-logo center red-text">O CAPITALSITA

                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="sass.html" class="blue-text">Compre</a></li>
                        <li><a href="sass.html" class="red-text">Venda</a></li>
                    </ul>  
                    <a href="" class="sidenav-trigger" data-target="mobile-links"><i class="material-icons black-text">menu</i></a>

                </div>                

            </nav>    
        </div>
        <ul class="sidenav" id="mobile-links">
            <li><a href="sass.html" class="black-text">Compre</a></li>
            <li><a href="sass.html" class="black-text">Venda</a></li>
        </ul>

    </header>

    <div class="header">
        <div class="content">
            <h3>EXERÇA SEU PAPEL COMO MEMBRO ATIVO DO CAPITALISMO!</h2>
            <h4>Comprar e vender são as ações que movimentam o mercado e portanto movitam o mundo e a sociedade.</p>
        </div>   
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
        })
    </script>
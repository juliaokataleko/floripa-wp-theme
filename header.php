<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" 
            href="/">
            <img style="width: 40px;" 
            src="<?=get_template_directory_uri();?>/images/logo.png" alt="Blog 94"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto flex-nowrap mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link
                        <?php if(is_front_page()) echo 'active'; ?>
                        " aria-current="page" 
                        href="<?=site_url('');?>">Página inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link
                        <?php if(get_post_type() == 'post') echo 'active'; ?>
                        " href="<?=site_url('/blog');?>">Blog</a>
                    </li>
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
                    <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
                </form> -->
            </div>
        </div>
    </nav>
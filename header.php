<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="<?php bloginfo( 'description' )?>"/>
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
<title><?php bloginfo( 'title' )?></title>
<?php wp_head()?>
</head>
<body <?php body_class()?>>

<?php wp_body_open(  )?>
    <!-- custom color scheme -->
<style>
    /* body background color */
    body{
        background-color: <?php echo get_theme_mod('theme_body_color','#EEFFFC')?> !important;
    }
    .dropdown-menu > a{
        background-color: <?php echo get_theme_mod('theme_body_color','#EEFFFC')?>;
    } 
    /* Theme color */
    .banner{
        background-color: <?php echo get_theme_mod( 'theme_color','#00E4BC' )?> !important;
    }
    .dropdown-menu{
        border: solid 1px <?php echo get_theme_mod( 'theme_color','#00E4BC' )?>;
    }
    .dropdown-menu >a{
        color:  <?php echo get_theme_mod( 'theme_color','#00E4BC' )?>;
    }
    .navbar-brand{
        color: <?php echo  get_theme_mod( 'theme_color','#00E4BC' )?>;
    }
    .navbar-brand:hover{
     color: <?php echo  get_theme_mod( 'theme_color','#00E4BC' )?>;
    }
    .navbar-collapse .CTA{
       background-color: <?php echo  get_theme_mod( 'theme_color','#00E4BC' )?>;
    }
    /* Theme text color */
    .nav-link{
        color:<?php echo get_theme_mod('theme_text_color','#49008E')?> !important;
    }
    .catalogue .card strong{
        color:<?php echo get_theme_mod('theme_text_color','#49008E')?>;
    }
    .catalogue .card p a{
        color:<?php echo get_theme_mod('theme_text_color','#49008E')?>;
    }
</style>
    <?php include(dirname(__FILE__)."/includes/templates/navbar.php")?>

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
<body <?php body_class()?> class="bodyColor">

<?php wp_body_open(  )?>
    <!-- custom color scheme -->
    <!-- variables -->
    <?php
    $text_color = get_theme_mod('theme_text_color','#024985');
    ?>
<style>
    /* body background color */
    .bodyColor{
        background-color: <?php echo get_theme_mod('theme_body_color','#EEFFFC')?> !important;
    }
    body{
        background-color: <?php echo get_theme_mod('theme_body_color','#EEFFFC')?> !important;
    }
    /* Theme color */
    .themeBackgroundColor{
        background-color: <?php echo get_theme_mod('theme_color','#1CAA9D')?> !important;
    }
.themeTextColor{
    color: <?php echo  get_theme_mod( 'theme_color','#1CAA9D' )?>;
}
    .navbar-brand:hover{
     color: <?php echo  get_theme_mod( 'theme_color','#1CAA9D' )?>;
    }
.dropdown-menu{
    color: white !important;
    background-color:<?php echo get_theme_mod( 'theme_color','#1CAA9D' )?>;
}
    /* Theme text color */
    .themeSecondaryTextColor{
        color:<?php echo $text_color?>;
    }
    /* arrow head */
    .dropdown > .dropdown-menu::before{
        border: solid 10px <?php echo get_theme_mod( 'theme_color','#1CAA9D' )?>;
    }
    /* front page */
    .hero{
   background-color: <?php echo $text_color.'67'?>;
    }
</style>
    <?php include(dirname(__FILE__)."/includes/templates/navbar.php")?>

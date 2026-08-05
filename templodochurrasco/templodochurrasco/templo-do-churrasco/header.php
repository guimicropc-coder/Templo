<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Preconnect para performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon-16x16.png">
    <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/apple-touch-icon.png">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- =====================================================
     BARRA SUPERIOR (Topbar)
     ===================================================== -->
<div class="topbar" role="banner" aria-label="Informações de contato">
    <div class="container">
        <div class="topbar-left">
            <span class="topbar-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-2.079 3.678-5.092 3.678-9.065C19.98 6.512 16.234 3 12 3S4.02 6.512 4.02 9.262c0 3.973 1.734 6.986 3.678 9.065a19.58 19.58 0 002.683 2.282 16.975 16.975 0 001.144.742zM12 12a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                </svg>
                Rio de Janeiro &mdash; RJ
            </span>
            <span class="topbar-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd"/>
                </svg>
                Atendimento: 7h às 22h
            </span>
        </div>

        <div class="topbar-right">
            <span class="topbar-item">Desde 2018</span>
            <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Gostaria de solicitar um orçamento.' ) ); ?>"
               target="_blank"
               rel="noopener noreferrer"
               class="topbar-whatsapp"
               aria-label="Fale pelo WhatsApp">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="14" height="14" aria-hidden="true">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                <?php echo esc_html( tdc_whatsapp_formatted() ); ?>
            </a>
        </div>
    </div>
</div>

<!-- =====================================================
     HEADER PRINCIPAL
     ===================================================== -->
<header class="site-header" id="site-header" role="banner">
    <div class="container">
        <div class="header-inner">

            <!-- LOGO -->
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
               class="site-logo"
               rel="home"
               aria-label="<?php bloginfo( 'name' ); ?> — Página Inicial">

                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <span class="logo-icon" aria-hidden="true">🔥</span>
                    <div class="logo-text">
                        <span class="logo-text-main">
                            Templo<span> do</span>
                        </span>
                        <span class="logo-text-main" style="color: var(--color-secondary);">Churrasco</span>
                        <span class="logo-text-sub">Churrasqueiro Gourmet · Rio de Janeiro</span>
                    </div>
                <?php endif; ?>
            </a>

            <!-- NAVEGAÇÃO PRINCIPAL (desktop) -->
            <nav class="main-nav" id="main-navigation" role="navigation" aria-label="Menu principal">
                <?php
                wp_nav_menu( [
                    'theme_location' => 'primary',
                    'menu_class'     => '',
                    'container'      => false,
                    'fallback_cb'    => 'tdc_fallback_menu',
                ] );
                ?>
            </nav>

            <!-- BOTÃO HAMBURGER (mobile) -->
            <button class="hamburger"
                    id="hamburger-btn"
                    aria-label="Abrir menu"
                    aria-expanded="false"
                    aria-controls="mobile-nav">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div><!-- /.header-inner -->
    </div><!-- /.container -->
</header>

<!-- =====================================================
     OVERLAY DO MENU MOBILE
     ===================================================== -->
<div class="mobile-menu-overlay" id="mobile-overlay" aria-hidden="true"></div>

<!-- =====================================================
     MENU MOBILE (lateral)
     ===================================================== -->
<nav class="mobile-nav" id="mobile-nav" role="navigation" aria-label="Menu mobile" aria-hidden="true">

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" style="margin-bottom: 2rem;">
        <span class="logo-icon">🔥</span>
        <div class="logo-text">
            <span class="logo-text-main">Templo do Churrasco</span>
            <span class="logo-text-sub">Churrasqueiro Gourmet</span>
        </div>
    </a>

    <?php
    wp_nav_menu( [
        'theme_location' => 'primary',
        'menu_class'     => '',
        'container'      => false,
        'fallback_cb'    => 'tdc_fallback_menu_mobile',
    ] );
    ?>

    <div class="mobile-nav-whatsapp" style="margin-top: 2rem;">
        <?php tdc_whatsapp_button( 'Solicitar Orçamento 🔥', '', 'btn-lg' ); ?>
    </div>

</nav>

<!-- =====================================================
     BOTÃO FLUTUANTE DO WHATSAPP
     ===================================================== -->
<div class="whatsapp-float" role="complementary" aria-label="Contato via WhatsApp">
    <div class="whatsapp-float-bubble" aria-hidden="true">
        Churrasco perfeito para o seu evento? Fala comigo! 🔥
    </div>
    <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Vim pelo site e quero saber mais sobre os serviços do Templo do Churrasco.' ) ); ?>"
       class="whatsapp-float-btn"
       target="_blank"
       rel="noopener noreferrer"
       aria-label="Fale pelo WhatsApp com o Guilherme">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="28" height="28" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
    </a>
</div>

<!-- =====================================================
     INÍCIO DO CONTEÚDO PRINCIPAL
     ===================================================== -->
<main id="main-content" role="main">

<?php
/**
 * Menu de fallback — quando nenhum menu está cadastrado
 */
function tdc_fallback_menu() {
    echo '<ul>';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Início</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/sobre' ) ) . '">Sobre</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/servicos' ) ) . '">Serviços</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/galeria' ) ) . '">Galeria</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/blog' ) ) . '">Blog</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/calculadora' ) ) . '">Calculadora</a></li>';
    echo '<li><a href="' . esc_url( tdc_whatsapp_url( 'Olá! Gostaria de um orçamento.' ) ) . '" class="nav-cta" target="_blank">Orçamento 🔥</a></li>';
    echo '</ul>';
}

function tdc_fallback_menu_mobile() {
    echo '<ul>';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">🏠 Início</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/sobre' ) ) . '">👨‍🍳 Sobre</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/servicos' ) ) . '">🥩 Serviços</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/galeria' ) ) . '">📸 Galeria</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/blog' ) ) . '">📝 Blog</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/calculadora' ) ) . '">🧮 Calculadora</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/contato' ) ) . '">📞 Contato</a></li>';
    echo '</ul>';
}
?>

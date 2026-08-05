<?php
/**
 * Template da página 404 — Página não encontrada
 * Template: 404.php
 *
 * @package TemplodoChurrasco
 */

get_header();
?>

<section class="page-404" aria-label="Página não encontrada">
    <div class="container">
        <div style="max-width: 600px; margin: 0 auto; text-align: center;" class="fade-in">

            <div class="error-code" aria-hidden="true">404</div>

            <span class="error-emoji" role="img" aria-label="Fogo">🔥</span>

            <h1 class="error-title">
                Essa carne saiu do cardápio!
            </h1>

            <p class="error-text">
                A página que você está procurando foi para a brasa e não voltou mais. Mas não se preocupa — o churrasco continua!
            </p>

            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 3rem;">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                   class="btn btn-primary btn-lg">
                    🏠 Voltar para o início
                </a>
                <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Estava navegando pelo site e me perdi. Pode me ajudar?' ) ); ?>"
                   class="btn btn-whatsapp btn-lg"
                   target="_blank"
                   rel="noopener noreferrer">
                    Falar pelo WhatsApp
                </a>
            </div>

            <!-- Links rápidos -->
            <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 2rem;">
                <p style="color: rgba(255,255,255,0.4); font-size: 0.875rem; margin-bottom: 1.5rem; text-transform: uppercase; letter-spacing: 0.08em; font-family: var(--font-heading);">
                    Ou explore o menu
                </p>
                <div style="display: flex; gap: 0.75rem; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo esc_url( home_url( '/sobre' ) ); ?>"
                       style="color: rgba(255,255,255,0.5); text-decoration: none; font-size: 0.875rem; transition: color 0.2s;"
                       onmouseover="this.style.color='var(--color-secondary)'"
                       onmouseout="this.style.color='rgba(255,255,255,0.5)'">
                        Sobre
                    </a>
                    <span style="color: rgba(255,255,255,0.2);" aria-hidden="true">·</span>
                    <a href="<?php echo esc_url( home_url( '/servicos' ) ); ?>"
                       style="color: rgba(255,255,255,0.5); text-decoration: none; font-size: 0.875rem; transition: color 0.2s;"
                       onmouseover="this.style.color='var(--color-secondary)'"
                       onmouseout="this.style.color='rgba(255,255,255,0.5)'">
                        Serviços
                    </a>
                    <span style="color: rgba(255,255,255,0.2);" aria-hidden="true">·</span>
                    <a href="<?php echo esc_url( home_url( '/galeria' ) ); ?>"
                       style="color: rgba(255,255,255,0.5); text-decoration: none; font-size: 0.875rem; transition: color 0.2s;"
                       onmouseover="this.style.color='var(--color-secondary)'"
                       onmouseout="this.style.color='rgba(255,255,255,0.5)'">
                        Galeria
                    </a>
                    <span style="color: rgba(255,255,255,0.2);" aria-hidden="true">·</span>
                    <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"
                       style="color: rgba(255,255,255,0.5); text-decoration: none; font-size: 0.875rem; transition: color 0.2s;"
                       onmouseover="this.style.color='var(--color-secondary)'"
                       onmouseout="this.style.color='rgba(255,255,255,0.5)'">
                        Blog
                    </a>
                    <span style="color: rgba(255,255,255,0.2);" aria-hidden="true">·</span>
                    <a href="<?php echo esc_url( home_url( '/calculadora' ) ); ?>"
                       style="color: rgba(255,255,255,0.5); text-decoration: none; font-size: 0.875rem; transition: color 0.2s;"
                       onmouseover="this.style.color='var(--color-secondary)'"
                       onmouseout="this.style.color='rgba(255,255,255,0.5)'">
                        Calculadora
                    </a>
                    <span style="color: rgba(255,255,255,0.2);" aria-hidden="true">·</span>
                    <a href="<?php echo esc_url( home_url( '/contato' ) ); ?>"
                       style="color: rgba(255,255,255,0.5); text-decoration: none; font-size: 0.875rem; transition: color 0.2s;"
                       onmouseover="this.style.color='var(--color-secondary)'"
                       onmouseout="this.style.color='rgba(255,255,255,0.5)'">
                        Contato
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
.page-404 {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--color-dark) 0%, #1a0a0a 100%);
    padding: 4rem 0;
}
</style>

<?php get_footer(); ?>

<?php
/**
 * Template genérico de página
 * Template: page.php
 *
 * @package TemplodoChurrasco
 */

get_header();
?>

<!-- Hero genérico da página -->
<section class="page-hero" aria-label="<?php the_title_attribute(); ?>">
    <div class="container">
        <h1 class="page-hero-title"><?php the_title(); ?></h1>
        <div class="breadcrumb" aria-label="Localização na página">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a>
            <span class="breadcrumb-sep" aria-hidden="true">›</span>
            <span aria-current="page"><?php the_title(); ?></span>
        </div>
    </div>
</section>

<section style="background: var(--color-bg-light); padding: 4rem 0;">
    <div class="container">
        <div style="max-width: 860px; margin: 0 auto;">

            <?php while ( have_posts() ) : the_post(); ?>

                <article class="post-content" style="background: var(--color-white); border-radius: var(--border-radius-md); padding: 3rem; box-shadow: var(--shadow-sm);">

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div style="margin-bottom: 2rem; border-radius: var(--border-radius); overflow: hidden;">
                            <?php the_post_thumbnail( 'tdc-hero', [ 'style' => 'width: 100%; height: auto;', 'alt' => get_the_title() ] ); ?>
                        </div>
                    <?php endif; ?>

                    <?php the_content(); ?>

                    <?php
                    wp_link_pages( [
                        'before' => '<div class="page-links"><strong>' . __( 'Páginas:', 'templo-do-churrasco' ) . '</strong>',
                        'after'  => '</div>',
                    ] );
                    ?>

                </article>

            <?php endwhile; ?>

        </div>
    </div>
</section>

<!-- CTA no final de toda página -->
<section class="cta-section section-sm" aria-label="Solicitar orçamento">
    <div class="container text-center fade-in">
        <h2 style="font-size: 1.75rem; color: white; margin-bottom: 1rem;">
            Pronto para o churrasco perfeito? 🔥
        </h2>
        <p style="color: rgba(255,255,255,0.85); margin-bottom: 2rem;">
            Me chama no WhatsApp e a gente planeja tudo!
        </p>
        <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Quero solicitar um orçamento para o Templo do Churrasco!' ) ); ?>"
           class="btn btn-whatsapp btn-lg"
           target="_blank"
           rel="noopener noreferrer">
            Falar no WhatsApp
        </a>
    </div>
</section>

<?php get_footer(); ?>

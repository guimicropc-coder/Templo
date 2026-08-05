<?php
/**
 * Fallback principal — index.php
 * Utilizado quando nenhum outro template é encontrado pelo WordPress.
 *
 * @package TemplodoChurrasco
 */

get_header();
?>

<section style="background: var(--color-bg-light); padding: 4rem 0; min-height: 50vh;" aria-label="Conteúdo principal">
    <div class="container">

        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <article class="blog-card" style="max-width: 800px; margin: 0 auto 2rem;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="blog-card-img-wrapper">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'tdc-card', [ 'class' => 'blog-card-img', 'alt' => get_the_title() ] ); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <div class="blog-card-body">
                        <h2 class="blog-card-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <div class="blog-card-meta">
                            <span><?php echo get_the_date( 'd M Y' ); ?></span>
                        </div>

                        <p class="blog-card-excerpt">
                            <?php echo esc_html( wp_trim_words( get_the_excerpt(), 30, '...' ) ); ?>
                        </p>

                        <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm">
                            Ler mais
                        </a>
                    </div>

                </article>

            <?php endwhile; ?>

            <?php tdc_pagination(); ?>

        <?php else : ?>

            <div style="text-align: center; padding: 4rem 0;">
                <span style="font-size: 4rem; display: block; margin-bottom: 1.5rem;" aria-hidden="true">🔥</span>
                <h2 style="font-size: 1.75rem; color: var(--color-dark); margin-bottom: 1rem;">
                    Em breve novidades em chama!
                </h2>
                <p style="color: var(--color-gray-600); margin-bottom: 2rem;">
                    O Guilherme está preparando conteúdo incrível sobre churrasco para você.
                </p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
                    Ir para o início
                </a>
            </div>

        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>

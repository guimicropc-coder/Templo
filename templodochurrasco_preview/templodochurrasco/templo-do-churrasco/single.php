<?php
/**
 * Template para post individual do blog
 * Template: single.php
 *
 * @package TemplodoChurrasco
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

<!-- =====================================================
     HEADER DO POST
     ===================================================== -->
<header class="post-header" role="banner" aria-label="Cabeçalho do artigo">

    <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'tdc-hero', [ 'class' => 'post-featured-img', 'alt' => get_the_title(), 'aria-hidden' => 'true' ] ); ?>
    <?php endif; ?>

    <div class="container">

        <!-- Meta: categorias e data -->
        <div class="post-meta">
            <?php
            $categories = get_the_category();
            if ( $categories ) :
                foreach ( $categories as $cat ) :
            ?>
                <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>"
                   class="post-category-badge">
                    <?php echo esc_html( $cat->name ); ?>
                </a>
            <?php
                endforeach;
            endif;
            ?>

            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="14" height="14" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd"/>
                </svg>
                <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                    <?php echo get_the_date( 'd \d\e F \d\e Y' ); ?>
                </time>
            </span>

            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="14" height="14" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z" clip-rule="evenodd"/>
                </svg>
                <?php echo esc_html( tdc_reading_time() ); ?>
            </span>

            <span>
                Por <strong style="color: var(--color-secondary);">Guilherme Santos</strong>
            </span>
        </div>

        <h1 class="post-title"><?php the_title(); ?></h1>

    </div>
</header>

<!-- =====================================================
     CONTEÚDO DO POST
     ===================================================== -->
<div style="background: var(--color-bg-light);">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto; padding: 3rem 0;">

            <!-- Conteúdo principal -->
            <article class="post-content" id="post-content-<?php the_ID(); ?>" aria-label="Conteúdo do artigo">
                <?php the_content(); ?>
            </article>

            <!-- Tags -->
            <?php
            $tags = get_the_tags();
            if ( $tags ) :
            ?>
                <div style="margin-top: 2rem;" aria-label="Tags do artigo">
                    <strong style="font-size: 0.875rem; color: var(--color-gray-600); margin-right: 0.5rem;">Tags:</strong>
                    <?php foreach ( $tags as $tag ) : ?>
                        <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>"
                           class="tag"
                           rel="tag">
                            <?php echo esc_html( $tag->name ); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Compartilhamento -->
            <div class="share-buttons" aria-label="Compartilhar artigo">
                <span class="share-label">Compartilhe:</span>

                <a href="<?php echo esc_url( 'https://wa.me/?text=' . rawurlencode( get_the_title() . ' — Leia em: ' . get_the_permalink() ) ); ?>"
                   class="share-btn whatsapp"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="Compartilhar no WhatsApp">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="16" height="16" aria-hidden="true">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    WhatsApp
                </a>

                <button class="share-btn"
                        onclick="navigator.share ? navigator.share({title: '<?php echo esc_js( get_the_title() ); ?>', url: '<?php echo esc_js( get_the_permalink() ); ?>'}) : copyToClipboard('<?php echo esc_js( get_the_permalink() ); ?>')"
                        style="background: rgba(0,0,0,0.06); color: var(--color-gray-700); border: 1px solid var(--color-gray-200);"
                        aria-label="Copiar link do artigo">
                    🔗 Copiar link
                </button>
            </div>

            <!-- Bio do Autor -->
            <div class="author-box fade-in" aria-label="Sobre o autor">
                <div class="author-avatar">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 80, '', 'Foto do autor' ); ?>
                </div>
                <div class="author-info">
                    <div class="author-name">Guilherme Santos</div>
                    <div class="author-role">🔥 Churrasqueiro Gourmet — Templo do Churrasco</div>
                    <p class="author-bio">
                        Churrasqueiro profissional com mais de 7 anos de experiência e 380+ eventos realizados no Rio de Janeiro. Criador do Método Brasa Viva — a técnica que garante churrascos perfeitos em cada evento. Apaixonado pelo fogo, pela carne e por criar experiências inesquecíveis para as famílias cariocas.
                    </p>
                    <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Li seu artigo e quero saber mais sobre o Templo do Churrasco!' ) ); ?>"
                       class="btn btn-whatsapp btn-sm"
                       target="_blank"
                       rel="noopener noreferrer"
                       style="margin-top: 1rem;">
                        Falar com o Guilherme
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- =====================================================
     CTA DENTRO DO POST
     ===================================================== -->
<div style="background: linear-gradient(135deg, var(--color-primary), var(--color-secondary)); padding: 3rem 0;" aria-label="Solicitar churrasco">
    <div class="container text-center">
        <h2 style="font-size: 1.75rem; color: white; margin-bottom: 1rem;">
            Gostou das dicas? Que tal contratar o churrasco perfeito? 🔥
        </h2>
        <p style="color: rgba(255,255,255,0.85); margin-bottom: 2rem; font-size: 1rem;">
            Aplico tudo isso e muito mais no seu evento. Me chama no WhatsApp!
        </p>
        <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Li o artigo "' . get_the_title() . '" e quero saber sobre os serviços do Templo do Churrasco!' ) ); ?>"
           class="btn btn-whatsapp btn-lg"
           target="_blank"
           rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="22" height="22" aria-hidden="true">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
            Falar com Guilherme no WhatsApp
        </a>
    </div>
</div>

<!-- =====================================================
     POSTS RELACIONADOS
     ===================================================== -->
<?php
$categories = get_the_category();
if ( $categories ) :
    $cat_ids  = wp_list_pluck( $categories, 'term_id' );
    $related  = new WP_Query( [
        'category__in'        => $cat_ids,
        'post__not_in'        => [ get_the_ID() ],
        'posts_per_page'      => 3,
        'orderby'             => 'rand',
        'ignore_sticky_posts' => true,
    ] );

    if ( $related->have_posts() ) :
?>
    <section class="section" style="background: var(--color-white);" aria-label="Posts relacionados">
        <div class="container">
            <h2 style="font-size: 1.75rem; margin-bottom: 2.5rem; color: var(--color-dark);">
                Você também pode gostar 🔥
            </h2>
            <div class="blog-grid">
                <?php while ( $related->have_posts() ) : $related->the_post(); ?>
                    <article class="blog-card" aria-label="<?php the_title_attribute(); ?>">
                        <div class="blog-card-img-wrapper">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
                                    <?php the_post_thumbnail( 'tdc-card', [ 'class' => 'blog-card-img', 'alt' => get_the_title() ] ); ?>
                                </a>
                            <?php else : ?>
                                <div class="blog-card-img-placeholder" aria-hidden="true">🔥</div>
                            <?php endif; ?>
                        </div>
                        <div class="blog-card-body">
                            <div class="blog-card-meta">
                                <span><?php echo get_the_date( 'd M Y' ); ?></span>
                                <span><?php echo esc_html( tdc_reading_time() ); ?></span>
                            </div>
                            <h3 class="blog-card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <a href="<?php the_permalink(); ?>" class="blog-card-link">
                                Ler artigo →
                            </a>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php
    endif;
endif;
?>

<?php endwhile; // End of the loop ?>

<script>
function copyToClipboard(text) {
    if (navigator.clipboard) {
        navigator.clipboard.writeText(text).then(function() {
            alert('Link copiado! 🔥');
        });
    } else {
        const el = document.createElement('textarea');
        el.value = text;
        document.body.appendChild(el);
        el.select();
        document.execCommand('copy');
        document.body.removeChild(el);
        alert('Link copiado!');
    }
}
</script>

<?php get_footer(); ?>

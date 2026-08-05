<?php
/**
 * Template de arquivo/listagem do blog
 * Template: archive.php
 *
 * @package TemplodoChurrasco
 */

get_header();
?>

<!-- =====================================================
     HERO DO BLOG
     ===================================================== -->
<section class="page-hero" aria-label="Blog de dicas de churrasco">
    <div class="container">
        <?php
        if ( is_category() ) :
            $cat = get_queried_object();
        ?>
            <span class="section-label light" style="display: inline-block; margin-bottom: 1.5rem;">Categoria</span>
            <h1 class="page-hero-title"><?php echo esc_html( $cat->name ); ?></h1>
            <?php if ( $cat->description ) : ?>
                <p class="page-hero-subtitle"><?php echo esc_html( $cat->description ); ?></p>
            <?php endif; ?>

        <?php elseif ( is_tag() ) : ?>
            <span class="section-label light" style="display: inline-block; margin-bottom: 1.5rem;">Tag</span>
            <h1 class="page-hero-title">Tag: <span><?php single_tag_title(); ?></span></h1>

        <?php elseif ( is_author() ) : ?>
            <span class="section-label light" style="display: inline-block; margin-bottom: 1.5rem;">Autor</span>
            <h1 class="page-hero-title">Por <span>Guilherme Santos</span></h1>
            <p class="page-hero-subtitle">Churrasqueiro Gourmet — Templo do Churrasco, Rio de Janeiro</p>

        <?php elseif ( is_date() ) : ?>
            <h1 class="page-hero-title">Artigos de <span><?php echo get_the_date( 'F Y' ); ?></span></h1>

        <?php else : ?>
            <span class="section-label light" style="display: inline-block; margin-bottom: 1.5rem;">Aprenda com quem entende</span>
            <h1 class="page-hero-title">Blog — <span>Dicas de Churrasco</span> 🔥</h1>
            <p class="page-hero-subtitle">
                Segredos, técnicas e receitas para você fazer (ou contratar) o churrasco perfeito. Tudo do Guilherme Santos, churrasqueiro gourmet no Rio de Janeiro.
            </p>
        <?php endif; ?>

        <div class="breadcrumb" aria-label="Localização na página">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a>
            <span class="breadcrumb-sep" aria-hidden="true">›</span>
            <span aria-current="page">Blog</span>
        </div>
    </div>
</section>

<!-- =====================================================
     CONTEÚDO: POSTS + SIDEBAR
     ===================================================== -->
<section style="background: var(--color-bg-light); padding: 4rem 0;" aria-label="Artigos do blog">
    <div class="container">
        <div class="blog-layout">

            <!-- LISTA DE POSTS -->
            <main id="main-posts" role="main" aria-label="Lista de artigos">

                <?php if ( have_posts() ) : ?>

                    <div class="blog-grid" style="grid-template-columns: repeat(2, 1fr);">

                        <?php while ( have_posts() ) : the_post(); ?>

                            <article class="blog-card fade-in" aria-label="<?php the_title_attribute(); ?>">

                                <div class="blog-card-img-wrapper">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
                                            <?php the_post_thumbnail( 'tdc-card', [ 'class' => 'blog-card-img', 'alt' => get_the_title() ] ); ?>
                                        </a>
                                    <?php else : ?>
                                        <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
                                            <div class="blog-card-img-placeholder">🔥</div>
                                        </a>
                                    <?php endif; ?>

                                    <?php
                                    $categories = get_the_category();
                                    if ( $categories ) : ?>
                                        <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>"
                                           class="blog-card-category">
                                            <?php echo esc_html( $categories[0]->name ); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>

                                <div class="blog-card-body">
                                    <div class="blog-card-meta">
                                        <span>
                                            <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                                                <?php echo get_the_date( 'd M Y' ); ?>
                                            </time>
                                        </span>
                                        <span><?php echo esc_html( tdc_reading_time() ); ?></span>
                                    </div>

                                    <h2 class="blog-card-title" style="font-size: 1.125rem;">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>

                                    <p class="blog-card-excerpt">
                                        <?php echo esc_html( wp_trim_words( get_the_excerpt(), 22, '...' ) ); ?>
                                    </p>

                                    <a href="<?php the_permalink(); ?>"
                                       class="blog-card-link"
                                       aria-label="Ler artigo: <?php the_title_attribute(); ?>">
                                        Ler artigo
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="14" height="14" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"/>
                                        </svg>
                                    </a>
                                </div>

                            </article>

                        <?php endwhile; ?>

                    </div>

                    <!-- Paginação -->
                    <nav class="pagination" aria-label="Paginação do blog">
                        <?php
                        echo paginate_links( [
                            'prev_text' => '&larr; Anterior',
                            'next_text' => 'Próximo &rarr;',
                            'type'      => 'plain',
                            'end_size'  => 2,
                            'mid_size'  => 2,
                        ] );
                        ?>
                    </nav>

                <?php else : ?>

                    <div style="background: var(--color-white); border-radius: var(--border-radius-md); padding: 4rem 2rem; text-align: center; box-shadow: var(--shadow-sm);" role="status">
                        <span style="font-size: 4rem; display: block; margin-bottom: 1.5rem;" aria-hidden="true">📝</span>
                        <h2 style="font-size: 1.5rem; color: var(--color-dark); margin-bottom: 1rem;">
                            Nenhum artigo encontrado
                        </h2>
                        <p style="color: var(--color-gray-600); margin-bottom: 2rem;">
                            Em breve o Guilherme vai publicar dicas e segredos do churrasco perfeito aqui!
                        </p>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
                            Voltar para o início
                        </a>
                    </div>

                <?php endif; ?>

            </main>

            <!-- SIDEBAR -->
            <aside class="sidebar" role="complementary" aria-label="Barra lateral">

                <!-- CTA WhatsApp na sidebar -->
                <div class="sidebar-cta">
                    <h3 class="sidebar-widget-title" style="color: white; border-bottom-color: var(--color-secondary);">
                        🔥 Quer o churrasco perfeito?
                    </h3>
                    <p>Chama o Guilherme! 380+ eventos realizados no Rio de Janeiro com 100% de satisfação.</p>
                    <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Estava lendo o blog e quero solicitar um orçamento!' ) ); ?>"
                       class="btn btn-whatsapp"
                       target="_blank"
                       rel="noopener noreferrer"
                       style="width: 100%; justify-content: center;">
                        Solicitar Orçamento
                    </a>
                </div>

                <!-- Categorias -->
                <div class="sidebar-widget">
                    <h3 class="sidebar-widget-title">Categorias</h3>
                    <ul class="widget-list">
                        <?php
                        $cats = get_categories( [
                            'orderby'    => 'count',
                            'order'      => 'DESC',
                            'hide_empty' => false,
                        ] );
                        if ( $cats ) :
                            foreach ( $cats as $cat ) :
                        ?>
                            <li>
                                <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>">
                                    <?php echo esc_html( $cat->name ); ?>
                                    <span class="count"><?php echo absint( $cat->count ); ?></span>
                                </a>
                            </li>
                        <?php
                            endforeach;
                        else :
                        ?>
                            <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Dicas de Churrasco <span class="count">0</span></a></li>
                            <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Técnicas <span class="count">0</span></a></li>
                            <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Receitas <span class="count">0</span></a></li>
                        <?php endif; ?>
                    </ul>
                </div>

                <!-- Posts Recentes -->
                <div class="sidebar-widget">
                    <h3 class="sidebar-widget-title">Posts Recentes</h3>
                    <?php
                    $recent = new WP_Query( [
                        'posts_per_page'      => 5,
                        'ignore_sticky_posts' => true,
                    ] );
                    if ( $recent->have_posts() ) :
                    ?>
                        <ul class="widget-list">
                            <?php while ( $recent->have_posts() ) : $recent->the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </ul>
                    <?php endif; ?>
                </div>

                <!-- Tags -->
                <?php
                $tags = get_tags( [ 'hide_empty' => false ] );
                if ( $tags ) :
                ?>
                    <div class="sidebar-widget">
                        <h3 class="sidebar-widget-title">Tags</h3>
                        <div style="display: flex; flex-wrap: wrap; gap: 0.25rem;">
                            <?php foreach ( $tags as $tag ) : ?>
                                <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="tag">
                                    <?php echo esc_html( $tag->name ); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Calculadora -->
                <div class="sidebar-widget" style="text-align: center; background: var(--color-bg-light); border: 1px solid var(--color-gray-200);">
                    <span style="font-size: 2.5rem; display: block; margin-bottom: 0.75rem;" aria-hidden="true">🧮</span>
                    <h3 style="font-size: 1rem; color: var(--color-dark); margin-bottom: 0.5rem;">Calculadora de Carne</h3>
                    <p style="font-size: 0.8125rem; color: var(--color-gray-600); margin-bottom: 1rem;">
                        Descubra quanto de carne você precisa para o seu churrasco!
                    </p>
                    <a href="<?php echo esc_url( home_url( '/calculadora' ) ); ?>"
                       class="btn btn-primary btn-sm"
                       style="width: 100%; justify-content: center; font-size: 0.8125rem;">
                        Calcular agora
                    </a>
                </div>

            </aside>

        </div>
    </div>
</section>

<?php get_footer(); ?>

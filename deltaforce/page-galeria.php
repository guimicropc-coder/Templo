<?php
/**
 * Template Name: Galeria
 * Template: page-galeria.php
 * Página de Galeria de Fotos — Templo do Churrasco
 *
 * COMO ADICIONAR FOTOS:
 * 1. Acesse o WordPress Admin > Páginas > Galeria
 * 2. Clique em "Editar"
 * 3. No editor de blocos (Gutenberg), adicione um bloco "Galeria"
 * 4. Faça upload das suas fotos diretamente no bloco
 * 5. Configure o número de colunas desejado (recomendado: 3)
 * 6. Publique/Atualize a página
 *
 * Alternativamente, você pode usar o shortcode nativo:
 * [gallery columns="3" size="medium"]
 *
 * @package TemplodoChurrasco
 */

get_header();
?>

<!-- HERO -->
<section class="page-hero" aria-label="Galeria de fotos">
    <div class="container">
        <span class="section-label light" style="display: inline-block; margin-bottom: 1.5rem;">Veja o resultado</span>
        <h1 class="page-hero-title">Galeria de <span>Fotos</span> 📸</h1>
        <p class="page-hero-subtitle">
            Cada foto conta uma história de churrasco perfeito. Veja o resultado do Método Brasa Viva na prática.
        </p>
        <div class="breadcrumb" aria-label="Localização na página">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a>
            <span class="breadcrumb-sep" aria-hidden="true">›</span>
            <span aria-current="page">Galeria</span>
        </div>
    </div>
</section>

<!-- =====================================================
     GALERIA PRINCIPAL
     ===================================================== -->
<section class="section" style="background: var(--color-bg-light);" aria-label="Galeria de fotos">
    <div class="container">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php
            // Se o usuário adicionou galeria ou conteúdo via editor
            $content = get_the_content();

            if ( ! empty( $content ) ) :
            ?>
                <!-- Conteúdo adicionado via editor (galeria nativa, blocos, etc.) -->
                <div class="gallery-from-editor" style="margin-bottom: 3rem;">
                    <?php the_content(); ?>
                </div>

            <?php else : ?>

                <!-- Galeria de fotos do buffet — arquivos do tema em assets/images/galeria-home/ -->
                <div class="gallery-grid" aria-label="Fotos do buffet de churrasco Templo do Churrasco pelo Rio de Janeiro">

                    <?php
                    $galeria_home_dir = [
                        'camorim'         => 'Camorim',
                        'caxias'          => 'Caxias',
                        'iraja'           => 'Irajá',
                        'jacarepagua'     => 'Jacarepaguá',
                        'largo-do-bicao'  => 'Largo do Bicão',
                        'madureira'       => 'Madureira',
                        'olaria'          => 'Olaria',
                        'recreio'         => 'Recreio',
                        'rio-de-janeiro'  => 'Rio de Janeiro',
                        'rj'              => 'Rio de Janeiro — RJ',
                        'vila-da-penha'   => 'Vila da Penha',
                        'vila-valqueire'  => 'Vila Valqueire',
                        'vista-alegre'    => 'Vista Alegre',
                    ];

                    foreach ( $galeria_home_dir as $slug => $bairro ) :
                        $filename = 'buffet-de-churrasco-' . $slug . '.jpg';
                        $img_url  = TDC_URI . '/assets/images/galeria-home/' . $filename;
                        $alt      = 'Buffet de churrasco em ' . $bairro . ' — Templo do Churrasco';
                    ?>
                        <div class="gallery-item fade-in"
                             data-full="<?php echo esc_url( $img_url ); ?>"
                             role="button"
                             tabindex="0"
                             aria-label="Ver foto: <?php echo esc_attr( $alt ); ?>"
                             onclick="openLightbox('<?php echo esc_js( $img_url ); ?>')"
                             onkeypress="if(event.key==='Enter') openLightbox('<?php echo esc_js( $img_url ); ?>')">
                            <img src="<?php echo esc_url( $img_url ); ?>"
                                 alt="<?php echo esc_attr( $alt ); ?>"
                                 loading="lazy">
                            <div class="gallery-item-overlay" aria-hidden="true">
                                <span>🔍</span>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

            <?php endif; ?>

        <?php endwhile; endif; ?>

        <!-- Fotos do banco de mídia do WordPress -->
        <?php
        // Buscar imagens da galeria anexadas a esta página
        $gallery_images = get_attached_media( 'image', get_the_ID() );

        if ( ! empty( $gallery_images ) ) :
        ?>
            <div class="gallery-grid" aria-label="Galeria de fotos do churrasco">
                <?php foreach ( $gallery_images as $img ) : ?>
                    <?php
                    $full_url  = wp_get_attachment_image_url( $img->ID, 'full' );
                    $thumb_url = wp_get_attachment_image_url( $img->ID, 'tdc-square' );
                    $alt       = get_post_meta( $img->ID, '_wp_attachment_image_alt', true );
                    $alt       = $alt ?: 'Foto do churrasco — Templo do Churrasco';
                    ?>
                    <div class="gallery-item fade-in"
                         data-full="<?php echo esc_url( $full_url ); ?>"
                         role="button"
                         tabindex="0"
                         aria-label="Ver foto: <?php echo esc_attr( $alt ); ?>"
                         onclick="openLightbox('<?php echo esc_js( $full_url ); ?>')"
                         onkeypress="if(event.key==='Enter') openLightbox('<?php echo esc_js( $full_url ); ?>')">
                        <img src="<?php echo esc_url( $thumb_url ); ?>"
                             alt="<?php echo esc_attr( $alt ); ?>"
                             loading="lazy">
                        <div class="gallery-item-overlay" aria-hidden="true">
                            <span>🔍</span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</section>

<!-- =====================================================
     LIGHTBOX
     ===================================================== -->
<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Visualizar foto">
    <button class="lightbox-close"
            onclick="closeLightbox()"
            aria-label="Fechar galeria">
        ×
    </button>
    <img class="lightbox-img" id="lightbox-img" src="" alt="Foto do churrasco — Templo do Churrasco">
</div>

<script>
function openLightbox(src) {
    const lb = document.getElementById('lightbox');
    const img = document.getElementById('lightbox-img');
    img.src = src;
    lb.classList.add('active');
    document.body.style.overflow = 'hidden';
    lb.focus();
}

function closeLightbox() {
    const lb = document.getElementById('lightbox');
    lb.classList.remove('active');
    document.body.style.overflow = '';
}

document.getElementById('lightbox').addEventListener('click', function(e) {
    if (e.target === this) closeLightbox();
});

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeLightbox();
});
</script>

<!-- =====================================================
     COMO FUNCIONA
     ===================================================== -->
<section class="section" style="background: linear-gradient(135deg, var(--color-dark), #1a0a0a);" aria-label="Sobre as fotos">
    <div class="container">
        <div class="grid grid-3" style="gap: 2rem;">
            <div style="text-align: center; padding: 2rem;" class="fade-in">
                <span style="font-size: 3rem; display: block; margin-bottom: 1rem;" aria-hidden="true">🔥</span>
                <h3 style="color: white; margin-bottom: 1rem; font-size: 1.125rem;">Churrasco na brasa</h3>
                <p style="color: rgba(255,255,255,0.6); font-size: 0.875rem; line-height: 1.7;">
                    Cada foto mostra o resultado do Método Brasa Viva em ação. Fogo controlado, carne perfeita.
                </p>
            </div>
            <div style="text-align: center; padding: 2rem;" class="fade-in delay-1">
                <span style="font-size: 3rem; display: block; margin-bottom: 1rem;" aria-hidden="true">👨‍🍳</span>
                <h3 style="color: white; margin-bottom: 1rem; font-size: 1.125rem;">Profissionalismo total</h3>
                <p style="color: rgba(255,255,255,0.6); font-size: 0.875rem; line-height: 1.7;">
                    Cada evento é tratado com dedicação e cuidado. Você vê nos detalhes: na apresentação, no serviço, nas carnes.
                </p>
            </div>
            <div style="text-align: center; padding: 2rem;" class="fade-in delay-2">
                <span style="font-size: 3rem; display: block; margin-bottom: 1rem;" aria-hidden="true">🎉</span>
                <h3 style="color: white; margin-bottom: 1rem; font-size: 1.125rem;">Momentos inesquecíveis</h3>
                <p style="color: rgba(255,255,255,0.6); font-size: 0.875rem; line-height: 1.7;">
                    Mais de 380 eventos realizados, cada um com a energia e dedicação de quem faz por amor.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section section" aria-label="Solicitar orçamento">
    <div class="container text-center fade-in">
        <h2 class="cta-title">Quer que o seu evento<br>entre nessa galeria? 🔥</h2>
        <p class="cta-subtitle">Me chama no WhatsApp e vamos planejar um churrasco que todo mundo vai lembrar!</p>
        <div class="cta-buttons">
            <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Vi a galeria do Templo do Churrasco e quero fazer um churrasco igual! Podemos conversar?' ) ); ?>"
               class="btn btn-whatsapp btn-lg"
               target="_blank"
               rel="noopener noreferrer">
                Quero um churrasco assim!
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>

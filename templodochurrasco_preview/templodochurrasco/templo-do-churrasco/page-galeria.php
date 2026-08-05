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

                <!-- INSTRUÇÃO PARA O GUILHERME — aparece quando não há fotos ainda -->
                <div class="notice-box" style="background: linear-gradient(135deg, rgba(230,126,34,0.08), rgba(192,57,43,0.08)); border: 1px solid rgba(230,126,34,0.4); border-radius: var(--border-radius-md); padding: 2.5rem; text-align: center; margin-bottom: 3rem;" role="status" aria-label="Instruções para adicionar fotos">
                    <span style="font-size: 3rem; display: block; margin-bottom: 1rem;" aria-hidden="true">📸</span>
                    <h3 style="font-size: 1.25rem; color: var(--color-dark); margin-bottom: 1rem;">
                        Adicione suas fotos aqui, Guilherme!
                    </h3>
                    <p style="color: var(--color-gray-600); max-width: 500px; margin: 0 auto 1.5rem; line-height: 1.7;">
                        Para adicionar fotos à galeria, acesse o <strong>WordPress Admin > Páginas > Galeria > Editar</strong>.
                        No editor, insira um bloco <strong>"Galeria"</strong> e faça upload das suas melhores fotos de churrascos!
                    </p>
                    <p style="color: var(--color-gray-500); font-size: 0.875rem;">
                        Dica: Fotos horizontais ficam melhores na galeria. Use imagens de pelo menos 800x600px para boa qualidade.
                    </p>
                </div>

                <!-- Galeria placeholder (demonstrativa) -->
                <div class="gallery-grid" aria-label="Exemplos de fotos do churrasco">

                    <?php
                    $placeholders = [
                        ['emoji' => '🔥', 'label' => 'Brasa perfeita'],
                        ['emoji' => '🥩', 'label' => 'Picanha na grelha'],
                        ['emoji' => '👨‍🍳', 'label' => 'Guilherme em ação'],
                        ['emoji' => '🍗', 'label' => 'Frango marinado'],
                        ['emoji' => '🌭', 'label' => 'Linguiça artesanal'],
                        ['emoji' => '🍽️', 'label' => 'Serviço completo'],
                        ['emoji' => '🥗', 'label' => 'Buffet de guarnições'],
                        ['emoji' => '🏆', 'label' => 'Evento realizado'],
                        ['emoji' => '🎉', 'label' => 'Festa inesquecível'],
                    ];

                    foreach ( $placeholders as $i => $ph ) :
                    ?>
                        <div class="gallery-item fade-in"
                             style="background: linear-gradient(135deg, var(--color-dark), #2a1a1a);"
                             role="img"
                             aria-label="<?php echo esc_attr( $ph['label'] ); ?>">
                            <div style="width: 100%; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; color: rgba(255,255,255,0.3); gap: 0.5rem;">
                                <span style="font-size: 3rem;" aria-hidden="true"><?php echo $ph['emoji']; ?></span>
                                <span style="font-size: 0.75rem; font-family: var(--font-heading); font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase;">
                                    <?php echo esc_html( $ph['label'] ); ?>
                                </span>
                            </div>
                            <div class="gallery-item-overlay">
                                <span aria-hidden="true">🔍</span>
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

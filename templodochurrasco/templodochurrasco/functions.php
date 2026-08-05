<?php
/**
 * Templo do Churrasco — functions.php
 * Configurações e funcionalidades do tema
 *
 * @package TemploadoChurrasco
 * @version 1.0.0
 */

defined( 'ABSPATH' ) || exit;

/* =============================================================
   CONSTANTES DO TEMA
   ============================================================= */
define( 'TDC_VERSION',  '1.0.0' );
define( 'TDC_DIR',      get_template_directory() );
define( 'TDC_URI',      get_template_directory_uri() );
define( 'TDC_WHATSAPP', '5521998594584' );
define( 'TDC_WA_URL',   'https://wa.me/' . TDC_WHATSAPP );

/* =============================================================
   SETUP DO TEMA
   ============================================================= */
function tdc_theme_setup() {
    // Tradução
    load_theme_textdomain( 'templo-do-churrasco', TDC_DIR . '/languages' );

    // Título dinâmico no <head>
    add_theme_support( 'title-tag' );

    // Thumbnails (imagens destacadas)
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 800, 500, true );
    add_image_size( 'tdc-card',   600, 380, true );
    add_image_size( 'tdc-hero',  1600, 900, true );
    add_image_size( 'tdc-square', 500, 500, true );
    add_image_size( 'tdc-thumb',  300, 200, true );

    // Logo personalizado
    add_theme_support( 'custom-logo', [
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => [ 'site-title', 'site-description' ],
    ] );

    // HTML5
    add_theme_support( 'html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
        'navigation-widgets',
    ] );

    // Formatos de post
    add_theme_support( 'post-formats', [
        'aside', 'image', 'video', 'quote', 'link', 'gallery',
    ] );

    // Custom background
    add_theme_support( 'custom-background', [
        'default-color' => 'FFF8F0',
    ] );

    // Responsive embeds
    add_theme_support( 'responsive-embeds' );

    // Block styles
    add_theme_support( 'wp-block-styles' );

    // Wide images
    add_theme_support( 'align-wide' );

    // Gutenberg colors
    add_theme_support( 'editor-color-palette', [
        [ 'name' => 'Vermelho Fogo',  'slug' => 'primary',   'color' => '#C0392B' ],
        [ 'name' => 'Laranja Brasa',  'slug' => 'secondary', 'color' => '#E67E22' ],
        [ 'name' => 'Carvão',         'slug' => 'dark',      'color' => '#1A1A1A' ],
        [ 'name' => 'Dourado',        'slug' => 'gold',      'color' => '#F39C12' ],
        [ 'name' => 'Fundo Claro',    'slug' => 'bg-light',  'color' => '#FFF8F0' ],
    ] );

    // Registrar menus de navegação
    register_nav_menus( [
        'primary'    => __( 'Menu Principal', 'templo-do-churrasco' ),
        'footer'     => __( 'Menu Footer', 'templo-do-churrasco' ),
        'social'     => __( 'Redes Sociais', 'templo-do-churrasco' ),
    ] );
}
add_action( 'after_setup_theme', 'tdc_theme_setup' );

/* =============================================================
   ENQUEUE DE ESTILOS E SCRIPTS
   ============================================================= */
function tdc_enqueue_assets() {

    // Google Fonts — Montserrat + Open Sans
    $fonts_url = 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Open+Sans:wght@400;500;600;700&display=swap';
    wp_enqueue_style( 'tdc-google-fonts', $fonts_url, [], null );

    // Estilo principal
    wp_enqueue_style(
        'tdc-style',
        get_stylesheet_uri(),
        [ 'tdc-google-fonts' ],
        TDC_VERSION
    );

    // Script principal
    wp_enqueue_script(
        'tdc-main',
        TDC_URI . '/assets/js/main.js',
        [],
        TDC_VERSION,
        true  // no footer
    );

    // Passar dados do PHP para JS
    wp_localize_script( 'tdc-main', 'tdcData', [
        'ajaxUrl'    => admin_url( 'admin-ajax.php' ),
        'nonce'      => wp_create_nonce( 'tdc_nonce' ),
        'siteUrl'    => home_url(),
        'whatsapp'   => TDC_WHATSAPP,
        'waUrl'      => TDC_WA_URL,
        'themePath'  => TDC_URI,
    ] );

    // Comment reply
    if ( is_singular() && comments_open() ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'tdc_enqueue_assets' );

/* =============================================================
   WIDGETS / SIDEBARS
   ============================================================= */
function tdc_register_sidebars() {
    // Sidebar do Blog
    register_sidebar( [
        'name'          => __( 'Sidebar do Blog', 'templo-do-churrasco' ),
        'id'            => 'blog-sidebar',
        'description'   => __( 'Widgets para a sidebar do blog.', 'templo-do-churrasco' ),
        'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="sidebar-widget-title">',
        'after_title'   => '</h3>',
    ] );

    // Footer col 1
    register_sidebar( [
        'name'          => __( 'Footer — Coluna 1', 'templo-do-churrasco' ),
        'id'            => 'footer-1',
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-heading">',
        'after_title'   => '</h4>',
    ] );
}
add_action( 'widgets_init', 'tdc_register_sidebars' );

/* =============================================================
   CUSTOM POST TYPE — DEPOIMENTOS
   ============================================================= */
function tdc_register_cpt_depoimentos() {
    $labels = [
        'name'               => _x( 'Depoimentos', 'post type general name', 'templo-do-churrasco' ),
        'singular_name'      => _x( 'Depoimento',  'post type singular name', 'templo-do-churrasco' ),
        'add_new'            => __( 'Adicionar Novo', 'templo-do-churrasco' ),
        'add_new_item'       => __( 'Adicionar Novo Depoimento', 'templo-do-churrasco' ),
        'edit_item'          => __( 'Editar Depoimento', 'templo-do-churrasco' ),
        'view_item'          => __( 'Ver Depoimento', 'templo-do-churrasco' ),
        'all_items'          => __( 'Todos os Depoimentos', 'templo-do-churrasco' ),
        'search_items'       => __( 'Buscar Depoimentos', 'templo-do-churrasco' ),
        'not_found'          => __( 'Nenhum depoimento encontrado.', 'templo-do-churrasco' ),
        'not_found_in_trash' => __( 'Nenhum depoimento na lixeira.', 'templo-do-churrasco' ),
        'menu_name'          => __( 'Depoimentos', 'templo-do-churrasco' ),
    ];

    register_post_type( 'depoimento', [
        'labels'       => $labels,
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'supports'     => [ 'title', 'editor', 'thumbnail', 'custom-fields' ],
        'menu_icon'    => 'dashicons-format-quote',
        'rewrite'      => false,
    ] );
}
add_action( 'init', 'tdc_register_cpt_depoimentos' );

/* =============================================================
   SCHEMA.ORG — LOCAL BUSINESS no <head>
   ============================================================= */
function tdc_schema_local_business() {
    if ( ! is_front_page() ) return;

    $schema = [
        '@context'        => 'https://schema.org',
        '@type'           => 'FoodService',
        'name'            => 'Templo do Churrasco',
        'alternateName'   => 'Templo do Churrasco — Churrasqueiro Gourmet RJ',
        'url'             => 'https://templodochurrasco.com.br',
        'telephone'       => '+55-21-99859-4584',
        'email'           => 'contato@templodochurrasco.com.br',
        'description'     => 'Serviço completo de churrasqueiro gourmet no Rio de Janeiro. Churrasco na brasa com carnes nobres, buffet de guarnições e atendimento personalizado para eventos e festas.',
        'founder'         => [
            '@type' => 'Person',
            'name'  => 'Guilherme Santos',
        ],
        'foundingDate'    => '2018',
        'areaServed'      => [
            '@type'       => 'City',
            'name'        => 'Rio de Janeiro',
            'containedIn' => [
                '@type' => 'State',
                'name'  => 'Rio de Janeiro',
            ],
        ],
        'address'         => [
            '@type'           => 'PostalAddress',
            'addressLocality' => 'Rio de Janeiro',
            'addressRegion'   => 'RJ',
            'addressCountry'  => 'BR',
        ],
        'geo'             => [
            '@type'     => 'GeoCoordinates',
            'latitude'  => '-22.9068',
            'longitude' => '-43.1729',
        ],
        'openingHours'    => 'Mo-Su 07:00-22:00',
        'priceRange'      => 'R$ 300 – R$ 105/pessoa',
        'servesCuisine'   => 'Churrasco Brasileiro',
        'hasOfferCatalog' => [
            '@type'    => 'OfferCatalog',
            'name'     => 'Serviços de Churrasco',
            'itemListElement' => [
                [
                    '@type'       => 'Offer',
                    'name'        => 'Churrasqueiro Avulso',
                    'description' => 'Churrasqueiro profissional para seu evento',
                    'price'       => '300.00',
                    'priceCurrency' => 'BRL',
                    'priceSpecification' => [
                        '@type' => 'PriceSpecification',
                        'minPrice' => '300.00',
                        'priceCurrency' => 'BRL',
                    ],
                ],
                [
                    '@type'       => 'Offer',
                    'name'        => 'Churrasco Gourmet Completo',
                    'description' => 'Serviço completo: carnes nobres, buffet de guarnições, garçons e equipamentos',
                    'priceCurrency' => 'BRL',
                ],
                [
                    '@type'       => 'Offer',
                    'name'        => 'Pacote Deluxe',
                    'description' => '12 cortes de carne + buffet completo + sobremesas',
                    'price'       => '105.00',
                    'priceCurrency' => 'BRL',
                    'priceSpecification' => [
                        '@type'          => 'PriceSpecification',
                        'price'          => '105.00',
                        'priceCurrency'  => 'BRL',
                        'unitText'       => 'per person',
                    ],
                ],
            ],
        ],
        'aggregateRating' => [
            '@type'       => 'AggregateRating',
            'ratingValue' => '5',
            'reviewCount' => '380',
            'bestRating'  => '5',
            'worstRating' => '1',
        ],
        'review'          => [
            '@type'  => 'Review',
            'author' => [
                '@type' => 'Person',
                'name'  => 'Maria de Lurdes',
            ],
            'reviewBody'   => 'O Guilherme salvou meu aniversário de 50 anos! As carnes estavam perfeitas e eu pude curtir a festa sem me preocupar com nada.',
            'reviewRating' => [
                '@type'       => 'Rating',
                'ratingValue' => '5',
                'bestRating'  => '5',
            ],
        ],
        'sameAs'          => [
            'https://wa.me/5521998594584',
        ],
    ];

    echo '<script type="application/ld+json">' . "\n";
    echo wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT );
    echo "\n" . '</script>' . "\n";
}
add_action( 'wp_head', 'tdc_schema_local_business', 5 );

/* =============================================================
   META TAGS SEO (description, og:, twitter:)
   ============================================================= */
function tdc_meta_tags() {
    global $post;

    // Título e descrição padrão
    $site_name   = get_bloginfo( 'name' );
    $site_desc   = get_bloginfo( 'description' );
    $current_url = ( is_ssl() ? 'https' : 'http' ) . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $logo_url    = TDC_URI . '/assets/images/og-image.jpg';

    if ( is_front_page() ) {
        $title       = 'Templo do Churrasco — Churrasqueiro Gourmet no Rio de Janeiro';
        $description = 'Churrasco gourmet feito na brasa com carnes nobres, buffet completo e atendimento personalizado. 380+ eventos realizados no Rio de Janeiro. Método Brasa Viva. Solicite um orçamento!';
        $image       = $logo_url;

    } elseif ( is_singular() && isset( $post ) ) {
        $title       = wp_strip_all_tags( get_the_title() ) . ' — ' . $site_name;
        $description = has_excerpt( $post->ID )
            ? wp_strip_all_tags( get_the_excerpt() )
            : wp_trim_words( wp_strip_all_tags( get_the_content() ), 25 );
        $image       = has_post_thumbnail( $post->ID )
            ? get_the_post_thumbnail_url( $post->ID, 'tdc-hero' )
            : $logo_url;

    } elseif ( is_archive() ) {
        $title       = 'Blog — Dicas de Churrasco | Templo do Churrasco';
        $description = 'Dicas, técnicas e receitas de churrasco do Guilherme Santos. Aprenda o Método Brasa Viva e faça um churrasco perfeito!';
        $image       = $logo_url;

    } else {
        $title       = $site_name . ' — ' . $site_desc;
        $description = $site_desc;
        $image       = $logo_url;
    }

    $description = esc_attr( $description );
    $title       = esc_attr( $title );
    $image       = esc_url( $image );
    $current_url = esc_url( $current_url );

    echo "\n<!-- SEO Meta Tags —— Templo do Churrasco -->\n";
    echo '<meta name="description" content="' . $description . '">' . "\n";
    echo '<meta name="author" content="Guilherme Santos — Templo do Churrasco">' . "\n";
    echo '<meta name="robots" content="index, follow">' . "\n";
    echo '<link rel="canonical" href="' . $current_url . '">' . "\n";

    // Open Graph
    echo '<meta property="og:type"        content="' . ( is_singular() ? 'article' : 'website' ) . '">' . "\n";
    echo '<meta property="og:title"       content="' . $title . '">' . "\n";
    echo '<meta property="og:description" content="' . $description . '">' . "\n";
    echo '<meta property="og:url"         content="' . $current_url . '">' . "\n";
    echo '<meta property="og:image"       content="' . $image . '">' . "\n";
    echo '<meta property="og:image:width" content="1200">' . "\n";
    echo '<meta property="og:image:height" content="630">' . "\n";
    echo '<meta property="og:site_name"   content="Templo do Churrasco">' . "\n";
    echo '<meta property="og:locale"      content="pt_BR">' . "\n";

    // Twitter Card
    echo '<meta name="twitter:card"        content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title"       content="' . $title . '">' . "\n";
    echo '<meta name="twitter:description" content="' . $description . '">' . "\n";
    echo '<meta name="twitter:image"       content="' . $image . '">' . "\n";
    echo "\n";
}
add_action( 'wp_head', 'tdc_meta_tags', 1 );

/* =============================================================
   REMOVER VERSÃO DO WORDPRESS (segurança)
   ============================================================= */
remove_action( 'wp_head', 'wp_generator' );

function tdc_remove_version_from_assets( $src ) {
    if ( strpos( $src, 'ver=' ) !== false ) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
}
add_filter( 'style_loader_src',  'tdc_remove_version_from_assets', 9999 );
add_filter( 'script_loader_src', 'tdc_remove_version_from_assets', 9999 );

/* =============================================================
   HELPERS DE WHATSAPP
   ============================================================= */

/**
 * Retorna a URL do WhatsApp com mensagem opcional
 *
 * @param string $message Mensagem pré-preenchida (opcional)
 * @return string URL do WhatsApp
 */
function tdc_whatsapp_url( $message = '' ) {
    $url = TDC_WA_URL;
    if ( ! empty( $message ) ) {
        $url .= '?text=' . rawurlencode( $message );
    }
    return $url;
}

/**
 * Retorna o número formatado para exibição
 *
 * @return string Número formatado (21) 99859-4584
 */
function tdc_whatsapp_formatted() {
    return '(21) 99859-4584';
}

/**
 * Exibe o botão de WhatsApp
 *
 * @param string $text    Texto do botão
 * @param string $message Mensagem para WhatsApp
 * @param string $class   Classes CSS adicionais
 */
function tdc_whatsapp_button( $text = 'Solicitar Orçamento no WhatsApp', $message = '', $class = '' ) {
    if ( empty( $message ) ) {
        $message = 'Olá Guilherme! Gostaria de solicitar um orçamento para meu churrasco.';
    }
    $url = tdc_whatsapp_url( $message );
    echo '<a href="' . esc_url( $url ) . '" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp ' . esc_attr( $class ) . '">';
    echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>';
    echo esc_html( $text );
    echo '</a>';
}

/* =============================================================
   EXCERPT PERSONALIZADO
   ============================================================= */
function tdc_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'tdc_excerpt_length' );

function tdc_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'tdc_excerpt_more' );

/* =============================================================
   LEITURA ESTIMADA DO POST
   ============================================================= */
function tdc_reading_time() {
    $content     = get_post_field( 'post_content', get_the_ID() );
    $word_count  = str_word_count( strip_tags( $content ) );
    $minutes     = (int) ceil( $word_count / 200 );
    return $minutes . ' min de leitura';
}

/* =============================================================
   PAGINAÇÃO
   ============================================================= */
function tdc_pagination() {
    $args = [
        'prev_text' => '&#8592; Anterior',
        'next_text' => 'Próximo &#8594;',
        'type'      => 'list',
        'end_size'  => 2,
        'mid_size'  => 2,
    ];

    $pagination = paginate_links( $args );
    if ( $pagination ) {
        echo '<nav class="pagination" aria-label="Paginação">';
        echo str_replace( [ '<ul>\n', '</ul>' ], '', $pagination );
        echo '</nav>';
    }
}

/* =============================================================
   AJUSTAR QUERY PRINCIPAL DO BLOG
   ============================================================= */
function tdc_adjust_query( $query ) {
    if ( ! is_admin() && $query->is_main_query() ) {
        if ( $query->is_home() || $query->is_archive() ) {
            $query->set( 'posts_per_page', 9 );
        }
    }
}
add_action( 'pre_get_posts', 'tdc_adjust_query' );

/* =============================================================
   LIMPAR HEAD DO WORDPRESS
   ============================================================= */
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/* =============================================================
   ALLOW SVG uploads
   ============================================================= */
function tdc_allow_svg( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'tdc_allow_svg' );

/* =============================================================
   CUSTOMIZER — configurações extras
   ============================================================= */
function tdc_customize_register( $wp_customize ) {
    // Seção: Informações de contato
    $wp_customize->add_section( 'tdc_contact_section', [
        'title'    => __( 'Informações de Contato', 'templo-do-churrasco' ),
        'priority' => 30,
    ] );

    // WhatsApp
    $wp_customize->add_setting( 'tdc_whatsapp', [
        'default'           => '5521998594584',
        'sanitize_callback' => 'sanitize_text_field',
    ] );
    $wp_customize->add_control( 'tdc_whatsapp', [
        'label'       => 'Número do WhatsApp (com código do país)',
        'description' => 'Ex: 5521998594584',
        'section'     => 'tdc_contact_section',
        'type'        => 'text',
    ] );

    // Cidade
    $wp_customize->add_setting( 'tdc_city', [
        'default'           => 'Rio de Janeiro — RJ',
        'sanitize_callback' => 'sanitize_text_field',
    ] );
    $wp_customize->add_control( 'tdc_city', [
        'label'   => 'Cidade de Atendimento',
        'section' => 'tdc_contact_section',
        'type'    => 'text',
    ] );

    // Instagram
    $wp_customize->add_setting( 'tdc_instagram', [
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ] );
    $wp_customize->add_control( 'tdc_instagram', [
        'label'   => 'URL do Instagram',
        'section' => 'tdc_contact_section',
        'type'    => 'url',
    ] );
}
add_action( 'customize_register', 'tdc_customize_register' );

/* =============================================================
   SEGURANÇA: desativar XML-RPC
   ============================================================= */
add_filter( 'xmlrpc_enabled', '__return_false' );

/* =============================================================
   ADMIN: coluna de thumbnail na lista de posts
   ============================================================= */
function tdc_add_thumbnail_column( $columns ) {
    $new = [];
    foreach ( $columns as $key => $val ) {
        $new[ $key ] = $val;
        if ( 'title' === $key ) {
            $new['tdc_thumbnail'] = 'Foto';
        }
    }
    return $new;
}
add_filter( 'manage_posts_columns', 'tdc_add_thumbnail_column' );

function tdc_thumbnail_column_content( $column, $post_id ) {
    if ( 'tdc_thumbnail' === $column ) {
        if ( has_post_thumbnail( $post_id ) ) {
            echo get_the_post_thumbnail( $post_id, [ 60, 60 ] );
        } else {
            echo '—';
        }
    }
}
add_action( 'manage_posts_custom_column', 'tdc_thumbnail_column_content', 10, 2 );

/* =============================================================
   ADMIN: área de rodapé customizada
   ============================================================= */
function tdc_admin_footer_text() {
    return '🔥 Feito com fogo pelo <strong>Templo do Churrasco</strong>. Qualquer dúvida, fala com a gente!';
}
add_filter( 'admin_footer_text', 'tdc_admin_footer_text' );

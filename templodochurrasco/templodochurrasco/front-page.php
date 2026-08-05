<?php
/**
 * Template Name: Página Inicial
 * Template: front-page.php
 * Página inicial do Templo do Churrasco
 *
 * @package TemplodoChurrasco
 */

get_header();
?>

<!-- =====================================================
     SEÇÃO 1 — HERO
     ===================================================== -->
<section class="hero" id="inicio" aria-label="Apresentação">

    <div class="hero-bg" aria-hidden="true"></div>
    <div class="hero-overlay" aria-hidden="true"></div>

    <div class="container">
        <div class="hero-content">

            <div class="hero-badge fade-in">
                <span aria-hidden="true">🔥</span>
                Método Brasa Viva &mdash; Rio de Janeiro desde 2018
            </div>

            <h1 class="hero-title fade-in delay-1">
                Churrasco que faz todo<br>
                mundo <span class="highlight">pedir bis</span> 🔥
            </h1>

            <p class="hero-subtitle fade-in delay-2">
                Churrasco gourmet feito na brasa, com carnes nobres selecionadas, buffet completo e atendimento personalizado. Você curte, eu cuido de tudo.
            </p>

            <div class="hero-actions fade-in delay-3">
                <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Gostaria de solicitar um orçamento para meu churrasco. 🔥' ) ); ?>"
                   class="btn btn-whatsapp btn-lg"
                   target="_blank"
                   rel="noopener noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="22" height="22" aria-hidden="true">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Solicitar Orçamento
                </a>

                <a href="<?php echo esc_url( home_url( '/servicos' ) ); ?>"
                   class="btn btn-secondary btn-lg">
                    Ver Serviços
                </a>
            </div>

            <!-- Mini stats no hero -->
            <div class="hero-social-proof fade-in delay-4" aria-label="Resultados">
                <div class="hero-proof-item">
                    <span class="hero-proof-number" data-counter="380">380+</span>
                    <span class="hero-proof-label">Eventos realizados</span>
                </div>
                <div class="hero-divider" aria-hidden="true"></div>
                <div class="hero-proof-item">
                    <span class="hero-proof-number" data-counter="7">7+</span>
                    <span class="hero-proof-label">Anos de experiência</span>
                </div>
                <div class="hero-divider" aria-hidden="true"></div>
                <div class="hero-proof-item">
                    <span class="hero-proof-number">100%</span>
                    <span class="hero-proof-label">Recomendação</span>
                </div>
            </div>

        </div>
    </div>

    <div class="scroll-indicator" aria-hidden="true">
        <span>Role para ver mais</span>
        <div class="scroll-arrow"></div>
    </div>

</section>

<!-- =====================================================
     SEÇÃO 2 — STATS
     ===================================================== -->
<section class="stats-section" aria-label="Números do Templo do Churrasco">
    <div class="container">
        <div class="stats-grid">

            <div class="stat-item fade-in">
                <span class="stat-icon" aria-hidden="true">🏆</span>
                <div class="stat-number" data-counter="380">380+</div>
                <div class="stat-label">Eventos Realizados</div>
                <div class="stat-sublabel">em todo o Rio de Janeiro</div>
            </div>

            <div class="stat-item fade-in delay-1">
                <span class="stat-icon" aria-hidden="true">🔥</span>
                <div class="stat-number" data-counter="7">7+</div>
                <div class="stat-label">Anos de Experiência</div>
                <div class="stat-sublabel">desde 2018</div>
            </div>

            <div class="stat-item fade-in delay-2">
                <span class="stat-icon" aria-hidden="true">⭐</span>
                <div class="stat-number">100%</div>
                <div class="stat-label">Recomendação</div>
                <div class="stat-sublabel">zero reclamações</div>
            </div>

            <div class="stat-item fade-in delay-3">
                <span class="stat-icon" aria-hidden="true">🥩</span>
                <div class="stat-number" data-counter="12">12</div>
                <div class="stat-label">Cortes no Pacote Deluxe</div>
                <div class="stat-sublabel">carnes nobres selecionadas</div>
            </div>

        </div>
    </div>
</section>

<!-- =====================================================
     SEÇÃO 3 — SOBRE (resumo)
     ===================================================== -->
<section class="about-section section" id="sobre" aria-label="Sobre o Guilherme Santos">
    <div class="container">
        <div class="about-grid">

            <!-- Imagem -->
            <div class="about-image-wrapper fade-in-left">
                <div class="about-image-placeholder" role="img" aria-label="Foto do Guilherme Santos, churrasqueiro">
                    <span class="placeholder-icon" aria-hidden="true">👨‍🍳</span>
                    <span>Foto do Guilherme Santos</span>
                    <small style="margin-top: 0.5rem; font-size: 0.75rem; opacity: 0.5;">Adicione sua foto via Customizer</small>
                </div>

                <div class="about-badge" aria-label="7 anos de experiência">
                    <span class="about-badge-number">7+</span>
                    <span class="about-badge-text">Anos na Brasa</span>
                </div>
            </div>

            <!-- Conteúdo -->
            <div class="about-content fade-in-right">
                <span class="section-label">Quem é o Guilherme?</span>
                <h2 class="about-title">
                    <span class="name-highlight">Guilherme Santos</span><br>
                    Churrasqueiro Gourmet<br>no Rio de Janeiro
                </h2>

                <p class="about-text">
                    Desde 2018, o Guilherme transformou a paixão pelo fogo em experiências inesquecíveis para famílias e grupos em todo o Rio de Janeiro. Com mais de 380 eventos realizados e zero reclamações, o método é simples: só serve quando está perfeito.
                </p>

                <p class="about-text">
                    O diferencial está no <strong>Método Brasa Viva</strong> — uma abordagem única que garante carnes no ponto certo, do início ao fim do evento. Você chega, aprecia e vai embora querendo mais.
                </p>

                <!-- Método Brasa Viva — resumo -->
                <div class="method-steps" aria-label="Método Brasa Viva">

                    <div class="method-step fade-in delay-1">
                        <div class="method-step-number" aria-hidden="true">1</div>
                        <div class="method-step-content">
                            <h4>Seleção das Carnes</h4>
                            <p>Escolho pessoalmente os melhores cortes: picanha, alcatra, maminha, costela e mais.</p>
                        </div>
                    </div>

                    <div class="method-step fade-in delay-2">
                        <div class="method-step-number" aria-hidden="true">2</div>
                        <div class="method-step-content">
                            <h4>Tempero 24h Antes</h4>
                            <p>Cada corte recebe o tempero ideal com 24 horas de antecedência para absorção perfeita.</p>
                        </div>
                    </div>

                    <div class="method-step fade-in delay-3">
                        <div class="method-step-number" aria-hidden="true">3</div>
                        <div class="method-step-content">
                            <h4>Controle Individual de Ponto</h4>
                            <p>Monitoro cada corte individualmente. Sem pressa, sem queimar, sem deixar mal passado.</p>
                        </div>
                    </div>

                    <div class="method-step fade-in delay-4">
                        <div class="method-step-number" aria-hidden="true">4</div>
                        <div class="method-step-content">
                            <h4>Só Serve Quando Está Perfeito</h4>
                            <p>A carne só vai pra mesa quando eu tenho certeza que vai impressionar. Ponto final.</p>
                        </div>
                    </div>

                </div>

                <a href="<?php echo esc_url( home_url( '/sobre' ) ); ?>" class="btn btn-outline-primary">
                    Conheça minha história
                </a>
            </div>

        </div>
    </div>
</section>

<!-- =====================================================
     SEÇÃO 4 — SERVIÇOS
     ===================================================== -->
<section class="section" id="servicos" aria-label="Serviços e Pacotes" style="background: var(--color-white);">
    <div class="container">

        <div class="section-header">
            <span class="section-label">O que eu ofereço</span>
            <h2 class="section-title title-underline">Escolha o Pacote Ideal para o Seu Evento</h2>
            <p class="section-subtitle">
                Do churrasqueiro avulso ao churrasco gourmet completo &mdash; tenho a solução certa para o seu evento. Cada pacote inclui minha dedicação total e o Método Brasa Viva.
            </p>
        </div>

        <div class="grid grid-3" style="align-items: stretch;">

            <!-- Card 1: Churrasqueiro Avulso -->
            <div class="service-card fade-in delay-1">
                <span class="service-card-icon" aria-hidden="true">👨‍🍳</span>
                <h3 class="service-card-title">Churrasqueiro Avulso</h3>
                <div class="service-card-price">
                    A partir de <br>R$ 300
                    <span class="price-period">/evento</span>
                </div>
                <p class="service-card-description">
                    Precisa de um churrasqueiro profissional para o seu evento? Eu vou até você, cuido de toda a grelha e deixo as carnes perfeitas enquanto você curte a festa.
                </p>
                <ul class="service-features">
                    <li class="service-card-feature">Churrasqueiro profissional presente</li>
                    <li class="service-card-feature">Manejo e controle da grelha</li>
                    <li class="service-card-feature">Carnes assadas na hora</li>
                    <li class="service-card-feature">Você fornece as carnes e equipamentos</li>
                    <li class="service-card-feature">Consulta prévia ao cardápio</li>
                </ul>
                <div class="mt-auto">
                    <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Tenho interesse no serviço de Churrasqueiro Avulso. Podemos conversar?' ) ); ?>"
                       class="btn btn-outline-primary"
                       target="_blank"
                       rel="noopener noreferrer"
                       style="width: 100%; justify-content: center;">
                        Solicitar Orçamento
                    </a>
                </div>
            </div>

            <!-- Card 2: Churrasco Gourmet — MAIS POPULAR -->
            <div class="service-card featured fade-in delay-2" style="position: relative;">
                <div class="service-badge">MAIS POPULAR</div>
                <span class="service-card-icon" aria-hidden="true">🥩</span>
                <h3 class="service-card-title">Churrasco Gourmet</h3>
                <div class="service-card-price" style="color: var(--color-secondary);">
                    Sob Consulta
                </div>
                <p class="service-card-description">
                    Serviço completo e premium. Carnes nobres selecionadas, buffet de guarnições, garçons, equipamentos &mdash; tudo incluso. Você só precisa aparecer e aproveitar.
                </p>
                <ul class="service-features">
                    <li class="service-card-feature">Picanha, alcatra, maminha e mais</li>
                    <li class="service-card-feature">Buffet: arroz, feijão, farofa, saladas</li>
                    <li class="service-card-feature">Pão de queijo e molhos especiais</li>
                    <li class="service-card-feature">Garçons e atendimento completo</li>
                    <li class="service-card-feature">Equipamentos e estrutura inclusos</li>
                    <li class="service-card-feature">Tempero Método Brasa Viva</li>
                </ul>
                <div class="mt-auto">
                    <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Tenho interesse no Churrasco Gourmet Completo. Quero saber mais!' ) ); ?>"
                       class="btn btn-gold"
                       target="_blank"
                       rel="noopener noreferrer"
                       style="width: 100%; justify-content: center;">
                        Solicitar Orçamento
                    </a>
                </div>
            </div>

            <!-- Card 3: Pacote Deluxe -->
            <div class="service-card fade-in delay-3">
                <span class="service-card-icon" aria-hidden="true">👑</span>
                <h3 class="service-card-title">Pacote Deluxe</h3>
                <div class="service-card-price">
                    R$ 105
                    <span class="price-period">/pessoa</span>
                </div>
                <p class="service-card-description">
                    A experiência definitiva de churrasco. Doze cortes diferentes, buffet completo de guarnições e sobremesas. Para quem quer impressionar de verdade.
                </p>
                <ul class="service-features">
                    <li class="service-card-feature">12 cortes de carne nobres</li>
                    <li class="service-card-feature">Buffet completo de guarnições</li>
                    <li class="service-card-feature">Sobremesas incluídas</li>
                    <li class="service-card-feature">Garçons e serviço premium</li>
                    <li class="service-card-feature">Equipamentos e estrutura</li>
                    <li class="service-card-feature">Atendimento personalizado</li>
                </ul>
                <div class="mt-auto">
                    <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Tenho interesse no Pacote Deluxe com 12 carnes. Gostaria de um orçamento!' ) ); ?>"
                       class="btn btn-primary"
                       target="_blank"
                       rel="noopener noreferrer"
                       style="width: 100%; justify-content: center;">
                        Solicitar Orçamento
                    </a>
                </div>
            </div>

        </div>

        <div class="text-center" style="margin-top: 3rem;">
            <a href="<?php echo esc_url( home_url( '/servicos' ) ); ?>" class="btn btn-outline-primary btn-lg">
                Ver todos os detalhes dos serviços
            </a>
        </div>

    </div>
</section>

<!-- =====================================================
     SEÇÃO 5 — COMO FUNCIONA
     ===================================================== -->
<section class="how-section section" id="como-funciona" aria-label="Como funciona" style="background: var(--color-bg-light);">
    <div class="container">

        <div class="section-header">
            <span class="section-label">Processo simples</span>
            <h2 class="section-title title-underline">Como Funciona?</h2>
            <p class="section-subtitle">
                Do seu contato até o último pedaço de carne servido, cuido de tudo com dedicação e profissionalismo.
            </p>
        </div>

        <div class="steps-grid">

            <div class="step-item fade-in">
                <div class="step-icon-wrapper">
                    <span aria-hidden="true">📱</span>
                    <div class="step-number" aria-hidden="true">1</div>
                </div>
                <h3 class="step-title">Você Solicita</h3>
                <p class="step-text">
                    Me manda uma mensagem no WhatsApp com a data, número de convidados e o tipo de evento. Respondo rápido!
                </p>
            </div>

            <div class="step-item fade-in delay-1">
                <div class="step-icon-wrapper">
                    <span aria-hidden="true">📋</span>
                    <div class="step-number" aria-hidden="true">2</div>
                </div>
                <h3 class="step-title">Planejamos Juntos</h3>
                <p class="step-text">
                    Montar o cardápio ideal, definir o pacote, tirar todas as dúvidas. O churrasco é personalizado pro seu evento.
                </p>
            </div>

            <div class="step-item fade-in delay-2">
                <div class="step-icon-wrapper">
                    <span aria-hidden="true">🔥</span>
                    <div class="step-number" aria-hidden="true">3</div>
                </div>
                <h3 class="step-title">Eu Preparo</h3>
                <p class="step-text">
                    Seleciono as carnes, tempero 24h antes, chego no horário e cuido de cada detalhe. Método Brasa Viva em ação.
                </p>
            </div>

            <div class="step-item fade-in delay-3">
                <div class="step-icon-wrapper">
                    <span aria-hidden="true">🥂</span>
                    <div class="step-number" aria-hidden="true">4</div>
                </div>
                <h3 class="step-title">Você Curte</h3>
                <p class="step-text">
                    Você aproveita o evento, recebe os elogios e colhe as memórias. Cuido de tudo, do início ao fim. Simples assim!
                </p>
            </div>

        </div>

    </div>
</section>

<!-- =====================================================
     SEÇÃO 6 — DEPOIMENTOS
     ===================================================== -->
<section class="testimonials-section section" id="depoimentos" aria-label="Depoimentos de clientes">
    <div class="container">

        <div class="section-header">
            <span class="section-label light">O que dizem os clientes</span>
            <h2 class="section-title title-underline light">Quem Provou, Aprovou! 🔥</h2>
            <p class="section-subtitle light">
                100% dos clientes recomendam. Essas são só algumas das histórias de churrascos inesquecíveis.
            </p>
        </div>

        <div class="testimonials-grid">

            <!-- Depoimento principal — Maria de Lurdes -->
            <div class="testimonial-card featured-testimonial fade-in">
                <span class="testimonial-quote-icon" aria-hidden="true">"</span>
                <div class="testimonial-stars" aria-label="5 estrelas">
                    <span aria-hidden="true">★</span>
                    <span aria-hidden="true">★</span>
                    <span aria-hidden="true">★</span>
                    <span aria-hidden="true">★</span>
                    <span aria-hidden="true">★</span>
                </div>
                <blockquote class="testimonial-text">
                    "O Guilherme salvou meu aniversário de 50 anos! As carnes estavam perfeitas e eu pude curtir a festa sem me preocupar com nada. Todo mundo pediu o contato dele na hora!"
                </blockquote>
                <div class="testimonial-author">
                    <div class="testimonial-avatar" aria-hidden="true">M</div>
                    <div>
                        <div class="testimonial-name">Maria de Lurdes</div>
                        <div class="testimonial-role">52 anos &mdash; Aniversário de 50 anos, Rio de Janeiro</div>
                    </div>
                </div>
            </div>

            <!-- Depoimento 2 -->
            <div class="testimonial-card fade-in delay-1">
                <span class="testimonial-quote-icon" aria-hidden="true">"</span>
                <div class="testimonial-stars" aria-label="5 estrelas">
                    <span aria-hidden="true">★</span>
                    <span aria-hidden="true">★</span>
                    <span aria-hidden="true">★</span>
                    <span aria-hidden="true">★</span>
                    <span aria-hidden="true">★</span>
                </div>
                <blockquote class="testimonial-text">
                    "Contratei o Guilherme para o aniversário do meu marido e foi perfeito. A picanha era de outro mundo! Já agendei para o próximo ano. Vale cada centavo."
                </blockquote>
                <div class="testimonial-author">
                    <div class="testimonial-avatar" aria-hidden="true">C</div>
                    <div>
                        <div class="testimonial-name">Carla Mendes</div>
                        <div class="testimonial-role">45 anos &mdash; Aniversário em família, Barra da Tijuca</div>
                    </div>
                </div>
            </div>

            <!-- Depoimento 3 -->
            <div class="testimonial-card fade-in delay-2">
                <span class="testimonial-quote-icon" aria-hidden="true">"</span>
                <div class="testimonial-stars" aria-label="5 estrelas">
                    <span aria-hidden="true">★</span>
                    <span aria-hidden="true">★</span>
                    <span aria-hidden="true">★</span>
                    <span aria-hidden="true">★</span>
                    <span aria-hidden="true">★</span>
                </div>
                <blockquote class="testimonial-text">
                    "Fizemos o evento corporativo da nossa empresa com o Guilherme. Todos os 80 convidados elogiaram. Profissionalismo total do início ao fim. Recomendo sem hesitar!"
                </blockquote>
                <div class="testimonial-author">
                    <div class="testimonial-avatar" aria-hidden="true">R</div>
                    <div>
                        <div class="testimonial-name">Roberto Faria</div>
                        <div class="testimonial-role">Diretor Comercial &mdash; Evento Corporativo, Niterói</div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- =====================================================
     SEÇÃO 7 — BLOG PREVIEW
     ===================================================== -->
<section class="blog-section section" id="blog" aria-label="Últimas dicas do blog">
    <div class="container">

        <div class="section-header">
            <span class="section-label">Aprenda com quem entende</span>
            <h2 class="section-title title-underline">Dicas de Churrasco do Guilherme</h2>
            <p class="section-subtitle">
                Segredos, técnicas e receitas para você fazer (ou contratar) o churrasco perfeito.
            </p>
        </div>

        <?php
        $blog_posts = new WP_Query( [
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
        ] );

        if ( $blog_posts->have_posts() ) : ?>

            <div class="blog-grid">
                <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>

                    <article class="blog-card fade-in" aria-label="<?php the_title_attribute(); ?>">

                        <div class="blog-card-img-wrapper">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
                                    <?php the_post_thumbnail( 'tdc-card', [ 'class' => 'blog-card-img', 'alt' => get_the_title() ] ); ?>
                                </a>
                            <?php else : ?>
                                <div class="blog-card-img-placeholder" aria-hidden="true">🔥</div>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="12" height="12" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd"/>
                                    </svg>
                                    <?php echo get_the_date( 'd M Y' ); ?>
                                </span>
                                <span><?php echo esc_html( tdc_reading_time() ); ?></span>
                            </div>

                            <h3 class="blog-card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>

                            <p class="blog-card-excerpt">
                                <?php echo esc_html( wp_trim_words( get_the_excerpt(), 20, '...' ) ); ?>
                            </p>

                            <a href="<?php the_permalink(); ?>" class="blog-card-link" aria-label="Ler artigo: <?php the_title_attribute(); ?>">
                                Ler artigo
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="14" height="14" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </div>

                    </article>

                <?php endwhile; wp_reset_postdata(); ?>
            </div>

        <?php else : ?>

            <div class="text-center" style="padding: 4rem 0; color: var(--color-gray-500);">
                <p style="font-size: 3rem; margin-bottom: 1rem;" aria-hidden="true">📝</p>
                <p>Em breve, dicas e receitas do Guilherme aqui!</p>
                <p style="font-size: 0.875rem;">Importe os posts pelo arquivo <strong>conteudo-wordpress.xml</strong></p>
            </div>

        <?php endif; ?>

        <div class="text-center" style="margin-top: 3rem;">
            <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn btn-outline-primary btn-lg">
                Ver todas as dicas
            </a>
        </div>

    </div>
</section>

<!-- =====================================================
     SEÇÃO 8 — CTA FINAL
     ===================================================== -->
<section class="cta-section section" id="cta" aria-label="Solicitar orçamento">
    <div class="container">
        <div class="fade-in">
            <span style="font-size: 4rem; display: block; margin-bottom: 1rem;" aria-hidden="true">🔥</span>
            <h2 class="cta-title">
                Pronto para um churrasco<br>inesquecível?
            </h2>
            <p class="cta-subtitle">
                Me manda uma mensagem agora e a gente planeja o churrasco perfeito pro seu evento. Respondo rapidinho!
            </p>

            <div class="cta-buttons">
                <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Estou interessado em contratar o Templo do Churrasco para meu evento. Podemos conversar? 🔥' ) ); ?>"
                   class="btn btn-whatsapp btn-lg"
                   target="_blank"
                   rel="noopener noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="22" height="22" aria-hidden="true">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Falar no WhatsApp Agora
                </a>

                <a href="<?php echo esc_url( home_url( '/servicos' ) ); ?>" class="btn btn-secondary btn-lg">
                    Ver os Pacotes
                </a>
            </div>

            <p style="margin-top: 2rem; color: rgba(255,255,255,0.7); font-size: 0.875rem;">
                ✅ Resposta rápida &nbsp;&nbsp; ✅ Orçamento sem compromisso &nbsp;&nbsp; ✅ Atendimento em todo o Rio
            </p>
        </div>
    </div>
</section>

<?php get_footer(); ?>

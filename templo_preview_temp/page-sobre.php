<?php
/**
 * Template Name: Sobre
 * Template: page-sobre.php
 * Página Sobre — Guilherme Santos, Churrasqueiro Gourmet
 *
 * @package TemplodoChurrasco
 */

get_header();
?>

<!-- =====================================================
     HERO DA PÁGINA SOBRE
     ===================================================== -->
<section class="page-hero" aria-label="Sobre Guilherme Santos">
    <div class="container">
        <div class="page-hero-content">
            <span class="section-label light" style="margin-bottom: 1.5rem; display: inline-block;">
                Conheça o churrasqueiro
            </span>
            <h1 class="page-hero-title">
                Guilherme Santos<br>
                <span>Churrasqueiro Gourmet</span><br>
                no Rio de Janeiro
            </h1>
            <p class="page-hero-subtitle">
                Desde 2018, transformando churrascos em experiências inesquecíveis para famílias e grupos em todo o Rio de Janeiro.
            </p>

            <div class="breadcrumb" aria-label="Localização na página">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a>
                <span class="breadcrumb-sep" aria-hidden="true">›</span>
                <span aria-current="page">Sobre</span>
            </div>
        </div>
    </div>
</section>

<!-- =====================================================
     HISTÓRIA DO GUILHERME
     ===================================================== -->
<section class="about-section section" style="background: var(--color-bg-light);" aria-label="História">
    <div class="container">
        <div class="about-grid">

            <!-- Imagem -->
            <div class="about-image-wrapper fade-in-left">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'large', [ 'class' => 'about-image', 'alt' => 'Guilherme Santos — Churrasqueiro Gourmet' ] ); ?>
                <?php else : ?>
                    <div class="about-image-placeholder" role="img" aria-label="Foto do Guilherme Santos">
                        <span class="placeholder-icon" aria-hidden="true">👨‍🍳</span>
                        <span>Guilherme Santos</span>
                        <small style="margin-top: 0.75rem; font-size: 0.75rem; opacity: 0.5; text-align: center; padding: 0 1rem;">
                            Adicione uma foto via<br>Aparência &gt; Personalizar
                        </small>
                    </div>
                <?php endif; ?>

                <div class="about-badge">
                    <span class="about-badge-number">380+</span>
                    <span class="about-badge-text">Eventos na brasa</span>
                </div>
            </div>

            <!-- Conteúdo da história -->
            <div class="about-content fade-in-right">
                <span class="section-label">A história por trás do fogo</span>
                <h2 class="about-title">
                    Do fogo à <span class="name-highlight">paixão</span> pelo churrasco perfeito
                </h2>

                <p class="about-text">
                    Tudo começou em 2018, no Rio de Janeiro, quando o Guilherme decidiu transformar o que era hobby em profissão. O que antes era "aquele churrasco incrível que o Guilherme faz", virou o <strong>Templo do Churrasco</strong> — um serviço completo de churrasqueiro gourmet que hoje atende famílias e grupos em toda a cidade.
                </p>

                <p class="about-text">
                    A paixão pelo fogo vem de longe. Desde criança, o Guilherme ficava ao lado da churrasqueira observando cada detalhe: como o calor age na carne, o ponto certo de cada corte, o segredo do sal. Esse conhecimento foi sendo aprimorado ao longo dos anos até se transformar no <strong>Método Brasa Viva</strong> — a metodologia exclusiva que garantiu zero reclamações em mais de 380 eventos.
                </p>

                <p class="about-text">
                    Hoje, o Guilherme não é só churrasqueiro. É o cara que <strong>cuida do seu evento do início ao fim</strong>, para que você possa curtir cada momento sem estresse, sem preocupação, sabendo que as carnes vão impressionar todo mundo.
                </p>

                <div style="display: flex; gap: 2rem; flex-wrap: wrap; margin-top: 2rem;">
                    <div style="text-align: center;">
                        <div style="font-family: var(--font-heading); font-size: 2.5rem; font-weight: 900; color: var(--color-primary);">2018</div>
                        <div style="font-size: 0.875rem; color: var(--color-gray-600);">Início da jornada</div>
                    </div>
                    <div style="text-align: center;">
                        <div style="font-family: var(--font-heading); font-size: 2.5rem; font-weight: 900; color: var(--color-secondary);">380+</div>
                        <div style="font-size: 0.875rem; color: var(--color-gray-600);">Eventos realizados</div>
                    </div>
                    <div style="text-align: center;">
                        <div style="font-family: var(--font-heading); font-size: 2.5rem; font-weight: 900; color: var(--color-gold);">7+</div>
                        <div style="font-size: 0.875rem; color: var(--color-gray-600);">Anos de experiência</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =====================================================
     MÉTODO BRASA VIVA — DETALHADO
     ===================================================== -->
<section class="section" aria-label="Método Brasa Viva" style="background: var(--color-white);">
    <div class="container">

        <div class="section-header">
            <span class="section-label">Nossa metodologia exclusiva</span>
            <h2 class="section-title title-underline">O Método Brasa Viva</h2>
            <p class="section-subtitle">
                Não é só acender o fogo e jogar a carne. O Método Brasa Viva é uma sequência de 4 etapas que garante um churrasco perfeito em cada evento.
            </p>
        </div>

        <div class="grid grid-2" style="gap: 2rem; align-items: stretch;">

            <!-- Etapa 1 -->
            <div class="service-card fade-in" style="padding: 2.5rem;">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-primary), var(--color-secondary)); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: var(--font-heading); font-size: 1.5rem; font-weight: 900; color: white; flex-shrink: 0;">
                        1
                    </div>
                    <div>
                        <div style="font-size: 0.75rem; color: var(--color-secondary); font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.25rem;">Etapa 1</div>
                        <h3 style="font-size: 1.25rem; margin: 0;">🥩 Seleção das Carnes</h3>
                    </div>
                </div>
                <p style="color: var(--color-gray-600); line-height: 1.8; font-size: 0.9375rem;">
                    Não compro qualquer carne. Seleciono pessoalmente os melhores cortes disponíveis no mercado: picanhas com capa de gordura perfeita, alcatras macias, maminha suculenta, costelas bem marmorizadas.
                </p>
                <p style="color: var(--color-gray-600); line-height: 1.8; font-size: 0.9375rem;">
                    A qualidade começa antes mesmo de acender o fogo. Uma carne ruim não tem salvação, por isso nunca abro mão da seleção rigorosa dos cortes.
                </p>
                <div style="margin-top: 1.5rem; padding: 1rem; background: var(--color-bg-light); border-radius: var(--border-radius); border-left: 3px solid var(--color-secondary);">
                    <strong style="color: var(--color-dark); font-size: 0.875rem;">🔑 Diferencial:</strong>
                    <span style="color: var(--color-gray-600); font-size: 0.875rem;"> Cortes nobles selecionados sempre no dia do evento para máxima frescura.</span>
                </div>
            </div>

            <!-- Etapa 2 -->
            <div class="service-card fade-in delay-1" style="padding: 2.5rem;">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-primary), var(--color-secondary)); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: var(--font-heading); font-size: 1.5rem; font-weight: 900; color: white; flex-shrink: 0;">
                        2
                    </div>
                    <div>
                        <div style="font-size: 0.75rem; color: var(--color-secondary); font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.25rem;">Etapa 2</div>
                        <h3 style="font-size: 1.25rem; margin: 0;">🧂 Tempero 24h Antes</h3>
                    </div>
                </div>
                <p style="color: var(--color-gray-600); line-height: 1.8; font-size: 0.9375rem;">
                    O tempero é um ritual. Cada corte recebe o sal e os condimentos ideais com exatamente 24 horas de antecedência. Isso permite que o sal penetre na carne de forma uniforme e realce o sabor natural de cada pedaço.
                </p>
                <p style="color: var(--color-gray-600); line-height: 1.8; font-size: 0.9375rem;">
                    Cada tipo de carne tem seu tempero específico: sal grosso para picanha, combinações especiais para costela, marinadas personalizadas para frango. Nada é padronizado.
                </p>
                <div style="margin-top: 1.5rem; padding: 1rem; background: var(--color-bg-light); border-radius: var(--border-radius); border-left: 3px solid var(--color-secondary);">
                    <strong style="color: var(--color-dark); font-size: 0.875rem;">🔑 Diferencial:</strong>
                    <span style="color: var(--color-gray-600); font-size: 0.875rem;"> Tempero personalizado por corte, aplicado com 24h de antecedência para sabor máximo.</span>
                </div>
            </div>

            <!-- Etapa 3 -->
            <div class="service-card fade-in delay-2" style="padding: 2.5rem;">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-primary), var(--color-secondary)); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: var(--font-heading); font-size: 1.5rem; font-weight: 900; color: white; flex-shrink: 0;">
                        3
                    </div>
                    <div>
                        <div style="font-size: 0.75rem; color: var(--color-secondary); font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.25rem;">Etapa 3</div>
                        <h3 style="font-size: 1.25rem; margin: 0;">🔥 Controle Individual de Ponto</h3>
                    </div>
                </div>
                <p style="color: var(--color-gray-600); line-height: 1.8; font-size: 0.9375rem;">
                    Na grelha, cada corte recebe atenção individual. Monitoro a temperatura, o tempo e o ponto de cada peça separadamente. A picanha tem um ponto, a costela tem outro, o frango tem um cuidado especial.
                </p>
                <p style="color: var(--color-gray-600); line-height: 1.8; font-size: 0.9375rem;">
                    Fogo no ponto certo: nem fraco demais (que cozinha em vez de assar) nem forte demais (que queima por fora e fica cru por dentro). Esse equilíbrio é o resultado de anos de prática.
                </p>
                <div style="margin-top: 1.5rem; padding: 1rem; background: var(--color-bg-light); border-radius: var(--border-radius); border-left: 3px solid var(--color-secondary);">
                    <strong style="color: var(--color-dark); font-size: 0.875rem;">🔑 Diferencial:</strong>
                    <span style="color: var(--color-gray-600); font-size: 0.875rem;"> Monitoramento constante e individual de cada corte na grelha.</span>
                </div>
            </div>

            <!-- Etapa 4 -->
            <div class="service-card fade-in delay-3" style="padding: 2.5rem;">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-primary), var(--color-secondary)); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: var(--font-heading); font-size: 1.5rem; font-weight: 900; color: white; flex-shrink: 0;">
                        4
                    </div>
                    <div>
                        <div style="font-size: 0.75rem; color: var(--color-secondary); font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.25rem;">Etapa 4</div>
                        <h3 style="font-size: 1.25rem; margin: 0;">✅ Só Serve Quando Está Perfeito</h3>
                    </div>
                </div>
                <p style="color: var(--color-gray-600); line-height: 1.8; font-size: 0.9375rem;">
                    Esse é o princípio mais importante do Método Brasa Viva: a carne só vai para a mesa quando eu tenho a certeza absoluta de que está perfeita. Sem pressa, sem pressão — o compromisso é com a qualidade.
                </p>
                <p style="color: var(--color-gray-600); line-height: 1.8; font-size: 0.9375rem;">
                    Provo cada corte antes de servir. Só depois de confirmar o ponto, a textura e o sabor é que libero para os convidados. Esse rigor é o que garante os 100% de satisfação.
                </p>
                <div style="margin-top: 1.5rem; padding: 1rem; background: var(--color-bg-light); border-radius: var(--border-radius); border-left: 3px solid var(--color-secondary);">
                    <strong style="color: var(--color-dark); font-size: 0.875rem;">🔑 Diferencial:</strong>
                    <span style="color: var(--color-gray-600); font-size: 0.875rem;"> Nenhuma carne vai à mesa sem aprovação do churrasqueiro. Zero concessões na qualidade.</span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =====================================================
     NÚMEROS
     ===================================================== -->
<section class="stats-section" aria-label="Números do Templo do Churrasco">
    <div class="container">
        <div class="section-header" style="margin-bottom: 3rem;">
            <h2 class="section-title light title-underline">Os números falam por si</h2>
        </div>
        <div class="stats-grid">
            <div class="stat-item fade-in">
                <span class="stat-icon" aria-hidden="true">🏆</span>
                <div class="stat-number" data-counter="380">380+</div>
                <div class="stat-label">Eventos Realizados</div>
                <div class="stat-sublabel">famílias atendidas no Rio</div>
            </div>
            <div class="stat-item fade-in delay-1">
                <span class="stat-icon" aria-hidden="true">📅</span>
                <div class="stat-number" data-counter="7">7+</div>
                <div class="stat-label">Anos de Experiência</div>
                <div class="stat-sublabel">desde 2018</div>
            </div>
            <div class="stat-item fade-in delay-2">
                <span class="stat-icon" aria-hidden="true">⭐</span>
                <div class="stat-number">100%</div>
                <div class="stat-label">Taxa de Recomendação</div>
                <div class="stat-sublabel">zero reclamações</div>
            </div>
            <div class="stat-item fade-in delay-3">
                <span class="stat-icon" aria-hidden="true">🥩</span>
                <div class="stat-number" data-counter="12">12+</div>
                <div class="stat-label">Tipos de Corte</div>
                <div class="stat-sublabel">no pacote deluxe</div>
            </div>
        </div>
    </div>
</section>

<!-- =====================================================
     DEPOIMENTO DESTAQUE
     ===================================================== -->
<section class="section" style="background: var(--color-bg-light);" aria-label="Depoimento">
    <div class="container-narrow">
        <div style="text-align: center; margin-bottom: 3rem;">
            <span class="section-label">O que dizem os clientes</span>
            <h2 class="section-title title-underline">Histórias que me motivam</h2>
        </div>

        <div style="background: linear-gradient(135deg, var(--color-dark), #2a1a1a); border-radius: var(--border-radius-lg); padding: 3rem; text-align: center; border: 1px solid rgba(230, 126, 34, 0.3);" class="fade-in">
            <span style="font-size: 5rem; color: var(--color-secondary); font-family: Georgia, serif; line-height: 1; display: block; margin-bottom: 1rem;" aria-hidden="true">"</span>
            <blockquote style="font-size: 1.25rem; color: rgba(255,255,255,0.9); line-height: 1.8; font-style: italic; margin: 0 0 2rem;">
                O Guilherme salvou meu aniversário de 50 anos! As carnes estavam perfeitas e eu pude curtir a festa sem me preocupar com nada. Todo mundo pediu o contato dele na hora!
            </blockquote>
            <div style="display: flex; justify-content: center; gap: 0.5rem; margin-bottom: 1.5rem;" aria-label="5 estrelas">
                <span style="color: var(--color-gold); font-size: 1.25rem;" aria-hidden="true">★★★★★</span>
            </div>
            <div style="display: flex; align-items: center; justify-content: center; gap: 1rem;">
                <div style="width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(135deg, var(--color-primary), var(--color-secondary)); display: flex; align-items: center; justify-content: center; font-family: var(--font-heading); font-size: 1.5rem; font-weight: 700; color: white;" aria-hidden="true">M</div>
                <div style="text-align: left;">
                    <div style="font-family: var(--font-heading); font-weight: 700; color: white; font-size: 1rem;">Maria de Lurdes</div>
                    <div style="font-size: 0.875rem; color: rgba(255,255,255,0.5);">52 anos &mdash; Aniversário de 50 anos</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =====================================================
     CTA FINAL
     ===================================================== -->
<section class="cta-section section" aria-label="Solicitar orçamento">
    <div class="container text-center fade-in">
        <h2 class="cta-title">Vamos criar uma experiência<br>inesquecível juntos? 🔥</h2>
        <p class="cta-subtitle">
            Me conta sobre o seu evento e a gente planeja o churrasco perfeito. Respondo rapidinho!
        </p>
        <div class="cta-buttons">
            <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Conheci a história do Templo do Churrasco e quero solicitar um orçamento para meu evento.' ) ); ?>"
               class="btn btn-whatsapp btn-lg"
               target="_blank"
               rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="22" height="22" aria-hidden="true">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                Falar com o Guilherme
            </a>
            <a href="<?php echo esc_url( home_url( '/servicos' ) ); ?>" class="btn btn-secondary btn-lg">
                Ver os Serviços
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>

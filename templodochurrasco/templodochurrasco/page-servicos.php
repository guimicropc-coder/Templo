<?php
/**
 * Template Name: Serviços
 * Template: page-servicos.php
 * Página de Serviços e Pacotes — Templo do Churrasco
 *
 * @package TemplodoChurrasco
 */

get_header();
?>

<!-- HERO -->
<section class="page-hero" aria-label="Serviços e Pacotes">
    <div class="container">
        <span class="section-label light" style="display: inline-block; margin-bottom: 1.5rem;">Tudo que você precisa</span>
        <h1 class="page-hero-title">Serviços e <span>Pacotes</span></h1>
        <p class="page-hero-subtitle">
            Do churrasqueiro avulso ao pacote completo com 12 cortes. Tenho a opção perfeita para o seu evento.
        </p>
        <div class="breadcrumb" aria-label="Localização na página">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a>
            <span class="breadcrumb-sep" aria-hidden="true">›</span>
            <span aria-current="page">Serviços</span>
        </div>
    </div>
</section>

<!-- =====================================================
     CARDS DE PACOTES
     ===================================================== -->
<section class="section" style="background: var(--color-bg-light);" aria-label="Pacotes disponíveis">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Escolha o seu pacote</span>
            <h2 class="section-title title-underline">Qual opção é ideal para você?</h2>
            <p class="section-subtitle">
                Cada pacote foi pensado para um tipo de evento. Me conta o que você precisa e eu te oriento na melhor escolha!
            </p>
        </div>

        <div class="grid grid-3" style="align-items: stretch; gap: 2rem;">

            <!-- PACOTE 1 — Churrasqueiro Avulso -->
            <div class="service-card fade-in" style="display: flex; flex-direction: column;">
                <span class="service-card-icon" aria-hidden="true">👨‍🍳</span>
                <h2 class="service-card-title">Churrasqueiro Avulso</h2>
                <div class="service-card-price">
                    A partir de<br><strong>R$ 300</strong>
                    <span class="price-period">/evento</span>
                </div>
                <p class="service-card-description">
                    Ideal para quem já tem os ingredientes e precisa de um churrasqueiro profissional para garantir que tudo saia perfeito. Eu me desloco até seu evento e cuido de toda a grelha.
                </p>

                <h4 style="font-size: 0.875rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: var(--color-gray-500); margin-bottom: 0.75rem;">O que inclui:</h4>
                <ul class="service-features">
                    <li class="service-card-feature">Presença de churrasqueiro profissional</li>
                    <li class="service-card-feature">Controle total da grelha e do fogo</li>
                    <li class="service-card-feature">Consulta prévia ao cardápio</li>
                    <li class="service-card-feature">Orientação no preparo (tempero)</li>
                    <li class="service-card-feature">Carnes assadas no ponto certo</li>
                    <li class="service-card-feature">Cortesia no serviço às mesas</li>
                </ul>

                <div style="background: rgba(192, 57, 43, 0.05); border: 1px solid rgba(192, 57, 43, 0.2); border-radius: var(--border-radius); padding: 1rem; margin-bottom: 1.5rem; font-size: 0.8125rem; color: var(--color-gray-600);">
                    <strong>⚠️ Cliente fornece:</strong> carnes, equipamentos (churrasqueira, carvão, espetos) e demais ingredientes.
                </div>

                <div class="mt-auto">
                    <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Tenho interesse no serviço de Churrasqueiro Avulso. Quero saber a disponibilidade e valor para o meu evento.' ) ); ?>"
                       class="btn btn-primary"
                       target="_blank"
                       rel="noopener noreferrer"
                       style="width: 100%; justify-content: center;">
                        Contratar Churrasqueiro
                    </a>
                </div>
            </div>

            <!-- PACOTE 2 — Churrasco Gourmet (MAIS POPULAR) -->
            <div class="service-card featured fade-in delay-1" style="display: flex; flex-direction: column; position: relative;">
                <div class="service-badge">MAIS POPULAR</div>
                <span class="service-card-icon" aria-hidden="true">🥩</span>
                <h2 class="service-card-title">Churrasco Gourmet</h2>
                <div class="service-card-price" style="color: var(--color-secondary);">
                    Sob Consulta
                    <span class="price-period" style="color: rgba(255,255,255,0.5);">(por pessoa)</span>
                </div>
                <p class="service-card-description">
                    O serviço mais completo e popular. Carnes nobres selecionadas, buffet de guarnições, garçons e toda a estrutura. Você só aparece para comemorar.
                </p>

                <h4 style="font-size: 0.875rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: rgba(255,255,255,0.5); margin-bottom: 0.75rem;">Carnes incluídas:</h4>
                <ul class="service-features" style="margin-bottom: 1rem;">
                    <li class="service-card-feature">🥩 Picanha especial (capa de gordura)</li>
                    <li class="service-card-feature">🥩 Alcatra macia e suculenta</li>
                    <li class="service-card-feature">🌭 Linguiça artesanal defumada</li>
                    <li class="service-card-feature">🌭 Salsicha especial grelhada</li>
                    <li class="service-card-feature">🍗 Frango marinado na brasa</li>
                </ul>

                <h4 style="font-size: 0.875rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: rgba(255,255,255,0.5); margin-bottom: 0.75rem;">Buffet de guarnições:</h4>
                <ul class="service-features" style="margin-bottom: 1rem;">
                    <li class="service-card-feature">🍚 Arroz branco e arroz de brócolis</li>
                    <li class="service-card-feature">🫘 Feijão tropeiro especial</li>
                    <li class="service-card-feature">🌽 Farofa crocante da casa</li>
                    <li class="service-card-feature">🥗 Saladas mistas frescas</li>
                    <li class="service-card-feature">🧀 Pão de queijo quentinho</li>
                    <li class="service-card-feature">🫙 Molhos especiais da casa</li>
                </ul>

                <h4 style="font-size: 0.875rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: rgba(255,255,255,0.5); margin-bottom: 0.75rem;">Estrutura e serviço:</h4>
                <ul class="service-features" style="margin-bottom: 1.5rem;">
                    <li class="service-card-feature">Garçons para atendimento</li>
                    <li class="service-card-feature">Churrasqueira e equipamentos</li>
                    <li class="service-card-feature">Carvão e utensílios completos</li>
                    <li class="service-card-feature">Limpeza após o evento</li>
                </ul>

                <div class="mt-auto">
                    <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Tenho interesse no Churrasco Gourmet Completo. Gostaria de um orçamento para o meu evento!' ) ); ?>"
                       class="btn btn-gold"
                       target="_blank"
                       rel="noopener noreferrer"
                       style="width: 100%; justify-content: center;">
                        Solicitar Orçamento Gourmet
                    </a>
                </div>
            </div>

            <!-- PACOTE 3 — Deluxe -->
            <div class="service-card fade-in delay-2" style="display: flex; flex-direction: column;">
                <span class="service-card-icon" aria-hidden="true">👑</span>
                <h2 class="service-card-title">Pacote Deluxe</h2>
                <div class="service-card-price">
                    <strong>R$ 105</strong>
                    <span class="price-period">/pessoa</span>
                </div>
                <p class="service-card-description">
                    A experiência definitiva de churrasco. Doze cortes diferentes, buffet completo e sobremesas. Para eventos especiais que merecem o melhor.
                </p>

                <h4 style="font-size: 0.875rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: var(--color-gray-500); margin-bottom: 0.75rem;">12 Cortes nobres:</h4>
                <ul class="service-features" style="margin-bottom: 1rem;">
                    <li class="service-card-feature">🥩 Picanha premium</li>
                    <li class="service-card-feature">🥩 Alcatra especial</li>
                    <li class="service-card-feature">🥩 Maminha suculenta</li>
                    <li class="service-card-feature">🥩 Costela bovina</li>
                    <li class="service-card-feature">🥩 Fraldinha macia</li>
                    <li class="service-card-feature">🥩 Ancho (ribeye)</li>
                    <li class="service-card-feature">🌭 Linguiça artesanal</li>
                    <li class="service-card-feature">🌭 Salsicha especial</li>
                    <li class="service-card-feature">🍗 Frango marinado</li>
                    <li class="service-card-feature">🥩 Coração de frango</li>
                    <li class="service-card-feature">🥩 Cupim bovino</li>
                    <li class="service-card-feature">🐷 Costelinha suína</li>
                </ul>

                <ul class="service-features" style="margin-bottom: 1.5rem;">
                    <li class="service-card-feature">Buffet completo de guarnições</li>
                    <li class="service-card-feature">Sobremesas variadas incluídas</li>
                    <li class="service-card-feature">Estrutura e serviço completo</li>
                    <li class="service-card-feature">Garçons e atendimento premium</li>
                </ul>

                <div class="mt-auto">
                    <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Tenho interesse no Pacote Deluxe com 12 cortes de carne. Quero saber mais e solicitar um orçamento!' ) ); ?>"
                       class="btn btn-primary"
                       target="_blank"
                       rel="noopener noreferrer"
                       style="width: 100%; justify-content: center;">
                        Contratar Pacote Deluxe
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =====================================================
     TABELA COMPARATIVA
     ===================================================== -->
<section class="section" style="background: var(--color-white);" aria-label="Comparativo de pacotes">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Compare e decida</span>
            <h2 class="section-title title-underline">Tabela Comparativa</h2>
        </div>

        <div style="overflow-x: auto;">
            <table class="comparison-table fade-in" role="table" aria-label="Comparativo dos pacotes">
                <thead>
                    <tr>
                        <th style="text-align: left; width: 35%;">O que está incluso</th>
                        <th>Avulso</th>
                        <th class="featured-col">Gourmet</th>
                        <th>Deluxe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Churrasqueiro profissional</td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                        <td class="featured-col text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                    </tr>
                    <tr>
                        <td>Carnes fornecidas</td>
                        <td class="text-center"><span class="check-no" aria-label="Não incluso">✕</span></td>
                        <td class="featured-col text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                    </tr>
                    <tr>
                        <td>Picanha + Alcatra</td>
                        <td class="text-center"><span class="check-no" aria-label="Não incluso">✕</span></td>
                        <td class="featured-col text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                    </tr>
                    <tr>
                        <td>12 cortes de carne</td>
                        <td class="text-center"><span class="check-no" aria-label="Não incluso">✕</span></td>
                        <td class="featured-col text-center"><span class="check-no" aria-label="Não incluso">✕</span></td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                    </tr>
                    <tr>
                        <td>Buffet de guarnições</td>
                        <td class="text-center"><span class="check-no" aria-label="Não incluso">✕</span></td>
                        <td class="featured-col text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                    </tr>
                    <tr>
                        <td>Garçons no serviço</td>
                        <td class="text-center"><span class="check-no" aria-label="Não incluso">✕</span></td>
                        <td class="featured-col text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                    </tr>
                    <tr>
                        <td>Sobremesas</td>
                        <td class="text-center"><span class="check-no" aria-label="Não incluso">✕</span></td>
                        <td class="featured-col text-center"><span class="check-no" aria-label="Não incluso">✕</span></td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                    </tr>
                    <tr>
                        <td>Equipamentos (churrasqueira, carvão)</td>
                        <td class="text-center"><span class="check-no" aria-label="Não incluso">✕</span></td>
                        <td class="featured-col text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                    </tr>
                    <tr>
                        <td>Tempero Método Brasa Viva</td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                        <td class="featured-col text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                    </tr>
                    <tr>
                        <td style="font-weight: 700;">Preço</td>
                        <td class="text-center" style="font-weight: 700; color: var(--color-primary);">A partir de R$ 300</td>
                        <td class="featured-col text-center" style="font-weight: 700; color: var(--color-secondary);">Sob Consulta</td>
                        <td class="text-center" style="font-weight: 700; color: var(--color-primary);">R$ 105/pessoa</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- =====================================================
     CARDÁPIO DE CARNES
     ===================================================== -->
<section class="section" style="background: var(--color-dark);" aria-label="Cardápio de carnes">
    <div class="container">
        <div class="section-header">
            <span class="section-label light">O que tem na grelha</span>
            <h2 class="section-title light title-underline">Cardápio de Carnes 🥩</h2>
            <p class="section-subtitle light">
                Seleciono pessoalmente cada corte. Aqui está o que pode entrar no seu churrasco.
            </p>
        </div>

        <div class="grid grid-3" style="gap: 1.5rem;">
            <?php
            $carnes = [
                ['icone' => '🥩', 'nome' => 'Picanha',       'desc' => 'A rainha do churrasco. Escolho peças com capa de gordura perfeita, servida ao ponto com sal grosso.'],
                ['icone' => '🥩', 'nome' => 'Alcatra',        'desc' => 'Corte macio e saboroso, perfeito para todos os paladares. Fica sensacional na brasa.'],
                ['icone' => '🥩', 'nome' => 'Maminha',        'desc' => 'Suculenta e macia, a maminha é um corte especial que impressiona pela textura única.'],
                ['icone' => '🥩', 'nome' => 'Fraldinha',      'desc' => 'Tem fibras longas e sabor intenso. Ideal para quem gosta de carne com muito gosto.'],
                ['icone' => '🥩', 'nome' => 'Costela Bovina', 'desc' => 'Assada lentamente para sair no ponto certo. O colágeno derretido é o segredo da maciez.'],
                ['icone' => '🥩', 'nome' => 'Ancho (Ribeye)', 'desc' => 'Corte premium com marmoreio excepcional. Para os amantes de carne de alta qualidade.'],
                ['icone' => '🥩', 'nome' => 'Cupim',          'desc' => 'Corte com gordura entremeada naturalmente. Precisa de tempo na brasa — e vale cada minuto.'],
                ['icone' => '🐷', 'nome' => 'Costelinha Suína','desc' => 'Macia, suculenta e com aquela crosta caramelizada irresistível. Sucesso garantido.'],
                ['icone' => '🌭', 'nome' => 'Linguiça Artesanal','desc' => 'Defumada e temperada na medida certa. Ideal para o começo do churrasco e para a garotada.'],
                ['icone' => '🌭', 'nome' => 'Salsicha Especial','desc' => 'Grelhada no ponto certo, com sabor levemente defumado. Agrada a todos os paladares.'],
                ['icone' => '🍗', 'nome' => 'Frango Marinado', 'desc' => 'Marinado com especiarias por horas. Sai suculento e com sabor incrível na brasa.'],
                ['icone' => '🫀', 'nome' => 'Coração de Frango','desc' => 'Clássico do churrasco brasileiro. Temperado com alho e limão, é viciante na brasa.'],
            ];

            foreach ( $carnes as $i => $carne ) :
                $delay = $i < 5 ? "delay-{$i}" : '';
            ?>
                <div class="fade-in <?php echo $delay; ?>" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); border-radius: var(--border-radius-md); padding: 1.5rem; display: flex; gap: 1rem; align-items: flex-start; transition: all 0.3s ease;" onmouseover="this.style.borderColor='rgba(230,126,34,0.3)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.08)'">
                    <span style="font-size: 2rem; flex-shrink: 0;" aria-hidden="true"><?php echo $carne['icone']; ?></span>
                    <div>
                        <h3 style="font-size: 1rem; color: white; margin-bottom: 0.5rem;"><?php echo esc_html( $carne['nome'] ); ?></h3>
                        <p style="font-size: 0.8125rem; color: rgba(255,255,255,0.55); margin: 0; line-height: 1.6;"><?php echo esc_html( $carne['desc'] ); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =====================================================
     FAQ
     ===================================================== -->
<section class="faq-section section" aria-label="Perguntas frequentes">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Tire suas dúvidas</span>
            <h2 class="section-title title-underline">Perguntas Frequentes</h2>
        </div>

        <div class="faq-list">

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Qual o mínimo de convidados para contratar?
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer">
                    <p>Não tenho mínimo! O serviço de Churrasqueiro Avulso começa a partir de R$ 300 independente do número de pessoas. Para o Churrasco Gourmet e o Pacote Deluxe, a partir de 20 pessoas o valor fica mais atrativo. Mas me manda uma mensagem e a gente encontra a melhor solução para o seu evento!</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Você atende fora do Rio de Janeiro?
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer">
                    <p>Atendo em toda a Região Metropolitana do Rio de Janeiro, incluindo Niterói, São Gonçalo, Duque de Caxias, Nova Iguaçu e demais cidades da Grande Rio. Para locais mais distantes, pode ter um acréscimo de deslocamento. Me conta onde é o evento!</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Com quanto tempo de antecedência devo contratar?
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer">
                    <p>Quanto antes, melhor! Principalmente em datas comemorativas (Natal, Réveillon, Carnaval, feriados), a agenda enche rápido. O ideal é me contatar com pelo menos 15 dias de antecedência. Para eventos de última hora, consulte disponibilidade — às vezes consigo encaixar!</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Como funciona o pagamento?
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer">
                    <p>Trabalhamos com sinal de 50% na confirmação do evento para garantir a data na agenda, e os 50% restantes no dia do evento. Aceitamos PIX, transferência bancária e dinheiro. Me pergunte sobre outras formas de pagamento!</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    E se chover no dia do evento?
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer">
                    <p>A gente não cancela por causa de chuva! Trabalho com estrutura adaptável para coberturas e tenho experiência em eventos com tempo adverso. O que me preocupa é a segurança — eventos ao relâmpago ficam para quando a chuva dar uma trégua. Temos política de reagendamento para emergências climáticas.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Posso personalizar o cardápio?
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer">
                    <p>Com certeza! Cada churrasco é planejado junto com você. Se tem alguém vegetariano, alguma restrição alimentar ou um corte favorito, me fala! Posso adaptar o cardápio dentro das possibilidades de cada pacote. O objetivo é que todo mundo seja atendido e fique satisfeito.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section section" aria-label="Solicitar orçamento">
    <div class="container text-center fade-in">
        <h2 class="cta-title">Qual pacote combina com o seu evento? 🔥</h2>
        <p class="cta-subtitle">Me conta o que você precisa e eu monto o orçamento ideal!</p>
        <div class="cta-buttons">
            <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Quero solicitar um orçamento para um churrasco. Pode me ajudar?' ) ); ?>"
               class="btn btn-whatsapp btn-lg"
               target="_blank"
               rel="noopener noreferrer">
                Solicitar Orçamento Agora
            </a>
            <a href="<?php echo esc_url( home_url( '/calculadora' ) ); ?>" class="btn btn-secondary btn-lg">
                Calcular Quantidade de Carne
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>

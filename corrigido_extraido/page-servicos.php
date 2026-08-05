<?php
/**
 * Template Name: Serviços
 * Template: page-servicos.php
 * Página de Serviços e Buffets — Templo do Churrasco
 *
 * @package TemplodoChurrasco
 */

get_header();
?>

<!-- =====================================================
     HERO DA PÁGINA
     ===================================================== -->
<section class="page-hero" aria-label="Serviços e Buffets">
    <div class="container">
        <div class="breadcrumb" aria-label="Localização na página">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a>
            <span class="breadcrumb-sep" aria-hidden="true">›</span>
            <span aria-current="page">Serviços</span>
        </div>
        <span class="section-label light" style="display:inline-block;margin-bottom:1.5rem;">🥩 Cardápios e Buffets</span>
        <h1 class="page-hero-title">Escolha o Buffet <span>Perfeito</span><br>para o Seu Evento</h1>
        <p class="page-hero-subtitle">
            Do churrasqueiro avulso ao buffet completo com 12 cortes — tenho o pacote certo para cada ocasião. Tudo feito na brasa, com o Método Brasa Viva.
        </p>
        <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Vim ver os serviços e quero um orçamento 🔥' ) ); ?>"
           class="btn btn-whatsapp btn-lg"
           target="_blank"
           rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            Solicitar Orçamento Agora
        </a>
    </div>
</section>

<!-- =====================================================
     SEÇÃO: 3 BUFFETS
     ===================================================== -->
<section class="section" id="buffets" style="background:var(--color-white);" aria-label="Buffets disponíveis">
    <div class="container">

        <div class="section-header">
            <span class="section-label">3 opções de buffet</span>
            <h2 class="section-title title-underline">Nossos Buffets de Churrasco</h2>
            <p class="section-subtitle" style="margin-top:1.25rem">
                Cada buffet é montado com carnes selecionadas e temperadas 24h antes. Você escolhe o pacote, eu cuido do resto — do início ao último pedaço servido.
            </p>
        </div>

        <div class="grid grid-3" style="align-items:stretch;">

            <!-- BUFFET 1: BRASA -->
            <div class="buffet-card fade-in">
                <div class="buffet-card-header">
                    <span class="buffet-icon" aria-hidden="true">🔥</span>
                    <h2 class="buffet-title">Buffet Brasa</h2>
                    <p class="buffet-subtitle">Ideal para reuniões e aniversários</p>
                </div>
                <div class="buffet-price-area">
                    <div class="buffet-price">Sob Consulta</div>
                    <div class="buffet-price-label">Preço por pessoa conforme número de convidados</div>
                </div>
                <p class="buffet-desc">O clássico churrasco na brasa com carnes selecionadas e guarnições completas. Perfeito para reuniões em família, aniversários e confraternizações.</p>

                <div class="buffet-block">
                    <div class="buffet-block-title">Carnes</div>
                    <ul class="buffet-items">
                        <li>Picanha na brasa</li>
                        <li>Alcatra</li>
                        <li>Maminha</li>
                        <li>Linguiça de pernil artesanal</li>
                        <li>Frango temperado na brasa</li>
                        <li>Pão de alho grelhado</li>
                    </ul>
                </div>

                <div class="buffet-divider"></div>

                <div class="buffet-block">
                    <div class="buffet-block-title">Guarnições</div>
                    <ul class="buffet-items">
                        <li>Arroz branco</li>
                        <li>Feijão tropeiro</li>
                        <li>Farofa temperada</li>
                        <li>Salada de folhas mistas</li>
                        <li>Molho chimichurri artesanal</li>
                        <li>Banana grelhada na brasa</li>
                    </ul>
                </div>

                <div class="buffet-divider"></div>

                <div class="buffet-block">
                    <div class="buffet-block-title">Incluso</div>
                    <ul class="buffet-items">
                        <li>Churrasqueiro Guilherme presente</li>
                        <li>Equipamentos de churrasco</li>
                        <li>Método Brasa Viva</li>
                    </ul>
                </div>

                <div class="buffet-footer">
                    <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Quero saber mais sobre o Buffet Brasa 🔥' ) ); ?>"
                       class="btn btn-outline-primary"
                       target="_blank"
                       rel="noopener noreferrer"
                       style="width:100%;justify-content:center;">
                        Solicitar Orçamento
                    </a>
                    <p class="buffet-note">Crianças até 5 anos: gratuito · 6–11 anos: 50%</p>
                </div>
            </div>

            <!-- BUFFET 2: GOURMET (DESTAQUE) -->
            <div class="buffet-card buffet-featured fade-in delay-1">
                <div class="buffet-badge">⭐ MAIS PEDIDO</div>
                <div class="buffet-card-header">
                    <span class="buffet-icon" aria-hidden="true">🥩</span>
                    <h2 class="buffet-title">Buffet Gourmet</h2>
                    <p class="buffet-subtitle">Para quem quer impressionar</p>
                </div>
                <div class="buffet-price-area">
                    <div class="buffet-price" style="color:var(--color-gold)">Sob Consulta</div>
                    <div class="buffet-price-label">Preço conforme número de convidados e cardápio</div>
                </div>
                <p class="buffet-desc">Experiência completa com cortes premium, buffet de guarnições variado, entrada especial, garçons e toda a estrutura. Você não precisa se preocupar com nada.</p>

                <div class="buffet-block">
                    <div class="buffet-block-title">Entrada</div>
                    <ul class="buffet-items">
                        <li>Caldo de feijão servido na chegada</li>
                        <li>Queijo coalho grelhado</li>
                        <li>Salgadinhos variados</li>
                        <li>Coração de frango temperado</li>
                    </ul>
                </div>

                <div class="buffet-divider"></div>

                <div class="buffet-block">
                    <div class="buffet-block-title">Carnes Nobres</div>
                    <ul class="buffet-items">
                        <li>Picanha grelhada</li>
                        <li>Alcatra e maminha</li>
                        <li>Costela de porco na brasa</li>
                        <li>Linguiça especial artesanal</li>
                        <li>Frango (asa e coxa) temperados</li>
                        <li>Salsichão grelhado</li>
                    </ul>
                </div>

                <div class="buffet-divider"></div>

                <div class="buffet-block">
                    <div class="buffet-block-title">Buffet Completo</div>
                    <ul class="buffet-items">
                        <li>Arroz branco e feijão tropeiro</li>
                        <li>Farofa especial da casa</li>
                        <li>Salada Caesar e salada tropical</li>
                        <li>Pão de queijo quentinho</li>
                        <li>Molhos artesanais (chimichurri, campanha)</li>
                        <li>Vinagrete e acompanhamentos extras</li>
                    </ul>
                </div>

                <div class="buffet-divider"></div>

                <div class="buffet-block">
                    <div class="buffet-block-title">Estrutura Inclusa</div>
                    <ul class="buffet-items">
                        <li>Garçons para servir os convidados</li>
                        <li>Equipamentos e estrutura completa</li>
                        <li>Método Brasa Viva garantido</li>
                    </ul>
                </div>

                <div class="buffet-footer">
                    <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Quero saber mais sobre o Buffet Gourmet 🥩' ) ); ?>"
                       class="btn btn-gold"
                       target="_blank"
                       rel="noopener noreferrer"
                       style="width:100%;justify-content:center;">
                        Solicitar Orçamento
                    </a>
                    <p class="buffet-note">Crianças até 5 anos: gratuito · 6–11 anos: 50%</p>
                </div>
            </div>

            <!-- BUFFET 3: DELUXE -->
            <div class="buffet-card fade-in delay-2">
                <div class="buffet-card-header">
                    <span class="buffet-icon" aria-hidden="true">👑</span>
                    <h2 class="buffet-title">Buffet Deluxe</h2>
                    <p class="buffet-subtitle">A experiência definitiva</p>
                </div>
                <div class="buffet-price-area">
                    <div class="buffet-price">R$ 105<span style="font-size:1rem;font-weight:400;color:var(--color-gray-500)">/pessoa</span></div>
                    <div class="buffet-price-label">Mínimo 20 convidados</div>
                </div>
                <p class="buffet-desc">Doze cortes de carne nobres, buffet premium, sobremesas e serviço de garçons. Para quem quer um evento inesquecível e não abre mão de nada.</p>

                <div class="buffet-block">
                    <div class="buffet-block-title">12 Cortes de Carne</div>
                    <ul class="buffet-items">
                        <li>Picanha (corte e inteira)</li>
                        <li>Alcatra e maminha grelhadas</li>
                        <li>Costela bovina na brasa lenta</li>
                        <li>Filé de frango e asa temperados</li>
                        <li>Linguiça especial e salsichão</li>
                        <li>Costeleta de porco e pernil</li>
                        <li>Queijo coalho e pão de alho</li>
                    </ul>
                </div>

                <div class="buffet-divider"></div>

                <div class="buffet-block">
                    <div class="buffet-block-title">Buffet Premium</div>
                    <ul class="buffet-items">
                        <li>Entrada: caldo de feijão + salgados</li>
                        <li>Arroz, feijão, farofa especial</li>
                        <li>Salada Caesar + salada de palmito</li>
                        <li>Pão de queijo e vinagrete</li>
                        <li>Molhos artesanais variados</li>
                        <li>Batata calabresa e ovos de codorna</li>
                    </ul>
                </div>

                <div class="buffet-divider"></div>

                <div class="buffet-block">
                    <div class="buffet-block-title">Sobremesas</div>
                    <ul class="buffet-items">
                        <li>2 opções de sobremesa incluídas</li>
                        <li>Banana grelhada com canela e mel</li>
                    </ul>
                </div>

                <div class="buffet-divider"></div>

                <div class="buffet-block">
                    <div class="buffet-block-title">Serviço Completo</div>
                    <ul class="buffet-items">
                        <li>Garçons para servir à mesa</li>
                        <li>Toda a estrutura e equipamentos</li>
                        <li>Atendimento personalizado</li>
                        <li>Método Brasa Viva com 12 cortes</li>
                    </ul>
                </div>

                <div class="buffet-footer">
                    <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Quero saber mais sobre o Buffet Deluxe com 12 carnes 👑' ) ); ?>"
                       class="btn btn-primary"
                       target="_blank"
                       rel="noopener noreferrer"
                       style="width:100%;justify-content:center;">
                        Solicitar Orçamento
                    </a>
                    <p class="buffet-note">Crianças até 5 anos: gratuito · 6–11 anos: 50%</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =====================================================
     INCLUSO EM TODOS
     ===================================================== -->
<section class="section" style="background:var(--color-bg-light);" aria-label="Incluso em todos os buffets">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Garantias Templo do Churrasco</span>
            <h2 class="section-title title-underline">Incluso em Todos os Buffets</h2>
            <p class="section-subtitle" style="margin-top:1.25rem">
                Independente do pacote escolhido, essas garantias fazem parte do nosso compromisso com você.
            </p>
        </div>
        <div class="included-grid">
            <div class="included-item fade-in">
                <span class="included-icon" aria-hidden="true">🧂</span>
                <h3 class="included-title">Tempero 24h Antes</h3>
                <p class="included-text">Cada corte recebe o tempero ideal com 24h de antecedência para absorção perfeita dos sabores.</p>
            </div>
            <div class="included-item fade-in delay-1">
                <span class="included-icon" aria-hidden="true">🔥</span>
                <h3 class="included-title">Método Brasa Viva</h3>
                <p class="included-text">Controle individual do ponto de cada carne. Só serve quando está perfeito, sem exceção.</p>
            </div>
            <div class="included-item fade-in delay-2">
                <span class="included-icon" aria-hidden="true">🏆</span>
                <h3 class="included-title">7 Anos de Experiência</h3>
                <p class="included-text">Mais de 380 eventos realizados com zero reclamações. Você está em boas mãos.</p>
            </div>
            <div class="included-item fade-in delay-3">
                <span class="included-icon" aria-hidden="true">📍</span>
                <h3 class="included-title">Atendimento no Rio</h3>
                <p class="included-text">Atendemos toda a Grande Rio de Janeiro. Me chama e a gente resolve a logística.</p>
            </div>
        </div>
    </div>
</section>

<!-- =====================================================
     TABELA COMPARATIVA
     ===================================================== -->
<section class="section" style="background:var(--color-white);" aria-label="Comparativo de buffets">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Compare e decida</span>
            <h2 class="section-title title-underline">Qual Buffet é o Certo para Você?</h2>
            <p class="section-subtitle" style="margin-top:1.25rem">
                Veja lado a lado o que cada pacote oferece e faça a melhor escolha para o seu evento.
            </p>
        </div>

        <div style="overflow-x:auto;">
            <table class="comparison-table fade-in" role="table" aria-label="Comparativo dos buffets">
                <thead>
                    <tr>
                        <th style="text-align:left;width:35%;">O que está incluso</th>
                        <th>Buffet Brasa 🔥</th>
                        <th class="featured-col">Buffet Gourmet 🥩</th>
                        <th>Buffet Deluxe 👑</th>
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
                        <td>Método Brasa Viva</td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                        <td class="featured-col text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                    </tr>
                    <tr>
                        <td>Picanha na brasa</td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                        <td class="featured-col text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                    </tr>
                    <tr>
                        <td>Número de cortes de carne</td>
                        <td class="text-center">6 cortes</td>
                        <td class="featured-col text-center">6 cortes + entradas</td>
                        <td class="text-center"><strong>12 cortes</strong></td>
                    </tr>
                    <tr>
                        <td>Entrada (caldo de feijão + salgados)</td>
                        <td class="text-center"><span class="check-no" aria-label="Não incluso">✕</span></td>
                        <td class="featured-col text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                    </tr>
                    <tr>
                        <td>Buffet de guarnições</td>
                        <td class="text-center" style="font-size:0.8rem;color:var(--color-secondary);font-weight:600;">Básico</td>
                        <td class="featured-col text-center"><span class="check-yes">✓</span> Completo</td>
                        <td class="text-center"><span class="check-yes">✓</span> Premium</td>
                    </tr>
                    <tr>
                        <td>Pão de queijo</td>
                        <td class="text-center"><span class="check-no" aria-label="Não incluso">✕</span></td>
                        <td class="featured-col text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                    </tr>
                    <tr>
                        <td>Garçons para servir</td>
                        <td class="text-center"><span class="check-no" aria-label="Não incluso">✕</span></td>
                        <td class="featured-col text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                    </tr>
                    <tr>
                        <td>Sobremesas</td>
                        <td class="text-center"><span class="check-no" aria-label="Não incluso">✕</span></td>
                        <td class="featured-col text-center"><span class="check-no" aria-label="Não incluso">✕</span></td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span> 2 opções</td>
                    </tr>
                    <tr>
                        <td>Costela bovina na brasa lenta</td>
                        <td class="text-center"><span class="check-no" aria-label="Não incluso">✕</span></td>
                        <td class="featured-col text-center"><span class="check-no" aria-label="Não incluso">✕</span></td>
                        <td class="text-center"><span class="check-yes" aria-label="Incluso">✓</span></td>
                    </tr>
                    <tr>
                        <td>Crianças até 5 anos</td>
                        <td class="text-center">Gratuito</td>
                        <td class="featured-col text-center">Gratuito</td>
                        <td class="text-center">Gratuito</td>
                    </tr>
                    <tr>
                        <td style="font-weight:700;">Preço</td>
                        <td class="text-center" style="font-weight:700;color:var(--color-primary);">Sob consulta</td>
                        <td class="featured-col text-center" style="font-weight:700;color:var(--color-secondary);">Sob consulta</td>
                        <td class="text-center" style="font-weight:700;color:var(--color-primary);">R$ 105/pessoa</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- =====================================================
     CARDÁPIO DE CARNES
     ===================================================== -->
<section class="section" style="background:var(--color-dark);" aria-label="Cardápio de carnes">
    <div class="container">
        <div class="section-header">
            <span class="section-label light">O que tem na grelha</span>
            <h2 class="section-title light title-underline">Cardápio de Carnes 🥩</h2>
            <p class="section-subtitle light">
                Seleciono pessoalmente cada corte. Aqui está o que pode entrar no seu churrasco.
            </p>
        </div>

        <div class="grid grid-3" style="gap:1.5rem;">
            <?php
            $carnes = [
                ['icone' => '🥩', 'nome' => 'Picanha',          'desc' => 'A rainha do churrasco. Escolho peças com capa de gordura perfeita, servida ao ponto com sal grosso.'],
                ['icone' => '🥩', 'nome' => 'Alcatra',           'desc' => 'Corte macio e saboroso, perfeito para todos os paladares. Fica sensacional na brasa.'],
                ['icone' => '🥩', 'nome' => 'Maminha',           'desc' => 'Suculenta e macia, a maminha é um corte especial que impressiona pela textura única.'],
                ['icone' => '🥩', 'nome' => 'Fraldinha',         'desc' => 'Tem fibras longas e sabor intenso. Ideal para quem gosta de carne com muito gosto.'],
                ['icone' => '🥩', 'nome' => 'Costela Bovina',    'desc' => 'Assada lentamente para sair no ponto certo. O colágeno derretido é o segredo da maciez.'],
                ['icone' => '🥩', 'nome' => 'Ancho (Ribeye)',    'desc' => 'Corte premium com marmoreio excepcional. Para os amantes de carne de alta qualidade.'],
                ['icone' => '🥩', 'nome' => 'Cupim',             'desc' => 'Corte com gordura entremeada naturalmente. Precisa de tempo na brasa — e vale cada minuto.'],
                ['icone' => '🐷', 'nome' => 'Costelinha Suína',  'desc' => 'Macia, suculenta e com aquela crosta caramelizada irresistível. Sucesso garantido.'],
                ['icone' => '🌭', 'nome' => 'Linguiça Artesanal','desc' => 'Defumada e temperada na medida certa. Ideal para o começo do churrasco e para a garotada.'],
                ['icone' => '🌭', 'nome' => 'Salsicha Especial', 'desc' => 'Grelhada no ponto certo, com sabor levemente defumado. Agrada a todos os paladares.'],
                ['icone' => '🍗', 'nome' => 'Frango Marinado',   'desc' => 'Marinado com especiarias por horas. Sai suculento e com sabor incrível na brasa.'],
                ['icone' => '🫀', 'nome' => 'Coração de Frango', 'desc' => 'Clássico do churrasco brasileiro. Temperado com alho e limão, é viciante na brasa.'],
            ];
            foreach ( $carnes as $i => $carne ) :
                $delay = $i < 5 ? 'delay-' . $i : '';
            ?>
                <div class="carne-card fade-in <?php echo esc_attr( $delay ); ?>">
                    <span class="carne-icon" aria-hidden="true"><?php echo $carne['icone']; ?></span>
                    <div>
                        <h3 class="carne-title"><?php echo esc_html( $carne['nome'] ); ?></h3>
                        <p class="carne-desc"><?php echo esc_html( $carne['desc'] ); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =====================================================
     ITENS ADICIONAIS
     ===================================================== -->
<section class="section" style="background:var(--color-bg-light);" aria-label="Itens adicionais disponíveis">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Personalize ainda mais</span>
            <h2 class="section-title title-underline">Itens Adicionais Disponíveis</h2>
            <p class="section-subtitle" style="margin-top:1.25rem">
                Complemente qualquer buffet com esses itens extras. Me consulte no orçamento!
            </p>
        </div>
        <div class="extras-grid">
            <div class="extra-card fade-in">
                <span class="extra-icon" aria-hidden="true">🍺</span>
                <h3 class="extra-title">Pacote de Bebidas</h3>
                <p class="extra-text">Refrigerantes, sucos, água mineral, cerveja gelada e chopp. Solicite no orçamento e a gente inclui tudo.</p>
            </div>
            <div class="extra-card fade-in delay-1">
                <span class="extra-icon" aria-hidden="true">🎂</span>
                <h3 class="extra-title">Sobremesas Extras</h3>
                <p class="extra-text">Sorvete, mousse de chocolate, pudim e mais. Para adoçar o final de um churrasco perfeito.</p>
            </div>
            <div class="extra-card fade-in delay-2">
                <span class="extra-icon" aria-hidden="true">🥗</span>
                <h3 class="extra-title">Opções Vegetarianas</h3>
                <p class="extra-text">Legumes grelhados na brasa, berinjela, abobrinha e cogumelos. Churrasco pra todo mundo!</p>
            </div>
            <div class="extra-card fade-in">
                <span class="extra-icon" aria-hidden="true">🧀</span>
                <h3 class="extra-title">Tábua de Frios</h3>
                <p class="extra-text">Queijos selecionados, embutidos, frutas e crackers para receber os convidados com estilo.</p>
            </div>
            <div class="extra-card fade-in delay-1">
                <span class="extra-icon" aria-hidden="true">🎉</span>
                <h3 class="extra-title">Decoração Temática</h3>
                <p class="extra-text">Festa Junina, aniversário, corporativo ou churrasco casual. A gente adapta o cardápio ao tema do evento.</p>
            </div>
            <div class="extra-card fade-in delay-2">
                <span class="extra-icon" aria-hidden="true">🥘</span>
                <h3 class="extra-title">Feijoada Premium</h3>
                <p class="extra-text">Uma opção especial com torresmo, linguiça, arroz, couve e laranja. Para os dias mais especiais.</p>
            </div>
        </div>
    </div>
</section>

<!-- =====================================================
     FAQ
     ===================================================== -->
<section class="faq-section section" style="background:var(--color-white);" aria-label="Perguntas frequentes">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Tire suas dúvidas</span>
            <h2 class="section-title title-underline">Perguntas Frequentes</h2>
        </div>

        <div class="faq-list">

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Com quantos dias de antecedência devo contratar?
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer">
                    <p>O ideal é entrar em contato com pelo menos 7 dias de antecedência para garantir a data e planejar tudo com calma. Para eventos maiores (acima de 50 pessoas), recomendo 15 dias. Me manda mensagem e verifico a disponibilidade!</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Qual o número mínimo de convidados?
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer">
                    <p>Para os Buffets Brasa e Gourmet, não há número mínimo fixo — avaliamos caso a caso. O Buffet Deluxe requer no mínimo 20 convidados. Me conta o tamanho do seu evento e faço a proposta ideal!</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Vocês atendem fora do Rio de Janeiro?
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer">
                    <p>Atendemos principalmente o Rio de Janeiro e Grande Rio (Niterói, São Gonçalo, Baixada Fluminense, Barra, Recreio, Zona Sul e Zona Norte). Para locais mais distantes, consulte sobre disponibilidade e taxas de deslocamento.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Os equipamentos de churrasco estão inclusos?
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer">
                    <p>Sim! Nos pacotes Gourmet e Deluxe, toda a estrutura e equipamentos estão inclusos. No serviço de Churrasqueiro Avulso, o cliente fornece os equipamentos, mas posso orientar sobre o que é necessário.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Quais as formas de pagamento?
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer">
                    <p>Aceito PIX, dinheiro e cartão de crédito (parcelado em até 10x). Geralmente solicito uma entrada de 30% para confirmar o agendamento e o restante no dia do evento.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Posso personalizar o cardápio?
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer">
                    <p>Com certeza! Cada churrasco é planejado junto com você. Se tem alguém vegetariano, alguma restrição alimentar ou um corte favorito, me fala! Posso adaptar o cardápio dentro das possibilidades de cada pacote.</p>
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
        <span style="font-size:4rem;display:block;margin-bottom:1rem;" aria-hidden="true">🔥</span>
        <h2 class="cta-title">Escolheu o buffet ideal?<br>Bora marcar a data!</h2>
        <p class="cta-subtitle">Me manda uma mensagem no WhatsApp com a data do seu evento e o número de convidados. Faço um orçamento personalizado rapidinho!</p>
        <div class="cta-buttons">
            <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Quero contratar um buffet de churrasco. Pode me ajudar? 🔥' ) ); ?>"
               class="btn btn-whatsapp btn-lg"
               target="_blank"
               rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="22" height="22" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                Falar no WhatsApp Agora
            </a>
            <a href="<?php echo esc_url( home_url( '/calculadora' ) ); ?>" class="btn btn-secondary btn-lg">
                Calcular Quantidade de Carne
            </a>
        </div>
        <p style="margin-top:2rem;color:rgba(255,255,255,0.7);font-size:0.875rem;">
            ✅ Resposta rápida &nbsp;&nbsp; ✅ Orçamento sem compromisso &nbsp;&nbsp; ✅ Pagamento parcelado em até 10x
        </p>
    </div>
</section>

<?php get_footer(); ?>

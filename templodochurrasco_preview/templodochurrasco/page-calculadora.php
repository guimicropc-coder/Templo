<?php
/**
 * Template Name: Calculadora
 * Template: page-calculadora.php
 * Calculadora de Carne para Churrasco — Templo do Churrasco
 *
 * @package TemplodoChurrasco
 */

get_header();
?>

<!-- HERO -->
<section class="page-hero" aria-label="Calculadora de carne">
    <div class="container">
        <span class="section-label light" style="display: inline-block; margin-bottom: 1.5rem;">Ferramenta gratuita</span>
        <h1 class="page-hero-title">Calculadora de <span>Carne</span> 🧮</h1>
        <p class="page-hero-subtitle">
            Descubra exatamente quanto de carne você precisa para o seu churrasco. Sem falta, sem desperdício!
        </p>
        <div class="breadcrumb" aria-label="Localização na página">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a>
            <span class="breadcrumb-sep" aria-hidden="true">›</span>
            <span aria-current="page">Calculadora de Carne</span>
        </div>
    </div>
</section>

<!-- =====================================================
     CALCULADORA
     ===================================================== -->
<section class="calculator-section section" aria-label="Calculadora de carne">
    <div class="container">

        <div class="calculator-wrapper">

            <!-- FORMULÁRIO DA CALCULADORA -->
            <div class="calculator-form fade-in-left">
                <h2 style="font-size: 1.5rem; margin-bottom: 0.5rem; color: var(--color-dark);">
                    Configure seu churrasco 🔥
                </h2>
                <p style="font-size: 0.9375rem; color: var(--color-gray-600); margin-bottom: 2rem;">
                    Preencha as informações do seu evento e a calculadora vai fazer todo o cálculo por você!
                </p>

                <form id="calc-form" novalidate aria-label="Calculadora de quantidade de carne">

                    <!-- CONVIDADOS -->
                    <div style="border-bottom: 1px solid var(--color-gray-200); padding-bottom: 1.5rem; margin-bottom: 1.5rem;">
                        <h3 style="font-size: 1rem; font-family: var(--font-heading); color: var(--color-dark); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                            <span aria-hidden="true">👥</span> Convidados
                        </h3>
                        <div class="form-grid">
                            <div class="form-group" style="margin-bottom: 0;">
                                <label class="form-label" for="calc-adultos">Adultos</label>
                                <input type="number" id="calc-adultos" name="adultos" class="form-control" value="10" min="0" max="500" placeholder="0">
                            </div>
                            <div class="form-group" style="margin-bottom: 0;">
                                <label class="form-label" for="calc-criancas">Crianças (até 12 anos)</label>
                                <input type="number" id="calc-criancas" name="criancas" class="form-control" value="0" min="0" max="200" placeholder="0">
                            </div>
                        </div>
                    </div>

                    <!-- EVENTO -->
                    <div style="border-bottom: 1px solid var(--color-gray-200); padding-bottom: 1.5rem; margin-bottom: 1.5rem;">
                        <h3 style="font-size: 1rem; font-family: var(--font-heading); color: var(--color-dark); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                            <span aria-hidden="true">🎉</span> Evento
                        </h3>
                        <div class="form-group">
                            <label class="form-label" for="calc-tipo">Tipo de evento</label>
                            <select id="calc-tipo" name="tipo" class="form-control">
                                <option value="almoco">Almoço</option>
                                <option value="jantar">Jantar</option>
                                <option value="festa" selected>Festa / Celebração</option>
                            </select>
                        </div>
                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-label" for="calc-duracao">Duração do evento</label>
                            <select id="calc-duracao" name="duracao" class="form-control">
                                <option value="2">2 horas</option>
                                <option value="3" selected>3 horas</option>
                                <option value="4">4 horas</option>
                                <option value="5">5+ horas</option>
                            </select>
                        </div>
                    </div>

                    <!-- PERFIL -->
                    <div style="border-bottom: 1px solid var(--color-gray-200); padding-bottom: 1.5rem; margin-bottom: 1.5rem;">
                        <h3 style="font-size: 1rem; font-family: var(--font-heading); color: var(--color-dark); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                            <span aria-hidden="true">🍽️</span> Perfil dos convidados
                        </h3>
                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-label" for="calc-perfil">Como seus convidados comem?</label>
                            <select id="calc-perfil" name="perfil" class="form-control">
                                <option value="light">Come pouco / Light</option>
                                <option value="moderado" selected>Come moderado (maioria)</option>
                                <option value="muito">Come muito / Churrasqueiro nato</option>
                            </select>
                        </div>
                    </div>

                    <!-- CORTES DESEJADOS -->
                    <div style="border-bottom: 1px solid var(--color-gray-200); padding-bottom: 1.5rem; margin-bottom: 1.5rem;">
                        <h3 style="font-size: 1rem; font-family: var(--font-heading); color: var(--color-dark); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                            <span aria-hidden="true">🥩</span> Cortes desejados
                        </h3>
                        <p style="font-size: 0.8125rem; color: var(--color-gray-500); margin-bottom: 1rem;">Selecione os cortes que você quer no churrasco:</p>

                        <div class="checkbox-group">
                            <?php
                            $cortes = [
                                ['id' => 'picanha',   'label' => '🥩 Picanha',          'checked' => true],
                                ['id' => 'alcatra',   'label' => '🥩 Alcatra',           'checked' => true],
                                ['id' => 'maminha',   'label' => '🥩 Maminha',           'checked' => false],
                                ['id' => 'fraldinha', 'label' => '🥩 Fraldinha',         'checked' => false],
                                ['id' => 'costela',   'label' => '🥩 Costela',           'checked' => false],
                                ['id' => 'cupim',     'label' => '🥩 Cupim',             'checked' => false],
                                ['id' => 'linguica',  'label' => '🌭 Linguiça',          'checked' => true],
                                ['id' => 'salsicha',  'label' => '🌭 Salsicha',          'checked' => false],
                                ['id' => 'frango',    'label' => '🍗 Frango',            'checked' => true],
                                ['id' => 'coracao',   'label' => '🫀 Coração de Frango', 'checked' => false],
                                ['id' => 'costelinha','label' => '🐷 Costelinha suína',  'checked' => false],
                                ['id' => 'ancho',     'label' => '🥩 Ancho (Ribeye)',    'checked' => false],
                            ];
                            foreach ( $cortes as $corte ) :
                            ?>
                                <label class="checkbox-item">
                                    <input type="checkbox"
                                           id="calc-<?php echo esc_attr( $corte['id'] ); ?>"
                                           name="cortes[]"
                                           value="<?php echo esc_attr( $corte['id'] ); ?>"
                                           <?php checked( $corte['checked'] ); ?>
                                           data-corte="<?php echo esc_attr( $corte['id'] ); ?>">
                                    <?php echo esc_html( $corte['label'] ); ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <button type="submit"
                            class="btn btn-primary"
                            style="width: 100%; justify-content: center; font-size: 1.0625rem; padding: 1.125rem;">
                        🔥 Calcular quantidade de carne
                    </button>

                </form>
            </div>

            <!-- RESULTADO DA CALCULADORA -->
            <div class="calculator-result fade-in-right" id="calc-result" aria-live="polite" aria-label="Resultado da calculadora">
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20" style="vertical-align: middle; margin-right: 0.5rem;" aria-hidden="true">
                        <path fill-rule="evenodd" d="M2.25 4.5A.75.75 0 013 3.75h14.25a.75.75 0 010 1.5H3a.75.75 0 01-.75-.75zm0 4.5A.75.75 0 013 8.25h9.75a.75.75 0 010 1.5H3A.75.75 0 012.25 9zm15-.75A.75.75 0 0118 9v10.19l2.47-2.47a.75.75 0 111.06 1.06l-3.75 3.75a.75.75 0 01-1.06 0l-3.75-3.75a.75.75 0 111.06-1.06L17 19.19V9a.75.75 0 01.75-.75zm-15 5.25a.75.75 0 01.75-.75h9.75a.75.75 0 010 1.5H3a.75.75 0 01-.75-.75z" clip-rule="evenodd"/>
                    </svg>
                    Resultado do Cálculo
                </h3>

                <!-- Estado vazio (antes de calcular) -->
                <div class="result-empty" id="result-empty">
                    <span class="result-icon" aria-hidden="true">🥩</span>
                    <p style="color: rgba(255,255,255,0.5); font-size: 0.9375rem;">
                        Preencha as informações ao lado e clique em "Calcular" para ver a quantidade exata de carne!
                    </p>
                </div>

                <!-- Resultado (preenchido por JS) -->
                <div id="result-content" style="display: none;">

                    <div id="result-summary" style="background: rgba(255,255,255,0.05); border-radius: var(--border-radius); padding: 1rem; margin-bottom: 1.5rem; font-size: 0.875rem; color: rgba(255,255,255,0.7);">
                        <!-- Preenchido por JS -->
                    </div>

                    <table class="result-table" id="result-table" aria-label="Quantidade de carne por corte">
                        <thead>
                            <tr>
                                <th>Corte</th>
                                <th style="text-align: right;">Quantidade</th>
                            </tr>
                        </thead>
                        <tbody id="result-tbody">
                            <!-- Linhas preenchidas por JS -->
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><strong>Total de carnes</strong></td>
                                <td id="result-total" style="text-align: right; color: var(--color-gold); font-size: 1.125rem;">-</td>
                            </tr>
                            <tr>
                                <td style="color: rgba(255,255,255,0.5);">🪵 Carvão estimado</td>
                                <td id="result-carvao" style="text-align: right; color: rgba(255,255,255,0.6);">-</td>
                            </tr>
                        </tfoot>
                    </table>

                    <div class="result-tips" id="result-tips" style="margin-top: 1.5rem;">
                        <h4>
                            <span aria-hidden="true">💡</span> Dica do Guilherme
                        </h4>
                        <p id="result-tip-text">-</p>
                    </div>

                    <a id="result-whatsapp-btn"
                       href="#"
                       class="btn btn-whatsapp"
                       style="width: 100%; justify-content: center; margin-top: 1.5rem; font-size: 0.9375rem;"
                       target="_blank"
                       rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20" aria-hidden="true">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        Solicitar esse churrasco no WhatsApp
                    </a>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- =====================================================
     DICAS DO GUILHERME
     ===================================================== -->
<section class="section" style="background: var(--color-white);" aria-label="Dicas de churrasco">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Aprenda com quem entende</span>
            <h2 class="section-title title-underline">Dicas do Guilherme para Calcular Certo</h2>
        </div>

        <div class="grid grid-3" style="gap: 2rem;">
            <?php
            $dicas = [
                [
                    'icone' => '📊',
                    'titulo' => 'Regra geral',
                    'texto' => 'Em média, calcule 400g de carne por adulto para um churrasco moderado. Para quem come mais, vá para 500-600g. Para eventos com muitas guarnições, 350g já é suficiente.',
                ],
                [
                    'icone' => '🪵',
                    'titulo' => 'Quanto de carvão?',
                    'texto' => 'A regra é simples: para cada 1kg de carne, você precisa de aproximadamente 1,5kg de carvão. Em eventos longos (5h+), multiplique por 2. Nunca economize no carvão!',
                ],
                [
                    'icone' => '🧂',
                    'titulo' => 'Carnes mais pesadas',
                    'texto' => 'Costela e cupim perdem bastante peso durante o cozimento. Se colocar costela no cardápio, calcule 600-700g por pessoa para esse corte específico.',
                ],
                [
                    'icone' => '🍗',
                    'titulo' => 'Misture os cortes',
                    'texto' => 'Não coloque só um tipo de carne. Uma boa variedade garante que cada convidado encontre o que prefere. Misture carnes nobres com linguiça e frango para equilibrar os custos.',
                ],
                [
                    'icone' => '👶',
                    'titulo' => 'Crianças comem menos',
                    'texto' => 'Para crianças até 12 anos, calcule metade da quantidade de um adulto. Mas deixe linguiça e frango à vontade — elas adoram! Evite cortes mais gordurosos para os pequenos.',
                ],
                [
                    'icone' => '⏰',
                    'titulo' => 'Tempo de evento importa',
                    'texto' => 'Em eventos mais longos, as pessoas tendem a comer mais, especialmente se houver bebidas. Para festas acima de 4 horas, adicione 20% a mais na quantidade calculada.',
                ],
            ];
            foreach ( $dicas as $i => $dica ) :
            ?>
                <div style="background: var(--color-bg-light); border-radius: var(--border-radius-md); padding: 2rem; border: 1px solid var(--color-gray-200); transition: all 0.3s ease;" class="fade-in delay-<?php echo $i; ?>"
                     onmouseover="this.style.borderColor='var(--color-secondary)'; this.style.transform='translateY(-4px)'"
                     onmouseout="this.style.borderColor='var(--color-gray-200)'; this.style.transform='translateY(0)'">
                    <span style="font-size: 2.5rem; display: block; margin-bottom: 1rem;" aria-hidden="true"><?php echo $dica['icone']; ?></span>
                    <h3 style="font-size: 1.0625rem; color: var(--color-dark); margin-bottom: 0.75rem;"><?php echo esc_html( $dica['titulo'] ); ?></h3>
                    <p style="font-size: 0.875rem; color: var(--color-gray-600); line-height: 1.7; margin: 0;"><?php echo esc_html( $dica['texto'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section section" aria-label="Solicitar churrasco">
    <div class="container text-center fade-in">
        <h2 class="cta-title">Quer que eu faça o churrasco<br>por você? 🔥</h2>
        <p class="cta-subtitle">
            Me manda a lista que a calculadora gerou e eu preparo tudo com o Método Brasa Viva!
        </p>
        <div class="cta-buttons">
            <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Usei a calculadora do site e quero contratar o Templo do Churrasco para o meu evento!' ) ); ?>"
               class="btn btn-whatsapp btn-lg"
               target="_blank"
               rel="noopener noreferrer">
                Contratar o Churrasqueiro
            </a>
            <a href="<?php echo esc_url( home_url( '/servicos' ) ); ?>" class="btn btn-secondary btn-lg">
                Ver os Pacotes
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>

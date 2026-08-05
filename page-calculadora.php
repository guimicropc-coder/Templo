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

<style>
/* ============================================================
   CALCULADORA — CSS PRÓPRIO (não depende do Additional CSS)
   ============================================================ */

/* Layout principal */
.calc-section {
    background: #FFF8F0;
    padding: 3rem 0;
}

.calc-container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 1.25rem;
}

.calc-wrapper {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    align-items: start;
}

/* Formulário */
.calc-form-card {
    background: #fff;
    border-radius: 16px;
    padding: 2rem;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    border-top: 4px solid #C0392B;
}

.calc-form-card h2 {
    font-size: 1.375rem;
    color: #1A1A1A;
    margin: 0 0 0.375rem 0;
}

.calc-form-card > p {
    font-size: 0.9rem;
    color: #6b7280;
    margin: 0 0 1.5rem 0;
}

.calc-section-title {
    font-size: 0.9375rem;
    font-weight: 700;
    color: #1A1A1A;
    margin: 0 0 0.875rem 0;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.calc-divider {
    border: none;
    border-bottom: 1px solid #e5e7eb;
    margin: 0 0 1.25rem 0;
    padding-bottom: 1.25rem;
}

.calc-field-group {
    padding-bottom: 1.25rem;
    margin-bottom: 1.25rem;
    border-bottom: 1px solid #e5e7eb;
}

.calc-grid-2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0.75rem;
}

.calc-field {
    margin-bottom: 0.875rem;
}

.calc-field:last-child {
    margin-bottom: 0;
}

.calc-label {
    display: block;
    font-size: 0.8125rem;
    font-weight: 600;
    color: #374151;
    margin-bottom: 0.375rem;
    text-transform: uppercase;
    letter-spacing: 0.04em;
}

.calc-input,
.calc-select {
    width: 100%;
    height: 48px;
    padding: 0 0.875rem;
    font-size: 16px; /* iOS: evita zoom */
    border: 2px solid #e5e7eb;
    border-radius: 8px;
    background: #fff;
    color: #1A1A1A;
    box-sizing: border-box;
    transition: border-color 0.2s;
    -webkit-appearance: none;
    appearance: none;
}

.calc-select {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236b7280' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    padding-right: 2.5rem;
}

.calc-input:focus,
.calc-select:focus {
    outline: none;
    border-color: #C0392B;
}

/* Checkboxes */
.calc-checkboxes {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 0.5rem;
}

.calc-check-label {
    display: flex;
    align-items: center;
    gap: 0.375rem;
    padding: 0.5rem 0.625rem;
    background: #f9fafb;
    border: 1.5px solid #e5e7eb;
    border-radius: 8px;
    cursor: pointer;
    font-size: 0.8125rem;
    color: #374151;
    transition: all 0.15s;
    user-select: none;
    min-width: 0;
    word-break: break-word;
    line-height: 1.3;
}

.calc-check-label:hover {
    border-color: #C0392B;
    background: #fff5f5;
}

.calc-check-label input[type="checkbox"] {
    width: 15px;
    height: 15px;
    min-width: 15px;
    accent-color: #C0392B;
    cursor: pointer;
    flex-shrink: 0;
}

.calc-check-label.checked {
    border-color: #C0392B;
    background: #fff5f5;
    color: #C0392B;
    font-weight: 600;
}

/* Botão calcular */
.calc-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    width: 100%;
    height: 54px;
    background: linear-gradient(135deg, #C0392B, #e74c3c);
    color: #fff;
    border: none;
    border-radius: 10px;
    font-size: 1rem;
    font-weight: 700;
    cursor: pointer;
    transition: transform 0.15s, box-shadow 0.15s;
    margin-top: 1rem;
}

.calc-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 6px 20px rgba(192,57,43,0.4);
}

.calc-btn:active {
    transform: translateY(0);
}

/* Painel de resultado */
.calc-result-card {
    background: linear-gradient(135deg, #1A1A1A, #2a1a0a);
    border-radius: 16px;
    padding: 1.75rem;
    color: #fff;
    box-shadow: 0 4px 20px rgba(0,0,0,0.2);
    border-top: 4px solid #E67E22;
    position: sticky;
    top: 100px;
}

.calc-result-card h3 {
    font-size: 1.125rem;
    color: #fff;
    margin: 0 0 1.25rem 0;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

/* Estado vazio */
.calc-empty-state {
    text-align: center;
    padding: 2.5rem 0;
}

.calc-empty-icon {
    font-size: 3rem;
    display: block;
    margin-bottom: 1rem;
}

.calc-empty-state p {
    color: rgba(255,255,255,0.5);
    font-size: 0.9375rem;
    margin: 0;
}

/* Resultado preenchido */
.calc-result-content {
    display: none;
}

.calc-summary {
    background: rgba(255,255,255,0.07);
    border-radius: 8px;
    padding: 0.875rem;
    font-size: 0.8125rem;
    color: rgba(255,255,255,0.75);
    margin-bottom: 1.25rem;
    line-height: 1.6;
}

.calc-summary strong {
    color: #E67E22;
}

/* Tabela de resultados */
.calc-result-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 1rem;
}

.calc-result-table th {
    font-size: 0.6875rem;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: rgba(255,255,255,0.5);
    border-bottom: 1px solid rgba(255,255,255,0.15);
    padding: 0.375rem 0.5rem 0.625rem;
    text-align: left;
    font-weight: 600;
}

.calc-result-table th:last-child {
    text-align: right;
}

.calc-result-table td {
    font-size: 0.875rem;
    color: rgba(255,255,255,0.85);
    padding: 0.5rem 0.5rem;
    border-bottom: 1px solid rgba(255,255,255,0.07);
    vertical-align: middle;
}

.calc-result-table td.qty {
    text-align: right;
    font-weight: 700;
    color: #E67E22;
    white-space: nowrap;
}

.calc-result-table tfoot tr:first-child td {
    border-top: 2px solid rgba(255,255,255,0.2);
    border-bottom: none;
    padding-top: 0.75rem;
    font-weight: 700;
    color: #fff;
}

.calc-result-table tfoot tr:last-child td {
    border-bottom: none;
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
    color: rgba(255,255,255,0.6);
    font-size: 0.8125rem;
}

.total-qty {
    color: #F39C12 !important;
    font-size: 1.0625rem !important;
    white-space: nowrap;
    text-align: right;
}

.carvao-qty {
    color: rgba(255,255,255,0.65) !important;
    white-space: nowrap;
    text-align: right;
}

/* Dica do Guilherme */
.calc-tip-box {
    background: rgba(230,126,34,0.12);
    border: 1px solid rgba(230,126,34,0.3);
    border-radius: 10px;
    padding: 1rem;
    margin-top: 1.25rem;
}

.calc-tip-box h4 {
    font-size: 0.875rem;
    color: #E67E22;
    margin: 0 0 0.5rem 0;
    display: flex;
    align-items: center;
    gap: 0.375rem;
}

.calc-tip-box p {
    font-size: 0.8125rem;
    color: rgba(255,255,255,0.7);
    margin: 0;
    line-height: 1.65;
}

/* Botão WhatsApp no resultado */
.calc-wa-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    width: 100%;
    height: 52px;
    background: #25D366;
    color: #fff;
    border-radius: 10px;
    font-size: 0.9375rem;
    font-weight: 700;
    text-decoration: none;
    margin-top: 1.25rem;
    transition: background 0.15s;
}

.calc-wa-btn:hover {
    background: #1ebe5d;
    color: #fff;
}

/* ============================================================
   RESPONSIVO
   ============================================================ */

@media (max-width: 900px) {
    .calc-wrapper {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }

    .calc-result-card {
        position: static;
    }
}

@media (max-width: 600px) {
    .calc-section {
        padding: 2rem 0;
    }

    .calc-form-card {
        padding: 1.25rem;
    }

    .calc-result-card {
        padding: 1.25rem;
    }

    .calc-grid-2 {
        grid-template-columns: 1fr 1fr;
        gap: 0.625rem;
    }

    .calc-checkboxes {
        grid-template-columns: repeat(2, 1fr);
        gap: 0.375rem;
    }

    .calc-check-label {
        font-size: 0.75rem;
        padding: 0.4375rem 0.5rem;
    }
}

@media (max-width: 380px) {
    .calc-checkboxes {
        grid-template-columns: 1fr;
    }

    .calc-grid-2 {
        grid-template-columns: 1fr;
    }

    .calc-form-card,
    .calc-result-card {
        padding: 1rem;
    }
}
</style>

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

<!-- CALCULADORA -->
<section class="calc-section" aria-label="Calculadora de carne">
    <div class="calc-container">
        <div class="calc-wrapper">

            <!-- FORMULÁRIO -->
            <div class="calc-form-card">
                <h2>Configure seu churrasco 🔥</h2>
                <p>Preencha as informações e calcule na hora!</p>

                <form id="calc-form" novalidate>

                    <!-- Convidados -->
                    <div class="calc-field-group">
                        <p class="calc-section-title"><span>👥</span> Convidados</p>
                        <div class="calc-grid-2">
                            <div class="calc-field">
                                <label class="calc-label" for="calc-adultos">Adultos</label>
                                <input type="number" id="calc-adultos" class="calc-input" value="10" min="0" max="500">
                            </div>
                            <div class="calc-field">
                                <label class="calc-label" for="calc-criancas">Crianças</label>
                                <input type="number" id="calc-criancas" class="calc-input" value="0" min="0" max="200">
                            </div>
                        </div>
                    </div>

                    <!-- Evento -->
                    <div class="calc-field-group">
                        <p class="calc-section-title"><span>🎉</span> Evento</p>
                        <div class="calc-field">
                            <label class="calc-label" for="calc-tipo">Tipo de evento</label>
                            <select id="calc-tipo" class="calc-select">
                                <option value="almoco">Almoço</option>
                                <option value="jantar">Jantar</option>
                                <option value="festa" selected>Festa / Celebração</option>
                            </select>
                        </div>
                        <div class="calc-field" style="margin-bottom:0;">
                            <label class="calc-label" for="calc-duracao">Duração</label>
                            <select id="calc-duracao" class="calc-select">
                                <option value="2">2 horas</option>
                                <option value="3" selected>3 horas</option>
                                <option value="4">4 horas</option>
                                <option value="5">5+ horas</option>
                            </select>
                        </div>
                    </div>

                    <!-- Perfil -->
                    <div class="calc-field-group">
                        <p class="calc-section-title"><span>🍽️</span> Perfil dos convidados</p>
                        <div class="calc-field" style="margin-bottom:0;">
                            <label class="calc-label" for="calc-perfil">Como comem?</label>
                            <select id="calc-perfil" class="calc-select">
                                <option value="light">Come pouco / Light</option>
                                <option value="moderado" selected>Moderado (maioria)</option>
                                <option value="muito">Come muito / Churrasqueiro nato</option>
                            </select>
                        </div>
                    </div>

                    <!-- Cortes -->
                    <div class="calc-field-group">
                        <p class="calc-section-title"><span>🥩</span> Cortes desejados</p>
                        <p style="font-size:0.8125rem;color:#6b7280;margin:0 0 0.875rem;">Selecione os cortes do churrasco:</p>

                        <div class="calc-checkboxes" id="calc-checkboxes">
                            <?php
                            $cortes = [
                                ['id' => 'picanha',    'label' => '🥩 Picanha',           'kg' => 120, 'checked' => true],
                                ['id' => 'alcatra',    'label' => '🥩 Alcatra',            'kg' => 100, 'checked' => true],
                                ['id' => 'maminha',    'label' => '🥩 Maminha',            'kg' => 100, 'checked' => false],
                                ['id' => 'fraldinha',  'label' => '🥩 Fraldinha',          'kg' => 100, 'checked' => false],
                                ['id' => 'costela',    'label' => '🥩 Costela',            'kg' => 160, 'checked' => false],
                                ['id' => 'cupim',      'label' => '🥩 Cupim',              'kg' => 130, 'checked' => false],
                                ['id' => 'linguica',   'label' => '🌭 Linguiça',           'kg' => 80,  'checked' => true],
                                ['id' => 'salsicha',   'label' => '🌭 Salsicha',           'kg' => 60,  'checked' => false],
                                ['id' => 'frango',     'label' => '🍗 Frango',             'kg' => 120, 'checked' => true],
                                ['id' => 'coracao',    'label' => '🫀 Cor. Frango',        'kg' => 60,  'checked' => false],
                                ['id' => 'costelinha', 'label' => '🐷 Costelinha',         'kg' => 120, 'checked' => false],
                                ['id' => 'ancho',      'label' => '🥩 Ancho',              'kg' => 120, 'checked' => false],
                            ];
                            foreach ( $cortes as $corte ) :
                                $checked = $corte['checked'] ? 'checked' : '';
                                $cls     = $corte['checked'] ? 'calc-check-label checked' : 'calc-check-label';
                            ?>
                                <label class="<?php echo $cls; ?>" id="lbl-<?php echo esc_attr($corte['id']); ?>">
                                    <input type="checkbox"
                                           name="cortes[]"
                                           value="<?php echo esc_attr($corte['id']); ?>"
                                           data-base="<?php echo (int)$corte['kg']; ?>"
                                           <?php echo $checked; ?>>
                                    <?php echo esc_html($corte['label']); ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <button type="submit" class="calc-btn">
                        🔥 Calcular quantidade de carne
                    </button>

                </form>
            </div>

            <!-- RESULTADO -->
            <div class="calc-result-card" id="calc-result-card">
                <h3>
                    📊 Resultado do Cálculo
                </h3>

                <!-- Vazio -->
                <div class="calc-empty-state" id="calc-empty">
                    <span class="calc-empty-icon">🥩</span>
                    <p>Preencha as informações e clique em Calcular para ver a quantidade exata!</p>
                </div>

                <!-- Resultado -->
                <div class="calc-result-content" id="calc-result-content">

                    <div class="calc-summary" id="calc-summary"></div>

                    <table class="calc-result-table" id="calc-table">
                        <thead>
                            <tr>
                                <th>Corte</th>
                                <th style="text-align:right;">Quantidade</th>
                            </tr>
                        </thead>
                        <tbody id="calc-tbody"></tbody>
                        <tfoot>
                            <tr>
                                <td><strong>Total de carnes</strong></td>
                                <td class="total-qty" id="calc-total">—</td>
                            </tr>
                            <tr>
                                <td>🪵 Carvão estimado</td>
                                <td class="carvao-qty" id="calc-carvao">—</td>
                            </tr>
                        </tfoot>
                    </table>

                    <div class="calc-tip-box" id="calc-tip-box">
                        <h4>💡 Dica do Guilherme</h4>
                        <p id="calc-tip-text"></p>
                    </div>

                    <a id="calc-wa-btn" href="#" class="calc-wa-btn" target="_blank" rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#fff" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Pedir orçamento no WhatsApp
                    </a>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- DICAS -->
<section style="background:#fff; padding:3rem 0;" aria-label="Dicas de churrasco">
    <div class="calc-container">
        <div style="text-align:center; margin-bottom:2rem;">
            <span class="section-label">Aprenda com quem entende</span>
            <h2 class="section-title title-underline">Dicas do Guilherme para Calcular Certo</h2>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fill,minmax(280px,1fr)); gap:1.5rem;">
            <?php
            $dicas = [
                ['icone'=>'📊','titulo'=>'Regra geral','texto'=>'Em média, calcule 400g de carne por adulto para um churrasco moderado. Para quem come mais, vá para 500-600g. Para eventos com muitas guarnições, 350g já é suficiente.'],
                ['icone'=>'🪵','titulo'=>'Quanto de carvão?','texto'=>'Para cada 1kg de carne, você precisa de aproximadamente 1,5kg de carvão. Em eventos longos (5h+), multiplique por 2. Nunca economize no carvão!'],
                ['icone'=>'🧂','titulo'=>'Carnes mais pesadas','texto'=>'Costela e cupim perdem bastante peso durante o cozimento. Se colocar costela no cardápio, calcule 600-700g por pessoa para esse corte.'],
                ['icone'=>'🍗','titulo'=>'Misture os cortes','texto'=>'Não coloque só um tipo de carne. Uma boa variedade garante que cada convidado encontre o que prefere. Misture carnes nobres com linguiça e frango.'],
                ['icone'=>'👶','titulo'=>'Crianças comem menos','texto'=>'Para crianças até 12 anos, calcule metade de um adulto. Mas deixe linguiça e frango à vontade — elas adoram!'],
                ['icone'=>'⏰','titulo'=>'Tempo importa','texto'=>'Em eventos mais longos, as pessoas tendem a comer mais. Para festas acima de 4 horas, adicione 20% a mais na quantidade calculada.'],
            ];
            foreach ( $dicas as $d ) :
            ?>
                <div style="background:#FFF8F0; border-radius:12px; padding:1.5rem; border:1px solid #e5e7eb;">
                    <span style="font-size:2rem; display:block; margin-bottom:0.75rem;"><?php echo $d['icone']; ?></span>
                    <h3 style="font-size:1rem; color:#1A1A1A; margin:0 0 0.5rem;"><?php echo esc_html($d['titulo']); ?></h3>
                    <p style="font-size:0.875rem; color:#6b7280; line-height:1.7; margin:0;"><?php echo esc_html($d['texto']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section section" aria-label="Solicitar churrasco">
    <div class="container text-center">
        <h2 class="cta-title">Quer que eu faça o churrasco<br>por você? 🔥</h2>
        <p class="cta-subtitle">Me manda a lista que a calculadora gerou e eu preparo tudo com o Método Brasa Viva!</p>
        <div class="cta-buttons">
            <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Usei a calculadora do site e quero contratar o Templo do Churrasco!' ) ); ?>"
               class="btn btn-whatsapp btn-lg" target="_blank" rel="noopener noreferrer">
                Contratar o Churrasqueiro
            </a>
            <a href="<?php echo esc_url( home_url( '/servicos' ) ); ?>" class="btn btn-secondary btn-lg">
                Ver os Pacotes
            </a>
        </div>
    </div>
</section>

<script>
(function () {
    var WA = 'https://wa.me/5521998594584';

    var LABELS = {
        picanha:    '🥩 Picanha',
        alcatra:    '🥩 Alcatra',
        maminha:    '🥩 Maminha',
        fraldinha:  '🥩 Fraldinha',
        costela:    '🥩 Costela',
        cupim:      '🥩 Cupim',
        linguica:   '🌭 Linguiça',
        salsicha:   '🌭 Salsicha',
        frango:     '🍗 Frango',
        coracao:    '🫀 Cor. Frango',
        costelinha: '🐷 Costelinha',
        ancho:      '🥩 Ancho'
    };

    var TIPO_MULT    = { almoco: 0.9, jantar: 0.85, festa: 1.0 };
    var DURACAO_MULT = { '2': 0.8, '3': 1.0, '4': 1.2, '5': 1.4 };
    var PERFIL_MULT  = { light: 0.7, moderado: 1.0, muito: 1.35 };

    var DICAS = {
        light:    'Seus convidados comem pouco — ótimo! Invista na qualidade das carnes. Uma picanha bem feita impressiona mais do que quantidade.',
        moderado: 'Perfil moderado é o mais comum. As quantidades calculadas são ideais — mas sempre tenha uma linguiça extra para quem quiser repetir!',
        muito:    'Galera de apetite! Não economize e considere ter um estoque extra, especialmente nos cortes favoritos.'
    };

    function fmt(gramas) {
        if (gramas >= 1000) return (gramas / 1000).toFixed(1).replace('.', ',') + ' kg';
        return Math.round(gramas) + ' g';
    }

    function get(id) { return document.getElementById(id); }

    /* Marca visual dos checkboxes */
    var checks = document.querySelectorAll('#calc-checkboxes input[type="checkbox"]');
    checks.forEach(function (cb) {
        cb.addEventListener('change', function () {
            var lbl = document.getElementById('lbl-' + cb.value);
            if (lbl) lbl.className = cb.checked ? 'calc-check-label checked' : 'calc-check-label';
        });
    });

    /* Submit */
    var form = get('calc-form');
    if (!form) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        calcular();
    });

    function calcular() {
        var adultos  = parseInt(get('calc-adultos').value)  || 0;
        var criancas = parseInt(get('calc-criancas').value) || 0;
        var tipo     = get('calc-tipo').value    || 'festa';
        var duracao  = get('calc-duracao').value || '3';
        var perfil   = get('calc-perfil').value  || 'moderado';

        var selecionados = [];
        checks.forEach(function (cb) {
            if (cb.checked) selecionados.push({ id: cb.value, base: parseInt(cb.dataset.base) || 100 });
        });

        if (!selecionados.length) {
            alert('Selecione pelo menos um corte de carne!');
            return;
        }
        if (adultos + criancas === 0) {
            alert('Informe o número de convidados!');
            return;
        }

        var pessoas     = adultos + (criancas * 0.5);
        var mTipo       = TIPO_MULT[tipo]    || 1;
        var mDuracao    = DURACAO_MULT[duracao] || 1;
        var mPerfil     = PERFIL_MULT[perfil]   || 1;
        var totalBase   = selecionados.reduce(function (s, c) { return s + c.base; }, 0);
        var totalExpG   = pessoas * 400 * mTipo * mDuracao * mPerfil;

        var resultados  = {};
        var totalGramas = 0;

        selecionados.forEach(function (c) {
            var frac   = c.base / totalBase;
            var gramas = Math.round(totalExpG * frac / 50) * 50;
            resultados[c.id] = gramas;
            totalGramas += gramas;
        });

        var carvaoKg = Math.ceil(totalGramas / 1000 * 1.5 * (parseFloat(duracao) / 3));

        renderizar(resultados, totalGramas, carvaoKg, adultos, criancas, tipo, duracao, perfil);
    }

    function renderizar(res, totalG, carvao, adultos, criancas, tipo, duracao, perfil) {
        /* Mostra painel */
        get('calc-empty').style.display         = 'none';
        get('calc-result-content').style.display = 'block';

        /* Resumo */
        var tipoLabel    = { almoco: 'Almoço', jantar: 'Jantar', festa: 'Festa' }[tipo] || tipo;
        var duraLabel    = duracao === '5' ? '5+ horas' : duracao + ' horas';
        get('calc-summary').innerHTML =
            '<strong>' + adultos + ' adulto(s)</strong> + <strong>' + criancas + ' criança(s)</strong> &nbsp;|&nbsp; ' +
            tipoLabel + ' &nbsp;|&nbsp; ' + duraLabel;

        /* Tabela */
        var tbody = get('calc-tbody');
        tbody.innerHTML = '';
        Object.keys(res).forEach(function (id) {
            var tr = document.createElement('tr');
            tr.innerHTML =
                '<td>' + (LABELS[id] || id) + '</td>' +
                '<td class="qty">' + fmt(res[id]) + '</td>';
            tbody.appendChild(tr);
        });

        /* Totais */
        get('calc-total').textContent  = fmt(totalG);
        get('calc-carvao').textContent = carvao + ' kg';

        /* Dica */
        get('calc-tip-text').textContent = DICAS[perfil] || DICAS.moderado;

        /* WhatsApp */
        var msg = 'Olá Guilherme! 🔥 Usei a calculadora do site e quero um orçamento!\n\n';
        msg += '*Meu evento:* ' + tipoLabel + ' | ' + duraLabel + '\n';
        msg += '*Convidados:* ' + adultos + ' adultos + ' + criancas + ' crianças\n\n';
        msg += '*Carnes calculadas:*\n';
        Object.keys(res).forEach(function (id) {
            msg += (LABELS[id] || id) + ': ' + fmt(res[id]) + '\n';
        });
        msg += '\n*Total:* ' + fmt(totalG) + '\n';
        msg += '*Carvão:* ' + carvao + ' kg\n\nPode me ajudar? 😊';

        get('calc-wa-btn').href = WA + '?text=' + encodeURIComponent(msg);

        /* Scroll para resultado em mobile */
        if (window.innerWidth < 900) {
            setTimeout(function () {
                get('calc-result-card').scrollIntoView({ behavior: 'smooth', block: 'start' });
            }, 150);
        }
    }
})();
</script>

<?php get_footer(); ?>

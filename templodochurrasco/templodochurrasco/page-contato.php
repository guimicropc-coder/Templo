<?php
/**
 * Template Name: Contato
 * Template: page-contato.php
 * Página de Contato e Orçamento — Templo do Churrasco
 *
 * @package TemplodoChurrasco
 */

get_header();
?>

<!-- HERO -->
<section class="page-hero" aria-label="Contato e orçamento">
    <div class="container">
        <span class="section-label light" style="display: inline-block; margin-bottom: 1.5rem;">Fale comigo</span>
        <h1 class="page-hero-title">Solicite seu <span>Orçamento</span></h1>
        <p class="page-hero-subtitle">
            Preencha o formulário ou me chama direto no WhatsApp. Respondo rapidinho com o melhor orçamento para o seu evento!
        </p>
        <div class="breadcrumb" aria-label="Localização na página">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a>
            <span class="breadcrumb-sep" aria-hidden="true">›</span>
            <span aria-current="page">Contato</span>
        </div>
    </div>
</section>

<!-- =====================================================
     BOTÃO WHATSAPP DESTAQUE
     ===================================================== -->
<section style="background: linear-gradient(135deg, var(--color-whatsapp), var(--color-whatsapp-dark)); padding: 2.5rem 0;" aria-label="WhatsApp direto">
    <div class="container text-center">
        <div class="fade-in">
            <p style="color: rgba(255,255,255,0.9); font-size: 1.125rem; margin-bottom: 1.5rem; font-weight: 600;">
                ⚡ Resposta mais rápida? Me chama direto no WhatsApp!
            </p>
            <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Gostaria de solicitar um orçamento para meu churrasco. 🔥' ) ); ?>"
               class="btn btn-secondary btn-lg"
               target="_blank"
               rel="noopener noreferrer"
               style="border-color: white; color: white; font-size: 1.25rem; padding: 1.25rem 3rem;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24" aria-hidden="true">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                Chamar no WhatsApp: <?php echo esc_html( tdc_whatsapp_formatted() ); ?>
            </a>
            <p style="color: rgba(255,255,255,0.75); font-size: 0.875rem; margin-top: 1rem;">
                Disponível de segunda a domingo, das 7h às 22h
            </p>
        </div>
    </div>
</section>

<!-- =====================================================
     FORMULÁRIO + INFORMAÇÕES
     ===================================================== -->
<section class="section" style="background: var(--color-bg-light);" aria-label="Formulário de orçamento">
    <div class="container">
        <div class="grid grid-2" style="gap: 3rem; align-items: start;">

            <!-- FORMULÁRIO DE ORÇAMENTO -->
            <div class="fade-in-left">
                <div class="form-section">
                    <h2 style="font-size: 1.75rem; margin-bottom: 0.5rem; color: var(--color-dark);">
                        Preencha o formulário 📋
                    </h2>
                    <p style="color: var(--color-gray-600); margin-bottom: 2rem; font-size: 0.9375rem;">
                        Preencha os campos abaixo e clique no botão. Vai abrir o WhatsApp com todas as informações já preenchidas!
                    </p>

                    <form id="contact-form" novalidate aria-label="Formulário de solicitação de orçamento">

                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label" for="cf-nome">
                                    Nome completo <span style="color: var(--color-primary);" aria-hidden="true">*</span>
                                </label>
                                <input type="text"
                                       id="cf-nome"
                                       name="nome"
                                       class="form-control"
                                       placeholder="Seu nome completo"
                                       required
                                       autocomplete="name">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="cf-telefone">
                                    WhatsApp / Telefone <span style="color: var(--color-primary);" aria-hidden="true">*</span>
                                </label>
                                <input type="tel"
                                       id="cf-telefone"
                                       name="telefone"
                                       class="form-control"
                                       placeholder="(21) 9xxxx-xxxx"
                                       required
                                       autocomplete="tel">
                            </div>
                        </div>

                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label" for="cf-data">
                                    Data do evento <span style="color: var(--color-primary);" aria-hidden="true">*</span>
                                </label>
                                <input type="date"
                                       id="cf-data"
                                       name="data"
                                       class="form-control"
                                       required
                                       min="<?php echo date( 'Y-m-d', strtotime( '+3 days' ) ); ?>">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="cf-convidados">
                                    Número de convidados <span style="color: var(--color-primary);" aria-hidden="true">*</span>
                                </label>
                                <input type="number"
                                       id="cf-convidados"
                                       name="convidados"
                                       class="form-control"
                                       placeholder="Ex: 30"
                                       min="1"
                                       max="500"
                                       required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="cf-tipo-evento">Tipo de evento</label>
                            <select id="cf-tipo-evento" name="tipo_evento" class="form-control">
                                <option value="" disabled selected>Selecione o tipo de evento</option>
                                <option value="Aniversário">Aniversário</option>
                                <option value="Casamento">Casamento / Pré-casamento</option>
                                <option value="Formatura">Formatura</option>
                                <option value="Churrasco em família">Churrasco em família</option>
                                <option value="Evento corporativo">Evento corporativo</option>
                                <option value="Confraternização">Confraternização</option>
                                <option value="Churrasco entre amigos">Churrasco entre amigos</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="cf-pacote">Pacote de interesse</label>
                            <select id="cf-pacote" name="pacote" class="form-control">
                                <option value="" disabled selected>Qual pacote lhe interessa?</option>
                                <option value="Churrasqueiro Avulso (a partir de R$ 300)">Churrasqueiro Avulso (a partir de R$ 300)</option>
                                <option value="Churrasco Gourmet Completo">Churrasco Gourmet Completo (sob consulta)</option>
                                <option value="Pacote Deluxe (R$ 105/pessoa - 12 carnes)">Pacote Deluxe — 12 carnes (R$ 105/pessoa)</option>
                                <option value="Ainda não sei, preciso de ajuda">Ainda não sei, preciso de orientação</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="cf-local">Local do evento</label>
                            <input type="text"
                                   id="cf-local"
                                   name="local"
                                   class="form-control"
                                   placeholder="Bairro / Cidade — Ex: Barra da Tijuca, Rio de Janeiro"
                                   autocomplete="address-level2">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="cf-mensagem">Mensagem / Detalhes adicionais</label>
                            <textarea id="cf-mensagem"
                                      name="mensagem"
                                      class="form-control"
                                      placeholder="Conte um pouco mais sobre o seu evento: tema, preferências especiais, restrições alimentares, etc."
                                      rows="4"></textarea>
                        </div>

                        <div style="margin-bottom: 1.5rem; display: flex; align-items: flex-start; gap: 0.75rem;">
                            <input type="checkbox" id="cf-lgpd" name="lgpd" required style="width: 18px; height: 18px; margin-top: 3px; accent-color: var(--color-primary); cursor: pointer; flex-shrink: 0;">
                            <label for="cf-lgpd" style="font-size: 0.8125rem; color: var(--color-gray-600); cursor: pointer; line-height: 1.6;">
                                Concordo que as informações acima serão utilizadas pelo Templo do Churrasco exclusivamente para elaborar e enviar meu orçamento.
                                <a href="<?php echo esc_url( home_url( '/privacidade' ) ); ?>" style="color: var(--color-primary);">Política de Privacidade</a>
                            </label>
                        </div>

                        <button type="submit"
                                id="contact-submit"
                                class="btn btn-whatsapp"
                                style="width: 100%; justify-content: center; font-size: 1.0625rem; padding: 1.125rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="22" height="22" aria-hidden="true">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            Enviar pelo WhatsApp
                        </button>

                        <p style="font-size: 0.8125rem; color: var(--color-gray-500); text-align: center; margin-top: 1rem;">
                            Ao clicar, vai abrir o WhatsApp com as informações preenchidas automaticamente.
                        </p>

                    </form>
                </div>
            </div>

            <!-- INFORMAÇÕES DE CONTATO -->
            <div class="fade-in-right">

                <!-- Card de contato direto -->
                <div style="background: linear-gradient(135deg, var(--color-dark), #2a1a1a); border-radius: var(--border-radius-md); padding: 2.5rem; margin-bottom: 2rem; border: 1px solid rgba(230,126,34,0.3);">
                    <h3 style="font-size: 1.25rem; color: white; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.75rem;">
                        <span aria-hidden="true">📞</span> Informações de Contato
                    </h3>

                    <div class="footer-contact-item" style="margin-bottom: 1.5rem;">
                        <span class="footer-contact-icon" aria-hidden="true">📱</span>
                        <div>
                            <strong style="color: white; display: block; margin-bottom: 0.25rem;">WhatsApp (preferencial)</strong>
                            <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Gostaria de solicitar um orçamento.' ) ); ?>"
                               style="color: var(--color-whatsapp); font-size: 1.125rem; font-weight: 700;"
                               target="_blank"
                               rel="noopener noreferrer">
                                <?php echo esc_html( tdc_whatsapp_formatted() ); ?>
                            </a>
                        </div>
                    </div>

                    <div class="footer-contact-item" style="margin-bottom: 1.5rem;">
                        <span class="footer-contact-icon" aria-hidden="true">📍</span>
                        <div>
                            <strong style="color: white; display: block; margin-bottom: 0.25rem;">Área de atendimento</strong>
                            <span style="color: rgba(255,255,255,0.65);">Rio de Janeiro e Grande Rio<br>Niterói, São Gonçalo, Duque de Caxias,<br>Nova Iguaçu e região metropolitana</span>
                        </div>
                    </div>

                    <div class="footer-contact-item" style="margin-bottom: 1.5rem;">
                        <span class="footer-contact-icon" aria-hidden="true">🕐</span>
                        <div>
                            <strong style="color: white; display: block; margin-bottom: 0.25rem;">Horário de atendimento</strong>
                            <span style="color: rgba(255,255,255,0.65);">Segunda a domingo<br>das 7h às 22h</span>
                        </div>
                    </div>

                    <div class="footer-contact-item">
                        <span class="footer-contact-icon" aria-hidden="true">🌐</span>
                        <div>
                            <strong style="color: white; display: block; margin-bottom: 0.25rem;">Site</strong>
                            <a href="https://templodochurrasco.com.br"
                               style="color: var(--color-secondary);"
                               target="_blank"
                               rel="noopener">
                                templodochurrasco.com.br
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Diferenciais -->
                <div style="background: var(--color-white); border-radius: var(--border-radius-md); padding: 2rem; box-shadow: var(--shadow-sm); border: 1px solid var(--color-gray-100);">
                    <h3 style="font-size: 1.125rem; color: var(--color-dark); margin-bottom: 1.5rem;">
                        Por que escolher o Templo do Churrasco?
                    </h3>
                    <?php
                    $diferenciais = [
                        ['icone' => '🏆', 'texto' => '380+ eventos realizados com sucesso'],
                        ['icone' => '⭐', 'texto' => '100% de recomendação dos clientes'],
                        ['icone' => '🔥', 'texto' => 'Método Brasa Viva exclusivo'],
                        ['icone' => '📅', 'texto' => '7+ anos de experiência'],
                        ['icone' => '✅', 'texto' => 'Zero reclamações em toda a carreira'],
                        ['icone' => '🎯', 'texto' => 'Atendimento personalizado para cada evento'],
                    ];
                    foreach ( $diferenciais as $d ) :
                    ?>
                        <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.875rem;">
                            <span style="font-size: 1.25rem; flex-shrink: 0;" aria-hidden="true"><?php echo $d['icone']; ?></span>
                            <span style="font-size: 0.9375rem; color: var(--color-gray-700);"><?php echo esc_html( $d['texto'] ); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Depoimento -->
                <div style="background: rgba(192,57,43,0.04); border: 1px solid rgba(192,57,43,0.15); border-radius: var(--border-radius-md); padding: 2rem; margin-top: 2rem;">
                    <div style="font-size: 2rem; color: var(--color-secondary); margin-bottom: 0.75rem; font-family: Georgia, serif;" aria-hidden="true">"</div>
                    <blockquote style="font-style: italic; color: var(--color-gray-700); margin-bottom: 1rem; line-height: 1.7; font-size: 0.9375rem;">
                        O Guilherme salvou meu aniversário de 50 anos! As carnes estavam perfeitas e eu pude curtir a festa sem me preocupar com nada.
                    </blockquote>
                    <cite style="font-size: 0.875rem; color: var(--color-gray-500); font-style: normal;">
                        <strong>Maria de Lurdes</strong>, 52 anos
                    </cite>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Script do formulário: monta mensagem e abre WhatsApp -->
<script>
document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const nome      = document.getElementById('cf-nome').value.trim();
    const telefone  = document.getElementById('cf-telefone').value.trim();
    const data      = document.getElementById('cf-data').value;
    const convidados= document.getElementById('cf-convidados').value;
    const tipoEvento= document.getElementById('cf-tipo-evento').value;
    const pacote    = document.getElementById('cf-pacote').value;
    const local     = document.getElementById('cf-local').value.trim();
    const mensagem  = document.getElementById('cf-mensagem').value.trim();
    const lgpd      = document.getElementById('cf-lgpd').checked;

    if (!nome || !telefone || !data || !convidados) {
        alert('Por favor, preencha os campos obrigatórios: nome, telefone, data e número de convidados.');
        return;
    }

    if (!lgpd) {
        alert('Por favor, aceite a política de privacidade para continuar.');
        return;
    }

    // Formatar data
    let dataFormatada = data;
    if (data) {
        const [y, m, d] = data.split('-');
        dataFormatada = `${d}/${m}/${y}`;
    }

    let msg = `Olá Guilherme! 🔥 Quero solicitar um orçamento pelo site.\n\n`;
    msg += `*Nome:* ${nome}\n`;
    msg += `*WhatsApp:* ${telefone}\n`;
    msg += `*Data do evento:* ${dataFormatada}\n`;
    msg += `*Número de convidados:* ${convidados}\n`;
    if (tipoEvento) msg += `*Tipo de evento:* ${tipoEvento}\n`;
    if (pacote)     msg += `*Pacote de interesse:* ${pacote}\n`;
    if (local)      msg += `*Local:* ${local}\n`;
    if (mensagem)   msg += `\n*Observações:* ${mensagem}\n`;
    msg += `\nAguardo seu retorno! 😊`;

    const url = `https://wa.me/5521998594584?text=${encodeURIComponent(msg)}`;
    window.open(url, '_blank');
});
</script>

<?php get_footer(); ?>

<?php
/**
 * Template Name: Política de Privacidade
 * Template: page-privacidade.php
 * Política de Privacidade — LGPD — Templo do Churrasco
 *
 * @package TemplodoChurrasco
 */

get_header();
?>

<!-- HERO -->
<section class="page-hero" aria-label="Política de privacidade">
    <div class="container">
        <h1 class="page-hero-title">Política de <span>Privacidade</span></h1>
        <p class="page-hero-subtitle">
            Transparência e respeito aos seus dados. Confira como tratamos suas informações.
        </p>
        <div class="breadcrumb" aria-label="Localização na página">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a>
            <span class="breadcrumb-sep" aria-hidden="true">›</span>
            <span aria-current="page">Política de Privacidade</span>
        </div>
    </div>
</section>

<!-- CONTEÚDO -->
<section style="background: var(--color-bg-light); padding: 4rem 0;">
    <div class="container">
        <div class="privacy-content">

            <div style="background: var(--color-white); border-radius: var(--border-radius-md); padding: 3rem; box-shadow: var(--shadow-sm); border: 1px solid var(--color-gray-200);">

                <div style="background: rgba(192,57,43,0.05); border: 1px solid rgba(192,57,43,0.2); border-radius: var(--border-radius); padding: 1.25rem; margin-bottom: 2.5rem;">
                    <strong style="color: var(--color-primary);">Última atualização:</strong>
                    <span style="color: var(--color-gray-600);"> <?php echo date( 'd \d\e F \d\e Y' ); ?></span>
                    <br>
                    <span style="font-size: 0.875rem; color: var(--color-gray-500);">
                        Esta política está em conformidade com a Lei Geral de Proteção de Dados (LGPD — Lei nº 13.709/2018).
                    </span>
                </div>

                <p style="color: var(--color-gray-700); line-height: 1.8; font-size: 1rem; margin-bottom: 2rem;">
                    O <strong>Templo do Churrasco</strong>, de propriedade de <strong>Guilherme Santos</strong>, respeita e valoriza a privacidade de todos os usuários do site <strong>templodochurrasco.com.br</strong>. Esta Política de Privacidade descreve como coletamos, usamos, armazenamos e protegemos suas informações pessoais, em conformidade com a Lei Geral de Proteção de Dados (LGPD — Lei nº 13.709/2018).
                </p>

                <h2>1. Quem Somos (Controlador dos Dados)</h2>
                <p>
                    <strong>Responsável:</strong> Guilherme Santos<br>
                    <strong>Nome do negócio:</strong> Templo do Churrasco<br>
                    <strong>Site:</strong> <a href="https://templodochurrasco.com.br">templodochurrasco.com.br</a><br>
                    <strong>WhatsApp:</strong> <a href="<?php echo esc_url( tdc_whatsapp_url() ); ?>"><?php echo esc_html( tdc_whatsapp_formatted() ); ?></a><br>
                    <strong>Localização:</strong> Rio de Janeiro — RJ
                </p>

                <h2>2. Quais Dados Coletamos</h2>
                <p>Coletamos dados pessoais nas seguintes situações:</p>
                <ul>
                    <li><strong>Formulário de contato/orçamento:</strong> nome completo, número de telefone/WhatsApp, data do evento, número de convidados, tipo de evento, mensagens livres.</li>
                    <li><strong>Calculadora de carne:</strong> informações sobre o evento (número de convidados, tipo de evento) — essas informações só são enviadas ao WhatsApp se você clicar no botão de envio.</li>
                    <li><strong>Dados de navegação:</strong> endereço IP, tipo de navegador, páginas visitadas, tempo de visita — coletados automaticamente para fins de análise e melhoria do site.</li>
                    <li><strong>Cookies:</strong> utilizamos cookies essenciais para o funcionamento do site e, com seu consentimento, cookies analíticos para entender como os visitantes usam o site.</li>
                </ul>

                <h2>3. Como Usamos seus Dados</h2>
                <p>Seus dados pessoais são utilizados exclusivamente para:</p>
                <ul>
                    <li>Elaborar e enviar orçamentos de serviços de churrasco;</li>
                    <li>Responder às suas mensagens e dúvidas pelo WhatsApp;</li>
                    <li>Planejar e executar os eventos contratados;</li>
                    <li>Melhorar nossos serviços e a experiência do site;</li>
                    <li>Enviar informações relevantes sobre nossos serviços (apenas com seu consentimento).</li>
                </ul>
                <p><strong>Não utilizamos seus dados para fins publicitários de terceiros, não vendemos suas informações e não compartilhamos com outras empresas.</strong></p>

                <h2>4. Base Legal para o Tratamento</h2>
                <p>Tratamos seus dados com base nas seguintes hipóteses previstas na LGPD:</p>
                <ul>
                    <li><strong>Execução de contrato (Art. 7º, V):</strong> para elaborar orçamentos e executar os serviços contratados;</li>
                    <li><strong>Consentimento (Art. 7º, I):</strong> para envio de comunicações e uso de cookies não essenciais;</li>
                    <li><strong>Legítimo interesse (Art. 7º, IX):</strong> para análise de uso do site e melhoria dos serviços.</li>
                </ul>

                <h2>5. Armazenamento e Segurança dos Dados</h2>
                <p>
                    Seus dados são armazenados de forma segura, com medidas técnicas e organizacionais adequadas para proteger contra acesso não autorizado, perda ou destruição. As conversas de WhatsApp ficam no aplicativo WhatsApp, sujeito à política de privacidade da Meta.
                </p>
                <p>
                    Os dados do site são armazenados em servidores seguros com certificado SSL (HTTPS) e são mantidos apenas pelo tempo necessário para a finalidade para a qual foram coletados ou conforme exigido por lei.
                </p>

                <h2>6. Compartilhamento de Dados</h2>
                <p>Seus dados pessoais não são vendidos, alugados ou compartilhados com terceiros, exceto:</p>
                <ul>
                    <li>Quando necessário para a prestação dos serviços contratados (ex.: fornecedores de carnes que precisam saber quantidade, sem dados pessoais seus);</li>
                    <li>Quando exigido por lei ou determinação judicial;</li>
                    <li>Ferramentas de análise de site (como Google Analytics, se utilizado), com dados anonimizados.</li>
                </ul>

                <h2>7. Seus Direitos como Titular dos Dados</h2>
                <p>De acordo com a LGPD, você tem os seguintes direitos em relação aos seus dados pessoais:</p>
                <ul>
                    <li><strong>Confirmação e acesso:</strong> saber se tratamos seus dados e acessar quais são;</li>
                    <li><strong>Correção:</strong> solicitar a correção de dados incompletos, inexatos ou desatualizados;</li>
                    <li><strong>Anonimização, bloqueio ou eliminação:</strong> solicitar que dados desnecessários sejam anonimizados, bloqueados ou eliminados;</li>
                    <li><strong>Portabilidade:</strong> solicitar a transferência dos seus dados para outro fornecedor de serviço;</li>
                    <li><strong>Eliminação:</strong> solicitar a eliminação de dados tratados com base no seu consentimento;</li>
                    <li><strong>Informação:</strong> ser informado sobre com quem compartilhamos seus dados;</li>
                    <li><strong>Revogação do consentimento:</strong> revogar o consentimento a qualquer momento, sem prejuízo do tratamento anterior.</li>
                </ul>
                <p>Para exercer qualquer um desses direitos, entre em contato pelo WhatsApp: <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá Guilherme! Quero exercer meus direitos sobre meus dados pessoais conforme a LGPD.' ) ); ?>"><?php echo esc_html( tdc_whatsapp_formatted() ); ?></a></p>

                <h2>8. Cookies</h2>
                <p>Nosso site utiliza cookies para:</p>
                <ul>
                    <li><strong>Cookies essenciais:</strong> necessários para o funcionamento básico do site (sessão do WordPress, preferências). Não podem ser desativados;</li>
                    <li><strong>Cookies analíticos:</strong> coletam informações sobre como você usa o site para nos ajudar a melhorá-lo. São utilizados apenas com seu consentimento;</li>
                </ul>
                <p>Você pode configurar seu navegador para recusar cookies ou ser avisado quando cookies são enviados. Porém, algumas partes do site podem não funcionar corretamente sem eles.</p>

                <h2>9. Links para Outros Sites</h2>
                <p>
                    Nosso site pode conter links para sites de terceiros (como WhatsApp e Instagram). Não somos responsáveis pelas práticas de privacidade desses sites. Recomendamos que você leia as políticas de privacidade deles antes de fornecer qualquer informação.
                </p>

                <h2>10. Alterações nesta Política</h2>
                <p>
                    Podemos atualizar esta Política de Privacidade periodicamente. Quando houver alterações significativas, notificaremos através do site. A data da última atualização estará sempre no início deste documento.
                </p>

                <h2>11. Contato e Encarregado de Dados (DPO)</h2>
                <p>
                    Para quaisquer questões sobre privacidade, exercício de direitos ou dúvidas sobre esta política, entre em contato com:
                </p>
                <p>
                    <strong>Responsável:</strong> Guilherme Santos<br>
                    <strong>WhatsApp:</strong> <a href="<?php echo esc_url( tdc_whatsapp_url( 'Olá! Tenho uma dúvida sobre a política de privacidade do Templo do Churrasco.' ) ); ?>"><?php echo esc_html( tdc_whatsapp_formatted() ); ?></a><br>
                    <strong>Site:</strong> <a href="https://templodochurrasco.com.br">templodochurrasco.com.br</a><br>
                    <strong>Localização:</strong> Rio de Janeiro — RJ, Brasil
                </p>
                <p>
                    Se você não estiver satisfeito com nossa resposta, você também tem o direito de registrar uma reclamação junto à Autoridade Nacional de Proteção de Dados (ANPD): <a href="https://www.gov.br/anpd" target="_blank" rel="noopener noreferrer">www.gov.br/anpd</a>
                </p>

            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>

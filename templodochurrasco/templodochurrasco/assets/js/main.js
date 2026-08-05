/**
 * Templo do Churrasco — main.js
 * JavaScript principal do tema WordPress
 *
 * Funcionalidades:
 * - Mobile menu (hamburger)
 * - Scroll suave para âncoras
 * - Animações fade-in ao scroll (IntersectionObserver)
 * - Contadores animados (stats)
 * - Sticky header
 * - FAQ accordion
 * - Calculadora de carne completa
 * - Formulário de contato → WhatsApp
 * - Lightbox
 *
 * @package TemplodoChurrasco
 * @version 1.0.0
 */

(function () {
    'use strict';

    /* =========================================================
       CONSTANTES
       ========================================================= */
    const WA_NUMBER  = '5521998594584';
    const WA_BASE    = 'https://wa.me/' + WA_NUMBER;

    /* =========================================================
       UTILITÁRIOS
       ========================================================= */
    const $ = (selector, parent = document) => parent.querySelector(selector);
    const $$ = (selector, parent = document) => [...parent.querySelectorAll(selector)];

    function debounce(fn, delay = 200) {
        let timer;
        return function (...args) {
            clearTimeout(timer);
            timer = setTimeout(() => fn.apply(this, args), delay);
        };
    }

    function formatKg(value) {
        if (value >= 1) return value.toFixed(1).replace('.', ',') + ' kg';
        return Math.round(value * 1000) + ' g';
    }

    function buildWaUrl(message) {
        return WA_BASE + '?text=' + encodeURIComponent(message);
    }

    /* =========================================================
       MOBILE MENU (HAMBURGER)
       ========================================================= */
    function initMobileMenu() {
        const hamburger = $('#hamburger-btn');
        const mobileNav = $('#mobile-nav');
        const overlay   = $('#mobile-overlay');

        if (!hamburger || !mobileNav || !overlay) return;

        function openMenu() {
            hamburger.classList.add('active');
            mobileNav.classList.add('active');
            overlay.classList.add('active');
            hamburger.setAttribute('aria-expanded', 'true');
            mobileNav.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            hamburger.classList.remove('active');
            mobileNav.classList.remove('active');
            overlay.classList.remove('active');
            hamburger.setAttribute('aria-expanded', 'false');
            mobileNav.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        hamburger.addEventListener('click', function () {
            if (mobileNav.classList.contains('active')) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        overlay.addEventListener('click', closeMenu);

        // Fechar ao clicar em um link
        $$('a', mobileNav).forEach(link => {
            link.addEventListener('click', closeMenu);
        });

        // Fechar com ESC
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && mobileNav.classList.contains('active')) {
                closeMenu();
                hamburger.focus();
            }
        });
    }

    /* =========================================================
       STICKY HEADER AO SCROLL
       ========================================================= */
    function initStickyHeader() {
        const header = $('#site-header');
        if (!header) return;

        const onScroll = debounce(function () {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }, 50);

        window.addEventListener('scroll', onScroll, { passive: true });
    }

    /* =========================================================
       SCROLL SUAVE PARA ÂNCORAS
       ========================================================= */
    function initSmoothScroll() {
        $$('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href   = this.getAttribute('href');
                const target = $(href);
                if (!target) return;

                e.preventDefault();
                const header = $('#site-header');
                const offset = header ? header.offsetHeight + 20 : 80;

                window.scrollTo({
                    top: target.getBoundingClientRect().top + window.scrollY - offset,
                    behavior: 'smooth',
                });
            });
        });
    }

    /* =========================================================
       ANIMAÇÕES FADE-IN AO SCROLL (IntersectionObserver)
       ========================================================= */
    function initScrollAnimations() {
        const elements = $$('.fade-in, .fade-in-left, .fade-in-right');
        if (!elements.length) return;

        if (!('IntersectionObserver' in window)) {
            // Fallback: mostrar tudo
            elements.forEach(el => el.classList.add('visible'));
            return;
        }

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
        );

        elements.forEach(el => observer.observe(el));
    }

    /* =========================================================
       CONTADORES ANIMADOS (Stats)
       ========================================================= */
    function initCounters() {
        const counters = $$('[data-counter]');
        if (!counters.length) return;

        function animateCounter(el, target, duration = 2000) {
            const start     = 0;
            const startTime = performance.now();
            const suffix    = el.textContent.replace(/[\d.]/g, '').trim();

            function update(currentTime) {
                const elapsed  = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                const eased    = 1 - Math.pow(1 - progress, 3); // ease-out cubic
                const value    = Math.round(start + (target - start) * eased);
                el.textContent = value + (suffix || '+');

                if (progress < 1) {
                    requestAnimationFrame(update);
                }
            }

            requestAnimationFrame(update);
        }

        if (!('IntersectionObserver' in window)) {
            counters.forEach(el => {
                animateCounter(el, parseInt(el.dataset.counter), 2000);
            });
            return;
        }

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const target = parseInt(entry.target.dataset.counter);
                        animateCounter(entry.target, target, 2000);
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.5 }
        );

        counters.forEach(el => observer.observe(el));
    }

    /* =========================================================
       FAQ ACCORDION
       ========================================================= */
    function initFaq() {
        const faqItems = $$('.faq-item');
        if (!faqItems.length) return;

        faqItems.forEach(item => {
            const btn    = $('.faq-question', item);
            const answer = $('.faq-answer', item);
            if (!btn || !answer) return;

            btn.addEventListener('click', function () {
                const isActive = item.classList.contains('active');

                // Fechar todos os outros
                faqItems.forEach(other => {
                    if (other !== item) {
                        other.classList.remove('active');
                        const otherBtn = $('.faq-question', other);
                        if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
                    }
                });

                // Toggle o atual
                item.classList.toggle('active', !isActive);
                btn.setAttribute('aria-expanded', String(!isActive));
            });
        });
    }

    /* =========================================================
       CALCULADORA DE CARNE — LÓGICA COMPLETA
       ========================================================= */
    function initCalculadora() {
        const form = $('#calc-form');
        if (!form) return;

        // Gramagem base por corte (g/pessoa para evento de 3h, perfil moderado, festa)
        const BASE_G = {
            picanha:    120,
            alcatra:    100,
            maminha:    100,
            fraldinha:  100,
            costela:    160, // costela tem mais osso, precisa mais
            cupim:      130,
            linguica:   80,
            salsicha:   60,
            frango:     120,
            coracao:    60,
            costelinha: 120,
            ancho:      120,
        };

        // Labels dos cortes
        const CORTE_LABELS = {
            picanha:    '🥩 Picanha',
            alcatra:    '🥩 Alcatra',
            maminha:    '🥩 Maminha',
            fraldinha:  '🥩 Fraldinha',
            costela:    '🥩 Costela Bovina',
            cupim:      '🥩 Cupim',
            linguica:   '🌭 Linguiça',
            salsicha:   '🌭 Salsicha',
            frango:     '🍗 Frango',
            coracao:    '🫀 Coração de Frango',
            costelinha: '🐷 Costelinha Suína',
            ancho:      '🥩 Ancho (Ribeye)',
        };

        // Multiplicadores por tipo de evento
        const TIPO_MULT = {
            almoco: 0.9,
            jantar: 0.85,
            festa:  1.0,
        };

        // Multiplicadores por duração
        const DURACAO_MULT = {
            '2': 0.8,
            '3': 1.0,
            '4': 1.2,
            '5': 1.4,
        };

        // Multiplicadores por perfil
        const PERFIL_MULT = {
            light:    0.7,
            moderado: 1.0,
            muito:    1.35,
        };

        // Dicas por perfil
        const DICAS = {
            light:    'Seus convidados comem pouco — ótimo! Invista mais na qualidade das carnes do que na quantidade. Uma picanha bem feita vai impressionar mais do que muito volume.',
            moderado: 'Perfil moderado é o mais comum. As quantidades calculadas são ideais — mas sempre deixe um pequeno estoque de linguiça para quem quiser repetir!',
            muito:    'Galera de apetite! Esses convidados vão valorizar cada grama. Não economize e considere ter um estoque extra de carne, especialmente nos cortes favoritos.',
        };

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            calcular();
        });

        // Também calcular ao mudar qualquer campo (live update)
        form.addEventListener('change', debounce(calcular, 300));

        function calcular() {
            const adultos  = parseInt($('#calc-adultos').value) || 0;
            const criancas = parseInt($('#calc-criancas').value) || 0;
            const tipo     = $('#calc-tipo').value    || 'festa';
            const duracao  = $('#calc-duracao').value || '3';
            const perfil   = $('#calc-perfil').value  || 'moderado';

            // Pegar cortes selecionados
            const cortesChecked = $$('input[name="cortes[]"]:checked').map(el => el.value);

            if (!cortesChecked.length) {
                alert('Selecione pelo menos um corte de carne!');
                return;
            }

            if (adultos + criancas === 0) {
                alert('Informe o número de convidados!');
                return;
            }

            // Multiplicadores
            const multTipo    = TIPO_MULT[tipo]    || 1;
            const multDuracao = DURACAO_MULT[duracao] || 1;
            const multPerfil  = PERFIL_MULT[perfil]  || 1;

            // Calcular participação de cada corte (dividir igualmente)
            const numCortes = cortesChecked.length;

            // Total de pessoas equivalentes (crianças = 0.5)
            const totalPessoas = adultos + (criancas * 0.5);

            // Calcular por corte
            const resultados = {};
            let   totalGramas = 0;

            cortesChecked.forEach(corte => {
                const baseG   = BASE_G[corte] || 100;
                // Ponderar: se tem muitos cortes, cada um tem menos peso
                // Base: distribuição proporcional do total esperado
                const totalExpG = totalPessoas * 400 * multTipo * multDuracao * multPerfil;
                // Peso individual: proporcional ao corte base
                const somaBase  = cortesChecked.reduce((s, c) => s + (BASE_G[c] || 100), 0);
                const fracaoCorte = baseG / somaBase;
                const gramas    = Math.round(totalExpG * fracaoCorte / 50) * 50; // arredonda p/ 50g
                resultados[corte] = gramas;
                totalGramas += gramas;
            });

            // Carvão: ~1.5kg por kg de carne + extra para duração
            const carvaoKg = Math.ceil(totalGramas / 1000 * 1.5 * (parseFloat(duracao) / 3));

            // Renderizar resultado
            renderResultado(resultados, totalGramas, carvaoKg, perfil, adultos, criancas, tipo, duracao);
        }

        function renderResultado(resultados, totalGramas, carvaoKg, perfil, adultos, criancas, tipo, duracao) {
            const empty   = $('#result-empty');
            const content = $('#result-content');
            const summary = $('#result-summary');
            const tbody   = $('#result-tbody');
            const total   = $('#result-total');
            const carvao  = $('#result-carvao');
            const tipText = $('#result-tip-text');
            const waBtn   = $('#result-whatsapp-btn');

            if (!content) return;

            // Esconder empty, mostrar content
            if (empty)   empty.style.display   = 'none';
            content.style.display = 'block';

            // Resumo
            const tipoLabel = { almoco: 'Almoço', jantar: 'Jantar', festa: 'Festa' }[tipo] || tipo;
            const duraLabel = duracao === '5' ? '5+ horas' : duracao + ' horas';
            if (summary) {
                summary.innerHTML = `
                    <strong style="color: var(--color-secondary);">Resumo do evento:</strong><br>
                    👥 ${adultos} adulto(s) + ${criancas} criança(s) &nbsp;|&nbsp;
                    🎉 ${tipoLabel} &nbsp;|&nbsp; ⏱ ${duraLabel}
                `;
            }

            // Tabela de resultados
            if (tbody) {
                tbody.innerHTML = '';
                Object.entries(resultados).forEach(([corte, gramas]) => {
                    const tr = document.createElement('tr');
                    tr.innerHTML = `
                        <td>${CORTE_LABELS[corte] || corte}</td>
                        <td style="text-align: right; color: var(--color-secondary); font-weight: 600;">
                            ${formatKg(gramas / 1000)}
                        </td>
                    `;
                    tbody.appendChild(tr);
                });
            }

            // Totais
            if (total)  total.textContent  = formatKg(totalGramas / 1000);
            if (carvao) carvao.textContent = carvaoKg + ' kg';

            // Dica
            if (tipText) tipText.textContent = DICAS[perfil] || DICAS.moderado;

            // Montar mensagem do WhatsApp
            if (waBtn) {
                let msg = `Olá Guilherme! 🔥 Usei a calculadora do site e quero solicitar um orçamento!\n\n`;
                msg += `*Detalhes do meu evento:*\n`;
                msg += `👥 ${adultos} adulto(s) e ${criancas} criança(s)\n`;
                msg += `🎉 Tipo: ${tipoLabel}\n`;
                msg += `⏱ Duração: ${duraLabel}\n\n`;
                msg += `*Carnes calculadas:*\n`;
                Object.entries(resultados).forEach(([corte, gramas]) => {
                    msg += `${CORTE_LABELS[corte]}: ${formatKg(gramas / 1000)}\n`;
                });
                msg += `\n*Total de carne:* ${formatKg(totalGramas / 1000)}\n`;
                msg += `*Carvão estimado:* ${carvaoKg} kg\n\n`;
                msg += `Pode me ajudar? 😊`;

                waBtn.href = buildWaUrl(msg);
            }

            // Scroll para o resultado em mobile
            if (window.innerWidth < 768 && content) {
                setTimeout(() => {
                    content.closest('.calculator-result').scrollIntoView({
                        behavior: 'smooth',
                        block:    'start',
                    });
                }, 100);
            }
        }
    }

    /* =========================================================
       FORMULÁRIO DE CONTATO → WHATSAPP
       (Lógica adicional via JS puro, separada do inline do PHP)
       ========================================================= */
    function initContactForm() {
        // O formulário já tem o event listener inline no PHP.
        // Esta função adiciona validação visual em tempo real.
        const form = $('#contact-form');
        if (!form) return;

        const requiredInputs = $$('[required]', form);

        requiredInputs.forEach(input => {
            input.addEventListener('blur', function () {
                validateInput(this);
            });
            input.addEventListener('input', function () {
                if (this.dataset.touched) validateInput(this);
            });
        });

        function validateInput(input) {
            input.dataset.touched = 'true';
            if (!input.validity.valid) {
                input.style.borderColor = 'var(--color-primary)';
            } else {
                input.style.borderColor = 'var(--color-whatsapp)';
            }
        }
    }

    /* =========================================================
       LIGHTBOX PARA GALERIA
       ========================================================= */
    function initGalleryLightbox() {
        const galleryItems = $$('.gallery-item[data-full]');
        if (!galleryItems.length) return;

        galleryItems.forEach(item => {
            item.addEventListener('click', function () {
                const fullSrc = this.dataset.full;
                if (fullSrc && typeof openLightbox === 'function') {
                    openLightbox(fullSrc);
                }
            });

            // Acessibilidade: ativar com Enter
            item.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.click();
                }
            });
        });
    }

    /* =========================================================
       WHATSAPP FLOAT BUTTON — visibilidade
       ========================================================= */
    function initWhatsAppFloat() {
        const floatBtn = $('.whatsapp-float');
        if (!floatBtn) return;

        // Esconder no topo e mostrar após scroll
        window.addEventListener('scroll', debounce(function () {
            if (window.scrollY > 300) {
                floatBtn.style.opacity = '1';
                floatBtn.style.transform = 'translateY(0)';
            } else {
                floatBtn.style.opacity = '0.8';
            }
        }, 100), { passive: true });
    }

    /* =========================================================
       LINK ATIVO NO MENU (baseado na URL)
       ========================================================= */
    function initActiveNavLink() {
        const currentPath = window.location.pathname;
        $$('.main-nav a, .mobile-nav a').forEach(link => {
            const href = link.getAttribute('href');
            if (href && currentPath === new URL(href, window.location.origin).pathname) {
                link.closest('li')?.classList.add('current-menu-item');
            }
        });
    }

    /* =========================================================
       NÚMEROS DO HERO — animação especial
       ========================================================= */
    function initHeroNumbers() {
        const proofNumbers = $$('.hero-proof-number[data-counter]');
        if (!proofNumbers.length) return;

        // Os números do hero são visíveis imediatamente — animar após 1s
        setTimeout(() => {
            proofNumbers.forEach(el => {
                const target = parseInt(el.dataset.counter);
                if (isNaN(target)) return;

                let current = 0;
                const duration = 1800;
                const startTime = performance.now();

                function update(now) {
                    const elapsed  = now - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    const eased    = 1 - Math.pow(1 - progress, 3);
                    current        = Math.round(target * eased);
                    el.textContent = current + '+';
                    if (progress < 1) requestAnimationFrame(update);
                }

                requestAnimationFrame(update);
            });
        }, 1000);
    }

    /* =========================================================
       TABELA DE COMPARAÇÃO — hover highlight coluna
       ========================================================= */
    function initComparisonTable() {
        const table = $('.comparison-table');
        if (!table) return;

        const featuredCells = $$('.featured-col', table);
        featuredCells.forEach(cell => {
            cell.addEventListener('mouseenter', function () {
                featuredCells.forEach(c => {
                    if (c !== this) c.style.background = 'rgba(192,57,43,0.08)';
                });
            });
        });
    }

    /* =========================================================
       COPY TO CLIPBOARD (fallback global)
       ========================================================= */
    window.copyToClipboard = function (text) {
        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(text).then(() => {
                showToast('Link copiado! 🔥');
            }).catch(() => {
                fallbackCopy(text);
            });
        } else {
            fallbackCopy(text);
        }
    };

    function fallbackCopy(text) {
        const el = document.createElement('textarea');
        el.value = text;
        el.style.cssText = 'position:fixed;top:-9999px;left:-9999px;';
        document.body.appendChild(el);
        el.focus();
        el.select();
        try {
            document.execCommand('copy');
            showToast('Link copiado!');
        } catch (e) {
            alert('Copie o link manualmente: ' + text);
        }
        document.body.removeChild(el);
    }

    function showToast(message) {
        const toast = document.createElement('div');
        toast.textContent = message;
        toast.style.cssText = `
            position: fixed;
            bottom: 100px;
            right: 24px;
            background: var(--color-dark, #1A1A1A);
            color: white;
            padding: 12px 20px;
            border-radius: 999px;
            font-size: 0.875rem;
            font-weight: 600;
            z-index: 99999;
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
            animation: slideIn 0.3s ease;
        `;
        document.body.appendChild(toast);
        setTimeout(() => {
            toast.style.opacity = '0';
            toast.style.transition = 'opacity 0.3s ease';
            setTimeout(() => toast.remove(), 300);
        }, 2500);
    }

    /* =========================================================
       OPEN/CLOSE LIGHTBOX GLOBAL
       ========================================================= */
    window.openLightbox = function (src) {
        const lb  = document.getElementById('lightbox');
        const img = document.getElementById('lightbox-img');
        if (!lb || !img) return;
        img.src = src;
        lb.classList.add('active');
        document.body.style.overflow = 'hidden';
    };

    window.closeLightbox = function () {
        const lb = document.getElementById('lightbox');
        if (!lb) return;
        lb.classList.remove('active');
        document.body.style.overflow = '';
    };

    /* =========================================================
       INIT — executar tudo quando DOM estiver pronto
       ========================================================= */
    function init() {
        initMobileMenu();
        initStickyHeader();
        initSmoothScroll();
        initScrollAnimations();
        initCounters();
        initFaq();
        initCalculadora();
        initContactForm();
        initGalleryLightbox();
        initWhatsAppFloat();
        initActiveNavLink();
        initHeroNumbers();
        initComparisonTable();

        // Tecla ESC fecha lightbox
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                window.closeLightbox();
            }
        });

        console.log('🔥 Templo do Churrasco — JS carregado com sucesso!');
    }

    // Aguardar DOM
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();

// Modal Image Viewer - Versão Simples
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    const modalCaption = document.getElementById('modalCaption');
    const closeBtn = document.querySelector('.modal-close');

    // Função para abrir modal
    function openModal(imageSrc, imageAlt) {
        modalImg.src = imageSrc;
        modalImg.alt = imageAlt;
        modalCaption.textContent = imageAlt;
        modal.style.display = 'flex';
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';
        
        // Adicionar entrada no histórico para gerenciar botão back do celular
        if (window.history && window.history.pushState) {
            window.history.pushState({modal: true}, '', '');
        }
    }

    // Função para fechar modal
    function closeModal(fromHistoryBack = false) {
        modal.style.display = 'none';
        modal.classList.remove('show');
        document.body.style.overflow = 'auto';
        // Limpar src para otimizar performance
        modalImg.src = '';
        
        // Remover entrada do histórico se não foi chamado pelo botão back
        if (!fromHistoryBack && window.history && window.history.state && window.history.state.modal) {
            window.history.back();
        }
    }

    // Adicionar click nas imagens da galeria
    function initGalleryModal() {
        const galleryItems = document.querySelectorAll('.gallery-item');
        
        galleryItems.forEach(item => {
            const img = item.querySelector('img');
            if (img) {
                // Adicionar cursor pointer
                item.style.cursor = 'pointer';
                
                // Adicionar evento de click
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    openModal(img.src, img.alt);
                });
            }
        });
    }

    // Adicionar click em outras imagens (fora da galeria)
    function initGeneralModal() {
        const images = document.querySelectorAll('img');
        
        images.forEach(img => {
            // Pular imagens que não devem abrir modal
            if (img.classList.contains('modal-image') || 
                img.closest('a') || 
                img.classList.contains('hero-logo') ||
                img.closest('.gallery-item') || // Já tratado pela galeria
                img.closest('.nav-logo')) {
                return;
            }
            
            // Adicionar cursor pointer
            img.style.cursor = 'pointer';
            
            // Adicionar evento de click
            img.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                openModal(this.src, this.alt);
            });
        });
    }

    // Event listeners para fechar modal
    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }

    // Fechar com ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('show')) {
            closeModal();
        }
    });

    // Fechar clicando em qualquer lugar do modal (incluindo na imagem)
    modal.addEventListener('click', function(e) {
        closeModal();
    });

    // Gerenciar botão back do celular
    window.addEventListener('popstate', function(e) {
        if (modal.classList.contains('show')) {
            e.preventDefault();
            closeModal(true); // fromHistoryBack = true
        }
    });

    // Inicializar modais
    initGalleryModal();
    initGeneralModal();

    // Reinicializar quando a galeria for filtrada
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('gallery-tab')) {
            // Aguardar o filtro terminar e reinicializar
            setTimeout(initGalleryModal, 600);
        }
    });
}); 
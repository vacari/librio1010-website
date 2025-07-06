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
    }

    // Função para fechar modal
    function closeModal() {
        modal.style.display = 'none';
        modal.classList.remove('show');
        document.body.style.overflow = 'auto';
        // Limpar src para otimizar performance
        modalImg.src = '';
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

    // Fechar clicando em qualquer lugar do modal
    modal.addEventListener('click', function(e) {
        closeModal();
    });

    // Prevenir que o modal feche quando clicar na imagem ou na caption
    if (modalImg) {
        modalImg.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    }

    const modalContent = document.querySelector('.modal-content');
    if (modalContent) {
        modalContent.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    }

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
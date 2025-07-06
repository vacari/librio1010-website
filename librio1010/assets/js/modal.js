// Modal Image Viewer
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    const modalCaption = document.getElementById('modalCaption');
    const closeBtn = document.querySelector('.modal-close');

    // Adicionar navegação próxima/anterior e miniaturas no modal
    let galleryImages = Array.from(document.querySelectorAll('.gallery-item img'));
    let currentIndex = 0;

    function openModal(imageSrc, imageAlt, index) {
        modalImg.src = imageSrc;
        modalImg.alt = imageAlt;
        modalCaption.textContent = imageAlt;
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';
        currentIndex = index;
        renderThumbnails();
        updateNavButtons();
    }

    function closeModal() {
        modal.classList.remove('show');
        document.body.style.overflow = 'auto';
    }

    // Navegação próxima/anterior
    function showNext() {
        if (currentIndex < galleryImages.length - 1) {
            currentIndex++;
            const img = galleryImages[currentIndex];
            openModal(img.src, img.alt, currentIndex);
        }
    }
    function showPrev() {
        if (currentIndex > 0) {
            currentIndex--;
            const img = galleryImages[currentIndex];
            openModal(img.src, img.alt, currentIndex);
        }
    }

    // Botões de navegação
    let nextBtn = document.createElement('button');
    nextBtn.className = 'modal-next';
    nextBtn.innerHTML = '→';
    nextBtn.onclick = showNext;
    let prevBtn = document.createElement('button');
    prevBtn.className = 'modal-prev';
    prevBtn.innerHTML = '←';
    prevBtn.onclick = showPrev;
    modal.querySelector('.modal-content').appendChild(prevBtn);
    modal.querySelector('.modal-content').appendChild(nextBtn);

    function updateNavButtons() {
        prevBtn.style.display = currentIndex === 0 ? 'none' : 'block';
        nextBtn.style.display = currentIndex === galleryImages.length - 1 ? 'none' : 'block';
    }

    // Miniaturas no rodapé do modal
    let thumbBar = document.createElement('div');
    thumbBar.className = 'modal-thumbnails';
    modal.appendChild(thumbBar);

    function renderThumbnails() {
        thumbBar.innerHTML = '';
        galleryImages.forEach((img, idx) => {
            let thumb = document.createElement('img');
            thumb.src = img.src;
            thumb.alt = img.alt;
            thumb.className = 'modal-thumb' + (idx === currentIndex ? ' active' : '');
            thumb.onclick = () => openModal(img.src, img.alt, idx);
            thumbBar.appendChild(thumb);
        });
    }

    // Adicionar click em imagens da galeria
    function addModalToGalleryImages() {
        galleryImages.forEach((img, idx) => {
            img.style.cursor = 'pointer';
            img.addEventListener('click', function(e) {
                e.preventDefault();
                openModal(this.src, this.alt, idx);
            });
        });
    }
    addModalToGalleryImages();

    // Atualizar lista de imagens se a galeria mudar
    function updateGalleryImages() {
        galleryImages = Array.from(document.querySelectorAll('.gallery-item img'));
    }
    // Opcional: observer para atualizar se a galeria for dinâmica
    const galleryObserver = new MutationObserver(updateGalleryImages);
    const galleryGrid = document.getElementById('gallery-grid');
    if (galleryGrid) {
        galleryObserver.observe(galleryGrid, { childList: true, subtree: true });
    }

    // Fechar com botão X
    closeBtn.addEventListener('click', closeModal);

    // Fechar com ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('show')) {
            closeModal();
        }
    });

    // Fechar clicando fora da imagem
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });

    // Adicionar click em todas as imagens para abrir modal
    function addModalToImages() {
        const images = document.querySelectorAll('img');
        
        images.forEach(img => {
            // Pular modal image
            if (img.classList.contains('modal-image')) {
                return;
            }
            
            // Pular imagens que estão dentro de links (logotipos)
            if (img.closest('a')) {
                return;
            }
            
            // Pular imagens com classe hero-logo
            if (img.classList.contains('hero-logo')) {
                return;
            }
            
            // Adicionar cursor pointer
            img.style.cursor = 'pointer';
            
            // Adicionar evento de click
            img.addEventListener('click', function(e) {
                e.preventDefault();
                openModal(this.src, this.alt);
            });
        });
    }

    // Inicializar modal para imagens
    addModalToImages();

    // Função para adicionar modal a imagens dinâmicas (se houver)
    function addModalToDynamicImages() {
        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.type === 'childList') {
                    mutation.addedNodes.forEach(function(node) {
                        if (node.nodeType === 1) { // Element node
                            const newImages = node.querySelectorAll ? node.querySelectorAll('img') : [];
                            newImages.forEach(img => {
                                if (!img.classList.contains('modal-image') && !img.closest('a') && !img.classList.contains('hero-logo')) {
                                    img.style.cursor = 'pointer';
                                    img.addEventListener('click', function(e) {
                                        e.preventDefault();
                                        openModal(this.src, this.alt);
                                    });
                                }
                            });
                        }
                    });
                }
            });
        });

        observer.observe(document.body, {
            childList: true,
            subtree: true
        });
    }

    // Inicializar observer para imagens dinâmicas
    addModalToDynamicImages();

    // Prevenir que o modal abra quando clicar em links
    document.addEventListener('click', function(e) {
        if (e.target.closest('a') && e.target.tagName !== 'IMG') {
            return;
        }
    });

    // Adicionar indicador visual de que a imagem é clicável
    function addClickIndicator() {
        const images = document.querySelectorAll('img');
        images.forEach(img => {
            if (!img.classList.contains('modal-image') && !img.closest('a') && !img.classList.contains('hero-logo')) {
                
                // Adicionar hover effect
                img.addEventListener('mouseenter', function() {
                    this.style.opacity = '0.8';
                    this.style.transform = 'scale(1.02)';
                });
                
                img.addEventListener('mouseleave', function() {
                    this.style.opacity = '1';
                    this.style.transform = 'scale(1)';
                });
            }
        });
    }

    addClickIndicator();
}); 
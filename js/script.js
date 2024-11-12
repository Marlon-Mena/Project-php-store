function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("open");
}

let currentIndex = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
}

// Inicializa o primeiro slide
showSlide(currentIndex);

// Muda de slide a cada 5 segundos (5000 ms)
setInterval(nextSlide, 5000);

        function toggleSidebar() {
            document.getElementById("sidebar").classList.toggle("open");
        }

        // Variáveis para o modal e o índice do produto
        let editModal = document.getElementById('editModal');
        let currentDishIndex = null;

        // Abre o modal de edição e preenche com dados do produto
        function openEditModal(index) {
            const dish = document.querySelectorAll('.dish')[index];
            currentDishIndex = index;

            document.getElementById('editImageLink').value = dish.querySelector('.dish-image').src;
            document.getElementById('editName').value = dish.querySelector('.dish-title').textContent;
            document.getElementById('editDescription').value = dish.querySelector('.dish-description').textContent;
            document.getElementById('editPrice').value = dish.querySelector('.dish-price h4').textContent;

            editModal.style.display = 'flex';
        }

        // Salva as alterações no produto
        function saveChanges() {
            const dish = document.querySelectorAll('.dish')[currentDishIndex];
            dish.querySelector('.dish-image').src = document.getElementById('editImageLink').value;
            dish.querySelector('.dish-title').textContent = document.getElementById('editName').value;
            dish.querySelector('.dish-description').textContent = document.getElementById('editDescription').value;
            dish.querySelector('.dish-price h4').textContent = document.getElementById('editPrice').value;

            closeEditModal();
        }

        // Fecha o modal de edição
        function closeEditModal() {
            editModal.style.display = 'none';
        }
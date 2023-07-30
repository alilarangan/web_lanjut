// Ambil elemen menu
const menuItems = document.querySelectorAll('nav a');

// Loop melalui setiap elemen menu
menuItems.forEach(item => {
  // Jika URL halaman saat ini sama dengan URL menu, tambahkan class "active"
  if (item.href === window.location.href) {
    item.classList.add('active');
  }
  else{
    console.log("tidak sama");
    console.log(item.href);
    console.log(window.location.href);
  }
});

// Get the modal element
const modal = document.getElementById('myModal');

// Get the button that opens the modal
const openModalBtn = document.getElementById('openModalBtn');

// Get the <span> element that closes the modal
const closeBtn = document.getElementsByClassName('close')[0];

// Function to open the modal
function openModal() {
    modal.style.display = 'block';
}

// Function to close the modal
function closeModal() {
    modal.style.display = 'none';
}

// Event listeners
openModalBtn.addEventListener('click', openModal);
closeBtn.addEventListener('click', closeModal);
window.addEventListener('click', (event) => {
    if (event.target === modal) {
        closeModal();
    }
});

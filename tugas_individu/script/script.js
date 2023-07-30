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
    modal.classList.add('active'); // Add the "active" class to show the modal with animation
}

// Function to close the modal
function closeModal() {
    modal.classList.remove('active'); // Remove the "active" class to hide the modal with animation
}

// Event listeners
openModalBtn.addEventListener('click', openModal);
closeBtn.addEventListener('click', closeModal);
window.addEventListener('click', (event) => {
    if (event.target === modal) {
        closeModal();
    }
});

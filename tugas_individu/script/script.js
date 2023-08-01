const menuItems = document.querySelectorAll('nav a');

menuItems.forEach(item => {
  if (item.href === window.location.href) {
    item.classList.add('active');
  }
  else{
    console.log("tidak sama");
    console.log(item.href);
    console.log(window.location.href);
  }
});
// input
const modal = document.getElementById('modal');

function openModal() {
    modal.style.display = 'block';
    modal.classList.add('open');
}

function closeModal() {
    modal.classList.remove('open');

    setTimeout(() => {
      modal.style.display = 'none';
  }, 300);
}
document.querySelector('.open-modal-btn').onclick = openModal;
document.querySelector('.close').onclick = closeModal;

window.onclick = function(event) {
    if (event.target === modal) {
        event.stopPropagation();
    }
};
// action

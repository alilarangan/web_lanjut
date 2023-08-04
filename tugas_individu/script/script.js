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
// Ambil elemen-elemen yang dibutuhkan
var modale = document.getElementById("myModale");
var openModalBtn = document.getElementById("openModalBtn");
var closeModalBtn = document.getElementsByClassName("closee")[0];

// Ketika tombol buka modal diklik, tampilkan modal
openModalBtn.onclick = function() {
  modale.style.display = "block";
};

// Ketika tombol close pada modal diklik, sembunyikan modal
closeModalBtn.onclick = function() {
  modale.style.display = "none";
};

// Jangan sembunyikan modal jika pengguna mengklik di luar modal
modal.onclick = function(e) {
  e.stopPropagation();
};

// Jika pengguna menekan tombol ESC, sembunyikan modal
document.onkeydown = function(event) {
  event = event || window.event;
  if (event.keyCode === 27) {
    modale.style.display = "none";
  }
};
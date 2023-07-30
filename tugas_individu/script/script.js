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

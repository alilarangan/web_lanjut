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
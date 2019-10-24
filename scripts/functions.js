var isOpen = false;

function toggleDropdownMenu() {

  var x = document.getElementById("mobile_menu");
  if (isOpen){
    x.style.maxHeight = '0';
  }
  else {
    x.style.maxHeight = '80vh'; 
  }
  isOpen = !isOpen;
}

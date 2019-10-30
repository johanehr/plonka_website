var isOpen = false;

/* Short function to toggle the mobile navigation menu by adjusting
 the (animated) height between 0 and up to 80vh height. */
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

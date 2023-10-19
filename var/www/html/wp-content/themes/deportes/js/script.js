// When the user scrolls the page, execute myFunction
window.onscroll = function () {
  menuFixedTop();
};

// Get the header

// Get the offset position of the header

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function menuFixedTop() {
  let header = document.getElementById("headermiddle");
  let sticky = header.offsetTop + 40;
  if (window.scrollY >= sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

setTimeout(() => {
  let btnExternalIcons = document.getElementById("btn-external-icons");
  let externalIcons = document.getElementById("external-icons");

  btnExternalIcons.addEventListener("click", () => {
    externalIcons.classList.toggle("open");
    //externalIcons.classList.add("open");
    //btnExternalIcons.remove();
  });
}, 500);

window.onscroll = () => {
  menuFixedTop();
};

menuFixedTop = () => {
  const header = document.getElementById("headermiddle");
  const sticky = header.offsetTop + 40;
  if (window.scrollY >= sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
};

setTimeout(() => {
  toggleExternalIcons();
  morePosts();
}, 500);

toggleExternalIcons = () => {
  const btnExternalIcons = document.getElementById("btn-external-icons");
  const externalIcons = document.getElementById("external-icons");

  btnExternalIcons.addEventListener("click", () => {
    externalIcons.classList.toggle("open");
    //externalIcons.classList.add("open");
    //btnExternalIcons.remove();
  });
};

morePosts = () => {
  const btnMorePosts = document.getElementById("btn-more-posts");
  const currentUrl = window.location.href;

  btnMorePosts.addEventListener("click", () => {
    window.location.href = currentUrl + "articulos";
  });
};

// listens for scrolling
// once scroll begins, checks user scroll againt cutOff
// class added, when cutOff < user scroll
//class removed, when cutOff > user scroll
function scroll(){
  window.addEventListener("scroll", function(){
    var header = document.querySelector("header"),
        nav = document.querySelector(".menu")
        scrolling = window.scrollY,
        cutOff = 10;
    if (cutOff < scrolling){
      header.classList.add("is-menuSmaller");
      nav.style.backgroundColor = "transparent";
      console.log("test")
    } else {
       header.classList.remove("is-menuSmaller");
       nav.style.backgroundColor = "rgba(225, 225, 225, .6)";
    }
  });
}

scroll();

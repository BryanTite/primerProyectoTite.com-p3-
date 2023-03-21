const video = document.getElementById("videoJS");
const img = document.getElementById("imgJS");

video.addEventListener("timeupdate", function() {
    console.log(video.currentTime)
    if (video.currentTime >= 11 && video.currentTime < 14) {
        img.style.display = "block";
    } else {
        img.style.display = "none";
    }
});

img.addEventListener("mouseover", function() {
    img.querySelector("img").src = "/p3/assets/images/iconos/logo1.svg";
});

img.addEventListener("mouseout", function() {
    img.querySelector("img").src = "/p3/assets/images/iconos/logo2.svg";
});
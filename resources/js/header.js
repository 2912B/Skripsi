document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector("header");

    setTimeout(() => {
        header.style.opacity = "0";
        header.style.transform = "translateY(-20px)";
        setTimeout(() => {
            header.style.display = "none";
        }, 300);
    }, 5000);
});

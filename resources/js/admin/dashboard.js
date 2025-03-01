document.addEventListener("DOMContentLoaded", () => {
    const navLinks = document.querySelectorAll(".nav li a");

    navLinks.forEach((link) => {
        link.addEventListener("click", function (event) {
            navLinks.forEach((otherLink) =>
                otherLink.classList.remove("active")
            );
            this.classList.add("active");
        });
    });
});

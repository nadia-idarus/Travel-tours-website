window.onload = function() {
    const hamburger = document.querySelector(".hambuger");
    const navMenu = document.querySelector(".nav-menu");

    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
    })

    document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
        hamburger.classList.remove("active");
        navMenu.classList.remove("active");
    }))

}

function validate() {
    if (document.contactMe.email.value == "") {
        alert("Please provide your Email!");
        document.contactMe.EMail.focus();
        return false;
    }
    if (document.contactMe.password.value == "" || isNaN(document.contactMe.password.value) ||
        document.contactMe.password.value.length != 5) {
        alert("Please provide a password.");
        document.contactMe.password.focus();
        return false;
    }
    return (true);
}
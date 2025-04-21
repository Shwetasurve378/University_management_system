

document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("loginForm");

    if (loginForm) {
        loginForm.addEventListener("submit", function (event) {
            event.preventDefault();

            let username = document.getElementById("username").value;
            let password = document.getElementById("password").value;

            if (username === "admin" && password === "123") {
                localStorage.setItem("isLoggedIn", "true"); 
                window.location.href = "frontpage.html"; 
            } else {
                document.getElementById("error-message").textContent = "Invalid username or password!";
            }
        });
    }


    window.logout = function () {
        localStorage.removeItem("isLoggedIn");
        window.location.href = "index.html";
    };


    if (window.location.pathname.includes("frontpage.html")) {
        if (localStorage.getItem("isLoggedIn") !== "true") {
            window.location.href = "index.html"; 
        }
    }
});
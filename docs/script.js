// ================= TEMA =================
document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.getElementById("themeToggle");
    const root = document.documentElement;

    // Tema zaten <head> içinde yüklendi, sadece buton ikonunu ayarla
    if (toggleBtn) {
        toggleBtn.innerText = root.getAttribute("data-theme") === "dark" ? "☀️" : "🌙";

        toggleBtn.addEventListener("click", () => {
            const isDark = root.getAttribute("data-theme") === "dark";
            const newTheme = isDark ? "light" : "dark";

            root.setAttribute("data-theme", newTheme);
            localStorage.setItem("theme", newTheme);
            toggleBtn.innerText = isDark ? "🌙" : "☀️";
        });
    }
});


// ================= LOADER =================
window.addEventListener("load", () => {
    document.getElementById("loader")?.classList.add("hidden");
});

// Failsafe: 3 saniyede yine de kapat
setTimeout(() => {
    document.getElementById("loader")?.classList.add("hidden");
}, 3000);


// ================= 3D HOVER: TRIANGLE =================
const triangle = document.querySelector(".triangle-img");

if (triangle) {
    const img = triangle.querySelector("img");

    triangle.addEventListener("mousemove", (e) => {
        const rect = triangle.getBoundingClientRect();
        const rotateX = -((e.clientY - rect.top) - rect.height / 2) / 10;
        const rotateY = ((e.clientX - rect.left) - rect.width / 2) / 10;
        img.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`;
    });

    triangle.addEventListener("mouseleave", () => {
        img.style.transform = "rotateX(0) rotateY(0) scale(1)";
    });
}


// ================= 3D HOVER: PENTAGON =================
document.querySelectorAll(".pentagon-img").forEach((pentagon) => {
    const img = pentagon.querySelector("img");

    pentagon.addEventListener("mousemove", (e) => {
        const rect = pentagon.getBoundingClientRect();
        const rotateX = -((e.clientY - rect.top) - rect.height / 2) / 10;
        const rotateY = ((e.clientX - rect.left) - rect.width / 2) / 10;
        img.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`;
    });

    pentagon.addEventListener("mouseleave", () => {
        img.style.transform = "rotateX(0) rotateY(0) scale(1)";
    });
});

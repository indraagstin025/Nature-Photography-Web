document.addEventListener("DOMContentLoaded", function () {
    const galleryImages = document.querySelectorAll("#gallery img");
    const modal = document.getElementById("imageModal");
    const modalImage = document.getElementById("modalImage");
    const modalTitle = document.getElementById("modalTitle");
    const modalDate = document.getElementById("modalDate");
    const modalLocation = document.getElementById("modalLocation");
    const closeModal = document.getElementById("closeModal");
    const navbar = document.getElementById("navbar");
    const exploreGalleryBtn = document.getElementById("exploreGalleryBtn");
    const authModal = document.getElementById("authModal");
    const closeAuthModal = document.getElementById("closeAuthModal");
    const loginTab = document.getElementById("loginTab");
    const registerTab = document.getElementById("registerTab");
    const loginForm = document.getElementById("loginForm");
    const registerForm = document.getElementById("registerForm");

    if (!modal || !modalImage || !closeModal) {
        console.error("Modal elements not found!");
        return;
    }

    const homeContent = document.getElementById("homeContent");
    window.addEventListener("load", function () {
        homeContent.classList.add("opacity-100", "translate-y-0");
    });

    const galleryTitle = document.getElementById("galleryTitle");
    const galleryObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    galleryTitle.classList.add("opacity-100", "translate-y-0");
                } else {
                    galleryTitle.classList.remove(
                        "opacity-100",
                        "translate-y-10"
                    );
                }
            });
        },
        { threshold: 0.3 }
    );

    if (galleryTitle) {
        galleryObserver.observe(galleryTitle);
    }

    const aboutSection = document.getElementById("about");
    const aboutObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    aboutSection.classList.add("opacity-100", "translate-x-0");
                } else {
                    aboutSection.classList.remove(
                        "opacity-100",
                        "translate-x-10"
                    );
                }
            });
        },
        { threshold: 0.3 }
    );

    if (aboutSection) {
        aboutObserver.observe(aboutSection);
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("opacity-100", "translate-y-0");
                    entry.target.classList.remove(
                        "opacity-0",
                        "translate-y-10"
                    );
                } else {
                    entry.target.classList.remove(
                        "opacity-100",
                        "translate-y-0"
                    );
                    entry.target.classList.add("opacity-0", "translate-y-10");
                }
            });
        },
        { threshold: 0.3 }
    );

    galleryImages.forEach((img) => {
        observer.observe(img);
    });

    galleryImages.forEach((img) => {
        img.addEventListener("click", function () {
            modalImage.src = img.src;
            modalTitle.textContent =
                img.getAttribute("data-title") || "Nature Photo";
            modalDate.textContent =
                img.getAttribute("data-date") || "Unknown Date";
            modalLocation.textContent =
                img.getAttribute("data-location") || "Unknown Location";

            modal.classList.remove("hidden");
            modal.classList.add("flex");
        });
    });

    closeModal.addEventListener("click", function () {
        modal.classList.remove("flex");
        modal.classList.add("hidden");
    });

    modal.addEventListener("click", function (e) {
        if (e.target === modal) {
            modal.classList.remove("flex");
            modal.classList.add("hidden");
        }
    });

    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add(
                "bg-gray-900",
                "bg-opacity-60",
                "shadow-md",
                "backdrop-blur-md"
            );
        } else {
            navbar.classList.remove(
                "bg-gray-900",
                "bg-opacity-60",
                "shadow-md",
                "backdrop-blur-md"
            );
        }
    });

    exploreGalleryBtn.addEventListener("click", function () {
        authModal.classList.remove("hidden");
    });

    closeAuthModal.addEventListener("click", function () {
        authModal.classList.add("hidden");
    });

    loginTab.addEventListener("click", function () {
        loginForm.classList.remove("hidden");
        registerForm.classList.add("hidden");
        loginTab.classList.add("bg-green-500", "text-white");
        loginTab.classList.remove("bg-gray-200", "text-gray-800");
        registerTab.classList.remove("bg-green-500", "text-white");
        registerTab.classList.add("bg-gray-200", "text-gray-800");
    });

    registerTab.addEventListener("click", function () {
        registerForm.classList.remove("hidden");
        loginForm.classList.add("hidden");
        registerTab.classList.add("bg-green-500", "text-white");
        registerTab.classList.remove("bg-gray-200", "text-gray-800");
        loginTab.classList.remove("bg-green-500", "text-white");
        loginTab.classList.add("bg-gray-200", "text-gray-800");
    });
});

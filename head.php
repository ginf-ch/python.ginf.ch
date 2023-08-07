<?php
$cssBasePath = "https://" . $_SERVER['SERVER_NAME'] . "/css/";
$faviconsBasePath = "https://" . $_SERVER['SERVER_NAME'] . "/favicons/";
?>
<link rel="stylesheet" href="<?php echo $cssBasePath . 'python_bulma_styles.css'; ?>">
<link rel="stylesheet" href="<?php echo $cssBasePath . 'custom_styles.css'; ?>">
<link href="https://fonts.googleapis.com/css2?family=Leckerli+One&amp;display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/e2766d4f6f.js" crossorigin="anonymous"></script>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $faviconsBasePath . 'apple-touch-icon.png'; ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $faviconsBasePath . 'apple-touch-icon.png'; ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $faviconsBasePath . 'apple-touch-icon.png'; ?>">
<link rel="manifest" href="<?php echo $faviconsBasePath . 'site.webmanifest'; ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (window.location.hash) {
            const link = window.location.hash.substring(1);
            if (link.startsWith("windows")) {
                const win = document.getElementById("windows");
                win.style.display = "block"
                let windowstab = document.getElementById("windows-tab-desktop");
                if (windowstab != null && windowstab.offsetParent === null) {
                    windowstab = document.getElementById("windows-tab-mobile");
                }
                windowstab.classList.add("is-active");
                let macostab = document.getElementById("macos-tab-desktop");
                if (macostab != null && macostab.offsetParent === null) {
                    macostab = document.getElementById("macos-tab-mobile");
                }
                macostab.classList.remove("is-active");

                AOS.init({
                    once: true,
                    disable: "phone"
                });
            } else if (link.startsWith("macos")) {
                const mac = document.getElementById("macos");
                mac.style.display = "block"
                let macostab = document.getElementById("macos-tab-desktop");
                if (macostab != null && macostab.offsetParent === null) {
                    macostab = document.getElementById("macos-tab-mobile");
                }
                macostab.classList.add("is-active");
                let windowstab = document.getElementById("windows-tab-desktop");
                if (windowstab != null && windowstab.offsetParent === null) {
                    windowstab = document.getElementById("windows-tab-mobile");
                }
                windowstab.classList.remove("is-active");

                AOS.init({
                    once: true,
                    disable: "phone"
                });
            }
        }
    });

    document.addEventListener("DOMContentLoaded", () => {
        // Functions to open and close a modal
        function openModal(el) {
            el.classList.add("is-active");
        }

        function closeModal(el) {
            el.classList.remove("is-active");
        }

        function closeAllModals() {
            (document.querySelectorAll(".modal") || []).forEach((modal) => {
                closeModal(modal);
            });
        }

        // Add a click event on buttons to open a specific modal
        (document.querySelectorAll(".js-modal-trigger") || []).forEach((trigger) => {
            const modal = trigger.dataset.target;
            const target = document.getElementById(modal);
            trigger.addEventListener("click", () => {
                openModal(target);
            });
        });

        // Add a click event on various child elements to close the parent modal
        (document.querySelectorAll(".modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button") || []).forEach((close) => {
            const target = close.closest(".modal");

            close.addEventListener("click", () => {
                closeModal(target);
            });
        });

        // Add a keyboard event to close all modals
        document.addEventListener("keydown", (event) => {
            if (event.code === "Escape") { // Escape key
                closeAllModals();
            }
        });
    });

    function hide_windows() {
        const win = document.getElementById("windows");
        win.style.display = "none";
        const mac = document.getElementById("macos");
        mac.style.display = "block";
        let macostab = document.getElementById("macos-tab-desktop");
        if (macostab != null && macostab.offsetParent === null) {
            macostab = document.getElementById("macos-tab-mobile");
        }
        macostab.classList.add("is-active");
        let windowstab = document.getElementById("windows-tab-desktop");
        if (windowstab != null && windowstab.offsetParent === null) {
            windowstab = document.getElementById("windows-tab-mobile");
        }
        windowstab.classList.remove("is-active");

        AOS.init({
            once: true,
            disable: "phone"
        });

    }

    function hide_macos() {
        const win = document.getElementById("windows");
        win.style.display = "block";
        const mac = document.getElementById("macos");
        mac.style.display = "none";
        let windowstab = document.getElementById("windows-tab-desktop");
        if (windowstab != null && windowstab.offsetParent === null) {
            windowstab = document.getElementById("windows-tab-mobile");
        }
        windowstab.classList.add("is-active");
        let macostab = document.getElementById("macos-tab-desktop");
        if (macostab != null && macostab.offsetParent === null) {
            macostab = document.getElementById("macos-tab-mobile");
        }
        macostab.classList.remove("is-active");

        AOS.init({
            once: true,
            disable: "phone"
        });
    }
</script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
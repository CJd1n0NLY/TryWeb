<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EC-Clean Water System Corp.</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-poppins bg-gray-800 text-white scroll-smooth">

<header class="fixed top-0 left-0 w-full bg-gray-900 p-4 flex justify-between items-center z-50">
    <a href="#" class="text-white font-semibold text-2xl">
        <img src="{{ asset('img/icon.png') }}" alt="Icon" class="h-auto max-w-full">
    </a>
    <div class="hamburger text-white text-2xl cursor-pointer lg:hidden">&#9776;</div>
    <nav class="hidden lg:flex space-x-8" id="navbar">
        <a href="#home" class="nav-link text-white font-medium transition duration-300">Home</a>
        <a href="#about" class="nav-link text-white font-medium transition duration-300">About</a>
        <a href="#services" class="nav-link text-white font-medium transition duration-300">Services</a>
        <a href="#contact" class="nav-link text-white font-medium transition duration-300">Contact</a>
        <a href="#login" class="nav-link text-blue-400 font-semibold">Login</a>
    </nav>
</header>

<!-- Mobile Menu -->
<div class="lg:hidden hidden" id="mobile-menu">
    <nav class="flex flex-col bg-gray-900 p-4 space-y-2">
        <a href="#home" class="nav-link text-white font-medium transition duration-300">Home</a>
        <a href="#about" class="nav-link text-white font-medium transition duration-300">About</a>
        <a href="#services" class="nav-link text-white font-medium transition duration-300">Services</a>
        <a href="#contact" class="nav-link text-white font-medium transition duration-300">Contact</a>
        <a href="#login" class="text-blue-400 font-semibold">Login</a>
    </nav>
</div>

<section id="home" class="min-h-screen bg-gray-900 flex items-center justify-center">Home Section</section>
<section id="about" class="min-h-screen bg-gray-900 flex items-center justify-center">About Section</section>
<section id="services" class="min-h-screen bg-gray-800 flex items-center justify-center">Services Section</section>
<section id="contact" class="min-h-screen bg-gray-900 flex items-center justify-center">Contact Section</section>

<footer class="bg-gray-900 p-4">
    <div class="flex justify-center items-center text-center">
        <p class="mr-2">Copyright © 2024 OTOG Technologies.</p>
        <img src="{{ asset('img/OTOG.png') }}" alt="OTOG Technologies Logo" class="h-10">
    </div>
</footer>

{{-- Scroll Listener to, Para dun sa nagsstay yung highlight sa navbar name base sa section bawat scroll --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section');

    function highlightLink() {
        let scrollPosition = window.scrollY;

        sections.forEach(section => {
            const sectionTop = section.offsetTop - 50;
            const sectionHeight = section.clientHeight;

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                const currentId = section.getAttribute('id');
                links.forEach(link => {
                    link.classList.remove('text-blue-400');
                    if (link.getAttribute('href') === `#${currentId}`) {
                        link.classList.add('text-blue-400');
                    }
                });
            }
        });
    }

    window.addEventListener('scroll', highlightLink);
    
    // Initial highlight
    highlightLink();
});
</script>

</body>
</html>

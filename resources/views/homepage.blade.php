<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nature Lens</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/js/app.js'])
    @vite(['resources/css/gallery.css'])
</head>

<body class="bg-gray-900 text-white">
    <!-- Navbar -->
    <nav id="navbar" class="fixed w-full top-0 left-0 z-50 transition-all duration-500 bg-transparent py-4">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold">Nature Lens</a>
            <ul class="flex space-x-6">
                <li><a href="#" class="text-white hover:text-gray-400">Home</a></li>
                <li><a href="#gallery" class="text-white hover:text-gray-400">Gallery</a></li>
                <li><a href="#about" class="text-white hover:text-gray-400">About</a></li>
                <li><a href="#contact" class="text-white hover:text-gray-400">Contact</a></li>
            </ul>
        </div>
    </nav>

    <header id="home" class="relative w-full h-screen">
        <img src="{{ asset('images/pexels-lum3n-44775-167698.jpg') }}" alt="Nature"
            class="absolute w-full h-full object-cover brightness-75">
        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center opacity-0 translate-y-10 transition-all duration-700"
            id="homeContent">
            <h1 class="text-5xl font-bold">Nature Lens</h1>
            <p class="text-lg mt-4">Capturing the beauty of nature through the lens</p>
            <a href="javascript:void(0);" id="exploreGalleryBtn"
                class="mt-6 px-6 py-3 bg-green-500 rounded-lg text-white text-lg shadow-md hover:bg-green-600 transition">Explore
                Gallery</a>
        </div>
    </header>


    <div id="authModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-50 p-6">
        <div class="relative bg-white bg-opacity-50 text-gray-800 rounded-lg w-full max-w-md p-8 shadow-lg">
            <button id="closeAuthModal"
                class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-2xl transition">✕</button>
            <h2 class="text-2xl font-bold text-center mb-6">Welcome to Nature Lens</h2>
            <div class="flex justify-center mb-4">
                <button id="loginTab"
                    class="px-4 py-2 bg-green-500 text-white rounded-l-lg hover:bg-green-600 transition">Login</button>
                <button id="registerTab"
                    class="px-4 py-2 bg-gray-300 text-gray-800 rounded-r-lg hover:bg-gray-400 transition">Register</button>
            </div>

            <div id="loginForm">
                <form action="#" method="POST">
                    <input type="text" name="username" placeholder="Username"
                        class="w-full px-4 py-2 mb-4 border border-gray-300 rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-400">
                    <input type="password" name="password" placeholder="Password"
                        class="w-full px-4 py-2 mb-4 border border-gray-300 rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-400">
                    <button type="submit"
                        class="w-full py-3 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">Login</button>
                </form>
            </div>

            <!-- Register Form -->
            <div id="registerForm" class="hidden">
                <form action="#" method="POST">
                    <input type="text" name="username" placeholder="Username"
                        class="w-full px-4 py-2 mb-4 border border-gray-300 rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-400">
                    <input type="email" name="email" placeholder="Email"
                        class="w-full px-4 py-2 mb-4 border border-gray-300 rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-400">
                    <input type="password" name="password" placeholder="Password"
                        class="w-full px-4 py-2 mb-4 border border-gray-300 rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-400">
                    <button type="submit"
                        class="w-full py-3 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">Register</button>
                </form>
            </div>
        </div>
    </div>

    <section id="gallery" class="py-10 px-5">
        <h2 class="text-3xl font-semibold text-center mb-12 opacity-0 translate-y-10 transition-all duration-700"
            id="galleryTitle">Gallery</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 grid-areas-gallery">
            <img src="{{ asset('images/Gambar1.jpg') }}"
                class="w-full h-96 md:h-[500px] object-cover rounded-lg shadow-lg opacity-0 translate-y-10 transition-all duration-700 area-g1">
            <img src="{{ asset('images/Gambar2.jpg') }}"
                class="w-full h-64 object-cover rounded-lg shadow-lg opacity-0 translate-y-10 transition-all duration-700 area-g2 self-center">
            <img src="{{ asset('images/Gambar3.jpg') }}"
                class="w-full h-96 md:h-[500px] object-cover rounded-lg shadow-lg opacity-0 translate-y-10 transition-all duration-700 area-g3">
            <img src="{{ asset('images/Gambar4.jpg') }}"
                class="w-full h-64 object-cover rounded-lg shadow-lg opacity-0 translate-y-10 transition-all duration-700 area-g4 self-center">
        </div>
    </section>

    <section id="about" class="py-10 px-5 bg-gray-800 opacity-0 translate-x-10 transition-all duration-700">
        <h2 class="text-3xl font-semibold text-center mb-6">About Nature Lens</h2>
        <p class="text-lg text-center text-gray-300">At Nature Lens, we believe that photography is more than just
            capturing moments; it is about preserving the essence of nature in its purest form. Through our lens, we
            invite you to explore the breathtaking beauty of the natural world that surrounds us. Each image tells a
            story of wonder, peace, and the untamed wild.</p>
        <div class="text-center mt-6">
            <p class="italic text-gray-400">"Photography is the art of making memories tangible." – Anonymous</p>
        </div>
    </section>

    <div id="imageModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-80 p-6">
        <div class="relative max-w-3xl w-full">
            <button id="closeModal"
                class="absolute -top-6 right-0 bg-gray-800 bg-opacity-75 rounded-full p-3 text-white text-lg hover:bg-gray-700 transition duration-300">✕</button>
            <img id="modalImage" class="w-full max-h-[80vh] object-contain rounded-lg shadow-lg" alt="Selected Image">
            <div class="text-center mt-4">
                <h2 id="modalTitle" class="text-xl font-semibold"></h2>
                <p id="modalDate" class="text-sm text-gray-300"></p>
                <p id="modalLocation" class="text-sm text-gray-300"></p>
            </div>
        </div>
    </div>

    <footer class="text-center py-6 bg-gray-800 mt-12">
        <p>&copy; 2025 Nature Lens. All Rights Reserved.</p>
        <p><a href="mailto:info@naturelens.com" class="text-green-500">Contact Us</a></p>
    </footer>

    <script src="{{ asset('js/gallery.js') }}"></script>
</body>

</html>

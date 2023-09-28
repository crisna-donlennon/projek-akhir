<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">
    <header class="bg-gray-800 text-white p-4">
        <nav>
            <ul class="text-center">
                <li class="inline-block mr-4"><a href="#about">About Us</a></li>
                <li class="inline-block mr-4"><a href="#services">Services</a></li>
                <li class="inline-block"><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="hero" class="bg-white p-8">
        <h1 class="text-3xl font-semibold">Welcome to Your Website</h1>
        <p class="mt-2">Your catchphrase or description goes here.</p>
        <a href="#contact" class="mt-4 px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700 inline-block">Contact Us</a>
    </section>

    <section id="about" class="bg-white p-8">
        <h2 class="text-2xl font-semibold">About Us</h2>
        <p class="mt-2">Write a brief introduction about your company or project here.</p>
    </section>

    <section id="services" class="bg-white p-8">
        <h2 class="text-2xl font-semibold">Our Services</h2>
        <ul class="mt-2 list-disc list-inside">
            <li>Service 1</li>
            <li>Service 2</li>
            <li>Service 3</li>
        </ul>
    </section>

    <section id="contact" class="bg-white p-8">
        <h2 class="text-2xl font-semibold">Contact Us</h2>
        <p class="mt-2">Fill out the form below to get in touch:</p>
        <form class="mt-4">
            <label for="name" class="block">Name:</label>
            <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded p-2 mb-4">
            
            <label for="email" class="block">Email:</label>
            <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded p-2 mb-4">

            <label for="message" class="block">Message:</label>
            <textarea id="message" name="message" rows="4" required class="w-full border border-gray-300 rounded p-2 mb-4"></textarea>

            <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700">Submit</button>
        </form>
    </section>

    <footer class="bg-gray-800 text-white text-center py-4">
        <p>&copy; 2023 Your Company Name</p>
    </footer>
</body>
</html>

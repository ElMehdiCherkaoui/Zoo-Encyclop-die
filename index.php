<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Kids Learning</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans">

    <header class="bg-teal-600 text-white p-6 shadow-lg">
        <h1 class="text-4xl font-bold text-center">Zoo Kids Learning</h1>
        <p class="text-center mt-1 text-teal-100">Fun and interactive way for kids to learn about animals!</p>
    </header>

    <nav class="bg-teal-100 p-4 flex justify-center gap-6 shadow-inner">
        <a href="/youcode/Zoo-Encyclop-die/index.php"
            class="text-teal-800 font-semibold hover:text-teal-600 transition">Home</a>
        <a href="/youcode/Zoo-Encyclop-die/animals/animal.php"
            class="text-teal-800 font-semibold hover:text-teal-600 transition">Animals</a>
        <a href="/youcode/Zoo-Encyclop-die/Habitats/habitats.php"
            class="text-teal-800 font-semibold hover:text-teal-600 transition">Habitats</a>
        <a href="/youcode/Zoo-Encyclop-die/stats.php"
            class="text-teal-800 font-semibold hover:text-teal-600 transition">Stats</a>
    </nav>

    <main class="max-w-6xl mx-auto p-8">
        <section class="text-center mb-10">
            <h2 class="text-3xl font-bold mb-3 text-teal-700">Explore the Zoo!</h2>
            <p class="text-gray-700 text-lg">Discover different animals and their habitats in a fun and interactive way.
            </p>
        </section>

        <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition p-4">
                <img src="img/savane.jpg" alt="Savane" class="w-full h-40 object-cover rounded-lg mb-3">
                <h3 class="text-xl font-semibold text-teal-700 mb-1">Savane</h3>
                <p class="text-gray-600 text-sm">Wide warm area with lots of grass and few trees.</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition p-4">
                <img src="img/jungle.jpg" alt="Jungle" class="w-full h-40 object-cover rounded-lg mb-3">
                <h3 class="text-xl font-semibold text-teal-700 mb-1">Jungle</h3>
                <p class="text-gray-600 text-sm">Dense, humid forest full of plants.</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition p-4">
                <img src="img/desert.jpg" alt="Desert" class="w-full h-40 object-cover rounded-lg mb-3">
                <h3 class="text-xl font-semibold text-teal-700 mb-1">Désert</h3>
                <p class="text-gray-600 text-sm">Very dry place with little vegetation.</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition p-4">
                <img src="img/ocean.jpg" alt="Océan" class="w-full h-40 object-cover rounded-lg mb-3">
                <h3 class="text-xl font-semibold text-teal-700 mb-1">Océan</h3>
                <p class="text-gray-600 text-sm">Large salty water area with marine life.</p>
            </div>
        </section>
    </main>

    <footer class="bg-teal-600 text-white text-center p-6 mt-10 shadow-inner">
        <p>&copy; 2025 Zoo Kids Learning. All rights reserved.</p>
    </footer>


</body>

</html>
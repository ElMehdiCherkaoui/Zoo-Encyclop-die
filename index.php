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

        <section class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-3 text-teal-700">Welcome to the Zoo Adventure!</h2>
            <p class="text-gray-700 text-lg">
                Learn, play, and explore the amazing world of animals through fun interactive sections!
            </p>
        </section>

        <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

            <div
                class="bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-1 transition p-6 text-center">
                <img src="img/lion.jpg" alt="Animals" class="w-24 h-24 mx-auto mb-4">
                <h3 class="text-xl font-semibold text-teal-700 mb-1">Meet the Animals</h3>
                <p class="text-gray-600 text-sm">
                    Discover fun facts and stories about your favorite animals!
                </p>
            </div>

            <div
                class="bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-1 transition p-6 text-center">
                <img src="https://play-lh.googleusercontent.com/D2s4-8A93I0pe9pudzEWGvGvKnG4H2IQxKJU4IzFv9SSXy6yFyj7t3V8v0w8u_OXQg=w480-h960-rw"
                    alt="Games" class="w-24 h-24 mx-auto mb-4">
                <h3 class="text-xl font-semibold text-teal-700 mb-1">Play Games</h3>
                <p class="text-gray-600 text-sm">
                    Test your memory and animal knowledge with cool mini-games.
                </p>
            </div>

            <div
                class="bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-1 transition p-6 text-center">
                <img src="https://i0.wp.com/frostingandglue.com/wp-content/uploads/2024/03/Facts-about-Animals.jpg?resize=1536%2C1024&ssl=1"
                    alt="Fun Facts" class="w-24 h-24 mx-auto mb-4">
                <h3 class="text-xl font-semibold text-teal-700 mb-1">Fun Facts</h3>
                <p class="text-gray-600 text-sm">
                    Learn amazing facts that will surprise you about nature!
                </p>
            </div>
            <div
                class="bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-1 transition p-6 text-center">
                <img src="img/zoo.jpg" alt="Explore" class="w-24 h-24 mx-auto mb-4">
                <h3 class="text-xl font-semibold text-teal-700 mb-1">Explore the Zoo</h3>
                <p class="text-gray-600 text-sm">
                    Travel through jungle, savanna, desert and ocean zones!
                </p>
            </div>

        </section>
    </main>


    <footer class="bg-teal-600 text-white text-center p-6 mt-10 shadow-inner">
        <p>&copy; 2025 Zoo Kids Learning. All rights reserved.</p>
    </footer>


</body>

</html>
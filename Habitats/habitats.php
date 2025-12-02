<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Habitats</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans">

    <header class="bg-teal-600 text-white p-6 shadow-lg">
        <h1 class="text-4xl font-bold text-center">Zoo Habitats</h1>
        <p class="text-center mt-1 text-teal-100">Discover the habitats of our animals!</p>
    </header>

    <nav class="bg-teal-100 p-4 flex justify-center gap-6 shadow-inner">
        <a href="index.html" class="text-teal-800 font-semibold hover:text-teal-600 transition">Home</a>
        <a href="/youcode/Zoo-Encyclop-die/animals/animal.php"
            class="text-teal-800 font-semibold hover:text-teal-600 transition">Animals</a>
        <a href="/youcode/Zoo-Encyclop-die//Habitats/habitats.php"
            class="text-teal-800 font-semibold hover:text-teal-600 transition">Habitats</a>
        <a href="stats.php" class="text-teal-800 font-semibold hover:text-teal-600 transition">Stats</a>
    </nav>

    <main class="max-w-6xl mx-auto p-8">
        <section class="text-center mb-10">
            <h2 class="text-3xl font-bold mb-3 text-teal-700">Habitats List</h2>
            <p class="text-gray-700 text-lg">Explore the different habitats and see which animals live there.</p>
        </section>

        <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" id="habitats-grid">
            <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition p-4">
                <img src="../img/savane.jpg" alt="Habitat Name" class="w-full h-40 object-cover rounded-lg mb-3">
                <h3 class="text-xl font-semibold text-teal-700 mb-1">savane</h3>
                <p class="text-gray-600 text-sm">Description of the habitat goes here.</p>
                <div class="flex justify-between mt-2">
                    <button class="bg-teal-600 text-white px-3 py-1 rounded hover:bg-teal-500">Edit</button>
                    <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-500">Delete</button>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-teal-600 text-white text-center p-6 mt-10 shadow-inner">
        <p>&copy; 2025 Zoo Kids Learning. All rights reserved.</p>
    </footer>

</body>

</html>
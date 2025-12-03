<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zoo Animals</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-50 font-sans">

        <header class="bg-teal-600 text-white p-6 shadow-lg">
            <h1 class="text-4xl font-bold text-center">Zoo Animals</h1>
            <p class="text-center mt-1 text-teal-100">Learn about animals in different habitats!</p>
        </header>

        <nav class="bg-teal-100 p-4 flex justify-center gap-6 shadow-inner">
            <a href="/youcode/Zoo-Encyclop-die/index.php"
                class="text-teal-800 font-semibold hover:text-teal-600 transition">Home</a>
            <a href="/youcode/Zoo-Encyclop-die/animals/animal.php"
                class="text-teal-800 font-semibold hover:text-teal-600 transition">Animals</a>
            <a href="/youcode/Zoo-Encyclop-die//Habitats/habitats.php"
                class="text-teal-800 font-semibold hover:text-teal-600 transition">Habitats</a>
            <a href="/youcode/Zoo-Encyclop-die/stats.php"
                class="text-teal-800 font-semibold hover:text-teal-600 transition">Stats</a>
        </nav>

        <div id="addModal" class="hidden fixed inset-0 bg-black bg-opacity-40 flex justify-center items-center z-50">
            <div class="bg-white w-96 p-6 rounded-xl shadow-xl">
                <h2 class="text-2xl font-bold text-teal-700 mb-4">Add New Animal</h2>
                <label class="block mb-2 font-semibold">Animal Name</label>
                <input type="text" id="animalName" class="w-full p-2 border rounded-lg mb-4"
                    placeholder="Lion, Elephant...">
                <label class="block mb-2 font-semibold">Food Type</label>
                <select id="foodType" class="w-full p-2 border rounded-lg mb-4">
                    <option value="">Choose type</option>
                    <option value="Carnivore">Carnivore</option>
                    <option value="Herbivore">Herbivore</option>
                    <option value="Omnivore">Omnivore</option>
                </select>
                <label class="block mb-2 font-semibold">Habitat</label>
                <select id="habitatSelect" class="w-full p-2 border rounded-lg mb-4">
                    <option value="">Loading habitats...</option>
                </select>
                <label class="block mb-2 font-semibold">Image URL</label>
                <input type="text" id="imageUrl" class="w-full p-2 border rounded-lg mb-4"
                    placeholder="https://example.com/lion.jpg">
                <div class="flex justify-end gap-3 mt-4">
                    <button onclick="closeModal()" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">
                        Cancel
                    </button>
                    <button id="saveAnimalBtn" class="px-4 py-2 bg-teal-600 text-white rounded hover:bg-teal-500">
                        Save
                    </button>
                </div>
            </div>

        </div>

        <main class="max-w-6xl mx-auto p-8">

            <section class="text-center mb-10">
                <h2 class="text-3xl font-bold mb-3 text-teal-700">Animals List</h2>
                <p class="text-gray-700 text-lg">Explore animals, their food type, and habitat.</p>
            </section>
            <button onclick="openModal()"
                class="block mx-auto mb-6 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700">
                Add Animal
            </button>

            <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" id="animal-container">
                <div class="animal-card bg-white rounded-xl shadow-lg hover:shadow-2xl transition p-4">
                    <img src="../img/lion.jpg" alt="Lion" class="w-full h-40 object-cover rounded-lg mb-3">
                    <h3 class="text-xl font-semibold text-teal-700 mb-1">Lion</h3>
                    <p class="text-gray-600 text-sm">Type: Food Type</p>
                    <p class="text-gray-600 text-sm">Habitat: Habitat Name</p>
                    <div class="flex justify-between mt-2">
                        <button class="EditBtn bg-teal-600 text-white px-3 py-1 rounded hover:bg-teal-500">Edit</button>
                        <button
                            class="deleteBtn bg-red-600 text-white px-3 py-1 rounded hover:bg-red-500">Delete</button>
                    </div>
                </div>

            </section>


        </main>


        <footer class="bg-teal-600 text-white text-center p-6 mt-10 shadow-inner">
            <p>&copy; 2025 Zoo Kids Learning. All rights reserved.</p>
        </footer>
        <script src="../js/animal.js"></script>
    </body>


    </html>
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



        <div id="editModal" class="hidden fixed inset-0 bg-black bg-opacity-40 flex justify-center items-center z-50">
            <div class="bg-white w-96 p-6 rounded-xl shadow-xl">
                <h2 class="text-2xl font-bold text-teal-700 mb-4">Edit Animal</h2>

                <label class="block mb-2 font-semibold">Animal Name</label>
                <input type="text" id="editAnimalName" class="w-full p-2 border rounded-lg mb-4"
                    placeholder="Lion, Elephant...">

                <label class="block mb-2 font-semibold">Food Type</label>
                <select id="editFoodType" class="w-full p-2 border rounded-lg mb-4">
                    <option value="">Choose type</option>
                    <option value="Carnivore">Carnivore</option>
                    <option value="Herbivore">Herbivore</option>
                    <option value="Omnivore">Omnivore</option>
                </select>

                <label class="block mb-2 font-semibold">Habitat</label>
                <select id="editHabitatSelect" class="w-full p-2 border rounded-lg mb-4">
                    <option value="">Loading habitats...</option>
                </select>

                <label class="block mb-2 font-semibold">Image URL</label>
                <input type="text" id="editImageUrl" class="w-full p-2 border rounded-lg mb-4"
                    placeholder="https://example.com/lion.jpg">

                <div class="flex justify-end gap-3 mt-4">
                    <button onclick="closeEditModal()" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">
                        Cancel
                    </button>

                    <button id="updateAnimalBtn" class="px-4 py-2 bg-teal-600 text-white rounded hover:bg-teal-500">
                        Update
                    </button>


                </div>
            </div>
        </div>

        <input type="hidden" id="editAnimalId">
        <main class="max-w-6xl mx-auto p-8">

            <section class="text-center mb-10">
                <h2 class="text-3xl font-bold mb-3 text-teal-700">Animals List</h2>
                <p class="text-gray-700 text-lg">Explore animals, their food type, and habitat.</p>
            </section>

            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mb-6">

                <button onclick="openModal()"
                    class="bg-teal-600 text-white px-5 py-2 rounded-lg shadow hover:bg-teal-700 transition">
                    Add Animal
                </button>

                <select id="filterFood"
                    class="p-2 border rounded-lg shadow-sm w-full sm:w-48 focus:ring-2 focus:ring-teal-400 outline-none">
                    <option value="All">All Food Types</option>
                    <option value="Carnivore">Carnivore</option>
                    <option value="Herbivore">Herbivore</option>
                    <option value="Omnivore">Omnivore</option>
                </select>


                <select id="filterHabitat"
                    class="p-2 border rounded-lg shadow-sm w-full sm:w-48 focus:ring-2 focus:ring-teal-400 outline-none">
                    <option value="All">All Habitats</option>
                    <option value="Savane">Savane</option>
                    <option value="Jungle">Jungle</option>
                    <option value="Désert">Desert</option>
                    <option value="Océan">Océan</option>
                </select>

            </div>

            <section id="animal-container"
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4">
                <p class="col-span-full text-center text-gray-500 text-lg">
                    Il n’y a aucun animal pour le moment.
                </p>
            </section>

        </main>



        <footer class="bg-teal-600 text-white text-center p-6 mt-10 shadow-inner">
            <p>&copy; 2025 Zoo Kids Learning. All rights reserved.</p>
        </footer>
        <script src="../js/animal.js"></script>
    </body>


    </html>
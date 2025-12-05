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
        <a href="/youcode/Zoo-Encyclop-die/index.php"
            class="text-teal-800 font-semibold hover:text-teal-600 transition">Home</a>
        <a href="/youcode/Zoo-Encyclop-die/animals/animal.php"
            class="text-teal-800 font-semibold hover:text-teal-600 transition">Animals</a>
        <a href="/youcode/Zoo-Encyclop-die//Habitats/habitats.php"
            class="text-teal-800 font-semibold hover:text-teal-600 transition">Habitats</a>
        <a href="/youcode/Zoo-Encyclop-die/stats.php"
            class="text-teal-800 font-semibold hover:text-teal-600 transition">Stats</a>
    </nav>

    <main class="max-w-6xl mx-auto p-8">
        <section class="text-center mb-10">
            <h2 class="text-3xl font-bold mb-3 text-teal-700">Habitats List</h2>
            <p class="text-gray-700 text-lg">Explore the different habitats and see which animals live there.</p>
        </section>
        <button onclick="openModal()"
            class="block mx-auto mb-6 bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700">
            Add Habitat
        </button>

        <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" id="habitats-container">
            <p class="col-span-full text-center text-gray-500 text-lg">
                Il n’y a aucun habitat pour le moment.
            </p>
        </section>

    </main>

    <footer class="bg-teal-600 text-white text-center p-6 mt-10 shadow-inner">
        <p>&copy; 2025 Zoo Kids Learning. All rights reserved.</p>
    </footer>


    <div id="addModal" class="hidden fixed inset-0 bg-black bg-opacity-40 flex justify-center items-center z-50">
        <div class="bg-white w-96 p-6 rounded-xl shadow-xl">
            <h2 class="text-2xl font-bold text-teal-700 mb-4">Add New Habitat</h2>
            <label class="block mb-2 font-semibold"> Name</label>
            <input type="text" id="habitatName" class="w-full p-2 border rounded-lg mb-4"
                placeholder="Savane, Ocean...">
            <label class="block mb-2 font-semibold">Description</label>
            <textarea id="habitatDescription" maxlength="250"
                class="w-full p-2 border rounded-lg mb-4 min-h-[12em] max-h-[16em]"
                placeholder="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, sapiente! Sequi et, commodi explicabo saepe voluptate fugit assumenda nulla recusandae quos facere ea unde nemo quam. Pariatur veritatis quo"></textarea>
            <label class="block mb-2 font-semibold">Image URL</label>
            <input type="text" id="imageUrl" class="w-full p-2 border rounded-lg mb-4"
                placeholder="https://example.com/Savane.jpg">
            <div class="flex justify-end gap-3 mt-4">
                <button onclick="closeModal()" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">
                    Cancel
                </button>
                <button id="saveHabitatBtn" class="px-4 py-2 bg-teal-600 text-white rounded hover:bg-teal-500">
                    Save
                </button>
            </div>
        </div>

    </div>




    <input type="hidden" id="editHabitatId">
    <div id="editModal" class="hidden fixed inset-0 bg-black bg-opacity-40 flex justify-center items-center z-50">
        <div class="bg-white w-96 p-6 rounded-xl shadow-xl">
            <h2 class="text-2xl font-bold text-teal-700 mb-4">Edit Habitats</h2>

            <label class="block mb-2 font-semibold">Habitats Name</label>
            <input type="text" id="editHabitatName" class="w-full p-2 border rounded-lg mb-4"
                placeholder="Savane, Ocean...">

            <label class="block mb-2 font-semibold">Description</label>
            <textarea id="edithabitatDescription" maxlength="250"
                class="w-full p-2 border rounded-lg mb-4 min-h-[12em] max-h-[16em]"
                placeholder="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, sapiente! Sequi et, commodi explicabo saepe voluptate fugit assumenda nulla recusandae quos facere ea unde nemo quam. Pariatur veritatis quo"></textarea>

            <label class="block mb-2 font-semibold">Image URL</label>
            <input type="text" id="editImageUrl" class="w-full p-2 border rounded-lg mb-4"
                placeholder="https://example.com/savane.jpg">

            <div class="flex justify-end gap-3 mt-4">
                <button onclick="closeEditModal()" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">
                    Cancel
                </button>

                <button id="updateHabitatsBtn" class="px-4 py-2 bg-teal-600 text-white rounded hover:bg-teal-500">
                    Update
                </button>


            </div>
        </div>
    </div>

</body>
<script src="../js/habitats.js"></script>

</html>
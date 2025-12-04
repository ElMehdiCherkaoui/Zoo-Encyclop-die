<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Stats</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-50 font-sans">

    <header class="bg-teal-600 text-white p-6 shadow-lg">
        <h1 class="text-4xl font-bold text-center">Zoo Statistics</h1>
        <p class="text-center mt-1 text-teal-100">Visualize animal data in a simple way!</p>
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
            <h2 class="text-3xl font-bold mb-3 text-teal-700">Animals Statistics</h2>
            <p class="text-gray-700 text-lg">See an overview of animals per habitat and type.</p>
        </section>

        <section class="bg-white rounded-xl shadow-lg p-6">
            <canvas id="animalChart" class="w-full h-64"></canvas>
        </section>
    </main>

    <footer class="bg-teal-600 text-white text-center p-6 mt-10 shadow-inner">
        <p>&copy; 2025 Zoo Kids Learning. All rights reserved.</p>
    </footer>
    <script>
    const ctx = document.getElementById('animalChart').getContext('2d');
    const animalChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Savane', 'Jungle', 'Désert', 'Océan'],
            datasets: [{
                label: 'Number of Animals',
                data: [5, 20, 3, 4],
                backgroundColor: ['#14b8a6', '#0f766e', '#5eead4', '#22d3ee']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top'
                },
                title: {
                    display: true,
                    text: 'Animals per Habitat'
                }
            }
        }
    });
    </script>
</body>

</html>
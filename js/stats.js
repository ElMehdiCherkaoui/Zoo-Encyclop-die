fetch("/youcode/Zoo-Encyclop-die/api/animalNumber.php")
    .then(res => res.json())
    .then(data => {
        const labels = data.map(item => item.NomHab);

        const counts = data.map(item => Number(item.animal_count));

        const colors = counts.map(() => {
            const r = Math.floor(Math.random() * 256);

            const g = Math.floor(Math.random() * 256);

            const b = Math.floor(Math.random() * 256);

            return `rgb(${r}, ${g}, ${b})`;
        });

        const ctx = document.getElementById('animalChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Number of Animals',
                    data: counts,
                    backgroundColor: colors
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'top' },
                    title: { display: true, text: 'Animals per Habitat' }
                }
            }
        });

    })
    .catch(err => console.error("Fetch error:", err));

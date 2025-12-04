function displayAnimals(animals) {
    const container = document.getElementById("animal-container");
    container.innerHTML = "";

    animals.forEach(a => {
        const card = `
            <div class="animal-card bg-white rounded-xl shadow-lg hover:shadow-2xl transition p-4" >
                <img src="${a.Image}" alt="${a.Nom}" class="w-full h-40 object-cover rounded-lg mb-3">
                <h3 class="text-xl font-semibold text-teal-700 mb-1">${a.Nom}</h3>
                <p class="text-gray-600 text-sm">Type: ${a.Type_alimentaire}</p>
                <p class="text-gray-600 text-sm">Habitat: ${a.NomHab}</p>

                <div class="flex justify-between mt-2">
                    <button class="EditBtn bg-teal-600 text-white px-3 py-1 rounded hover:bg-teal-500" data-id="${a.IDAnim}">Edit</button>
                    <button class="deleteBtn bg-red-600 text-white px-3 py-1 rounded hover:bg-red-500">Delete</button>
                </div>
            </div>
        `;
        container.innerHTML += card;
    });
}

fetch("/youcode/Zoo-Encyclop-die/animals/list.php")
    .then(res => res.json())
    .then(data => {
        if (data.length > 0) {
            console.log(data);
            displayAnimals(data);
        }
    })
    .catch(err => console.error("Fetch error:", err));

fetch("/youcode/Zoo-Encyclop-die/Habitats/list.php")
    .then(res => res.json())
    .then(data => {
        let select = document.getElementById("habitatSelect");
        let selectedit = document.getElementById("editHabitatSelect")
        select.innerHTML = "";
        selectedit.innerHTML = "";
        data.forEach(h => {
            let option = document.createElement("option");
            option.value = h.IdHab;
            option.textContent = h.NomHab;
            select.appendChild(option);
        });
        data.forEach(h => {
            let option = document.createElement("option");
            option.value = h.IdHab;
            option.textContent = h.NomHab;
            selectedit.appendChild(option);
        });
    })
    .catch(err => console.log("Fetch habitat error:", err));

const container = document.getElementById("animal-container");

container.addEventListener("click", (e) => {
    if (e.target.classList.contains("deleteBtn")) {
        if (!confirm("Are you sure you want to delete this animal?")) return;

        const card = e.target.closest(".animal-card");

        if (!card) return;

        const animalName = card.querySelector("h3").textContent;

        card.remove();

        const formData = new FormData();

        formData.append("Nom", animalName);

        fetch("/youcode/Zoo-Encyclop-die/animals/delete.php", {
            method: "POST",
            body: formData
        })
            .then(response => response.json())
            .then(result => {
                if (result.success) {
                    console.log(`${animalName} deleted from database!`);
                } else {
                    console.log(`Error deleting ${animalName}:`, result.error);
                }
            })
            .catch(err => console.log("Fetch error:", err));
    }
});

function openModal() {
    document.getElementById("addModal").classList.remove("hidden");
}

function closeModal() {
    document.getElementById("addModal").classList.add("hidden");
}

document.getElementById("saveAnimalBtn").addEventListener("click", (e) => {
    const name = document.getElementById("animalName").value;

    const type = document.getElementById("foodType").value;

    const habitat = document.getElementById("habitatSelect").value;

    const image = document.getElementById("imageUrl").value;

    let formData = new FormData();

    formData.append("Nom", name);

    formData.append("Type_alimentaire", type);

    formData.append("Habitat_ID", habitat);

    formData.append("Image", image);

    fetch("/youcode/Zoo-Encyclop-die/animals/add.php", {
        method: "POST",
        body: formData,
    })
        .then(response => response.json())
        .then(result => {
            if (result.success) {
                alert("Animal added!");
                location.reload();
            } else {
                alert("Error: could not save animal.");
            }
        })
        .catch(err => console.log("Fetch Error:", err));

    document.getElementById("addModal").classList.add("hidden");
});

container.addEventListener("click", (e) => {
    if (e.target.classList.contains("EditBtn")) {

        document.getElementById("editModal").classList.remove("hidden");

        let id = e.target.dataset.id;

        document.getElementById("editAnimalId").value = id;
    }
});

document.getElementById("updateAnimalBtn").addEventListener("click", async () => {
    let id = document.getElementById("editAnimalId").value;

    let formData = new FormData();

    formData.append("Id", id);

    formData.append("Nom", document.getElementById("editAnimalName").value);

    formData.append("Type_alimentaire", document.getElementById("editFoodType").value);

    formData.append("Habitat_ID", document.getElementById("editHabitatSelect").value);

    formData.append("Image", document.getElementById("editImageUrl").value);

    fetch("/youcode/Zoo-Encyclop-die/animals/edit.php", {
        method: "POST",
        body: formData
    })
        .then(response => response.json())
        .then(result => {
            if (result.success) {
                alert("Animal updated!");
                location.reload();
            } else {
                alert("Error: could not update animal.");
            }
        });
});

function closeEditModal() {
    document.getElementById("editModal").classList.add("hidden");
}
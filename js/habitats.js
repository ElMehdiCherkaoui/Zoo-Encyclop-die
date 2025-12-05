
const saveHabitatBtn = document.getElementById("saveHabitatBtn");
const container = document.getElementById("habitats-container");

function displayHabitats(animals) {

    container.innerHTML = "";

    animals.forEach(a => {
        const card = `
                <div class="habitatCard bg-white rounded-xl shadow-lg hover:shadow-2xl transition p-4">
               <img src="${a.ImageHab}" alt="Habitat Name" class="w-full h-40 object-cover rounded-lg mb-3">
                <h3 class="text-xl font-semibold text-teal-700 mb-1">${a.NomHab}</h3>
                <p class="text-gray-600 text-sm">${a.Description_Hab}</p>
                <div class="flex justify-between mt-2">
                    <button class="EditBtn bg-teal-600 text-white px-3 py-1 rounded hover:bg-teal-500" data-id="${a.IdHab}">Edit</button>
                    <button class="deleteBtn bg-red-600 text-white px-3 py-1 rounded hover:bg-red-500">Delete</button>
                </div>
            </div>
        `;
        container.innerHTML += card;
    });
}

fetch("/youcode/Zoo-Encyclop-die/Habitats/habitatsList.php")
    .then(res => res.json())
    .then(data => {
        if (data.length > 0) {
            console.log(data);
            displayHabitats(data);
        }
    })
    .catch(err => console.error("Fetch error:", err));

function openModal() {
    document.getElementById("addModal").classList.remove("hidden");
}

function closeModal() {
    document.getElementById("addModal").classList.add("hidden");
}


saveHabitatBtn.addEventListener("click", () => {
    const habitatName = document.getElementById("habitatName").value;

    const habitatDescription = document.getElementById("habitatDescription").value;

    const imageUrl = document.getElementById("imageUrl").value;


    let habitatNameR = /^[A-Za-z]+$/;

    let urlR = /^https?:\/\/.+/;

    if (!habitatNameR.test(habitatName) || habitatName === "") {
        alert("Invalid name (no spaces allowed)");
        return;
    }

    else if (!urlR.test(imageUrl) || imageUrl === "") {
        alert("Invalid URL");
        return;
    }

    else if (habitatDescription == "") {
        alert("Fill the description");
        return;
    }

    else {
        let formData = new FormData();

        formData.append("NomHab", habitatName);

        formData.append("Description_Hab", habitatDescription);

        formData.append("Image", imageUrl);

        fetch("/youcode/Zoo-Encyclop-die/habitats/habitatsAdd.php", {
            method: "POST",
            body: formData,
        })
            .then(response => response.json())
            .then(result => {
                if (result.success) {
                    alert("Habitat added!");
                    location.reload();
                } else {
                    alert("Error: could not save animal.");
                }
            })
            .catch(err => console.log("Fetch Error:", err));

        document.getElementById("addModal").classList.add("hidden");
    }
});

container.addEventListener("click", (e) => {
    if (e.target.classList.contains("deleteBtn")) {
        if (!confirm("Are you sure you want to delete this animal?")) return;

        const card = e.target.closest(".habitatCard");

        if (!card) return;

        const formData = new FormData();

        formData.append("NomHab", habitatName);

        fetch("/youcode/Zoo-Encyclop-die/Habitats/habitatsDelete.php", {
            method: "POST",
            body: formData
        })
            .then(response => response.json())
            .then(result => {
                if (result.success) {
                    console.log(`${habitatName} deleted from database!`);
                    const habitatName = card.querySelector("h3").textContent;

                    card.remove();
                } else {
                    alert(`Error deleting ${animalName}: ${result.error}`);

                }
            })
            .catch(err => alert(`Fetch error: ${err}`));
    }
});

container.addEventListener("click", (e) => {
    if (e.target.classList.contains("EditBtn")) {

        document.getElementById("editModal").classList.remove("hidden");

        let id = e.target.dataset.id;

        document.getElementById("editHabitatId").value = id;
    }
});

document.getElementById("updateHabitatsBtn").addEventListener("click", async () => {
    let id = document.getElementById("editHabitatId").value;

    const editHabitatName = document.getElementById("editHabitatName").value;

    const edithabitatDescription = document.getElementById("edithabitatDescription").value;

    const editImageUrl = document.getElementById("editImageUrl").value;

    let editHabitatNameR = /^[A-Za-z]+$/;

    let editUrlR = /^https?:\/\/.+/;

    if (!editHabitatNameR.test(editHabitatName) || editHabitatName === "") {
        alert("Invalid name (no spaces allowed)");
        return;
    }

    else if (!editUrlR.test(editImageUrl) || editImageUrl === "") {
        alert("Invalid URL");
        return;
    }

    else if (edithabitatDescription == "") {
        alert("Fill the description");
        return;
    }

    let formData = new FormData();

    formData.append("IdHab", id);

    formData.append("NomHab", editHabitatName);

    formData.append("Description_Hab", edithabitatDescription);

    formData.append("Image", editImageUrl);

    fetch("/youcode/Zoo-Encyclop-die/Habitats/habitatsEdit.php", {
        method: "POST",
        body: formData
    })
        .then(response => response.json())
        .then(result => {
            if (result.success) {
                alert("habitat updated!");
                location.reload();
            } else {
                alert("Error: could not update animal.");
            }
        });
});

function closeEditModal() {
    document.getElementById("editModal").classList.add("hidden");
}
function showDeletePopup(no, id) {
  const popup = document.getElementById("deletePopup");
  popup.style.display = "block";

  const popupMessage = document.getElementById("popupMessage");
  popupMessage.textContent = `Are you sure you want to delete From No-: ${no}?`;

  const confirmButton = document.getElementById("confirmDeleteBtn");
  const cancelButton = document.getElementById("cancelDeleteBtn");

  confirmButton.onclick = function () {
    deleteFrom(id);
  };
  cancelButton.onclick = function () {
    popup.style.display = "none";
  };
}

function itemOnClick(name, email, phone, message) {
  const popup = document.getElementById("itemPopup");
  popup.style.display = "flex";

  const itemName = document.getElementById("itemName");
  const itemEmail = document.getElementById("itemEmail");
  const itemPhone = document.getElementById("itemPhone");
  const itemMessage = document.getElementById("itemMessage");

  itemName.textContent = name;
  itemEmail.textContent = email;
  itemPhone.textContent = phone;
  itemMessage.textContent = message;

  const cancelButton = document.getElementById("cancelItemPopup");
  cancelButton.onclick = function () {
    popup.style.display = "none";
  };
}

function deleteFrom(id) {
  fetch("../backend/_deleteFrom", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ id: id }),
  })
    .then((response) => {
      if (!response.ok) {
        return response.json().then((data) => {
          throw new Error(data.message || "Network response was not ok");
        });
      }
      return response.json();
    })
    .then((data) => {
      if (data.success) {
        location.reload();
      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}

function showDeletePopup(username) {
  const popup = document.getElementById("deletePopup");
  popup.style.display = "block";

  const popupMessage = document.getElementById("popupMessage");
  popupMessage.textContent = `Are you sure you want to delete user: ${username}?`;

  const confirmButton = document.getElementById("confirmDeleteBtn");
  const cancelButton = document.getElementById("cancelDeleteBtn");

  confirmButton.onclick = function () {
    deleteUser(username);
  };
  cancelButton.onclick = function () {
    popup.style.display = "none";
  };
}

function showNewUserPopup() {
  const popup = document.getElementById("newUserPopup");
  popup.style.display = "flex";

  const cancelButton = document.getElementById("cancelUserBtn");
  cancelButton.onclick = function () {
    popup.style.display = "none";
  };
}

function deleteUser(username) {
  fetch("../backend/_deleteUser", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ username: username }),
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

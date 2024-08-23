<?php
$sql = "SELECT id, name, email, role, username FROM user WHERE role != 'hidden'";
$result = $conn->query($sql);
$users = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
} $conn->close(); ?>

<button id="addNewUserBtn" onClick="showNewUserPopup()">Add User</button>
<div class="page">
  <div id="deletePopup" class="deletePopup">
    <p id="popupMessage"></p>
    <div class="btn">
      <button id="cancelDeleteBtn" class="cancelDeleteBtn">Cancel</button>
      <button id="confirmDeleteBtn" class="confirmDeleteBtn">Delete</button>
    </div>
  </div>

  <div id="newUserPopup" class="deletePopup">
    <form action="" method="post">
      <div class="newUserBox">
        <label for="name">Name</label>
        <input type="text" name="name" value="" placeholder="enter name" required/>
      </div>
      <div class="newUserBox">
        <label for="username">Username</label>
        <input type="text" name="username" value="" placeholder="enter username" required/>
      </div>
      <div class="newUserBox">
        <label for="email">Email</label>
        <input type="email" name="email" value="" placeholder="enter email" required/>
      </div>
      <div class="newUserBox">
        <label for="password">Password</label>
        <input type="text" name="password" value="" placeholder="enter password" required/>
      </div>
      <div class="btn">
        <button id="cancelUserBtn" class="cancelDeleteBtn">Cancel</button>
        <button id="createUser" name="newUserBtn" class="confirmDeleteBtn">Create</button>
      </div>
    </form>
  </div>

  <table>
    <thead>
      <tr>
        <th>S. No.</th>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php $index = 1;?> <?php foreach ($users as $user): ?>
      <tr>
        <td><?= $index++;?></td>
        <td><?= $user['name'];?></td>
        <td>@<?= $user['username'];?></td>
        <td><?= $user['email'];?></td>
        <td>
          <i
            class="fas fa-trash delete-btn"
            onClick="showDeletePopup('<?php echo htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8'); ?>')"
          ></i>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

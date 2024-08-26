<?php
$sql = "SELECT * FROM contactFrom";
$result = $conn->query($sql);
$contacts = [];
if ($result->num_rows > 0) {
    while
    ($row = $result->fetch_assoc()) {
        $contacts[] = $row;
    }
}?>

<div class="page">
  <div id="deletePopup" class="deletePopup">
    <p id="popupMessage"></p>
    <div class="btn">
      <button id="cancelDeleteBtn" class="cancelDeleteBtn">Cancel</button>
      <button id="confirmDeleteBtn" class="confirmDeleteBtn">Delete</button>
    </div>
  </div>

  <div id="itemPopup" class="deletePopup">
    <div class="btn">
      <button id="cancelItemPopup" class="cancelDeleteBtn">Close</button>
    </div>
    <div class="itemPopupBox">
      <p>Name</p>
      <p id="itemName" class="itemInfo"></p>
    </div>
    <div class="itemPopupBox">
      <p>Email</p>
      <p id="itemEmail" class="itemInfo"></p>
    </div>
    <div class="itemPopupBox">
      <p>Phome</p>
      <p id="itemPhone" class="itemInfo"></p>
    </div>
    <div class="itemPopupBox">
      <p>Message</p>
      <p id="itemMessage" class="itemInfo message"></p>
    </div>
  </div>

  <table>
    <thead>
      <tr>
        <th>S. No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php $index = 1;?> <?php foreach ($contacts as $item): ?>

      <tr>
        <td
          onClick="itemOnClick('<?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?>', '<?php echo htmlspecialchars($item['email'], ENT_QUOTES, 'UTF-8'); ?>', '<?php echo htmlspecialchars($item['phone'], ENT_QUOTES, 'UTF-8'); ?>', '<?php echo htmlspecialchars($item['message'], ENT_QUOTES, 'UTF-8'); ?>')"
        >
          <?= $index++;?>
        </td>
        <td>
          <?= strlen($item['name']) > 7 ? htmlspecialchars(substr(
              $item['name'],
              0,
              7
          )) . '...' : htmlspecialchars($item['name']); ?>
        </td>
        <td
          onClick="itemOnClick('<?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?>', '<?php echo htmlspecialchars($item['email'], ENT_QUOTES, 'UTF-8'); ?>', '<?php echo htmlspecialchars($item['phone'], ENT_QUOTES, 'UTF-8'); ?>', '<?php echo htmlspecialchars($item['message'], ENT_QUOTES, 'UTF-8'); ?>')"
        >
          <?= $item['email'];?>
        </td>
        <td
          onClick="itemOnClick('<?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?>', '<?php echo htmlspecialchars($item['email'], ENT_QUOTES, 'UTF-8'); ?>', '<?php echo htmlspecialchars($item['phone'], ENT_QUOTES, 'UTF-8'); ?>', '<?php echo htmlspecialchars($item['message'], ENT_QUOTES, 'UTF-8'); ?>')"
        >
          <?= $item['phone'];?>
        </td>
        <td onClick="itemOnClick('<?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?>', '<?php echo htmlspecialchars($item['email'], ENT_QUOTES, 'UTF-8'); ?>', '<?php echo htmlspecialchars($item['phone'], ENT_QUOTES, 'UTF-8'); ?>', '<?php echo htmlspecialchars($item['message'], ENT_QUOTES, 'UTF-8'); ?>')">
          <?= strlen($item['message']) > 30 ?
                        htmlspecialchars(substr($item['message'], 0, 30)) . '...' :
                        htmlspecialchars($item['message']); ?>
        </td>
        <td>
          <i
            class="fas fa-trash delete-btn"
            onClick="showDeletePopup('<?php echo htmlspecialchars($index - 1, ENT_QUOTES, 'UTF-8'); ?>', '<?php echo htmlspecialchars($item['id'], ENT_QUOTES, 'UTF-8'); ?>')"
          ></i>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

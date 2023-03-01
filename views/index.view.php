<?php
require('partials/header.php');
require base_path('assets/testaments.php');
?>

<div class="book_grid_container">
  <div>
    <h2>Old Testament</h2>
    <div class="book_grid">
      <?php render_books($old_testament); ?>
    </div>
  </div>
  <div>
    <h2>New Testament</h2>
    <div class="book_grid">
      <?php render_books($new_testament); ?>
    </div>
  </div>
</div>

<?php require('partials/footer.php');

<?php
require('partials/header.php');
require base_path('assets/testaments.php');
?>

<div class="book_grid_container">
  <div>
    <h2>Old Testament</h2>
    <div class="book_grid">
      <?php render_books($old_testament, 'ot'); ?>
    </div>
  </div>
  <div>
    <h2>New Testament</h2>
    <div class="book_grid">
      <?php render_books($new_testament, 'nt'); ?>
    </div>
  </div>
</div>
<div class="bible_progress">
  <div class="progress ot_progress"></div>
  <div class="progress whole_progress"></div>
  <div class="progress nt_progress"></div>
</div>


<!-- TODO create 3 trackers. one for nt. one for ot. one for the whole bible -->

<?php require('partials/footer.php');

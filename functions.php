<?php
function base_path($path)
{
  return BASE_PATH . $path;
}

function render_books($testament)
{
  foreach ($testament as $book) {
    echo "<div class='book'>{$book['name']}</div>";
  };
}

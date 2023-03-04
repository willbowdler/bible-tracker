<?php
function base_path($path)
{
  return BASE_PATH . $path;
}

function render_books($testament, $testament_name)
{
  foreach ($testament as $book) {
    echo "<div class='book {$testament_name}'>{$book['name']}</div>";
  };
}

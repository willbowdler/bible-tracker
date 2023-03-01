<?php
$primary_color = '#ffe';
$secondary_color = '#e3e3e3';
$tertiary_color = '#db8f25'; ?>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

  html {
    background-color: <?= $primary_color ?>;
  }

  *,
  *::before,
  *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }

  .book_grid_container {
    display: flex;
    justify-content: space-around;
    gap: 1rem;
  }

  .book_grid {
    display: grid;
    grid: repeat(5, 6.5rem) / repeat(8, auto);
    gap: .5rem;
  }

  .book {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 5.5rem;
    width: 5.5rem;
    background: linear-gradient(to left top, <?= $tertiary_color ?> 40%, <?= $secondary_color ?>);
    border: 1.5px solid #8f8f8f;
    border-radius: 100px;
    font-size: 10px;
    text-align: center;

    cursor: pointer;
    position: relative;
  }
</style>
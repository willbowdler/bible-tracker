<?php
$primary_color = '#3f3b52';
$secondary_color = '#1994ff';
$tertiary_color = '#15158a'; ?>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

  body {
    background: linear-gradient(60deg, <?= $tertiary_color ?> 50%, <?= $secondary_color ?>);
    min-height: 100vh;
    color: white;
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
    margin-top: 1rem;
  }

  .book {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 5.5rem;
    width: 5.5rem;
    background-color: #0f0f61;
    border: 1.5px solid #eee;
    border-radius: 100px;
    color: #fff;
    font-size: 10px;
    text-align: center;

    cursor: pointer;
    position: relative;
    transition: all .3s ease;
  }

  .book_selected {
    background-color: #fff;
  }

  .bible_progress {
    display: flex;
    justify-content: space-around;
    align-items: center;
  }

  .progress {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    background: red;
    width: 15rem;
    height: 15rem;
    border-radius: 500px;

    transition: all .3s ease;
  }

  .ot_progress {
    background: conic-gradient(red 0deg, white 0deg);
  }

  .ot_progress::before {
    content: '';
    width: 13.5rem;
    height: 13.5rem;
    position: absolute;

    border-radius: 500px;
    background-color: blue;
  }

  .whole_progress {
    width: 20rem;
    height: 20rem;
    background: conic-gradient(red 0deg, white 0deg);
  }

  .whole_progress::before {
    content: '';
    width: 18.5rem;
    height: 18.5rem;
    position: absolute;

    border-radius: 500px;
    background-color: blue;
  }

  .nt_progress {
    background: conic-gradient(red 0deg, white 0deg);
  }

  .nt_progress::before {
    content: '';
    width: 13.5rem;
    height: 13.5rem;
    position: absolute;

    border-radius: 500px;
    background-color: blue;
  }
</style>
const progressNodes = {
    whole: document.querySelector('.whole_progess'),
    ot: document.querySelector('.ot_progress'),
    nt: document.querySelector('.nt_progress'),
  },
  books = document.querySelectorAll('.books'),
  totalBibleBooks = 66,
  totalOTBooks = 39,
  totalNTBooks = 27

const calculatePercentages = (selected) => {
  return {
    whole: selected.whole / totalBibleBooks,
    ot: selected.ot / totalOTBooks,
    nt: selected.nt / totalNTBooks,
  }
}
const covertPercentageToDegrees = (percentages) => {
  for (node in progressNodes) {
    const percent = percentages[node]
    const degree = 360 * percent
    node.style.background = `conic-gradient(red ${degree}deg, white 0deg)`
  }
}

books.forEach((book) => {
  book.addEventListener('click', () => {
    book.classList.toggle('book_selected')
    const selected = {
      whole: document.querySelectorAll('.book_selected').length,
      ot: document.querySelectorAll('.book_selected.ot').length,
      nt: document.querySelectorAll('.book_selected.nt').length,
    }
    const percentages = calculatePercentages(selected)
    covertPercentageToDegrees(percentages)
  })
})

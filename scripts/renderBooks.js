import { oldTestament, newTestament } from '../testaments.js'

const createBookNodes = (bookArray, testament) => {
  return bookArray.map((book) => {
    const bookNode = document.createElement('div')
    bookNode.classList.add('book', `${testament}`)
    bookNode.innerText = book.name
    return bookNode
  })
}
const appendBookNodes = (parent, childList) =>
  childList.forEach((child) => parent.appendChild(child))

const bookContainers = document.querySelectorAll('.book_grid')

const OTBooks = createBookNodes(oldTestament, 'ot')
const NTBooks = createBookNodes(newTestament, 'nt')

bookContainers.forEach((container) =>
  container.classList.contains('ot')
    ? appendBookNodes(container, OTBooks)
    : appendBookNodes(container, NTBooks)
)

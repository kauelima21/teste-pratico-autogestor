const input = document.querySelector(".menu form input")
const inputContainer = document.querySelector(".menu form div")
const form = document.querySelector(".menu form")
const table = document.querySelector("section table tbody")

input.addEventListener('focus', function () {
  inputContainer.classList.add("expand_input")
})

input.addEventListener('blur', function () {
  inputContainer.classList.remove("expand_input")
})

form.addEventListener('keyup', async e => {
  e.preventDefault()
  table.innerHTML = ""
  let req = await fetch('http://localhost:8080/clientes', {
    method: 'POST',
    body: new FormData(form)
  })
  let json = await req.json()
  if (json.length === 0) {
    let tableLine = document.createElement("tr")
    table.appendChild(tableLine)
    tableLine.innerHTML += `<td colspan=3>Nenhum resultado encontrado</td>`
    return
  }
  json.forEach(element => {
    let tableLine = document.createElement("tr")
    table.appendChild(tableLine)
    tableLine.innerHTML += `<td>${element.first_name}</td>`
    tableLine.innerHTML += `<td>${element.last_name}</td>`
    tableLine.innerHTML += `<td>${element.name}</td>`
  });
})
const input = document.querySelector(".container form input")
const inputContainer = document.querySelector(".container form div")

input.addEventListener('focus', function () {
  inputContainer.classList.add("expand_input");
})

input.addEventListener('blur', function () {
  inputContainer.classList.remove("expand_input");
})
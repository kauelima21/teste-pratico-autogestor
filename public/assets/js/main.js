const input = document.querySelector(".menu form input")
const inputContainer = document.querySelector(".menu form div")

input.addEventListener('focus', function () {
  inputContainer.classList.add("expand_input");
})

input.addEventListener('blur', function () {
  inputContainer.classList.remove("expand_input");
})
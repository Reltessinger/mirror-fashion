var input = document.querySelector("#tam")
var output = document.querySelector(".output-tam")

function mostraTam() {
  output.textContent = input.value
}

input.oninput = mostraTam

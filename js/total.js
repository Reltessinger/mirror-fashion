var input = document.querySelector("#qtd")

function calculaTotal() {
  var precoUnit_txt = document.querySelector("#precoUnitario").textContent
  var preco = precoUnit_txt.replace("R$", "").replace(",", ".")
  var qtd = input.value
  var total = preco * qtd
  document.querySelector("#precoTotal").textContent = "R$ " + total.toFixed(2).replace(".", ",")
}

input.oninput = calculaTotal

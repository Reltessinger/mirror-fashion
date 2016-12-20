var itens = $(".amais")

itens.addClass("some")

$("<button>").text("+").appendTo(".painelNovidade").addClass("novidades-btn").on("click", function mostra(){
    itens.toggleClass("some")
  })

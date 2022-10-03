<?php
    function carrinhoElement($produto_id) {
        $element = '<form action="carrinho.php?action=remover&id='.$produto_id.'" method="post" class="carrinho-items">
            <div class="border rounded">
              <div class="row bg-white">
                <div class="col-md-3 ps-0">
                  <img
                    src="./imgs/Interrogacao.png"
                    alt="Interrogação"
                    class="img-fluid"
                  />
                </div>
                <div class="col-md-6">
                  <h5 class="pt-5">Produto</h5>
                  <h5 class="pt-2 pb-2">R$ 00,00<small class="text-secondary">Grátis!</small></h5>
                  <button type="submit" class="btn btn-warning">
                    Salvar para depois
                  </button>
                  <button
                    type="submit"
                    class="btn btn-danger mx-2"
                    name="remover"
                  >
                    Remover
                  </button>
                </div>
              </div>
            </div>
          </form>';
          echo $element;
    }

    function produtoElement() {
      
    }

?>
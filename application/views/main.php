<main>
    <div class="row">
        <img src="../../uploads/imagens/banner.png">
        <?php
            $lista = array('camisa.png', 'capacete.png', 'bolsa.png', 'placa.png', 'textura.png', 
            'computador.png', 'notebook.png', 'celular.png', 'sofa.png', 'farol.png', 'panelas.png');
            foreach ($lista as $value){
        ?>
            <div class="cardes">
                <figure>
                    <img height="210" width="210" class="m-0 p-0 text-center" src="../../uploads/imagens/produtos/<?=$value?>">
                    <figcaption>R$<?=random_int(10, 999)?></figcaption>
                    <p><?=random_int(1000, 100000)?>+ compraram este produto</p>
                </figure>
            </div>
        <?php } ?>
    </div>
</main>
<div class="moldura-banner">
    <div class="col-12">
        <img id="banner" src="../../uploads/imagens/banner.png">    
    </div>
</div>


<main>
    <div class="row">
        <?php
            $lista = array('camisa.png', 'capacete.png', 'bolsa.png', 'placa.png', 'textura.png', 
            'computador.png', 'notebook.png', 'celular.png', 'sofa.png', 'farol.png', 'panelas.png');
            foreach ($lista as $value){
        ?>
            <div class="col-3">
                <div class="cardes">
                    <figure>
                        <img style="width: 100%;height: 210px;" class="m-0 p-0 text-center" src="../../uploads/imagens/produtos/<?=$value?>">
                        <figcaption>R$<?=random_int(10, 999)?></figcaption>
                        <p><?=random_int(1000, 100000)?>+ compraram este produto</p>
                    </figure>
                </div>
            </div>
        <?php } ?>
    </div>
</main>
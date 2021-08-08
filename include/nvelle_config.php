<div class="main-container">
		<div class="container">
		    <div class="row">
                <div id="content-top" class="clearfix" >
                
                    <div class="container-full home8--banner1">
                        <div class="container">
                            <div class="row">

                            <?php

                                    $PDO_query_nouveau_pack = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_produit_pack = 1 ORDER BY RAND() LIMIT 3");
                                    $PDO_query_nouveau_pack->execute();

                                        while ($nouveau_pack = $PDO_query_nouveau_pack->fetch()){

                                                        echo '

                                                                <div class="col-sm-4 col-xs-12 banner-item">
                                            
                                                        ';

                                                $PDO_query_nouveau_pack_image = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
                                                $PDO_query_nouveau_pack_image->bindParam(":eg_produit_id", $nouveau_pack['eg_produit_id'], PDO::PARAM_INT);
                                                $PDO_query_nouveau_pack_image->execute();

                                                while ($nouveau_pack_image = $PDO_query_nouveau_pack_image->fetch()){

                                                        echo '

                                                            <div class="banners banner__img">
                                                                <div>
                                                                    <a title="' . $nouveau_pack_image['eg_image_produit_title'] . '" href="#"><img src="' . $nouveau_pack_image['eg_image_produit_nom'] . '" alt="' . $nouveau_pack_image['eg_image_produit_title'] . '"></a>
                                                                </div>
                                                            </div>

                                                        ';

                                                }

                                                $PDO_query_nouveau_pack_image->closeCursor();

                                                        echo'            
                                                                        <div class="banner__info">
                                                                            <h2>'.$nouveau_pack['eg_produit_modele'].'</h2>
                                                                            <p>'.$nouveau_pack['eg_produit_nom'].'</p>
                                                                            <a title="Shop Now" href="#">Voir plus &gt;&gt;</a>
                                                                        </div>
                                                                
                                                                </div>
                                                                
                                                        ';

                                        }
                                    $PDO_query_nouveau_pack->closeCursor();
                                    
                            ?>                

                               










                                
                                <!-- <div class="col-sm-4 col-xs-12 banner-item hidden-xs">
                                    <div class="banners banner__img">
                                        <div>
                                            <a title="Static Image" href="#"><img src="image/produit/Pc_Gamer/Aercool_HIVE_ARGB_V2_SILVER.jpg" alt="Static Image"></a>
                                        </div>
                                    </div>
                                    <div class="banner__info">
                                        <h2>Pc Gamer Silver</h2>
                                        <p>HIVE ARGB - Intel I3-10105F - Gigabyte GTX 1660 OC 6GB - 8Gb Ram RGB</p>
                                        <a title="Shop Now" href="#">Voir plus &gt;&gt;</a>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-sm-4 col-xs-12 banner-item hidden-xs">
                                    <div class="banners banner__img">
                                        <div>
                                            <a title="Static Image" href="#"><img src="image/produit/Pc_Gamer/Aercool_Quantum_ARGB_BRONZE.png" alt="Static Image"></a>
                                        </div>
                                    </div>
                                    <div class="banner__info">
                                        <h2>Pc Gamer Bronze</h2>
                                        <p>Quantum ARGB - Ryzen 5 3400G - A320M-A Pro Max - 8Gb Ram RGB</p>
                                        <a title="Shop Now" href="#">Voir plus &gt;&gt;</a>
                                    </div>
                                    
                                </div> -->

                            </div>
                        </div>
                    </div>
						
			    </div>
            </div>
        </div>
</div> 
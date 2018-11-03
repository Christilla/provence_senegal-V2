

<div class="row justify-content-md-center">
        <div class="col col-12 col-lg-10">


        <h1>Actualités Afrique:</h1>
            
            <?php
                foreach($aoNews as $oNews):
            ?>
                    <h2><?=$oNews->title?></h2>
                    <p class="font-weight-bold">écrit par <?=$oNews->author?></p>
                     <p><?=$oNews->content?></p>   
                
        </div>  

            <div class="col col-12 col-lg-10">  
                <?php endforeach; ?>
            </div>

</div>

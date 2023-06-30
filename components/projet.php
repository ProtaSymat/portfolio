<section class="card-box effect-shine">
    <div class="card-header">
        <a href="/detail-projet/<?php echo $id_projet; ?>" class="card-link">
            <h3 class="card-title"><i class="fa-sharp fa-solid fa-arrow-right"></i> <?php echo $title; ?></h3>
        </a>
        <div>        
            <span class="toggle-span"></span>
            <span class="toggle-span2"></span>
            <span class="toggle-span3"></span>
        </div>
    </div>
    <div class="card-body">
        <img class="card-img" src="<?php echo $thumbnail; ?>">
        <p class="card-text"><?php echo $excerpt; ?></p>
    </div>
</section>

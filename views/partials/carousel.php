 <!-- Please use images with the SAME APECT RATIO preferably 16:9 (width:height = 16:9) othwerwise the carousel wont be displayed properly -->
 <?php for ($i = 0; $i < 3; $i++) { ?>
     <?php $last = ($i === 2) ?>
     <div class="<?php if ($i === 0) { ?>col-sm-6 col-lg-4<?php } ?>
                <?php if ($i === 1) { ?>col-sm-6 col-lg-4 d-none d-sm-block<?php } ?>
                <?php if ($i === 2) { ?>col-4 d-none d-lg-block<?php } ?> border border-white px-0">
         <div id="carousel<?php echo $i + 1 ?>" class="carousel slide">
             <div class="carousel-inner">
                 <?php for ($j = 0; $j < count($carousel); $j++) { ?>
                     <div class="carousel-item <?php if ($j === 0 && $i === 0 || $j === 1 && $i === 1 || $j === 2 && $i === 2) { ?>active<?php } ?>">
                         <img loading="lazy" src="<?php echo "public/images/carousel/" . $carousel[$j]['fileName'] ?>" class="img-fluid d-block w-100" alt="<?php echo $carousel[$j]['alternateName'] ?>">
                     </div>
                 <?php } ?>
             </div>
         </div>
     </div>
 <?php } ?>
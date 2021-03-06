<?php $people = $people['advisoryBoard']; ?>
<?php for ($i = 0; $i < count($people); $i++) { ?>
    <div class="col my-4">
        <div class="card border-0 p-3 mx-4 shadow h-100">
            <img loading="lazy" src="<?php echo "public/images/people/" . $people[$i]['fileName'] ?>" class="card-img-top rounded-circle img-fluid w-75 mx-auto" alt="<?php echo $people[$i]['name'] ?>">
            <div class="card-body">
                <h6 class="card-title"><?php echo $people[$i]['name'] ?></h6>
                <p class="card-text"><?php echo $people[$i]['designation'] ?></p>
            </div>
            <div class="card-footer social bg-white border-0">
                <a rel="noreferrer" href="" target="_blank" class="linkedin text-sea-buckthorn fa-lg pr-3 border-right"></a>
                <a rel="noreferrer" href="" target="_blank" class="facebook text-sea-buckthorn fa-lg border-left px-3"></a>
            </div>
        </div>
    </div>
<?php } ?>
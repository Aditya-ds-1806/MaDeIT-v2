<?php $people = $people['advisoryBoard']; ?>
<?php for ($i = 0; $i < count($people); $i++) { ?>
    <div class="col my-4">
        <div class="card border-0 p-3 mx-4 shadow h-100">
            <img src="<?php echo $people[$i]['image'] ?>" class="card-img-top rounded-circle img-fluid w-75 mx-auto" alt="<?php echo $people[$i]['name'] ?>">
            <div class="card-body">
                <h6 class="card-title"><?php echo $people[$i]['name'] ?></h6>
                <p class="card-text"><?php echo $people[$i]['designation'] ?></p>
            </div>
            <div class="card-footer social bg-white border-0">
                <a href="" target="_blank" class="text-sea-buckthorn fa-lg pr-3"><i class="fab fa-linkedin-in"></i></a>
                <a href="" target="_blank" class="text-sea-buckthorn fa-lg border-left border-secondary px-3"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>
<?php } ?>
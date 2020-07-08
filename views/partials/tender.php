<?php for ($i = 0; $i < count($tender); $i++) { ?>
    <div class="pt-5 border-bottom">
        <h5 class="text-sea-buckthorn text-left"><?php echo $tender[$i]['title'] ?></h5>
        <ul class="list-group list-group-flush text-left">
            <li class="list-group-item bg-wild-sand">
                <ul class="list-group">
                    <li class="bg-wild-sand border-0 list-group-item"><strong>Tender No:</strong> <?php echo $tender[$i]['tenderNo'] ?></li>
                    <li class="bg-wild-sand border-0 list-group-item"><strong>Date of Tender:</strong> <?php echo $tender[$i]['date'] ?></li>
                    <li class="bg-wild-sand border-0 list-group-item"><strong>Last Date & Time of Tender:</strong> <?php echo $tender[$i]['lastDate'] ?></li>
                    <a href="<?php echo $tender[$i]['noticeURL'] ?>" class="text-reset">
                        <li class="text-mountain-meadow bg-wild-sand list-group-item font-weight-bolder">Download Notice</li>
                    </a>
                </ul>
            </li>
        </ul>
    </div>
<?php } ?>
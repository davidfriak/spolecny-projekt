<?=$this->extend('layout/sablona');?>
<?=$this->section('content');?>
<div class="container">
    <div class="row">
        <?php foreach ($riders as $rider): ?>
            <div class="col-md-4 d-flex">
                <div class="card mb-4 flex-grow-1">
                    <div class="card-body d-flex flex-column">
                        <p class="card-text">
                                    <p><strong>Země:</strong> <?= $rider->country ?></p>
                                    <p><strong>Příjmení:</strong> <?= $rider->last_name ?></p>
                                    <p><strong>Jméno:</strong> <?= $rider->first_name ?></p>
                                    <p><strong>Datum narození:</strong> <?= $rider->date_of_birth ,$rider->date_of_birth = date("d.m.y");?></p>
                                    <p><strong>Váha:</strong> 
                                        <?= $rider->weight 
                                            ? $rider->weight . ' kg' 
                                            : '???';
                                        ?>                                        
                                    </p>
                                    <p><strong>Výška:</strong>
                                        <?= $rider->height 
                                            ? $rider->height . ' cm' 
                                            : '???';
                                        ?>
                                    </p>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?=$this->endSection();?>
<?php foreach($colG as $G){
  $gString = str_replace(' ','',$G['gameName']); ?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalInfo<?php echo $gString ?>">
  <img src="boxdb/<?php echo $G['gameBox'] ?>">
  <br>
  <?php echo $G['gameName'] ?>
</button>

<div class="modal fade" id="modalInfo<?php echo $gString ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $G['gameName'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="qrdb/<?php echo $G['qr'] ?>" class="img-thumbnail rounded float-left" width="200">
        <p class="text-center"><strong>Game Info</strong></p>
        <p class="text-center"><?php echo $G['gameDesc'] ?></p>
        <p class="text-center"><strong>Release Date:</strong> <?php echo date('m/d/Y', strtotime($G['releaseDate'])) ?></p>
        <p class="text-center"><strong>Genre(s):</strong> <?php echo $G['genre'] ?></p>
        <p class="text-center"><strong>Region(s):</strong> <?php echo $G['region'] ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>
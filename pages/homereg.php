<form action="libs/addGame.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="gameName">Name of the Game</label>
    <input type="text" class="form-control" name="name" id="gameName" placeholder="Ex.: Super Mario 3D Land...">
  </div>
  <div class="form-group">
    <label for="gameName">Direct Download Game Link (for Google Drive, use <a href="https://sites.google.com/site/gdocs2direct/" target="_blank">this</a>)</label>
    <input type="text" class="form-control" name="link" id="gameName" placeholder="Ex.: https://example.com/gamename.cia">
  </div>
  <div class="form-group">
    <label for="gameDesc">Description</label>
    <textarea class="form-control" name="description" id="gameDesc" placeholder="Game Description" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="gameDate">Release Date</label>
    <input type="date" class="form-control" name="releaseDate" id="gameDate" placeholder="Release Date">
  </div>
  <div class="form-group">
    <label>Regions where game was released</label>
    <select multiple class="form-control" id="gameGen" name="region[]">
      <option value="EUR">EUR</option>
      <option value="JPN">JPN</option>
      <option value="USA">USA</option>
    </select>
  </div>
  <div class="form-group">
    <label for="gameGen">Genre - You can select more than one if applies</label>
    <select multiple class="form-control" id="gameGen" name="genre[]">
      <option value="Action">Action</option>
      <option value="Adventure">Adventure</option>
      <option value="RPG">RPG</option>
      <option value="Sports">Sports</option>
    </select>
  </div>
  <div class="form-group">
    <label for="gameBox">Game box image</label>
    <input type="file" class="form-control-file" name="box" id="gameBox">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Add</button>
</form>
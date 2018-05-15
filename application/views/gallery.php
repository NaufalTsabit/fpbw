<div class="container">
  <div class="section-top-border">
    <h3>Image Gallery</h3>
    <div class="row gallery-item">
      <?php foreach ($data as $data) { ?>
      <div class="col-md-3">
        <a href="uploads/<?php echo $data['file_name']; ?>" class="img-pop-up"><div class="single-gallery-image" style="background: url(uploads/<?php echo $data['file_name']; ?>);"></div></a>
      </div>
      <?php } ?>
    </div>
  </div>
</div>

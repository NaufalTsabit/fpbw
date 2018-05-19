<div class="container">
  <div class="section-top-border">
    <h1>Image Gallery</h1>
    <br/>
    <div class="bottom-border"> </div>
    <br/>
    <p>Made By Enochians, Aerial & Equipment Supported By Konsep Studio </p>
    <div class="row gallery-item">
      <?php foreach ($data as $u) { ?>
      <div class="col-md-3">
        <a href="<?php echo base_url('uploads/'. $u['file_name'] ); ?>" class="img-pop-up">
          <div class="single-gallery-image" style="background: url(<?php echo base_url('uploads/'.$u['file_name'] ); ?>);">
          </div>
        </a>
      </div>
      <?php } ?>
    </div>
  </div>
</div>

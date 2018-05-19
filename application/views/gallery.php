<div class="container">
  <div class="section-top-border">
    <h1>Image Gallery</h1>
    <br/>
    <div class="bottom-border"> </div>
    <br/>
    <p>Made By Enochians, Aerial & Equipment Supported By Konsep Studio </p>
    <div class="row gallery-item">
      <?php $no = $this->uri->segment('3') + 1;
      foreach ($files as $u) {
        $no++; ?>
      <div class="col-md-3">
        <a href="<?php echo base_url('uploads/'. $u->file_name ); ?>" class="img-pop-up">
          <div class="single-gallery-image" style="background: url(<?php echo base_url('uploads/'.$u->file_name ); ?>);">
          </div>
        </a>
      </div>
      <?php }
      echo $this->pagination->create_links(); ?>
    </div>
  </div>
</div>

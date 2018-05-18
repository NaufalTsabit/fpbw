<div class="container">
  <div class="section-top-border">
    <h3>Image Gallery</h3>
    <div class="row gallery-item">
      <?php $no = $this->uri->segment('3') + 1;
      foreach ($files as $u) {
        $no++; ?>
      <div class="col-md-3">
        <a href="<?php echo base_url('uploads/'. $u->file_name ); ?>" class="img-pop-up">
          <div class="single-gallery-image" style="background: url(<?php echo base_url('uploads/'.$u->file_name ); ?>);">
          </div></a>
      </div>
      <?php }
      echo $this->pagination->create_links(); ?>
    </div>
  </div>
</div>

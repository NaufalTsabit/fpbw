<span style="display:block; height: 120px;"></span>
<div class="container">
<div class="row d-flex align-items-center justify-content-center">
  <div class="col-lg-5  col-md-6 header-right">
    <h4 class="text-white pb-30">UPLOAD IMAGE</h4>
    <form class="form" method="POST" action="<?php echo base_url('Welcome/upload/files')?>" enctype="multipart/form-data">
      <input type='file' class="form-control txt-field" name='userfile' size='20' />
      <button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase" value="submit" name="submit">Submit</button>
    </form>
  </div>
</div>
<!-- table -->
  <div class="section-top-border">
    <h3 class="mb-30">Gallery</h3>
    <div class="progress-table-wrap">
      <div class="progress-table">
        <div class="table-head">
          <div class="serial">No.</div>
          <div class="country">Image</div>
          <div class="visit">File Name</div>
          <div class="percentage"></div>
        </div>
        <?php $no = 1;
        foreach ($data as $u) { ?>
          <div class="table-row">
            <div class="serial"><?php echo $no++ ?>.</div>
            <div class="country"><img src="<?php echo base_url('uploads/'. $u['file_name'] ); ?>" class="uploads"></div>
            <div class="visit"><?php echo $u['file_name'] ?></div>
            <div class="percentage">
              <a href="<?php echo base_url('Welcome/deleteimg/'.$u['file_name']); ?>" class="genric-btn danger circle">Delete</a>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
  </div>
</div>
<!-- end table -->
<span style="display:block; height: 60px;"></span>

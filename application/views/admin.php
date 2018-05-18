<span style="display:block; height: 60px;"></span>
<div class="overlay overlay-bg"></div>
<div class="container">
<div class="row d-flex align-items-center justify-content-center">
  <div class="col-lg-5  col-md-6 header-right">
    <form  class="form" method="POST" action="<?php echo base_url('Welcome/upload')?>" enctype="multipart/form-data">
      <input type='file' name='userfile' size='20' />
      <button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase" value="submit" name="submit">Submit</button>
    </form>
  </div>
</div>
</div>

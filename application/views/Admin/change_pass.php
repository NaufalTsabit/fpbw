<span style="display:block; height: 120px;"></span>
<div class="container">
<form action="<?php echo base_url('Welcome/save_password') ?>" method="post">
  <div class="row">
    <div class="col-lg-6 form-group">
      <input type="password" name="old" placeholder="Enter your old password" class="common-input mb-20 form-control" required="">

      <input type="password" name="new" placeholder="Enter your new password" class="common-input mb-20 form-control" required="">

      <input type="password" name="re_new" placeholder="Confirm your new password" class="common-input mb-20 form-control" required="">
      <div class="mt-20 alert-msg" style="text-align: left;"></div>
      <button class="primary-btn mt-20 text-white" style="float: right;" value="">Save</button>
    </div>
  </div>
</form>
</div>

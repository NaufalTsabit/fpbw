<span style="display:block; height: 120px;"></span>
  <div class="container">
    <h1>Add a Camera</h1>
    <br/>
    <form action="<?php echo base_url('Welcome/inputkamera') ?>" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-6 form-group">
          <div class="form-group row">
              <div class="col-md-6">
                <div class="default-select" id="default-select">
                  <select name="tipekamera" required>
                    <option value="" disabled selected hidden>Select Camera Brand</option>
                    <option value="Panasonic">Panasonic</option>
                    <option value="Nikon">Nikon</option>
                    <option value="Canon">Canon</option>
                    <option value="Fujifilm">Fujifilm</option>
                    <option value="Sony">Sony</option>
                  </select>
                </div>
              </div>
            </div>
            <input type="text" name="series" placeholder="Series" class="common-input mb-20 form-control" required="">
            <input type="text" name="stock" placeholder="Stock" class="common-input mb-20 form-control" required="">
            <input type="text" name="harga" placeholder="Harga Sewa" class="common-input mb-20 form-control" required="">
            <textarea name="deskripsi" placeholder="Deskripsi" class="common-textarea form-control" required=""></textarea><br/>
            <input type='file' class="form-control txt-field" name='test' size='20' />
            <button type="submit" class="primary-btn mt-20 text-white" style="float: left;" value="submit" name="submit">Save</button>
          </div>
        </div>
      </form>
    <div class="section-top-border">
      <h2 class="mb-30">Table Camera</h2>
      <div class="progress-table-wrap">
        <div class="progress-table">
          <div class="table-head">
            <div class="serial">ID</div>
            <div class="country">Camera</div>
            <div class="visit"></div>
            <div class="percentage"></div>
          </div>
          <?php $no = 1;
          foreach ($data as $u) { ?>
            <div class="table-row">
              <div class="serial"><?php echo $no++ ?>.</div>
              <div class="country"><img src="<?php echo base_url('uploads/'. $u['gambar'] ); ?>" class="uploads"></div>
              <div class="visit"><?php echo $u['merk'] ?> <?php echo $u['seri'] ?></div>
              <div class="percentage">
                <a href="<?php echo base_url('Welcome/edit/'.$u['id']); ?>" class="genric-btn info circle">Edit</a>
                <a href="<?php echo base_url('Welcome/delete/'.$u['id']); ?>" class="genric-btn danger circle">Delete</a>
              </div>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
  </div>

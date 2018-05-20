<span style="display:block; height: 120px;"></span>
  <div class="container">
    <h1>Edit a Camera</h1>
    <br/>
    <?php foreach ($data_kamera as $row) { ?>
    <form action="<?php echo base_url('Welcome/update') ?>" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-6 form-group">
          <input type="hidden" name="id" value="<?php echo $row->id ?>">
          <div class="form-group row">
              <div class="col-md-6">
                <div class="default-select" id="default-select">
                  <select name="tipekamera">
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
            <input type="text" name="series" placeholder="Series" class="common-input mb-20 form-control" required="" value="<?php echo $row->seri; ?>">
            <input type="text" name="types" placeholder="Types" class="common-input mb-20 form-control" required="" value="<?php echo $row->format; ?>">
            <input type="text" name="resolusi" placeholder="Resolution" class="common-input mb-20 form-control" required="" value="<?php echo $row->resolusi; ?>">
            <input type="text" name="stock" placeholder="Stock" class="common-input mb-20 form-control" required="" value="<?php echo $row->stock; ?>">
            <input type="text" name="harga" placeholder="Harga Sewa" class="common-input mb-20 form-control" required="" value="<?php echo $row->harga; ?>">
            <textarea name="deskripsi" placeholder="Deskripsi" class="common-textarea form-control" required=""><?php echo $row->deskripsi; ?></textarea><br/>
            <input type='file' class="form-control txt-field" name='test' size='20' />
            <button type="submit" class="primary-btn mt-20 text-white" style="float: left;" value="submit" name="submit">Save</button>
          </div>
        </div>
      </form>
    <?php } ?>
  </div>

<div class="modal fade" id="tambah_data" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    <form class="form-horizontal" method="POST" action="module_member/action_member.php">
        <div class="modal-header">
          <p><i class="fa fa-user-plus"></i> Tambah</p>
        </div>
        <div class="modal-body">
          
            
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label">Nama : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama" placeholder="Nama">
              </div>
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label">Alamat : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
              </div>
            </div>
            
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Telepon </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="telepon" required>
              </div>
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Email </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label">Username : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="username" placeholder="Username">
              </div>
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label">Password : </label>
              <div class="col-lg-8">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
            </div>
              <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Aktif   :</label>
              <div class="col-lg-8">
                <label class="radio-inline">
                  <input type="radio" name="aktif" value="Y"> Iya
                </label>
                <label class="radio-inline">
                  <input type="radio" name="aktif" value="T" checked> Tidak
                </label>
              </div>

        </div>
        <div class="modal-footer">
          <button class="button-foot" data-dismiss= "modal">Close</button>
          <button class="button-foot" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
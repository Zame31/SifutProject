<!--Validasi Password-->


 <div class="sm-modal modal fade" id="daftar" role="dialog">
      <div class="modal-dialog dialog-size">
        <div class="modal-content content-size">
        <form method="post" action="user/daftar_member/daftar_member.php" onSubmit="return validasi(this)" class="form-horizontal">
            <div class="modal-header color-head">
              <i class="fa fa-user"></i>
            </div>
            <div class="modal-body body-conf">
                <div class="head">Daftar Member</div>
                <div class="desc">banyak keuntungan kalau kamu mendaftar jadi member
                                    diantaranya mendapatkan diskon harga, pesan lapang</div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="text" class="form-control form-color" name="nama" placeholder="Nama Lengkap" required autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="text" class="form-control form-color" name="alamat" placeholder="Alamat" required autofocus>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="col-lg-12">
                    <input type="text" class="form-control form-color" name="telepon" placeholder="Telepon" required autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="text" class="form-control form-color" name="email" placeholder="E-Mail" required autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="text" class="form-control form-color" name="username" placeholder="Username" required autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="password" class="form-control form-color" name="password" placeholder="password" required>
                  </div>
                </div>

            </div>
            <div class="modal-footer">
              <button class="button-foot" type="submit">Daftar</button>
              <button class="button-foot" data-dismiss= "modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>

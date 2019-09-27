<div class="modal fade" id="siswa" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearform()">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <form name="siswa" action="{{ route('siswa.store') }}" method="post">
        @csrf
        <input name="_method" id="method_action" type="hidden" value="PUT">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" required>
              </div>
              <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Alamat Email" required>
              </div>
              <div class="form-group">
                <label for="kelamin">Jenis Kelamin</label>
                <select name="kelamin" id="kelamin" class="form-control" required>
                  <option value="">--- Pilih Kelamin ---</option>
                  <option value="L">Laki - Laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" name="nis" id="nis" class="form-control" placeholder="NIS">
              </div>
              <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="text" name="nisn" id="nisn" class="form-control" placeholder="NISN">
              </div>
              <div class="form-group">
                <label for="jurusan_id">Jurusan</label>
                <select name="jurusan_id" id="jurusan_id" class="select2 form-control" style="width:100%" required>
                  <option value="">--- Pilih Jurusan ---</option>
                  {!! Tagdata::jurusan() !!}
                </select>
              </div>
              <div class="form-group">
                <label for="kelas_id">Kelas</label>
                <select name="kelas_id" id="kelas_id" class="select2 form-control" style="width:100%" required>
                  <option value="">--- Pilih Kelas ---</option>
                  {!! Tagdata::kelas() !!}
                </select>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clearform()">Close</button>
          <button type="submit" class="btn bg-blue">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="password-reset" data-backdrop="static">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearform()">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Reset Password</h4>
      </div>
      <form name="password-reset" action="{{ route('siswa.password') }}" method="post">
        @csrf
        <input type="hidden" name="id">
        <div class="modal-body">
          <div class="form-group">
            <label for="new_password">New Password</label>
            <input type="password" id="new_password" name="new_password" class="form-control" placeholder="New Password" required>
          </div>
          <div class="form-group">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="clearpass()">Close</button>
          <button type="submit" class="btn bg-blue">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="supModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <form method="POST" id="sup_form" enctype="multipart/form-data">
         {{csrf_field()}} {{ method_field('POST') }}
         <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
                  <div class="modal-body">
                     
                     <span id="form_output"></span>
                     <div class="form-group">
                      <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="Barang" minlength="1" maxlength="23" />
                        <span class="help-block has-error nama_barang_error"></span>
                      </div>

                      <div class="form-group">
                        <label>Harga Barang</label>
                        <input type="number" name="harga_barang" id="harga_barang" class="form-control" placeholder="" />
                        <span class="help-block has-error harga_barang_error"></span>
                      </div>

                      <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder=""/>
                        <span class="help-block has-error deskripsi_error"></span>
                      </div>

                      <div class="form-group">
                        <label>Stok</label>
                        <input type="number" name="stock" id="stock" class="form-control" placeholder="" min="1" maxlength="3" />
                        <span class="help-block has-error stock_error"></span>
                      </div>

                      <div class="form-group">
                        <label>Warna</label>
                        <input type="text" name="warna" id="warna" class="form-control" placeholder="" min="1" maxlength="25" />
                        <span class="help-block has-error warna_error"></span>
                      </div>

                      <div class="form-group">
                        <label>Ukuran</label>
                        <input type="text" name="ukuran" id="ukuran" class="form-control" placeholder="" min="1" maxlength="25" />
                        <span class="help-block has-error ukuran_error"></span>
                      </div>

                     <div class="form-group">
                     <label>Tanggal</label>
                     <input type="date" name="tanggal" id="tanggal" value="{{ carbon\carbon::today()->toDateString() }}" class="form-control">
                     <span class="help-block has-error tanggal_error"></span>
                  </div>

                        <div class="form-group">
                              <label>Merk</label>
                              <select name="merk_id" id="merk_id" class="single form-control" style="width: 460px">
                                <option disabled selected>Merk</option>
                                @foreach($merk as $data)
                                <option value="{{ $data->id}}">{{ $data->nama_merk }}</option>
                                @endforeach
                              </select>
                        <span class="help-block has-error merk_id_error"></span>
                      </div>

                      <div class="form-group">
                              <label>Kategori Barang</label>
                              <select name="kategori_id" id="kategori_id" class="single form-control" style="width: 460px">
                                <option disabled selected>Kategori Barang</option>
                                @foreach($kategori_barang as $data)
                                <option value="{{ $data->id}}">{{ $data->nama_kategori }}</option>
                                @endforeach
                              </select>
                        <span class="help-block has-error nama_kategori_error"></span>
                      </div>

                  <div class="modal-footer">
                    <input type="hidden" name="student_id" id="student_id" value=""/>
                    <input type="hidden" name="button_action" id="button_action" value="insert"/>
                     <input type="submit" name="submit" id="aksi" value="Tambah" class="btn btn-info" />
                     <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
                  </div>
               </form>
            </div>
         </div>
      </div>
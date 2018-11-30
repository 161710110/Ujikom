<div id="supModal" class="modal fade" role="dialog" data-backdrop="static">
         <div class="modal-dialog">
            <div class="modal-content">
               <form method="POST" id="sup_form" enctype="multipart/form-data">
                {{csrf_field()}} {{ method_field('POST') }}
                  <div class="modal-header" style="background-color: lightblue;">
                     <button type="button" class="close" data-dismiss="modal" >&times;</button>
                     <h4 class="modal-title" >Add Data</h4>
                  </div>
                  <div class="modal-body">
                     
                     <span id="form_output"></span>
                     <div class="form-group">
                      <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control" placeholder=""/>
                        <span class="help-block has-error judul_error"></span>
                      </div>

                      <div class="form-group">
                        <label>Cover</label>
                        <input type="text" name="cover" id="cover" class="form-control" placeholder=""/>
                        <span class="help-block has-error cover_error"></span>
                      </div>

                      <div class="form-group">
                        <label>Isi</label>
                        <input type="text" name="isi" id="isi" class="form-control" placeholder=""/>
                        <span class="help-block has-error isi_error"></span>
                      </div>

                      <div class="form-group">
                        <label>Penulis</label>
                        <input type="text" name="penulis" id="penulis" class="form-control" placeholder=""/>
                        <span class="help-block has-error penulis_error"></span>
                      </div>

                     <div class="form-group">
                     <label>Tanggal</label>
                     <input type="date" name="tanggal" id="tanggal" value="{{ carbon\carbon::today()->toDateString() }}" class="form-control">
                     <span class="help-block has-error tanggal_error"></span>
                  </div>

                        <div class="form-group">
                              <label>Kategori</label>
                              <select name="kategori_id" id="kategori_id" class="single form-control" style="width: 460px">
                                <option disabled selected>Kategori</option>
                                @foreach($kategori_artikel as $data)
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
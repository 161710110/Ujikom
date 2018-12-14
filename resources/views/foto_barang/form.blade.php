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
                        <label for="photo">Foto</label>
                        <input type="file" id="foto" name="foto" accept="image/*">
                        <span class="help-block has-error foto_error"></span>
                      </div>

                        <div class="form-group">
                              <label>Barang</label>
                              <select name="barang_id" id="barang_id" class="single form-control">
                                <option disabled selected>Barang</option>
                                @foreach($barang as $data)
                                  <option value="{{ $data->id}}">{{ $data->nama_barang }}</option>
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
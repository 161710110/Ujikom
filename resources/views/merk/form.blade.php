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
                        <label>Nama Merk</label>
                        <input type="text" name="nama_merk" id="nama_merk" class="form-control" placeholder="Kp Citamiang Kidul no 69" />
                        <span class="help-block has-error nama_merk_error"></span>
                     </div>

                    <div class="form-group">
                        <label for="photo">Foto</label>
                        <input type="file" id="logo" name="foto" accept="image/*">
                        <span class="help-block has-error Photo_error"></span>
                     </div>

                        </div>
                        <div class="modal-footer">
                          <input type="hidden" name="student_id" id="student_id" value=""/>
                          <input type="hidden" name="button_action" id="button_action" value="insert"/>
                          <input type="submit" name="submit" id="aksi" value="Tambah" class="btn btn-info" />
                          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
                        </div>
                      </div>
                    </div>
                  </div>
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
                        <label>Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Kp Citamiang Kidul no 69" />
                        <span class="help-block has-error alamat_error"></span>
                     </div>

                    <div class="form-group">
                        <label>Nomor Handphone</label>
                        <input type="number" name="phone" id="phone" class="form-control" placeholder="089xxxxxxxxxxx" />
                        <span class="help-block has-error phone_error"></span>
                     </div>

                     <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="aceng@fikri.me" />
                        <span class="help-block has-error email_error"></span>
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
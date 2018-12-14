@extends('temp')
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <button type="button" name="add" id="Tambah" class="btn btn-primary">Add Data</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="stud" class="table table-bordered" style="width:100%">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi</th>
                        <th>Stok</th>
                        <th>Merk Barang</th>
                        <th>Kategori Barang</th>
                        <th>Action</th>
                     </tr>
                  </thead>
               </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
      @endsection
      @push('scripts')
      @include('barang.form')
      <script type="text/javascript">
         $(function() {
         $('#stud').DataTable({
         processing: true,
         serverSide: true,
         ajax: '/g',
         columns: [
            { data: 'id', name: 'id' },
            { data: 'nama_barang', name: 'nama_barang' },
            { data: 'harga_barang', name: 'harga_barang' },
            { data: 'deskripsi', name: 'deskripsi' },
            { data: 'stock', name: 'stock' },
            { data: 'merk', name: 'merk' },
            { data: 'kategori', name: 'kategori' },
            { data: 'action', orderable:false, searchable: false}
         ],
         "lengthMenu": [[-1, 10, 5, 2], ["All", 10, 5, 2]]
         })
         $('#Tambah').click(function(){
              $('#supModal').modal('show');
              $('#sup_form')[0].reset();
              $('#aksi').val('Tambah');
              $('.modal-title').text('Tambah Data');
              $('.selecttt').select2();
              state = "insert";
            });
         
         $('.select').select2();
         $('#supModal').on('hidden.bs.modal', function(e){
          $(this).find('#sup_form')[0].reset();
          $('span.has-error').text('')
          $('.form-group.has-error').removeClass('has-error');
         });
         
           $('#sup_form').submit(function(e){
             $.ajaxSetup({
               header: {
                 'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
               }
             });
             e.preventDefault();
             if (state == 'insert'){
             $.ajax({
               type: "POST",
               url: "{{url ('/add_g')}}",
               // data: $('#sup_form').serialize(),
               data: new FormData(this),
               contentType: false,
               processData: false,
               dataType: 'json',
               success: function (data){
                 console.log(data);
                 $('#supModal').modal('hide');
                 $('#aksi').val('Tambah');
                 $('#stud').DataTable().ajax.reload();
                    swal({
                                title: 'Success!',
                                text: data.message,
                                type: 'success',
                                timer: '3500'
                            })
               },
               error: function (data){
                $('input').on('keydown keypress keyup click change', function(){
                  $(this).parent().removeClass('has-error');
                  $(this).next('.help-block').hide()
                });
                var coba = new Array();
                console.log(data.responseJSON.errors);
                $.each(data.responseJSON.errors,function(name, value){
                  console.log(name);
                  coba.push(name);
                  $('input[name='+name+']').parent().addClass('has-error');
                  $('input[name='+name+']').next('.help-block').show().text(value);
                });
                $('input[name='+coba[0]+']').focus();
               }
             }); 
           }else {
            $.ajax({
               type: "POST",
               url: "{{url ('/g/edit')}}"+ '/' + $('#id').val(),
               // data: $('#sup_form').serialize(),
               data: new FormData(this),
               contentType: false,
               processData: false,
               dataType: 'json',
               success: function (data){
                 console.log(data);
                 $('#supModal').modal('hide');
                 $('#stud').DataTable().ajax.reload();
                 swal({
                                title: 'Success!',
                                text: data.message,
                                type: 'success',
                                timer: '3500'
                            })
               },
               error: function (data){
                $('input').on('keydown keypress keyup click change', function(){
                  $(this).parent().removeClass('has-error');
                  $(this).next('.help-block').hide()
                });
                var coba = new Array();
                console.log(data.responseJSON.errors);
                $.each(data.responseJSON.errors,function(name, value){
                  console.log(name);
                  coba.push(name);
                  $('input[name='+name+']').parent().addClass('has-error');
                  $('input[name='+name+']').next('.help-block').show().text(value);
                });
                $('input[name='+coba[0]+']').focus();
               }
             }); 
           }
             
           });
           $(document).on('click', '.delete', function(){
         var dele = $(this).attr('id');
         if(confirm("Apakah Anda Yakin Menghapus Data Ini?"))
         {
            $.ajax({
                url:"{{route('del_g')}}",
                method:"get",
                data:{id:dele},
                success:function(data)
                {
                  $('#stud').DataTable().ajax.reload();
                    swal({
                                title: 'Success!',
                                text: data.message,
                                type: 'success',
                                timer: '3500'
                            })
         
                }
            })
         }
         else
         {
          swal({
            title: 'Batal',
            text: 'Data tidak jadi dihapus',
            type: 'error'
          })
            return false;
         }
         }); 
         });
         $(document).on('click', '.edit', function(){
         var edit = $(this).data('id');
         $('#form_output').html('');
         $.ajax({
            url:"{{url('editg')}}" + '/' + edit,
            method:'get',
            data:{id:edit},
            dataType:'json',
            success:function(data)
            {
              console.log(data);
                state = "update";
                $('#id').val(data.id);
                $('#nama_barang').val(data.nama_barang);
                $('#harga_barang').val(data.harga_barang);
                $('#deskripsi').val(data.deskripsi);
                $('#stock').val(data.stock);
                $('#merk_id').val(data.merk_id);
                $('#kategori_id').val(data.kategori_id);
                $('#student_id').val(edit);
                $('#supModal').modal('show');
                $('#aksi').val('Edit');
                $('.modal-title').text('Edit Data');
            },
         })
         });
      </script>
      @endpush
      <script type="text/javascript">
        var input = document.getElementById('input-rupiah');
        input.addEventListener('keyup',function(e)
          {
            var number_string = bilangan.replace(/[^,\d]/g, '').toString(),
            split   = number_string.split(','),
            sisa    = split[0].length % 3,
            rupiah  = split[0].substr(0, sisa),
            ribuan  = split[0].substr(sisa).match(/\d{1,3}/gi);

            if (ribuan) {
              separator = sisa ? '.' : '';
              rupiah   += separator + ribuan.join('.');
            }
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp.  ' + rupiah : '');
          });
      </script>
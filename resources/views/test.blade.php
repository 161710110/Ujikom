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
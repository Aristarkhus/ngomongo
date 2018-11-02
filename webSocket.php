<script>
      $(function(){
        //var socket = io.connect('http://localhost:3000');

          //mengirim data ke server
          $('#kirim').click(function(){
            /*socket.emit('kirim_nama',{name: $('#nama').val()});
            $('#nama').val('');*/

            socket.emit('kirim_pesan',{isi: $('#pesan').val(), nama: $('#nama').val()});
            $('#pesan').val('');
            $('#nama').val('');  
          });

          //menerima data dari server
          /*socket.on('kirim_nama', (data) => {
            $('#obrolan').append('<div><b>'+data.name+'</b>');
        });*/

        socket.on('kirim_pesan', (data) => {
            //$('#obrolan').append('<div><b>'+data.nama+'</b>: <i>'+data.isi+'</i></div>');

            /*$('#obrolan').append('<li>'+
                  '<div class="rightside-left-chat">'+
                    '<span><i class="fa fa-circle" aria-hidden="true"></i> '+data.nama+' <small>10:00 AM,Today</small> </span><br><br>'+
                    '<p>'+data.isi+'</p>'+
                  '</div>'+
                '</li>');*/

            if (data.nama != <?php echo "'".$username."'" ?> ) {
                 $('#obrolan').append('<li>'+
                  '<div class="rightside-left-chat">'+
                    '<span><i class="fa fa-circle" aria-hidden="true"></i> '+data.nama+' <small>10:00 AM,Today</small> </span><br><br>'+
                    '<p>'+data.isi+'</p>'+
                  '</div>'+
                '</li>');

            }else {
                $('#obrolan').append('<li>'+
                  '<div class="rightside-right-chat">'+
                      '<span> <small>10:00 AM,Today</small> '+data.nama+' <i class="fa fa-circle" aria-hidden="true"></i></span><br><br>'+
                      '<p>'+data.isi+'</p>'+
                    '</div>'+
                  '</li>');
            }
        });
      });
      
    </script>
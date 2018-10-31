const express = require('express');
const app = express();
const port = 3000;

server = app.listen(port, function(){
	console.log('Server aktif di port '+port);
});

const io = require('socket.io')(server);

//nanti var ini diganti dengan database
var client = [];

io.on('connect', (socket) => {
	console.log('1 user terhubung '+ socket.id);
	client.push(socket.id);

	/*socket.on('kirim_nama',(data) => {
		console.log(data.name);
		io.sockets.emit('kirim_nama', {name: data.name});
	});*/

	socket.on('kirim_pesan',(data) => {
		console.log(data.nama);
		console.log(data.isi);
		//io.sockets.emit('kirim_pesan', {isi: data.isi, nama: data.nama});
		
		//mengirim ke client tertentu berdasarkan socket id
		//caranya menggunakan database untuk menyimpan id
		io.sockets.connected[client[0]].emit('kirim_pesan', {isi: data.isi, nama: data.nama});
		io.sockets.connected[client[1]].emit('kirim_pesan', {isi: data.isi, nama: data.nama});
	}); 
});
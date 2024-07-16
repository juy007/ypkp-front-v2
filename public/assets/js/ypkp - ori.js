function load_jurusan(show, hide1, hide2){

	document.getElementById('jurusan-'+hide1).style.display='none';
	document.getElementById('jurusan'+hide1).style.display='block';
	document.getElementById('show_jurusan'+hide1).style.display='none';

	document.getElementById('jurusan-'+hide2).style.display='none';
	document.getElementById('jurusan'+hide2).style.display='block';
	document.getElementById('show_jurusan'+hide2).style.display='none';

	document.getElementById('jurusan'+show).style.display='none';
	document.getElementById('jurusan-'+show).style.display='block';
	document.getElementById('show_jurusan'+show).style.display='block';
	if (window.innerWidth < 992) {
		$('#show_jurusan'+show).prependTo('#show_jurusan_mobile'+show);
	}
}
function close_load_jurusan(show, hide1, hide2){
	document.getElementById('jurusan-'+hide1).style.display='none';
	document.getElementById('jurusan'+hide1).style.display='block';
	document.getElementById('show_jurusan'+hide1).style.display='none';

	document.getElementById('jurusan-'+hide2).style.display='none';
	document.getElementById('jurusan'+hide2).style.display='block';
	document.getElementById('show_jurusan'+hide2).style.display='none';

	document.getElementById('jurusan'+show).style.display='block';
	document.getElementById('jurusan-'+show).style.display='none';
	document.getElementById('show_jurusan'+show).style.display='none';
}
window.onload=on_jurusan();
/*
function on_jurusan() {
	if (window.innerWidth < 992) {
		   // alert('jalan');
		}
	}
*/
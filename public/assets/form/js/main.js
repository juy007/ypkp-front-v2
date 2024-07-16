$(function() {

	'use strict';

	// Form

	var contactForm = function() {
		if ($('#formDaftar').length > 0 ) {		
			$("#formDaftar").validate( {
				rules: {
					nama_lengkap: "required",
					tempat_lahir: "required",
					tanggal_lahir: "required",
					alamat: "required",
					kecamatan: "required",
					kota: "required",
					provinsi: "required",
					kode_pos: "required",
					telepon: "required",
					whatsapp: "required",
					pilih_jurusan: "required",
					konsentrasi: "required",
					ijazah: "required",
					transkip: "required",
					pembayaran: "required",
					foto: "required",
					ktp: "required",
					formulir: "required",
					email: {
						required: true,
						email: true
					},
				},
				messages: {
					nama_lengkap: "nama wajib diisi",
					tempat_lahir: "tempat lahir wajib diisi",
					tanggal_lahir: "tanggal lahir wajib diisi",
					alamat: "alamat wajib diisi",
					kecamatan: "kecamatan wajib diisi",
					kota: "kota/kabupaten wajib diisi",
					provinsi: "provinsi wajib diisi",
					kode_pos: "kode pos wajib diisi",
					telepon: "telepon wajib diisi",
					whatsapp: "whatsapp wajib diisi",
					pilih_jurusan: "jurusan wajib diisi",
					konsentrasi: "konsentrasi wajib diisi",
					ijazah: "ijazah wajib diisi",
					transkip: "transkip wajib diisi",
					pembayaran: "bukti pembayaran wajib diisi",
					foto: "foto wajib diisi",
					ktp: "ktp wajib diisi",
					formulir: "formulir wajib diisi",
					email: "email wajib diisi",
				},
				

				/* submit via ajax */
				/*
				submitHandler: function(form) {		
					var $submit = $('.submitting'),
						waitText = 'Submitting...';

					
					$.ajax({   	
				      type: "POST",
				      url: "php/send-email.php",
				      data: $(form).serialize(),

				      beforeSend: function() { 
				      	$submit.css('display', 'block').text(waitText);
				      },
				      success: function(msg) {
		               if (msg == 'OK') {
		               	$('#form-message-warning').hide();
				            setTimeout(function(){
		               		$('#contactForm').fadeOut();
		               	}, 1000);
				            setTimeout(function(){
				               $('#form-message-success').fadeIn();   
		               	}, 1400);
			               
			            } else {
			               $('#form-message-warning').html(msg);
				            $('#form-message-warning').fadeIn();
				            $submit.css('display', 'none');
			            }
				      },
				      error: function() {
				      	$('#form-message-warning').html("Something went wrong. Please try again.");
				         $('#form-message-warning').fadeIn();
				         $submit.css('display', 'none');
				      }
			      });    	
		  		}
				*/
			} );
			
		}else{
			//document.getElementById("loading_id").classList.remove("loadingh");
			//document.getElementById("loading_id").classList.add("loadings");
			document.getElementById('btnsave').style.display='none';
			document.getElementById('btnload').style.display='';
			document.getElementById("formDaftar").submit();
		}
	};
	contactForm();

});
@extends("layouts.template")
@section('content')
<style type="text/css">
#alur{
	border: 5px solid #ddd;
    padding: 10px 10px 10px 10px;
}
.modal {
   position: fixed;
   top: 20%;
   right: 100px;
   bottom: 0;
   left: 0;
   z-index: 1055;
   overflow: auto;
   overflow-y: auto;
}
</style>
@include('pages.navbar-second',['active' => 'Bandros','nav' => 'cart'])
<div class="container top-160">
	<div class="row myrounded mymargin" >
		<div class="myslide">
			<div id="slide_img" class="owl-carousel owl-theme">
            	<img src="/asset/img/bandros/bandros.jpg">  
            	<img src="/asset/img/bandros/bandros.jpg">  
            	<img src="/asset/img/bandros/bandros.jpg">  
            	<img src="/asset/img/bandros/bandros.jpg">  
            </div>
            
		</div>
	</div>
	<div id="hotel" class="row myrounded mymargin">
		<div class="title">
			<div class="title-detail">
			Bandros
			</div>
			<div class="body-detail">
				<p>
					Bandros adalah bus wisata yang disediakan Pemerintah Kota Bandung dan diperuntukkan bagi turis yang ingin keliling Kota Bandung.

Tur menggunakan Bandros diresmikan Wali Kota Bandung terdahulu, yaitu Ridwan Kamil pada Januari 2018.

Saat ini, ada puluhan unit bus Bandros yang beroperasi setiap hari, mulai pukul 09.00-16.00 WIB.

Bus tersebut ini dibagi dalam beberapa warna, yaitu biru, merah, kuning, ungu, serta pink.

Berbeda warna, berbeda pula rute yang ditempuh

				</p>
			</div>
		</div>
		
		<div class="feature">
			<div class="title-detail">
			
			</div>
			<div class="body-detail">
				
			</div>
		</div>
	</div>
	<div id="kamar" class="row myrounded mymargin" style="height: 270px">
		<div class="title">
			<div class="form-group">
				<div class="col-md-6">
					<h3>Rute</h3>
					<p id="alur">
						Alun-alun-Asia Afrika-Banceuy-ABC-Naripan-Braga-Lembong-Veteran-Ahmad Yani-Gatot Subroto-Burangrang-Lodaya-Pelajar Pejuang 45-Buahbatu-Soekarno Hatta-Cikadut-Leuwipanjang-Mohammad Toha-Pungkur-Dewi Sartika-Alun-alun
					</p>
				</div>
				<div class="col-md-3" style="">
					<h3>Ticket</h3>
					<select id="bandros" class="form-control" id="exampleFormControlSelect1">
				      <option value="BB">Bandros Biru</option>
				      <option value="BK">Bandros Kuning</option>
				      <option value="BU">Bandros Ungu</option>
				      <option value="BH">Bandros Hijau</option>
				      <option value="BP">Bandros Pink</option>
				    </select>
				</div>
				<div class="col-md-3" style="margin-top: 55px">
					<button id="get" class="button" data-toggle="modal" data-target="#add">Get Ticket</button>
				</div>
			
			</div>
		</div>
		
	</div>
	
</div>
<!-- modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="">Add to Chart</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
	      		<div class="col-md-4"><label>QTY</label></div>
	      		<div class="col-md-6 bottom-10">
	      			<div class="input-group">
			          <span class="input-group-btn">
			              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
			                  <span class=" icon-minus"></span>
			              </button>
			          </span>

			          <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="100">
			          <span class="input-group-btn">
			              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
			                  <span class=" icon-plus"></span>
			              </button>
			          </span>
			      </div>
	      		</div>
	      		<div class="col-md-4"><label>Add For</label></div>
	      		<div class="col-md-6">
	      			<input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
	      		</div>
	      	</div>
	        
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
	      </div>
	    </div>
	  </div>
	</div>
<!-- css buatan -->
<link rel="stylesheet" type="text/css" href="/asset/css/mystyle.css">
<script type="text/javascript">
</script>
<!-- hotel -->
<script type="text/javascript">

		$('#slide_img').owlCarousel({
		    // items:3,
		        loop:false,
		        // center:true,
		        margin:10,
		        responsive:{
	        		0:{
	            		items:1
	        		},
	        		600:{
	            		items:3
	        		},
	        		1000:{
	            		items:3
	        		}
	    		}
		})
	var rute = [
	'Alun-alun-Asia Afrika-Banceuy-ABC-Naripan-Braga-Lembong-Veteran-Ahmad Yani-Gatot Subroto-Burangrang-Lodaya-Pelajar Pejuang 45-Buahbatu-Soekarno Hatta-Cikadut-Leuwipanjang-Mohammad Toha-Pungkur-Dewi Sartika-Alun-alun',
	'Balai Kota (Taman Dewi Sartika)-Perintis Kemerdekaan-Wastukencana-RE Martadinata-Ir H Djuanda-Surapati-Sentot Ali Basya-Diponegoro-Cimandiri-Cisanggarung-Citarum-Cilaki-Bengawan- Anggrek-Patrakomala-Gandapura-Gudang Utara-Ahmad Yani-Asia Afrika-Alun-alun-Banceuy-Naripan-Braga-Suniaraja-Perintis Kemerdekaan-Wastukencana-Aceh-Merdeka-Balai Kota (Taman Dewi Sartika)',
	'Gasibu-Flyover Pasupati-Surapati-PHH Mustofa-AH Nasution-Ujungberung-Kaum Wetan- Ujungberung-Pacuan Kuda-Arcamanik Endah-Puri Dago Timur-Terusan Jakarta- Jakarta-Sukabumi-Laswi-Ahmad Yani- WR Supratman-Diponegoro-Gasibu',
	'Alun-alun-Asia Afrika-Oto Iskandardinata-Cibadak-Klenteng-Kebong Jati-Pasirkaliki-Pajajaran-Arjuna-Aruna-Pajajaran-Pasirkaliki-Sukajadi-Setiabudi-Cihampelas-Wastukencana-Cicendo-Kebon Kawung-Pasirkaliki-Kebon Jati-Oto Iskandardinata-Kepatihan-Dewi Sartika-Dalem Kaum-Asia Afrika-Alun-alun',
	'Gedung Sate-Diponegoro-Sulanjana-Tamansari-Siliwangi-Simpang Dago-Ir H Djuanda-Dago Tea House-Ir H Djuanda-Simpang Dago-Sumur Bandung-Tamansari-Siliwangi-Cihampelas-Flyover Pasupati-Surapati-Sentot Ali Basyah-Diponegoro-Gedung Sate'
	];
	$("#bandros").on('change',function() {
		console.log($(this).val())
		if($(this).val() == 'BB'){
			$("#alur").html(rute[0]);
		}
		else if($(this).val() == 'BK'){
			$("#alur").html(rute[1]);
		}
		else if($(this).val() == 'BU'){
			$("#alur").html(rute[2]);
		}
		else if($(this).val() == 'BH'){
			$("#alur").html(rute[3]);
		}
		else if($(this).val() == 'BP'){
			$("#alur").html(rute[4]);
		}
	})
</script>
<script type="text/javascript">
	$('.btn-number').click(function(e){
	    e.preventDefault();
	    
	    fieldName = $(this).attr('data-field');
	    type      = $(this).attr('data-type');
	    var input = $("input[name='"+fieldName+"']");
	    var currentVal = parseInt(input.val());
	    if (!isNaN(currentVal)) {
	        if(type == 'minus') {
	            
	            if(currentVal > input.attr('min')) {
	                input.val(currentVal - 1).change();
	            } 
	            if(parseInt(input.val()) == input.attr('min')) {
	                $(this).attr('disabled', true);
	            }

	        } else if(type == 'plus') {

	            if(currentVal < input.attr('max')) {
	                input.val(currentVal + 1).change();
	            }
	            if(parseInt(input.val()) == input.attr('max')) {
	                $(this).attr('disabled', true);
	            }

	        }
	    } else {
	        input.val(0);
	    }
	});
	$('.input-number').focusin(function(){
	   $(this).data('oldValue', $(this).val());
	});
	$('.input-number').change(function() {
	    
	    minValue =  parseInt($(this).attr('min'));
	    maxValue =  parseInt($(this).attr('max'));
	    valueCurrent = parseInt($(this).val());
	    
	    name = $(this).attr('name');
	    if(valueCurrent >= minValue) {
	        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
	    } else {
	        alert('Sorry, the minimum value was reached');
	        $(this).val($(this).data('oldValue'));
	    }
	    if(valueCurrent <= maxValue) {
	        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
	    } else {
	        alert('Sorry, the maximum value was reached');
	        $(this).val($(this).data('oldValue'));
	    }
	    
	    
	});
	$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>
@endsection
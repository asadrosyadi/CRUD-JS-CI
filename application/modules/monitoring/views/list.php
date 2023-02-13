<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Monitoring</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Dashboard</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Monitoring</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
               <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
				<button class="btn waves-effect waves-light btn-rounded btn-primary text-center" data-toggle="modal" data-target="#ModalaAdd">Tambah Data</button>
			</div>
				
			</div>
                </div>
            </div>
			
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
           <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
				
                <div class="row">
				
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
					<h4 class="card-title">Monitoring</h4>
			<div class="table-responsive">
            <table class="table">
               <thead>
                <tr>
                    <th>NO</th>
					<th>Time</th>
					<th>Nilai</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="show_data">
                 
            </tbody>
        </table>
        </div>
		</div>
		</div>
		</div>
</div>
</div>
 <!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">TAMBAH DATA</h3>
            </div>
            <form>
                <div class="modal-body">
 

				
                  <div class="form-group">
                        <label class="control-label col-xs-3" >Nilai</label>
                        <div class="col-xs-9">
                            <input name="Nilai" id="Nilai" class="form-control" type="text" placeholder="Nilai">
                        </div>
                    </div>

                    
					
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_simpan">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->
 
        <!-- MODAL EDIT -->
        <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Edit Data</h3>
            </div>
           <form>
                <div class="modal-body">
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Time</label>
                        <div class="col-xs-9">
                            <input name="Time_edit" id="Time_edit" class="form-control" type="text" placeholder="Time">
                        </div>
                    </div>
				
                  <div class="form-group">
                        <label class="control-label col-xs-3" >Nilai</label>
                        <div class="col-xs-9">
                            <input name="Nilai_edit" id="Nilai_edit" class="form-control" type="text" placeholder="Nilai">
                        </div>
                    </div>

					<div class="form-group" hidden>
                        <label class="control-label col-xs-3" >ID</label>
                        <div class="col-xs-9">
                            <input name="id_edit" id="id_edit" class="form-control" type="text" placeholder="ID FORM" style="width:335px;" required>
                        </div>
                    </div>	
                    
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>
		</div>
        <!--END MODAL EDIT-->

         <!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                           
                            <input type="hidden" name="kode" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah anda yakin mau data ini?</p></div>
                                         
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->
<script type="text/javascript">
    $(document).ready(function(){
        tampil_data_barang();   //pemanggilan fungsi tampil barang.
  
          
        //fungsi tampil barang
        function tampil_data_barang(){
            $.ajax({
                type  : 'GET',
                url   : '<?php echo base_url() ?>monitoring/data_data',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
					var o = 1;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+o+'</td>'+
                                '<td>'+data[i].Time+'</td>'+
                                '<td>'+data[i].Nilai+'</td>'+
								
                                '<td>'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id+'">Edit</a>'+' '+
									
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
						o++;
                    }
					
                    $('#show_data').html(html);
                }
				
            });
        }
 
        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : 'GET',
                url  : '<?php echo base_url() ?>monitoring/get_data',
                dataType : 'JSON',
                data : {id:id},
                success: function(data){
                    $.each(data,function(Time, Nilai, id){
                        $('#ModalEdit').modal('show');
                        $('[name="Time_edit"]').val(data.Time);
						$('[name="Nilai_edit"]').val(data.Nilai);
                        $('[name="id_edit"]').val(data.id);
                    });
                }
            });
            return false;
        });
 
 
        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id =$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('#textkode').val(id);
        });
 
       
        
 
        //Hapus Ruang
        $('#btn_hapus').on('click',function(){
            var kode =$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url() ?>monitoring/hapus",
            dataType : "JSON",
                    data : {id: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_barang();
                    }
                });
                return false;
            });
 
    

$('#btn_simpan').on('click',function(){
			var data2= $('#Nilai').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('monitoring/add')?>",
                dataType : "JSON",
                data : {Nilai:data2 },
                success: function(data){
                    $('[name="Nilai"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_barang();
                }
            });
            return false;
        });

         $('#btn_update').on('click',function(){
              var data1=$('#Time_edit').val();
              var data2=$('#Nilai_edit').val();
			var id=$('#id_edit').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('monitoring/edit')?>",
                dataType : "JSON",
                data : {Time:data1 , Nilai:data2, id:id},
                success: function(data){
                     $('[name="Time_edit"]').val("");
                    $('[name="Nilai_edit"]').val("");
                   $('[name="id_edit"]').val("");
                    $('#ModalEdit').modal('hide');
                    tampil_data_barang();
                }
            });
            return false;
        });
}); 
</script>
<div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Data Jabatan Pemerintah Kota Manado</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <div class="input-group">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <!-- <h2>Form validation <small>sub title</small></h2> -->
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix">
                                   
                                    </div>
                                </div>
                                <div id="">
                                <form id="form_jabatan" class="" action="" method="post" novalidate>                                      
                                        <span class="section">--</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Jabatan<span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="id_jabatan" id="id_jabatan"  required="required" >
                                                <?php if($jabatan){
                                                foreach($jabatan as $ls){
                                                ?>
                                                <option value="<?=$ls['id_jabatanpeg']?>">
                                                    <?=$ls['nama_jabatan']?>
                                                </option>
                                                <?php } } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Parent Jabatan<span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" class='optional' name="parent_id_jabatan" id="parent_id_jabatan"> 
                                                <?php if($parent_jabatan){
                                                foreach($parent_jabatan as $ls){
                                                ?>
                                                <option value="<?=$ls['id_jabatan']?>','<?=$ls['parent_id_jabatan']?>">
                                                    <?=$ls['Result']?>
                                                </option>
                                                <?php } } ?>
                                                </select>
                                            </div>
                                        </div>
                                      

                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Submit</button>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <!-- <h2>Form validation <small>sub title</small></h2> -->
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                            </div>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix">
                                   
                                    </div>
                                </div>
                                <div id="treeview_json">
                               
                                </div>
                              
                                <div id="list_jabatan" style="margin-top:20px;">
                               
                               </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script type="text/javascript">

$( document ).ready(function() {
    $('select').select2();
     loadTree()
    //  loadJabatan()

    
});

  

    function loadTree(){
   
    var treeData;
    $('#treeview_json').html('')
    $('#treeview_json').append(divLoaderNavy)
    $('#treeview_json').load("<?=base_url("C_Master/getItem/")?>", function(){
        
    })
//    $.ajax({
//         type: "GET",  
//         url: "<?=base_url("C_Master/getItem")?>",
//         dataType: "json",       
//         success: function(response)  
//         {
//            initTree(response)
//         }   
//         });
        }




    

     function loadJabatan(){
        var url = "<?=base_url("master/C_Master/LoadJabatan/")?>"
     
        $('#list_jabatan').html('')
        $('#list_jabatan').append(divLoaderNavy)
        $('#list_jabatan').load("<?=base_url("C_Master/LoadJabatan/")?>", function(){
        
        })
    }

   

        $('#form_jabatan').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url: '<?=base_url("C_Master/createTreeJabatan")?>',
            method: 'post',
            data: $(this).serialize(),
            success: function(){
                // successtoast('Data berhasil ditambahkan')
                loadTree()
            }, error: function(e){
                errortoast('Terjadi Kesalahan')
            }
        })
    })



    
</script>
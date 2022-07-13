<?php if($jabatan){?>
    <style>
 
    
        tr:hover {background-color: #c5b8ba;}
        .table-div {
            width: 200%;
        }

     
    </style>

    <div class="table-responsive">
    <div class="table-div"> 
            <!-- <button id="buttonn">Remove the style attribute from all p elements</button> -->
            <table id="datatable" class="table table-bordered table-sm" cellspacing="0"
  width="100%" border="0">
            <thead >
            <tr class="row1" >
            <td class="" colspan="0"  rowspan="3"> <span>Jabatan</span> </td>
            <td class="" colspan="0"  rowspan="3"></td>
            <td class="" colspan="0"  rowspan="3"> <span style="color: #ffffff;"></span> </td>
            <td class="" colspan="0"  rowspan="3"> <span style="color: #ffffff;"></span> </td>


         
            <td class="column2 style3 s style5 " colspan="6">DATA ASN BERDASARKAN ANJAB/ABK</td>
            <td class="column8 style3 s style5 " colspan="6">KONDISI ASN SAAT INI</td>
            <td class="column14 style3 s style5 " colspan="9">Persentase Perangkat Daerah yang Kebutuhan Jumlah Jabatan Fungsional dan Pelaksana Terpenuhi</td>
            <td class="column23 style3 s style5 " colspan="7">Persentase Perangkat Daerah yang Jumlah Jabatan Struktural Sudah Terpenuhi </td>
          </tr>
         
        
          <tr class="row1">
            <td class="column2 style8 s style22 " rowspan="2">JPT</td>
            <td class="column3 style8 s style22 " rowspan="2">ADMINISTRATOR</td>
            <td class="column4 style8 s style22 " rowspan="2">PENGAWAS</td>
            <td class="column5 style9 s style23 " rowspan="2">PELAKSANA</td>
            <td class="column6 style9 s style23 " rowspan="2">JFT</td>
            <td class="column7 style10 s style24 " rowspan="2">TOTAL ASN</td>
            <td class="column8 style8 s style22 " rowspan="2">JPT</td>
            <td class="column9 style8 s style22 " rowspan="2">ADMINISTRATOR</td>
            <td class="column10 style8 s style22 " rowspan="2">PENGAWAS</td>
            <td class="column11 style9 s style23 " rowspan="2">PELAKSANA</td>
            <td class="column12 style9 s style23 " rowspan="2">JFT</td>
            <td class="column13 style10 s style24 " rowspan="2">TOTAL ASN</td>
            <td class="column14 style11 s style12 " colspan="2">Terisi</td>
            <td class="column16 style11 s style12 " colspan="2">lowong</td>
            <td class="column18 style13 s style13 " colspan="2">kelebihan</td>
            <td class="column20 style14 s ">selisih </td>
            <td class="column21 style15 s style27 " rowspan="2">Jml sesuai kebutuhan</td>
            <td class="column22 style15 s style27 " rowspan="2">Keterangan</td>
            <td class="column23 style16 s style17 " colspan="3">&nbsp;Jumlah Jabatan Struktural yg Sudah Terpenuhi / terisi</td>
            <td class="column26 style16 s style18 " colspan="3">Jumlah Jabatan Strutural yang kosong</td>
            <td class="column29 style19 s style29 " rowspan="2">Total Jabatan Struktural</td>
          </tr>
          <tr class="row2">
            <td class="column14 style25 s ">JFT</td>
            <td class="column15 style26 s ">Pelaksana</td>
            <td class="column16 style25 s ">JFT</td>
            <td class="column17 style26 s ">Pelaksana</td>
            <td class="column18 style25 s ">JFT</td>
            <td class="column19 style26 s ">Pelaksana</td>
            <td class="column20 style26 null "></td>
            <td class="column23 style28 s ">JPT</td>
            <td class="column24 style28 s ">ADMINISTRATOR</td>
            <td class="column25 style28 s ">PENGAWAS</td>
            <td class="column26 style28 s ">JPT</td>
            <td class="column27 style28 s ">ADMINISTRATOR</td>
            <td class="column28 style28 s ">PENGAWAS</td>
          </tr>

          </thead>
            <tbody class="table-wrapper-scroll-y my-custom-scrollbar">
           
                    <?php $no = 1; foreach($jabatan as $rs){ ?>
                        <tr  class="black">
                            <td colspan=4><a href="#" hidden><?=$no;?></a> <a style="font-weight:bold" href="#" class="toggler" data-prod-cat="1"> <?= $rs['name']?> </a></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                           
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                           
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
                        </tr>

                       
                        <?php $no_sub = 1;  $no_sub2 =""; foreach($rs['child'] as $sb){ ?>
                            <tr class="tes cat1 blue">
                                <td colspan=1><a href="#" hidden><?="$no.$no_sub";?></a></td>
                                <td colspan=3><a style="font-weight:bold;color:blue" href="#" class="toggler" data-prod-cat=<?="$no$no_sub";?>>  <?=$sb['name']?> </a></td>
                                <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                           
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                           
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                                </tr>


                             <?php $no_sub2 = 1;  $cat= "cat$no$no_sub"; if($sb['child']){ foreach($sb['child'] as $sb2){ ?>
                                <tr class="cat1 <?=$cat;?> green" >
                                <td colspan=2><a href="#" hidden><?="$no.$no_sub.$no_sub2";?></a></td>
                                    <td colspan=2><a style="font-weight:bold;color:green" href="#" class="toggler" data-prod-cat=<?="$no$no_sub$no_sub2";?>><?=$sb2['name']?> </a></td>
                                    <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                           
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                           
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                                    </tr>


                                <?php $no_sub3 = 1;  $cat2= "cat$no$no_sub$no_sub2"; if($sb2['child']){ foreach($sb2['child'] as $sb3){ ?>
                                <tr class="cat1 <?=$cat2;?> red" >
                                <td  colspan=3><a href="#" hidden><?="$no.$no_sub.$no_sub2.$no_sub3";?></a></td>
                                    <td colspan=1><a style="font-weight:bold;color:red" href="#" class="toggler" data-prod-cat=<?="$no$no_sub$no_sub2$no_sub3";?>><?=$sb3['name']?></a></td>
                                    <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                           
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                           
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                                    </tr>
                                   
                             <?php $no_sub3++; } } ?>

                             <?php $no_sub2++; } } ?>
                            
                        <?php  $no_sub++; } ?>



                        <?php } ?>


                               
                                </tbody>
                                </table>
                                </div>
                                </div>
                                <?php } else { ?>
                                    <div class="col-12 text-center">
                                        <h6><i class="fa fa-exclamation"></i> Data tidak ditemukan</h6>
                                    </div>
                                <?php } ?> 
                                
     
<script>

    $(document).ready(function(){
        
        $(".blue").hide();
        $(".green").hide();
        $(".red").hide();
    $(".toggler").click(function(e){
        e.preventDefault();
        console.log('.cat'+$(this))
        $('.cat'+$(this).attr('data-prod-cat')).toggle();
        
        // if($('.cat'+$(this).attr('data-prod-cat')).is(":visible")){
           
        //     } else{
            
        //     }
            
        });

        $(".blue").on('click', function(event){
            $(".red").hide();
        });

        $(".black").on('click', function(event){
            if($('.cat'+$(this).attr('data-prod-cat')).is(":visible")){
                $(".blue").hide();
            }
            
            $(".green").hide();
            $(".red").hide();
        });
        // $("#buttonn").click(function(){
        //   $("tr").removeAttr("hidden");          
        // });
});
</script>

<script>
             $('#datatable').DataTable({
                "ordering": false,
                "scrollY": "200px",
                 "scrollCollapse": true,
                 "scrollX": true
             } );

            

                $('#dtDynamicVerticalScrollExample').DataTable({
                    "scrollY": "50vh",
                    "scrollCollapse": true,
                });
                $('.dataTables_length').addClass('bs-select');
            

</script>
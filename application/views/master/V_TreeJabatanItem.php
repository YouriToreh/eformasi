<?php if($jabatan){?>
    <div class="">
            <table id="datatable" class="table table-striped table-bordered bulk_action" style="width:100%" border="1">
                                        <!-- <table border="1"> -->
                                <thead>
                                <tr class="row0" >
            <td class="table-danger" colspan="0"  rowspan="3"> <span style="color: #f5c6cb;">Jabatan</span> </td>
            <td class="table-danger" colspan="0"  rowspan="3">Jabatan</td>
            <td class="table-danger" colspan="1"  rowspan="3"> <span style="color: #f5c6cb;">Jabatan</span> </td>

            <td class="column1 style2 s style21 table-danger" rowspan="3"></td>
            <!-- <td class="column2 style3 s style5 table-danger" colspan="6">DATA ASN BERDASARKAN ANJAB/ABK</td>
            <td class="column8 style3 s style5 table-danger" colspan="6">KONDISI ASN SAAT INI</td>
            <td class="column14 style3 s style5 table-danger" colspan="9">Persentase Perangkat Daerah yang Kebutuhan Jumlah Jabatan Fungsional dan Pelaksana Terpenuhi</td>
            <td class="column23 style3 s style5 table-danger" colspan="7">Persentase Perangkat Daerah yang Jumlah Jabatan Struktural Sudah Terpenuhi </td> -->
          </tr>
          <!-- <tr class="row1">
            <td class="column2 style8 s style22 table-danger" rowspan="2">JPT</td>
            <td class="column3 style8 s style22 table-danger" rowspan="2">ADMINISTRATOR</td>
            <td class="column4 style8 s style22 table-danger" rowspan="2">PENGAWAS</td>
            <td class="column5 style9 s style23 table-danger" rowspan="2">PELAKSANA</td>
            <td class="column6 style9 s style23 table-danger" rowspan="2">JFT</td>
            <td class="column7 style10 s style24 table-danger" rowspan="2">TOTAL ASN</td>
            <td class="column8 style8 s style22 table-danger" rowspan="2">JPT</td>
            <td class="column9 style8 s style22 table-danger" rowspan="2">ADMINISTRATOR</td>
            <td class="column10 style8 s style22 table-danger" rowspan="2">PENGAWAS</td>
            <td class="column11 style9 s style23 table-danger" rowspan="2">PELAKSANA</td>
            <td class="column12 style9 s style23 table-danger" rowspan="2">JFT</td>
            <td class="column13 style10 s style24 table-danger" rowspan="2">TOTAL ASN</td>
            <td class="column14 style11 s style12 table-danger" colspan="2">Terisi</td>
            <td class="column16 style11 s style12 table-danger" colspan="2">lowong</td>
            <td class="column18 style13 s style13 table-danger" colspan="2">kelebihan</td>
            <td class="column20 style14 s table-danger">selisih </td>
            <td class="column21 style15 s style27 table-danger" rowspan="2">Jml sesuai kebutuhan</td>
            <td class="column22 style15 s style27 table-danger" rowspan="2">Keterangan</td>
            <td class="column23 style16 s style17 table-danger" colspan="3">&nbsp;Jumlah Jabatan Struktural yg Sudah Terpenuhi / terisi</td>
            <td class="column26 style16 s style18 table-danger" colspan="3">Jumlah Jabatan Strutural yang kosong</td>
            <td class="column29 style19 s style29 table-danger" rowspan="2">Total Jabatan Struktural</td>
          </tr>
          <tr class="row2">
            <td class="column14 style25 s table-danger">JFT</td>
            <td class="column15 style26 s table-danger">Pelaksana</td>
            <td class="column16 style25 s table-danger">JFT</td>
            <td class="column17 style26 s table-danger">Pelaksana</td>
            <td class="column18 style25 s table-danger">JFT</td>
            <td class="column19 style26 s table-danger">Pelaksana</td>
            <td class="column20 style26 null table-danger"></td>
            <td class="column23 style28 s table-danger">JPT</td>
            <td class="column24 style28 s table-danger">ADMINISTRATOR</td>
            <td class="column25 style28 s table-danger">PENGAWAS</td>
            <td class="column26 style28 s table-danger">JPT</td>
            <td class="column27 style28 s table-danger">ADMINISTRATOR</td>
            <td class="column28 style28 s table-danger">PENGAWAS</td>
          </tr> -->
                                </thead>


                                <tbody>
                                <?php $no = 1; foreach($jabatan as $rs){ ?>
                        <tr >
                            <td colspan=4><button onclick="toggle(this)">Hide tr</button> <?= $rs['name']?></td>
                            <!-- <td></td>
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
                            <td></td> -->
                            
                        </tr>


                        <?php $no_sub = 1;foreach($rs['child'] as $sb){ ?>
                            <tr id="mytr">
                                <td colspan=1></td>
                                <td colspan=3><?=$sb['name']?></td>
                                <!-- <td></td>
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
                            <td></td> -->

                                </tr>
                             <?php if($sb['child']){ foreach($sb['child'] as $sb2){ ?>
                                <tr >
                                <td colspan=2></td>
                                    <td colspan=2><?=$sb2['name']?></td>
                                    <!-- <td></td>
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
                            <td></td> -->
                                    </tr>
                                    <?php if($sb2['child']){ foreach($sb2['child'] as $sb3){ ?>
                                <tr>
                                <td  colspan=3></td>
                                    <td colspan=1><?=$sb3['name']?></td>
                                    <!-- <td></td>
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
                            <td></td> -->
                                    </tr>
                                    
                             <?php } } ?>

                             <?php } } ?>
                        
                        <?php } ?>



                        <?php } ?>


                               
                                </tbody>
                                </table>
                                </div>
                              
                                <?php } else { ?>
                                    <div class="col-12 text-center">
                                        <h6><i class="fa fa-exclamation"></i> Data tidak ditemukan</h6>
                                    </div>
                                <?php } ?>  
<script>
             $('#datatable').DataTable({
                "ordering": false
             } );

             function toggle() {
    let element = document.getElementById("mytr");
    let hidden = element.getAttribute("hidden");

    if (hidden) {
       element.removeAttribute("hidden");
    //    button.innerText = "Hide tr";
    } else {
       element.setAttribute("hidden", "hidden");
    //    button.innerText = "Show tr";
    }
  }

</script>
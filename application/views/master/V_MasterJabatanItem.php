<?php if($jabatan){?>
                                    <table id="datatable" class="table table-striped table-bordered bulk_action" style="width:100%">
                                <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>Nama Jabatan</th>
                                    <th>Jenis Jabatan</th> 
                                    <th></th>
                                    </tr>
                                </thead>


                                <tbody>
                                <?php $no = 1; foreach($jabatan as $rs){ ?>
                                <tr>
                                    <td align="center"><?=$no++;?></td>
                                    <td><?=$rs['nama_jabatan'];?></td>
                                    <td><?=$rs['jenis_jabatan'];?></td>
                                    <td></td>
                
                                
                            
                                </tr>
                            <?php } ?>
                                </tbody>
                                </table>

                              
                                <?php } else { ?>
                                    <div class="col-12 text-center">
                                        <h6><i class="fa fa-exclamation"></i> Data tidak ditemukan</h6>
                                    </div>
                                <?php } ?>  
                                <script>
                                $('#datatable').DataTable({
                                "ordering": false
                                } );

                            </script>
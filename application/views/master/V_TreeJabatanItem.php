<?php if($jabatan){?>
                                    <table id="datatable" class="table table-striped table-bordered bulk_action" style="width:100%">
                                <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>Nama Jabatan</th>
                                    <th>Parent Jabatan</th> 
                                    <th></th>
                                    </tr>
                                </thead>


                                <tbody>
                                <?php $no = 1; foreach($jabatan as $rs){ ?>
                        <tr>
                            <td class="text-center"><?=$no++?></td>
                            <td colspan=2><?= print_r($rs['child'])?></td>
                        </tr>
                        <?php $no_sub = 1; foreach($rs['child'] as $sb){ ?>
                            <tr>
                                <td colspan=2></td>
                                <td><?=$sb?></td>
                            </tr>
                        <?php } ?>
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
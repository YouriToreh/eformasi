<div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Data Jabatan Pemerintah Kota Manado</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
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
                                <div id="list_jabatan">
 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>         
<script type="text/javascript">

    $(function(){
        loadJabatan()
    })

     function loadJabatan(){
        var url = "<?=base_url("master/C_Master/LoadJabatan/")?>"
     
        $('#list_jabatan').html('')
        $('#list_jabatan').append(divLoaderNavy)
        $('#list_jabatan').load("<?=base_url("C_Master/LoadJabatan/")?>", function(){
        
        })
    }


    
</script>
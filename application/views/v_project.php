	
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Data Barang</title>
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
</head>
<body>

    <div class="container">
        <h1>Data <small>Barang!</small>
            <div class="pull-right"><a class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_add_new"> Add New</a></div>       
        </h1>

        <table class="table table-bordered table-striped" id="mydata">
            <thead>
                <tr>
                    <td>Kode Barang</td>
                    <td>Nama Barang</td>
                    <td>Satuan</td>
                    <td>Harga</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($data->result_array() as $i):
                    $id=$i['id'];
                    $project_name=$i['project_name'];
                    $project_desc=$i['project_desc'];
                    
                    ?>
                    <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $project_name;?></td>
                        <td><?php echo $project_desc;?></td>
                        
                        <td>Rp.5000</td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>

    </div>


    <!-- ============ MODAL ADD BARANG =============== -->
    <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="myModalLabel">Add New Barang</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/projectcharter/simpan_project'?>">
                    <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Project Name</label>
                            <div class="col-xs-8">
                                <input name="project_name" class="form-control" type="text" placeholder="Project Name..." >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Project Description</label>
                            <div class="col-xs-8">
                                <input name="project_desc" class="form-control" type="text" placeholder="Project Name..." >
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL ADD BARANG-->

<script src="<?php echo base_url().'assets/js/jquery-2.2.4.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
<script>
    $(document).ready(function(){
        $('#mydata').DataTable();
    });
</script>
</body>
</html>

<?php require_once(APPPATH . 'views/css-page.php'); ?>

<div id="accordion2" class="accordion">  

    <div class="align-left">
        <h3>Pending Actions</h3>
        <?php echo $this->session->flashdata('msg'); ?>
    </div>  

    <div class="row-fluid sortable">		

        <div class="box-body">

            <table id="example1" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr> 
                        <th>EXECUTE</th>
                        <th>ID</th>
                        <th>OBJECT</th>
                        <th>ACTION</th>
                        <th>DATE</th>
                        <th>USER</th>                                     
                        <th>TYPE</th>
                        <th>COUNTRY</th>
                        <th>DELETE RECORD</th>
                    </tr>
                </thead>   
                <tbody>

                    <?php
                    if (is_array($logs) && count($logs)) {
                        foreach ($logs as $loop) {
                            ?>  
                            <tr >
                                <td>
                                    <a class="btn-info btn-small icon-beaker" href="<?php echo base_url() . "index.php/pending/execute/" . $loop->id; ?>"></a>
                                </td>

                                <td> 
                                    <?php echo $loop->id; ?>
                                </td>
                                <td> 
                                    <?php echo $loop->object; ?>
                                </td>
                                <td> 
                                    <?php echo $loop->action; ?>
                                </td>
                                <td> 
                                    <?php echo $loop->created; ?>
                                </td>
                                <td> 
                                    <?php echo $loop->user; ?>
                                </td>
                                <td> 
                                    <?php echo $loop->type; ?>
                                </td>
                                <td> 
                                    <?php echo $loop->country; ?>
                                </td>

                                <td class="center">
                                    <a class="btn-danger btn-small icon-remove" href="<?php echo base_url() . "index.php/pending/delete/" . $loop->id; ?>"></a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>            

        </div>


    </div>
    <?php require_once(APPPATH . 'views/js-page.php'); ?>
 
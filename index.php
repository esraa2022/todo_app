<?php 

include('database/run_DB.php');
include ('core/session.php');

$sql = "SELECT * FROM `tasks` ";
$results = run($sql);
?>

<?php include('include/header.php');?>
  

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="handeler/store_task.php" method="POST" class="form border p-2 my-5">
                    <?php if (!empty(sessionGet('success'))):?>
                        <div class="alert alert-success text-center">
                            <?= sessionGet('success'); ?>
                        </div>
                        <?php sessionDelete('success'); ?>
                        <?php endif;?>

                        <?php if (!empty(sessionGet('edite'))):?>
                        <div class="alert alert-success text-center">
                            <?= sessionGet('edite'); ?>
                        </div>
                        <?php sessionDelete('edite'); ?>
                        <?php endif;?>

                        <?php if (!empty(sessionGet('delete'))):?>
                        <div class="alert alert-success text-center">
                            <?= sessionGet('delete');?>
                        </div>
                        <?php sessionDelete('delete'); ?>
                        <?php endif;?>

                        <?php if (!empty(sessionGet('errores'))):?>
                            <?php foreach(sessionGet('errores') as $errore):?>
                        <div class="alert alert-danger text-center">
                            <?= $errore;?>
                        </div>
                        <?php endforeach;?>
                        <?php sessionDelete('errores'); ?>
                        <?php endif;?>

                        <?php if (!empty(sessionGet('editeErrores'))):?>
                            <?php foreach(sessionGet('editeErrores') as $errore):?>
                        <div class="alert alert-danger text-center">
                            <?= $errore?>
                        </div>
                        <?php endforeach?>
                        <?php sessionDelete('editeErrores') ?>
                        <?php endif;?>

                    <input type="text" name="title" class="form-control my-3 border border-success" placeholder="add new todo">
                    <input type="submit" value="Add" class="form-control btn btn-primary my-3 " placeholder="add new todo">
                </form>
            </div>
            <div class="col-12">
                <table class="table table-bordered">
                    
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Task</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while($row=mysqli_fetch_assoc($results)):?>
                            <tr>
                                
                                <td><?= $row['id']?></td>
                                <td><?= $row['title']?></td>
                              
                                <td>
                                    <a href="handeler/delete.php?id=<?=$row['id']?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> </a>
                                    <a href="handeler/edite.php?id=<?=$row['id']?>" class="btn btn-info"><i class="fa-solid fa-edit"></i> </a>
                                </td>
                                  
                            </tr>
                            <?php endwhile;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include('include/footer.php');?>

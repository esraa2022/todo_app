<?php
include('../database/run_DB.php');
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql = "SELECT `title` FROM `tasks` WHERE `id`=$id";
    $results=run($sql);
    $title=mysqli_fetch_assoc($results);
}

?>
<?php include('../include/header.php');?>





  

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="update.php" method="POST" class="form border p-2 my-5">
                    <?php if (isset($_SESSION['edite'])):?>
                        <div class="alert alert-success text-center">
                            <?= $_SESSION['edite'] ?>
                        </div>
                        <?php endif;?>
                        <input type="hidden" value="<?php echo $id; ?>" name="id">

                    <input  value="<?php echo $title['title']?>" type="text" name="title" class="form-control my-3 border border-success" placeholder="add new todo" >
                    <input type="submit" value="Update" class="form-control btn btn-primary my-3 " placeholder="add new todo">
                </form>
            </div>
            
        </div>
    </div>

    <?php include('../include/footer.php');?>
 

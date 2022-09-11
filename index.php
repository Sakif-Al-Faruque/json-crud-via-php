
    <?php 
        require_once("include/header.php"); 
        require_once("data/data_operation.php"); 

    ?>

    <section class="view-data mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped text-center">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Picture</th>
                                <th colspan="3">Opeation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $users = GetData();

                                foreach($users as $i => $user){
                            ?>
                            <tr>
                                <td><?php echo $user["name"]; ?></td>
                                <td><?php echo $user["email"]; ?></td>
                                <td><?php echo $user["phone"]; ?></td>
                                <td><img src="uploads/<?php 
                                    if(isset($user["img"])){
                                    echo $user["img"];

                                }?>" alt="uploaded user image" height="50px" width="50px"></td>
                                <td><a href="preview.php?id=<?php echo $user["id"]; ?>" class="btn btn-block btn-outline-primary">Preview</a></td>
                                <td><a href="update.php?id=<?php echo $user["id"]; ?>" class="btn btn-block btn-outline-warning">Update</a></td>
                                <td>    
                                    <form action="delete.php" method="post">
                                        <input type="hidden" value="<?php echo $user["id"]; ?>" name="id">
                                        <input type="submit" value="Delete" class="btn btn-block btn-outline-danger">
                                    </form>  
                                </td>                  
                            </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <?php require_once("include/footer.php"); ?>

    



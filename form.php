<section class="form-part mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 bg-dark text-light text-center py-3"><h3><?php 
                if(isset($_GET["id"])){
                    echo "Update Data";
                }else{
                    echo "Create Data";
                }
            ?></h3></div>
            <div class="offset-md-3 col-md-6 mt-3">
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" value="<?php echo $user["name"] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" name="username" value="<?php echo $user["username"] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">E-mail</label>
                    <input type="email" name="email" value="<?php echo $user["email"] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                    <input type="text" name="phone" value="<?php echo $user["phone"] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Website</label>
                    <input type="text" name="website" value="<?php echo $user["website"] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Image</label>
                        <input class="form-control" name="img" type="file" id="formFile">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <?php if(isset($_GET["id"])){ ?>
                    <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                <?php } ?>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
            </div>
        </div>
    </div>
</section>
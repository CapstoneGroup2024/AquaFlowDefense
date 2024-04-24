<?php 
    include('includes/header.php');
    include('../middleware/adminMid.php');
?>
<!--------------- CATEGORY PAGE --------------->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $category = getByID('categories', $id);

                    if(mysqli_num_rows($category) > 0){
                        $data = mysqli_fetch_array($category);
            ?>  
                        <div class="card mt-4">
                        <div class="card-header">
                            <h4 style="font-family: 'Suez One', sans-serif; font-size: 35px;">Edit Category</h4>
                        </div>
                            <div class="card-body">
                                <!--------------- FORM--------------->
                                <form action="codes.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <input type="hidden" name="category_id" value="<?=$data['id']; ?>">
                                                <label for="">Name</label>
                                                <input type="text" value="<?=$data['name']; ?>" class="form-control" placeholder="Enter Category Name" name="name" id="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label for="">Slug</label>
                                                <input type="text" value="<?=$data['slug']; ?>" class="form-control" placeholder="Enter Slug" name="slug" id="slug">
                                            </div>
                                        </div>
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <label for="">Description</label>
                                                <textarea class="form-control" name="description" placeholder="Enter Description" id="description" rows="3"><?=$data['description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <label for="">Upload Image</label>
                                                <input type="file" class="form-control" name="image" id="image">
                                                <label for="" style="margin-right: 10px;">Current Image</label>
                                                <input type="hidden" name="old_image" value="<?=$data['image']; ?>">
                                                <img src="../uploads/<?=$data['image']; ?>" height="50px" width="50px" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <label for="">Meta Title</label>
                                                <input type="text" value="<?=$data['meta_title']; ?>" class="form-control" placeholder="Enter Meta Title" name="meta_title" id="meta_title">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Meta Description</label>
                                                <textarea class="form-control" name="meta_description" placeholder="Enter Meta Description" id="meta_description" rows="3"><?=$data['meta_description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <label for="">Meta Keywords</label>
                                                <textarea class="form-control" name="meta_keywords" placeholder="Enter Meta Keywords" id="meta_keywords" rows="3"><?=$data['meta_keywords']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label for="">Status (Check if Available) </label>
                                            <input type="checkbox" <?= $data['status'] ? "checked":""?> name="status">
                                            </div>
                                        </div>
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label for="">Popular </label>
                                            <input type="checkbox" <?= $data['popular'] ? "checked":""?> name="popular">
                                            </div>
                                        </div>
                                        <!--------------- SAVE BUTTON--------------->
                                        <div class="col-md-12">
                                            <button type="submit" class="btn bg-primary mt-2 md-w-10 text-white" name="editCateg_button" id="addCategSave">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
            <?php
                    }else{
                        echo "Category not found";
                    }
                } else{
                    echo "ID missing from url";
                }
            ?>
        </div>
    </div>
</div>
<!--------------- FOOTER --------------->
<?php include('includes/footer.php');?>
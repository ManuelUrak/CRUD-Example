<?php 

//include("PHP/db.php");
//include("PHP/components.php");
include("PHP/operation.php");

createDatabase();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Books</title>
</head>
<body>
    <main>
        <div class="container text-center">
            <h1 class="py-4 bg-dark rounded text-light"><i class="fa fa-swatchbook"></i> Bookstore</h1>
            <div class="d-flex justify-content-center">
                <form action="" method="post" class="w-50">
                    <div class="pt-2">
                        <?php inputElement("<i class='fa fa-book'></i>", "Book Name", "book_name", ""); ?>
                    </div>
                    <div class="row pt-2">
                        <div class="col">
                            <?php inputElement("<i class='fa fa-people-carry'></i>", "Publisher", "book_publisher", ""); ?>
                        </div>
                        <div class="col">
                            <?php inputElement("<i class='fa fa-dollar-sign'></i>", "Price", "book_price", ""); ?>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <?php 
                        
                        buttonElement("btn-create", "btn btn-success", "<i class='fa fa-plus'></i>", "create", "data-toggle='tooltip' data-placement='bottom' title='Create'");
                        buttonElement("btn-read", "btn btn-primary", "<i class='fa fa-sync'></i>", "read", "data-toggle='tooltip' data-placement='bottom' title='Read'");
                        buttonElement("btn-update", "btn btn-light border", "<i class='fa fa-pen-alt'></i>", "update", "data-toggle='tooltip' data-placement='bottom' title='Update'");
                        buttonElement("btn-delete", "btn btn-danger", "<i class='fa fa-trash-alt'></i>", "delete", "data-toggle='tooltip' data-placement='bottom' title='Delete'");

                        ?>
                    </div>
                </form>
            </div>
            <div class="d-flex table-data">
                <table class="table table-striped table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Book Name</th>
                            <th>Publisher</th>
                            <th>Price</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody id=tbody>
                        <?php getData(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
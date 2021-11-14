<?php 

include("db.php");
include("components.php");

$con = createDatabase();

function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));

    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}

function textNode($classname, $msg){
    echo "
        <h6 class='$classname'>$msg</h6>
    ";
}

function createData(){
    $bookname = textboxValue("book_name");
    $bookpublisher = textboxValue("book_publisher");
    $bookprice = textboxValue("book_price");

    if($bookname && $bookpublisher && $bookprice){
        $sql = "INSERT INTO books
            (
                book_name,
                book_publisher,
                book_price
            )
            VALUES
            (
                '$bookname',
                '$bookpublisher',
                '$bookprice'
            )
        ";

        if(mysqli_query($GLOBALS['con'], $sql)){
            textNode("success", "Record successfully inserted!");
        }else{
            textNode("danger", "Failed to insert record...");
        }
    }else{
        textNode("danger", "Provide data...");
    }
}

if(isset($_POST['create'])){
    createData();
}

function getData(){
    if(isset($_POST['read'])){
        $sql = "SELECT * FROM books";
        $result = mysqli_query($GLOBALS['con'], $sql);

        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
                $bookid = $row['id'];
                $bookname = $row['book_name'];
                $bookpublisher = $row['book_publisher'];
                $bookprice = $row['book_price'];

                echo "
                    <tr>
                        <td>$bookid</td>
                        <td>$bookname</td>
                        <td>$bookpublisher</td>
                        <td>$bookprice</td>
                        <td><i class='fa fa-edit btnedit'></i></td>
                    </tr>
                ";
            }
        }
    }
}

?>
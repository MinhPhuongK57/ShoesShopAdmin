<?php
    $level = "";
    include $level."DB/database.php";
?>
<?php
    //Search
    // $Provider = isset($_POST['Provider']) ? $_POST['Provider'] : "";
    //product + search
    // $SQL_str_listproduct = "SELECT * from product where productname like '%$product_search%' and id_provider like '%$Provider%' and id_producttype like '%$ProductType%'";
    // $product_search = isset($_POST['SearchData']) ? $_POST['SearchData'] : "";
    // $ProductType = isset($_POST['ProductType']) ? $_POST['ProductType'] : "";
    if(isset($_POST['submit']))
    {
        $product__search = isset($_POST['search__data']) ? $_POST['search__data'] : "";
        $SQL_str_listproduct = "SELECT * from product where productname like '%$product__search%'";
        $list__product_search = $connect->prepare($SQL_str_listproduct);
        $list__product_search -> execute();
        $list__product_search_rowsdata = $list__product_search ->fetchAll();
    }
?>
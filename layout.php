<?php
    //Head
    include $level.com__path."head.php";

    if($isIndex == true)
    {
        include $level.tit__path.'title__index.php';
    }
    if($isInfopage == true)
    {
        include $level.tit__path.'title__infopage.php';
    }
    if($isProduct == true)
    {
        include $level.tit__path.'title__product.php';
    }
    if($isProductType == true)
    {
        include $level.tit__path.'title__product__type.php';
    }
    if($isStaff == true)
    {
        include $level.tit__path.'title__staff.php';
    }
    if($isCustomerAccount == true)
    {
        include $level.tit__path.'title__customer--account.php';
    }
    if($isBill == true)
    {
        include $level.tit__path.'title__bill.php';
    }
    if($isBillDetail == true)
    {
        include $level.tit__path.'title__billdetail.php';
    }
    if($isProvider == true)
    {
        include $level.tit__path.'title__provider.php';
    }
    if($isInsertStaff == true)
    {
        include $level.tit__path.'title__insert__staff.php';
    }
    if($isInsertProvider == true)
    {
        include $level.tit__path.'title__insert__provider.php';
    }
    if($isInsertBill == true)
    {
        include $level.tit__path.'title__insert__bill.php';
    }
    if($isInsertBillDetail == true)
    {
        include $level.tit__path.'title__insert__billdetail.php';
    }
    //Add Update Delete
    if($isInsertProduct == true)
    {
        include $level.tit__path.'title__insert__products.php'; 
    }
    if($isInsertProductType == true)
    {
        include $level.tit__path.'title__insert__producttype.php';
    }
    if($isInsertCustomerAccount == true)
    {
        include $level.tit__path.'title__insert__customeraccount.php';
    }
    if($isEditProduct == true)
    {
        include $level.tit__path.'title__edit__products.php'; 
    }
    if($isStaffAccount == true)
    {
        include $level.tit__path.'title__staff__account.php';
    }
    //Sidebar
    include $level.com__path.'sidebar.php';
    //Wrapper
    include $level.com__path.'wrapper__topbar.php';
    if($isIndex == true)
    {
        include $level.com__path.'index__main--content.php';
    }
    if($isInfopage == true)
    {
        include $level.com__path.'infopage--content.php';
    }
    if($isProduct == true)
    {
        include $level.com__path.'product--content.php';
    }
    if($isStaff == true)
    {
        include $level.com__path.'staff--content.php';
    }
    if($isCustomerAccount == true)
    {
        include $level.com__path.'customer__account--content.php';
    }
    if($isProductType== true)
    {
        include $level.com__path.'product__type--content.php';
    }
    if($isBill== true)
    {
        include $level.com__path.'bill--content.php';
    }
    if($isBillDetail== true)
    {
        include $level.com__path.'billdetail--content.php';
    }
    if($isProvider == true)
    {
        include $level.com__path.'provider--content.php';
    }

    //Add Update Delete
    if($isInsertProduct == true)
    {
        include $level.edi__path.'insert__products--content.php';
    }
    if($isInsertProductType == true)
    {
        include $level.edi__path.'insert__producttype--content.php';
    }
    if($isInsertCustomerAccount == true)
    {
        include $level.edi__path.'insert__customeraccount--content.php';
    }
    if($isInsertStaff == true)
    {
        include $level.edi__path.'insert__staff--content.php';
    }
    if($isInsertProvider == true)
    {
        include $level.edi__path.'insert__provider--content.php';
    }
    if($isInsertBill == true)
    {
        include $level.edi__path.'insert__bill--content.php';
    }
    if($isInsertBillDetail == true)
    {
        include $level.edi__path.'insert__billdetail--content.php';
    }
    if($isEditProduct == true)
    {
        include $level.edi__path.'edit__products--content.php';
    }
    if($isStaffAccount == true){
        include $level.edi__path.'staff__account--content.php';
    }

    //Footer
    include $level.foo__path.'footer.php';
?>
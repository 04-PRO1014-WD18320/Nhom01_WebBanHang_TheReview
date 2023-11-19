<?php include_once "header.php"?>
<?php include_once "../model/pdo.php"?>
<body> 
<?php include_once "nav.php";?>
<?php
    if(isset($_GET['act']) && $_GET['act'] != ""){
        switch ($_GET['act']) {
            case 'account':
                include_once("./account.php");
                break;
            case 'cart':
                include_once("./cart.php");
                break;
            case 'allProduct':
                include_once('./allProduct.php');
            case 'news':
                include_once("./news.php");
                break;
            case 'news_details':
                if(isset($_GET['news_id']) && $_GET['news_id'] != ""){
                    include_once("./news_details.php");
                }else{
                    include_once("./error.php");
                } 
                break;
            case 'product':
                if(isset($_GET['pro_id']) && $_GET['pro_id'] != ""){
                    include_once("./product.php");
                }else{
                    include_once("./error.php");
                }
                break;
            
            default:
                include_once("./error.php");
                break;
        }
    }else{
        include("./home.php");
    }
?>
 
    <script src="../action/bootstrap.bundle.min.js"></script>
</body>

<?php include_once "footer.php"?>
</html>


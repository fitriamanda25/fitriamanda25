<?
    error_reporting(0);
    include "setting.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?
        include "module/header.php";

        switch($_GET['page'])
        {
            case "home";
                include "module/home.php";
                break;
        
            case "berita";
                include "module/berita.php";
                break;
        
            case "contact";
                include "module/home.php";
                include "module/contact.php";
                break;
        }

        include "module/footer.php";
    ?>
</body>
</html>
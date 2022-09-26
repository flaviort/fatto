<?php
	// page title
	if (empty($page_title)) {
	    $page = '';
	} else {
	    $page = '| ' . $page_title;
	}

	// active class in the menus
	function active($active_page) {
	    $url_array = explode('/', $_SERVER['REQUEST_URI']);
	    $url = end($url_array);
	    if ($active_page == $url) {
	        echo 'active';
	    }
	}
?>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no">
	<link rel="shortcut icon" href="../favicon.png">

	<meta name="author" content="VVe Fight | Senz Design">

	<title>Fatto. Inteligencia Política <?php echo htmlspecialchars($page);?></title>

	<!-- google -->
	<meta name="description" content="Tenemos independencia para analisar el escenario institucional en Latinoamérica. Creemos que la compreensión de lo que pasa en el govierno es imprescindible para qualquier negocio."/>
	<link rel="canonical" href="https://fattopolitica.com.br/es/" />
		
	<!-- facebook -->
	<meta property="og:locale" content="es" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Fatto. Inteligencia Política" />
	<meta property="og:description" content="Tenemos independencia para analisar el escenario institucional en Latinoamérica. Creemos que la compreensión de lo que pasa en el govierno es imprescindible para qualquier negocio." />
	<meta property="og:url" content="https://fattopolitica.com.br/es/" />
	<meta property="og:site_name" content="Fatto. Inteligencia Política" />
	<meta property="og:image" content="https://fattopolitica.com.br/assets/img/og-image.jpg" />
	<meta property="og:image:secure_url" content="https://fattopolitica.com.br/assets/img/og-image.jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />

	<!-- css -->
	<link rel="stylesheet" href="../assets/css/framework.min.css">
	<link rel="stylesheet" href="../assets/css/main.css">
	
</head>
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

	<title>Fatto. Political Intelligence <?php echo htmlspecialchars($page);?></title>

	<!-- google -->
	<meta name="description" content="Independence to analyze the institutional scenario in Latin America. We believe that understanding government is essential for any business."/>
	<link rel="canonical" href="https://fattopolitica.com.br/en/" />
		
	<!-- facebook -->
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Fatto. Political Intelligence" />
	<meta property="og:description" content="Independence to analyze the institutional scenario in Latin America. We believe that understanding government is essential for any business." />
	<meta property="og:url" content="https://fattopolitica.com.br/en/" />
	<meta property="og:site_name" content="Fatto. Political Intelligence" />
	<meta property="og:image" content="https://fattopolitica.com.br/assets/img/og-image.jpg" />
	<meta property="og:image:secure_url" content="https://fattopolitica.com.br/assets/img/og-image.jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />

	<!-- css -->
	<link rel="stylesheet" href="../assets/css/framework.min.css">
	<link rel="stylesheet" href="../assets/css/main.css">
	
</head>
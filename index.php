<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <meta name="keywords" content="AmmiCut, razrez nekovinskih materialov,Miha Ambrožič"/>
        <meta name="description" content="AMMICUT, RAZREZ NEKOVINSKIH MATERIALOV, MIHA AMBROŽIČ, s.p. Knežak 1 A, 6253 Knežak">
        <meta name="author" content="Blaz Sajovic" />
	    <meta name="copyright" content="Copyright © 2013 Spletko.eu">
	    <meta http-equiv="Content-Language" content="sl-SI" />
	    <meta name="robots" content="index, follow">
        <meta name="googlebot" content="index, follow">
        <link rel="shortcut icon" href="img/minilogo.jpg">
        <title>Kontakt</title>        
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <link rel="stylesheet" href="Kontakt/css/style.css">
        <script src="Kontakt/js/script.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <div id="logo"><img src="img/banner.fw.png"></div>
                <nav>
                    <ul>
                        <li><a class="button white medium" href="index.html">Domov</a></li>
                        <li><a class="button white medium" href="O-nas.html">O nas</a></li>
                        <li><a class="button white medium" href="Storitve.html">Storitve</a></li>
                        <li><a class="button white medium" href="Galerija-felt.html">Galerija felt</a></li>
                        <li><a class="button white medium" href="Galerija-plastics.html">Galerija plastics</a></li>
                        <li><a class="button white medium" href="Materiali.html">Materiali</a></li>
                        <li><a class="button white medium" href="Reference.html">Reference</a></li>
                        <li><a class="button black medium" href="#">Kontakt</a></li>
                    </ul>
                </nav>
            </header>
                    </div>
 
            <div class="telo-kontakt">
                  
<div id="container">
<div id="contact-form" class="clearfix">
            <h1>Stopite v stik z nami!</h1>
            <h2>Prosimo, da za pravilno izpolnitev spletnega obrazca izpolnite vsa polja, ki so obvezna <span class="required">*</span>. Odgovorili vam bomo v najkrajšem možnem času.</h2>
            <?php
			//init variables
			$cf = array();
			$sr = false;
			
			if(isset($_SESSION['cf_returndata'])){
				$cf = $_SESSION['cf_returndata'];
			 	$sr = true;
			}
            ?>
            <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
                <li id="info">Prišlo je do napake!</li>
                <?php 
				if(isset($cf['errors']) && count($cf['errors']) > 0) :
					foreach($cf['errors'] as $error) :
				?>
                <li><?php echo $error ?></li>
                <?php
					endforeach;
				endif;
				?>
            </ul>
            <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Zahvaljujemo se vam za poslano sporočilo!</p>
            <form method="post" action="Kontakt/process.php">
                <label for="name">Vaše ime: <span class="required">*</span></label>
                <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="Janez Novak" required autofocus />
                
                <label for="email">Vaš email: <span class="required">*</span></label>
                <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="vas.email@email.si" required />
                
                <label for="telephone">Telefon: </label>
                <input type="tel" id="telephone" name="telephone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" placeholder="040 444 444" />
                
                <label for="enquiry">Zanima me: </label>
                <select id="enquiry" name="enquiry">
                    <option value="Splošno" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>Splošno</option>
                    <option value="Naročilo" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Sales') ? "selected='selected'" : '' ?>>Naročilo</option>
                </select>
                
                <label for="message">Sporočilo: <span class="required">*</span></label>
                <textarea id="message" name="message" placeholder="Vaše sporočilo mora bit daljše kot 20 znakov" required data-minlength="20"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                <span id="loading"></span>
                <input type="submit" value="Pošlji" id="submit-button" />
                <p id="req-field-desc"><span class="required">*</span> Obvezna polja!</p>
            </form>

            <?php unset($_SESSION['cf_returndata']); ?>
</div></div>
                  <div class="mapa">
                  <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=sl&amp;geocode=&amp;q=Kne%C5%BEak+1a,+Kne%C5%BEak,+Slovenija&amp;aq=0&amp;oq=Kne%C5%BEak+1a,+6253+Kne%C5%BEa&amp;sll=37.0625,-95.677068&amp;sspn=53.87374,114.169922&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Kne%C5%BEak+1a,+6253+Kne%C5%BEak,+Slovenija&amp;z=14&amp;iwloc=A&amp;ll=45.625864,14.238429&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=sl&amp;geocode=&amp;q=Kne%C5%BEak+1a,+Kne%C5%BEak,+Slovenija&amp;aq=0&amp;oq=Kne%C5%BEak+1a,+6253+Kne%C5%BEa&amp;sll=37.0625,-95.677068&amp;sspn=53.87374,114.169922&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Kne%C5%BEak+1a,+6253+Kne%C5%BEak,+Slovenija&amp;z=14&amp;iwloc=A&amp;ll=45.625864,14.238429" style="color:#0000FF;text-align:left">Prikaži večji zemljevid</a></small>

        </div>
                          <div class="mapa-info">
                                            
                        <h2>Kontakt</h2>
                        <p>www.ammicut.com<br>
                        <br>Miha Ambrožič s.p., Knežak 1a, 6253 Knežak, Sl<br>
                        <br>Tel: +386(0)31 706 672<br>
                        <br>

E-mail: info@ammicut.com</p>

            

        </div>

</div>
     


        <div class="footer-containerx">
            <footer class="wrapper">
                <h6><strong>&copy; 2013 AmmiCut.com. Vse pravice pridržane. &raquo; Miha Ambrožič s.p.</strong> Knežak 1a, 6253 Knežak, Sl - Tel: +386(0)31-706-672 - E-mail: <a href="mailto:info@ammicut.com">info@ammicut.com</a>
                </h6>
                
                <h5>Oblikovanje in izvedba:<a href="http://spletko.eu"><strong> Spletko &raquo;</strong></a></h5>
            </footer>
        </div>

<script src="js/piskotek.js" type="text/javascript"></script>
<div id="cookie_assistant_container"></div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42245370-1', 'ammicut.com');
  ga('send', 'pageview');

</script>
    </body>
</html>

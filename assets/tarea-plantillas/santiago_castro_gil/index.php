<!doctype html>
<?php
echo get_bloginfo(template_url);
/*Esta función se utiliza para que php genere la ruta absoluta desde el archivo raiz php hasta 
el lugar donde se ubica una imagen dentro de la carpeta del tema*/
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	<?php bloginfo(name);?>
	</title>
	<!-- Escribe el título del sitio introducido en el apartado Temas/Personalizar 
	en el backend de WordPress -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo  (stylesheet_url); ?>">
	<!-- bloginfo(stylesheet_url) genera la ruta desde el archivo raiz hasta la ubicación
	de la hoja de estilos en la carpeta del tema activo -->
	<script src="<?php bloginfo(template_url); ?>/js/jquery-1.8.3-min.js"></script>
	
</head>
<body>
<h1>Función bloginfo</h1>
<h2>name</h2>
<p>Es el título del sitio que se escribe en Temas/Personalizar desde el back-end de WordPress.
Esta función se puede utilizar para incluir en la etiqueta title del html.</p>
<p class="valor"><?php bloginfo("name");?></p>

<h2>description</h2>
<p>Temas/Personalizar/Descripción corta</p>
<p class="valor"><?php bloginfo("description");?></p>

<h2>wpurl</h2>
<p>Muestra la ruta de la carpeta en la que está instalado WordPress</p>
<p class="valor"><?php bloginfo("wpurl")?></p> 

<h2>url</h2>
<p>Muestra la ruta del sitio</p>
<p class="valor"><?php bloginfo("url")?></p>

<h2>admin_email</h2>
<p>Muestra el mail de contacto del administrador</p>
<p class="valor"><?php bloginfo("admin_email")?></p>

<h2>charset</h2>
<p>Muestra la codificación de caracteres utilizada</p>
<p class="valor"><?php bloginfo("charset")?></p>

<h2>version</h2>
<p>Muestra la versión de WordPress</p>
<p class="valor"><?php bloginfo("version")?></p>
	
<h2>html_type</h2>
<p>Muestra el tipo de contenido de las páginas HTML de WordPress</p>
<p class="valor"><?php bloginfo("html_type")?></p>

<h2>text_direction</h2>
<p>Muestra el tipo de contenido de las páginas HTML de WordPress</p>
<p class="valor"><?php bloginfo("text_direction")?></p>

<h2>language</h2>
<p>Muestra el lenguaje de WordPress</p>
<p class="valor"><?php bloginfo("language")?></p>

<h2>stylesheet_url</h2>
<p>Muestra la ruta absoluta del archivo css</p>
<p class="valor"><?php bloginfo("stylesheet_url")?></p>

<h2>stylesheet_directory</h2>
<p>Muestra el directorio donde se ubica el css</p>
<p class="valor"><?php bloginfo("stylesheet_directory")?></p>

<h2>template_url</h2>
<p>Muestra la ruta absoluta donde se ubica el tema</p>
<p class="valor"><?php bloginfo("template_url")?></p>

<h2>template_directory</h2>
<p>Muestra el directorio donde se ubica el tema</p>
<p class="valor"><?php bloginfo("template_directory")?></p>

<h2>pingback_url</h2>
<p>dfsdfsdfdsfdf</p>
<p class="valor"><?php bloginfo("pingback_url")?></p>

<h2>atom_url</h2>
<p>Muestra el Atom feed URL</p>
<p class="valor"><?php bloginfo("atom_url")?></p>

<h2>rdf_url</h2>
<p>Muestra el RDF/RSS 1.0 feed URL</p>
<p class="valor"><?php bloginfo("rdf_url")?></p>

<h2>rss_url</h2>
<p>Muestra el RSS 0.92 feed URL</p>
<p class="valor"><?php bloginfo("rss_url")?></p>

<h2>rss2_url</h2>
<p>Muestra el RSS 2.0 feed URL</p>
<p class="valor"><?php bloginfo("rss2_url")?></p>

<h2>comments_atom_url</h2>
<p>Muestra el comments Atom feed URL</p>
<p class="valor"><?php bloginfo("comments_atom_url")?></p>

<h2>comments_rss2_url</h2>
<p>Muestra el comments RSS 2.0 feed URL</p>
<p class="valor"><?php bloginfo("comments_rss2_url")?></p>

<h2>home</h2>
<p>Muestra la ruta al archivo raiz</p>
<p class="valor"><?php echo home_url() ?></p>
<p><?php bloginfo("url")?></p>

</body>
</html>


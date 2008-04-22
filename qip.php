<?php
/*
Plugin Name: Query Inside Post
Plugin URI: http://www.webinventif.fr/query-inside-post-plugin-wordpress-pour-inserer-facilement-une-boucle-dans-un-billet/
Description: Query Inside Post allow you to insert a custom loop inside a post by simple way. / Query Inside Post vous permet d'inserer une ou plusieurs boucles personnalisées à l'intérieur d'un billet d'une manière simple /  Use [wlist attr=""] / 
Author: Julien Chauvin
Author URI: http://www.webinventif.fr/
Version: 0.5

License: GNU General Public License
*/ 

/*
Par défaut, affiche la liste des 5 derniers billets sous forme de lien.

Liste des attributs disponible:
	-request: Vide par défaut. Pour les utilisateurs experimentés, permet d'envoyer sa propre requète (ex: [wlist request="tag=google&showposts=5"])
	-cat: Vide par défaut. Permet de preciser l'ID de la catégorie (ex: [wlist cat=5] ou [wlist cat="5,6,7"] ou [wlist cat=-5])
	-category_name: Vide par défaut. Permet de préciser le nom de la catégorie (ex: [wlist category_name="Web Design"])
	-tag: Vide par défaut. Permet de préciser le nom (slug) du tag (ex: [wlist tag=vie-personelle] ou [wlist tag="vie-personelle,photos"] ou [wlist tag="vie-personelle+photos"])
	-order: "desc" par défaut. Permet de préciser l'ordre de tri (ex: [wlist order=asc] ou [wlist order=desc])
	-orderby: "post_date" par défaut. Permet de préciser le paramètre de tri (ex: [wlist orderby=post_title] ou [wlist orderby=post_date] ou [wlist orderby=random])
	-author: Vide par défaut. Permet de préciser l'ID de l'auteur (ex: [wlist author=1] ou [wlist author=1,2] ou[wlist author=-1])
	-author_name: Vide par défaut. Permet de préciser le nom de l'auteur (ex: [wlist author_name="Julien"])
	-showposts: 5 par défaut. Permet de préciser le nombre d'éléments a retourner (ex: [wlist showposts=10])
	-offset: Vide par défaut. Permet de préciser l'offset (ex: [wlist offset=3])
	-beforelist: <ul class="wlist"> par défaut. Permet de préciser la tag se trouvant au début de la liste (ex: [wlist beforelist="<ol>"])
	-afterlist: </ul> par défaut. Permet de préciser la tag se trouvant à la fin de la liste (ex: [wlist afterlist="</ol>"])
	-beforeitem: <li> par défaut. Permet de préciser la tag se trouvant au début de chaque élément (ex: [wlist beforeitem="<li><p>"])
	-afteritem: </li> par défaut. Permet de préciser la tag se trouvant à la fin de chaque élément (ex: [wlist afteritem="</p></li>"])

	
Chaque attribut est facultatif.
On peut evidement cumuler les attributs (ex: [wlist tag=google showposts=5])
N'utilisez pas l'attribut "cat" en même temps que l'attribut "tag" (bug wordpress), c'est ou l'un ou l'autre

Vous pouvez également afficher un eliste de liens directement dans votre theme via la fonction : <?php echo qip($request,$beforelist,$afterlist,$beforeitem,$afteritem); ?>

*/

########################################################
#      Prise en charge du Shortcode [wliste]
########################################################
function qip($request='showposts=5',$beforelist='<ul class="wlist">',$afterlist='</ul>',$beforeitem='<li>',$afteritem='</li>'){
	global $post;
	$tempPost = $post;
	$retour = $beforelist;
	$recentPosts = new WP_Query();
	$recentPosts->query($request);
	while ($recentPosts->have_posts()) : $recentPosts->the_post();
	$retour .= $beforeitem.'<a href="'.get_permalink().'" rel="bookmark">'.the_title("","",false).'</a>'.$afteritem;
	endwhile;
	$retour .= $afterlist;
	$post = $tempPost;
	return $retour;
}
function sc_wlist($atts, $content = null) {
	extract(shortcode_atts(array(
		"request" => false,
		"cat" => '',
		"category_name" => '',
		"tag" => '',
		"order" => 'desc',
		"orderby" => 'post_date',
		"author" => '',
		"author_name" => '',
		"showposts" => '5',
		"offset" => '',
		"beforelist" => '<ul class="wlist">',
		"afterlist" => '</ul>',
		"beforeitem" => '<li>',
		"afteritem" => '</li>'
	), $atts));
	if(!$request){
		$request = 'showposts='.$showposts.'&category_name='.$category_name.'&cat='.$cat.'&tag='.$tag.'&author_name='.$author_name.'&author='.$author.'&orderby='.$orderby.'&order='.$order.'&offset='.$offset.'';
	}
	return qip($request,$beforelist,$afterlist,$beforeitem,$afteritem);
}
add_shortcode("wlist", "sc_wlist");
# Fin de la prise en charge du Shortcode [wliste] 





?>
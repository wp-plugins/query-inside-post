=== Query Inside Post ===
Contributors: k-ny
Donate link: http://www.webinventif.fr/
Tags: posts, related, tags, post-plugins, query, inside, wp query, list, WP_Query, custom
Requires at least: 2.5
Tested up to: 2.5
Stable tag: 0.5

Displays a custom list of posts to the current one.

== Description ==

Displays a *custom list* of **posts** to the current one. It use the new **Shortcode API** of WP2.5 and the **WP_Query**

New, it works too in your template file !

[More infos](http://www.webinventif.fr/query-inside-post-plugin-wordpress-pour-inserer-facilement-une-boucle-dans-un-billet/).

== Installation ==

1. Upload the plugin folder to your /wp-content/plugins/ folder.
1. Go to the **Plugins** page and activate the plugin.
1. Put `[wlist]` at the place in your posts where you want the custom list of posts to appear.

[My web site](http://www.webinventif.fr/) has [full instructions](http://www.webinventif.fr/query-inside-post-plugin-wordpress-pour-inserer-facilement-une-boucle-dans-un-billet/)

== Frequently Asked Questions ==

= List of attributes available =

* **request:** Vide par défaut. Pour les utilisateurs experimentés, permet d'envoyer sa propre requ�te (ex: `[wlist request="tag=google&showposts=5"]`)
* **cat:** Vide par défaut. Permet de preciser l'ID de la catégorie (ex: `[wlist cat=5]` ou `[wlist cat="5,6,7"]` ou `[wlist cat=-5]`)
* **category_name:** Vide par d�faut. Permet de préciser le nom de la cat�gorie (ex: `[wlist category_name="Web Design"]`)
* **tag:** Vide par défaut. Permet de préciser le nom (slug) du tag (ex: `[wlist tag=vie-personelle]` ou `[wlist tag="vie-personelle,photos"]` ou `[wlist tag="vie-personelle+photos"]`)
* **order:** "desc" par défaut. Permet de préciser l'ordre de tri (ex: `[wlist order=asc]` ou `[wlist order=desc]`)
* **orderby:** "post_date" par défaut. Permet de préciser le param�tre de tri (ex: `[wlist orderby=post_title]` ou `[wlist orderby=post_date]` ou `[wlist orderby=random]`)
* **author:** Vide par défaut. Permet de préciser l'ID de l'auteur (ex: `[wlist author=1]` ou `[wlist author=1,2]` ou `[wlist author=-1]`)
* **author_name:** Vide par défaut. Permet de préciser le nom de l'auteur (ex: `[wlist author_name="Julien"]`)
* **showposts:** 5 par défaut. Permet de préciser le nombre d'�l�ments a retourner (ex: `[wlist showposts=10]`)
* **offset:** Vide par défaut. Permet de préciser l'offset (ex: `[wlist offset=3]`)
* **beforelist:** `<ul class="wlist">` par défaut. Permet de préciser la tag se trouvant au début de la liste (ex: `[wlist beforelist="<ol>"]`)
* **afterlist:** `</ul>` par défaut. Permet de préciser la tag se trouvant à la fin de la liste (ex: `[wlist afterlist="</ol>"]`)
* **beforeitem:** `<li>` par défaut. Permet de préciser la tag se trouvant au début de chaque élément (ex: `[wlist beforeitem="<li><p>"]`)
* **afteritem:** `</li>` par défaut. Permet de préciser la tag se trouvant à la fin de chaque élément (ex: `[wlist afteritem="</p></li>"]`)

= Use in template file =

* `<?php echo qip($request,$beforelist,$afterlist,$beforeitem,$afteritem); ?>`

== Version History ==

* 0.5
	* added a function for call it in your template files
	* fixed a little bug with de global variable $post
* 0.4
	* little bug on display
* 0.3
	* first public release


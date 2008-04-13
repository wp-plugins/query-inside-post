=== Similar Posts ===
Contributors: k-ny
Donate link: http://www.webinventif.fr/
Tags: posts, related, tags, post-plugins, query, inside, wp query, list, WP_Query, custom
Requires at least: 2.5
Tested up to: 2.5
Stable tag: 0.3

Displays a custom list of posts to the current one.

== Description ==

Displays a *custom list* of **posts** to the current one. It use the new **Shortcode API** of WP2.5 and the **WP_Query**

[More infos](http://www.webinventif.fr/query-inside-post-plugin-wordpress-pour-inserer-facilement-une-boucle-dans-un-billet/).

== Installation ==

1. Upload the plugin folder to your /wp-content/plugins/ folder.
1. Go to the **Plugins** page and activate the plugin.
1. Put `[wlist]` at the place in your posts where you want the custom list of posts to appear.

[My web site](http://www.webinventif.fr/q) has [full instructions](http://www.webinventif.fr/query-inside-post-plugin-wordpress-pour-inserer-facilement-une-boucle-dans-un-billet/)

== Frequently Asked Questions ==

= List of attributes available =

* **request:** Vide par d�faut. Pour les utilisateurs experiment�s, permet d'envoyer sa propre requ�te (ex: `[wlist request="tag=google&showposts=5"]`)
* **cat:** Vide par d�faut. Permet de preciser l'ID de la cat�gorie (ex: `[wlist cat=5]` ou `[wlist cat="5,6,7"]` ou `[wlist cat=-5]`)
* **category_name:** Vide par d�faut. Permet de pr�ciser le nom de la cat�gorie (ex: `[wlist category_name="Web Design"]`)
* **tag:** Vide par d�faut. Permet de pr�ciser le nom (slug) du tag (ex: `[wlist tag=vie-personelle]` ou `[wlist tag="vie-personelle,photos"]` ou `[wlist tag="vie-personelle+photos"]`)
* **order:** "desc" par d�faut. Permet de pr�ciser l'ordre de tri (ex: `[wlist order=asc]` ou `[wlist order=desc]`)
* **orderby:** "post_date" par d�faut. Permet de pr�ciser le param�tre de tri (ex: `[wlist orderby=post_title]` ou `[wlist orderby=post_date]` ou `[wlist orderby=random]`)
* **author:** Vide par d�faut. Permet de pr�ciser l'ID de l'auteur (ex: `[wlist author=1]` ou `[wlist author=1,2]` ou `[wlist author=-1]`)
* **author_name:** Vide par d�faut. Permet de pr�ciser le nom de l'auteur (ex: `[wlist author_name="Julien"]`)
* **showposts:** 5 par d�faut. Permet de pr�ciser le nombre d'�l�ments a retourner (ex: `[wlist showposts=10]`)
* **offset:** Vide par d�faut. Permet de pr�ciser l'offset (ex: `[wlist offset=3]`)
* **beforelist:** `<ul class="wlist">` par d�faut. Permet de pr�ciser la tag se trouvant au d�but de la liste (ex: `[wlist beforelist="<ol>"]`)
* **afterlist:** `</ul>` par d�faut. Permet de pr�ciser la tag se trouvant � la fin de la liste (ex: `[wlist afterlist="</ol>"]`)
* **beforeitem:** `<li>` par d�faut. Permet de pr�ciser la tag se trouvant au d�but de chaque �l�ment (ex: `[wlist beforeitem="<li><p>"]`)
* **afteritem:** `</li>` par d�faut. Permet de pr�ciser la tag se trouvant � la fin de chaque �l�ment (ex: `[wlist afteritem="</p></li>"]`)

== Version History ==

* 0.3
	* first public release



<?php
use App\Features\PostTypes\RecipePostType;
use App\Features\Taxonomies\RecipeTaxonomy;
use App\Features\MetaBoxes\RecipeDetailsMetabox;
/**
 * Plugin Name:     Ratatouille
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     ratatouille
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Ratatouille
 */
// Your code starts here.
/**
 * Fonction pour ajouter un type de contenu recette
 * Ceci a été copier coller du site 
 * https://developer.wordpress.org/plugins/post-types/registering-custom-post-types/
 *
 * @return void
 *
 */
// Import du autoload.php pour récuperer les class automatiquement sans devoir un require
require_once('autoload.php');

require_ONCE('env.php');
// Ajout du fichier helpers.php pour disposé des fonctions helper
require_once('helpers.php');

// Ajout d'un listener à l'event "init". le listener est la méthode "register" de la class RecipePostType.
add_action('init', [RecipePostType::class, 'register']);
// Ajout d'un listener à l'event "init" pour enregistrer une taxonomy
add_action('init', [RecipeTaxonomy::class, 'register']);
// Ajout d'une Metabox pour le postType recipe
add_action('add_meta_boxes_recipe', [RecipeDetailsMetabox::class, 'add_meta_box']);
// Ajout d'une action de sauvegarde lors de la sauvegarde d'un post type recipe
add_action('save_post_' . RecipePostType::$slug, [RecipeDetailsMetabox::class, 'save']);

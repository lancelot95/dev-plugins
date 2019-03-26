
<?php
use App\Features\PostTypes\RecipePostType;
use App\Features\Taxonomies\RecipeTaxonomy;
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
// Ajout d'un listener à l'event "init". le listener est la méthode "register" de la class RecipePostType.
add_action('init', [RecipePostType::class, 'register']);
// Ajout d'un listener à l'event "init" pour enregistrer une taxonomy
add_action('init', [RecipeTaxonomy::class, 'register']);

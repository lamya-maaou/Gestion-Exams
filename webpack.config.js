const Encore = require("@symfony/webpack-encore");

Encore
  // Le répertoire où les fichiers compilés seront stockés
  .setOutputPath("public/build/")
  // Le répertoire public où les fichiers compilés seront accessibles
  .setPublicPath("/build")

  // Active le traitement des fichiers Sass (si tu utilises Sass)
  .enableSassLoader()

  // Ajoute un fichier d'entrée JavaScript
  .addEntry("app", "./assets/js/app.js")

  // Active la version des fichiers pour le cache
  .enableVersioning()

  // Permet d’utiliser jQuery dans tes fichiers
  .autoProvidejQuery()

  // Active un fichier de runtime séparé (recommandé)
  .enableSingleRuntimeChunk();

module.exports = Encore.getWebpackConfig();

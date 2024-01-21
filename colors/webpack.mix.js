let mix = require('laravel-mix');
//imam is resourses folderio css ir perkeliam i public
mix.sass('resourses/css/main.scss', 'public')
.js('resourses/js/main.js', 'public');

//npx mix vykdomoji komanda, kuri sukompailina ir perkelia. resursuose keiciam css ir js, o tada npx mix ir perkelia i public. publice nelisti i css, jis ten automatiskai 
// sukompeliuojamas
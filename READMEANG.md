Vídeo 20:

- creación de campos de la tabla "post" en el archivo "create_posts_table" y en la terminal con  el comando "php artisan make:migration create_posts_table", después lo migramos a la BBDD.
- damos forma a los posts en la terminal de laragon con el comando "php artisan tinker"
- Empleando el siguiente código en la terminal creamos el cuarto post:
 use App\Models\Post;
>>> Post::create(['title'=> 'My Fourth Post', 'excerpt' => 'excerpt of post', 'body' => 'Lorem Ipsum dolor sit amet, consectetur adipo scin elit']);

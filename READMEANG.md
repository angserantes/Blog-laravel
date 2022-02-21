# Realización de un blog con Laravel
 A través de la terminal de Laragon creamos un nuevo proyecto, esta vez incorporamos a través de la consola el framework "Laravel".

 El desarrollo de este blog se hace siguiendo el tutorial "Laravel 8 From Scrath"
## Pasos.
- Se hace un breve descripción de lo que significa la arquitectura "MVC" Modelo, Vista, Controlador.
- Instalamos laravel a través de composer.
- Damos forma a los documentos siguiendo el tutorial, y añadimos las carpetas y archivos para poder avanzar en el blog. (modificamos web.php y posts.blade)
- De esta forma alcanzamos una vista previa de los blogs y clickando en cada uno de ellos podemos apreciar su contenido.
- Una vez que llegamos a la parte de la Base de datos creamos una nueva rama BBDD.
- Al hacer la migración que indica el tutorial en la bbdd tenemos 6 tablas: "failed_jobs", "migrations", "password_resets", "personal_access_tokens" "posts" y "users".
- Creamos los campos de la tabla "post" en el archivo "create_posts_table" y en la terminal con  el comando "php artisan make:migration create_posts_table", después lo migramos a la BBDD.
- Damos forma a los posts en la terminal de laragon con el comando "php artisan tinker".
- Empleando el siguiente código en la terminal creamos el cuarto post:
  
    use App\Models\Post;
>>> Post::create(['title'=> 'My Fourth Post', 'excerpt' => 'excerpt of post', 'body' => 'Lorem Ipsum dolor sit amet, consectetur adipo scin elit']);

- Último vídeo visualizado: número 22

Resultado del blog:

![resultado](https://i.ibb.co/xDTgrHr/2.png)

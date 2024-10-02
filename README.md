# examen-desarrollo-web1

Pasos para correr el proyecto.

1. Descargar en zip
2. Descomprimir zip
3. Abrir carpeta examen-ventas-fix en vscode
4. Abrir nueva terminal
5. Correr "composer install"
6. Renombrar archivo .env.example a .env
7. Configurar base de datos (mysql o sqlite)
8. Correr "php artisan migrate" en terminal
9. Correr "php artisan serve"

- En caso de arrojar error 500 al abrir localhost:8000, ctrl + c para detener el servidor, correr "php artisan key:generate" y cambiar el puerto (correr "php artisan serve --port=9000")

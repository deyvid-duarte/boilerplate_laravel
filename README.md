## Sobre o boilerplate

Boilerplate pra subir uma necessidade especifica e com um TALVEZ bem grande seja continuado e melhorado.
Os requisitos para usar são

- PHP 7.3 ou posterior.
- Composer.

## Instalaçao

Instale as dependencias

```
composer install
```

Crie o banco na sua maquina, copie o cole o .env.example para .env e configure as variaves de ambiente para apontar para seu banco ou docker, 
depois rode:

```
php artisan migrate
```

Em seguida:
```
php artisan key:generate
```

E por ultimo
```
php artisan serve
```

Acesse http:://localhost:8000/login
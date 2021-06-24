# Grupo-6
 Jorge Riquelme - Gustavo Igor - Manuel Quezada


# Es necesario una instalacion previa de docker para poder ejecutar los comandos
## Ejecutando Docker-Compose

Iniciamos el levantamiento de docker
```shell
  docker-compose up -d
```

Podemos comprobar el estado con:
```shell
  docker-compose ps
  docker ps
```

Podemos parar y borrar todos los contenedores de una vez.

```shell
  docker-compose down
```

#Observacion:
Es necesario ingresar al localhost phpmyadmin para crear la base de datos "php_login_database"

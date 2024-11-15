# Agenda Sostenible Figuerenca

## Descripción

El proyecto que hemos desarrollado consiste en crear una plataforma interactiva basada en el concepto de una agenda sostenible, una página donde los usuarios logueados pueden apuntarse a eventos. Esta plataforma está pensada para todo tipo de público como para administradores, ofreciendo un espacio en el que puedes añadir consejos y los admins pueden crear eventos para la resta de usuarios.

## Característiques Principals

- **Funcionalitat 1**: CRUD Usuarios.
- **Funcionalitat 2** CRUD Eventos solo admins.
- **Funcionalitat 3** CRUD Dashboard admin.
- **Funcionalitat 4** Los usuarios logueados pueden poner 5 estrellas(Max) a eventos.
- **Funcionalitat 5** CRUD de consejos usuarios logueados.
- **Funcionalitat 6** El usuario/admin pueden ver los datos de su perfil.
- **Funcionalitat 7** Barra de búsqueda en todas las páginas.

## Tecnologies Utilitzades

HTML, CSS(Boostrap), JS y PHP con el "frameWork" emeset lite.
MYSQL
VS Code y Cursor

## Instal·lación i Configuración

1. Clonar el repositorio:

```bash
git clone https://github.com/Ulises-Hyper/Projecte2-Agenda-Sostenible
```

1. Instalar Docker.
2. Poner un fichero MySQL para tener la bdd.
3. Configurar archivos docker-compose.yml y dockerfile

## Servidor web en local

Para poder ver la página tenemos que poner:

```bash
"docker compose up" para inicializar el docker o encender el docker.
Después ponemos localhost:8080 en el buscador para ver la página.
```
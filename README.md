ventas_y_almacen es un sistema de gestión de ventas y almacén desarrollado con Laravel 11, MySQL y Tailwind CSS, diseñado para pequeños y medianos negocios. Permite gestionar inventario, ventas, clientes y proveedores de manera eficiente y moderna.

El proyecto busca facilitar el control de inventario y las operaciones de ventas, integrando un sistema de módulos separados que simplifica la administración de datos y la escalabilidad.

Características principales

Gestión de productos, categorías y proveedores.

Control de ventas, con historial y totales calculados automáticamente.

Gestión de clientes, incluyendo información y compras previas.

Sistema de roles y permisos básicos para usuarios del sistema.

Interfaz moderna con Tailwind CSS, fácil de personalizar.

Modular y escalable, con migraciones y relaciones claras en la base de datos.

Compatible con PHP 8.2+ y Laravel 11.

Cómo funciona

Usuarios y roles: Se registran usuarios y se asignan roles para controlar el acceso a diferentes módulos del sistema.

Gestión de inventario: Se pueden crear, editar y eliminar productos y categorías. Cada producto tiene cantidad, precio y proveedor asociado.

Ventas: Se registran ventas vinculadas a clientes, con cálculo automático de totales.

Reportes básicos: Se pueden generar listados de ventas e inventario para revisión rápida.

Base de datos modular: Cada módulo tiene sus propias migraciones, facilitando la escalabilidad y mantenimiento.

Requisitos del Sistema

PHP >= 8.2

Laravel 11

MySQL 8+

Composer

Node.js y NPM (para assets si quieres compilar Tailwind CSS)
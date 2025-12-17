# 🚗 Sistema de Gestión de Vehículos – Laravel 10

Este proyecto implementa un CRUD completo para la gestión de vehículos, permitiendo registrar, editar, listar y eliminar información dentro de un sistema básico de administración.  
Fue desarrollado con Laravel 10, siguiendo buenas prácticas de arquitectura MVC.

---

## 📦 Tecnologías utilizadas

- Laravel 10
- PHP 8.2
- MySQL
- Bootstrap 5
- Blade Templates

---

## Estructura del Proyecto
---

## ⚙️ Configuración del Proyecto

### Configuración y conexión a la base de datos
![Configuración y conexión BD](public/img/readme/ConfiguracionyConexionBD.png)

### Prueba de conexión
![Prueba de conexión](public/img/readme/PruebaConexion.png)

### Página inicial funcionando
![Página cargada](public/img/readme/PurebaPagina.png)

---

## 🛠️ Migración, Modelo y Controlador

### Migración
![Migración](public/img/readme/Migracion.png)

### Modelo Vehiculo.php
![Modelo Vehiculo](public/img/readme/Vehiculophp.png)

### Migración, modelo y controlador juntos
![Migración, modelo y controlador](public/img/readme/Migracion,Modelo,Controlador.png)

### Controlador
![Controlador](public/img/readme/CrearControlador.png)

---

## 🌐 Rutas del sistema

![Configurar rutas](public/img/readme/ConfigurarRutas.png)

---

## 🖼️ Vistas Blade

### Vista principal (Index)
![Index Vehículos](public/img/readme/IndexVehiculos.png)

### Formulario de creación
![Create Blade](public/img/readme/CreateBladeVehiculos.png)

### Formulario de edición
![Edit Blade](public/img/readme/EditBladeVehiculos.png)

---

## 🔗 GitHub y control de versiones

### Creación del repositorio
![Creación GitHub](public/img/readme/CreaciónGitHub.png)

### Conexión con GitHub
![Conexión GitHub](public/img/readme/ConeccionGitHub.png)

### Cambios enviados
![Cambios GitHub](public/img/readme/CambiosGitHub.png)

---

## 🚀 Instalación del proyecto

Sigue estos pasos para ejecutar el proyecto localmente:

```bash
git clone <URL_DEL_REPOSITORIO>
cd <nombre-del-proyecto>

composer install

cp .env.example .env
php artisan key:generate

# Configura tu base de datos en el archivo .env

php artisan migrate
php artisan serve

# Sistema de gestión de comidas rápidas
## Descripción del proyecto

Este proyecto forma parte del proyecto de **calidad de software** que se enfoca en una pagina web diseñada desde el uso del framework **laravel** con lenguajes como **HTML**, y **CSS** para las vistas.
Su objetivo principal es construir una **aplicación web de gestión de productos y tipos de productos**, implementando operaciones CRUD y posteriormente realizar el **análisis de calidad con SonarQube Cloud** para detectar y corregir errores en el código.

---

## Caracteristicas principales

- **Sistema de inicio de sesion (no funcional):** Se realiza un login no funcional para que haga el papel de manejo de roles 
- **Gestión de productos:** Se realiza el manejo de creación, visualizacion, edicion y eliminacion de los productos del restaurante de comidas rápidas.
- **Gestión de tipo de productos:** Se realiza el manejo de categorias para los productos (hamburguesa, pizza, perro caliente, etc).
- **Conexión con base de datos Mysql:** Se realiza la base de datos Mysql, debidamente normalizada y con coherencia en las relacion para permitir un buen manejo de procesos y almancenamiento de información.
- **Arquitectura basada en Laravel:** Se realiza la estructura MVC que permite un desarrollo limpio y mantenible.

## Tecnologías utilizadas.

| Tecnología | Descripción |
|-------------|--------------|
| **Laravel** | Framework de PHP utilizado para la lógica del servidor y la arquitectura MVC. |
| **MySQL** | Sistema de gestión de bases de datos relacional para almacenar los productos y sus tipos. |
| **HTML5 / CSS3** | Lenguajes base para la interfaz visual del sistema. |
| **SonarQube Cloud** | Plataforma de análisis de código para verificar la calidad del proyecto. |
| **XAMPP / Laragon** | Entorno local de desarrollo (Apache + MySQL + PHP). |

## Estructura del proyecto

taller_calidad_software_comidas_rapidas/<br>
├── app/␣<br>
│ ├── Http/␣<br>
│ │ └── Controllers/␣<br>
│ ├── Models/␣<br>
│ └── Providers/␣<br>
├── resources/␣<br>
│ ├── views/␣<br>
│ └── css/␣<br>
├── routes/␣<br>
│ └── web.php␣<br>
├── public/␣<br>
│ └── assets/␣<br>
├── .env␣<br>
├── composer.json␣<br>
├── package.json␣<br>
└── README.md (el readme de laravel)␣<br>
README.md (el readme del proyecto)␣<br>

## 🗄️ Entidades del CRUD (desde las migraciones de laravel)

#### 1. Productos 
```javascript
 public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('stock');
            $table->decimal('precio', 10, 2);
            $table->foreignId('tipo_producto_id')->constrained('tipoproductos')->onDelete('cascade');
            $table->timestamps();
        });
    }
```

#### 2. Tipo de productos
```javascript
 public function up(): void
    {
        Schema::create('tipoproductos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });
    }
```


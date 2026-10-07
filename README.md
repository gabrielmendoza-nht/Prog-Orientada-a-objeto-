# Programación Orientada a Objetos en PHP
## Estudiante 

**Gabriel Mendoza** grupo 1S3122

Laboratorio de práctica de **Programación Orientada a Objetos (POO)** en PHP. Contiene ejercicios sobre clases, herencia, encapsulamiento, métodos estáticos, clases `final` y constructores.

## Conceptos que se practican

- Clases y objetos
- Constructores (`__construct`)
- Encapsulamiento (`protected`, `private`) con getters y setters
- Herencia (`extends`) y `parent::__construct()`
- Sobrescritura de métodos (*override*)
- Métodos estáticos y `self::`
- Clases `final`
- Constante `__CLASS__` y `M_PI`

## Estructura del proyecto

```
.
├── Persona.php        # Clase base Persona
├── Estudiantes.php    # Clase Estudiante (hereda de Persona)
├── problema1.php      # Herencia: Coche y CocheDeLujo
├── problema2.php      # Métodos estáticos y herencia
├── problema3.php      # Clases final
├── problema4.php      # Clase Circulo (área y perímetro)
└── README.md
```

## Descripción de los archivos

### `Persona.php`
Clase base con las propiedades protegidas `nombre`, `apellido` y `fechaNacimiento`. Se inicializan en el constructor y se consultan con sus getters.

### `Estudiantes.php`
La clase `Estudiante` **hereda de `Persona`** (`include("Persona.php")`) y agrega:

| Propiedad | Tipo | Descripción |
|---|---|---|
| `indiceAcademico` | `float` | Índice académico del estudiante |
| `cohorte` | `int` | Año de ingreso |
| `estadoAcademico` | `int` | `1` = activo |
| `modalidadEstudio` | `int` | `2` = presencial |

Al final del archivo se crea un estudiante de ejemplo y se imprimen todos sus datos.

### `problema1.php`: Herencia
`CocheDeLujo` hereda de `Coche`. La clase padre maneja el atributo `color` y la hija agrega `extras`, además de **sobrescribir** `printCaracteristicas()` para mostrar ambos.

Salida esperada:
```
Color: negro
Extras: TV
```

### `problema2.php`: Métodos estáticos
La clase `B` hereda de `A`, y ambas definen `miFuncion()`. Al llamar `B::otraFuncion()`, el método heredado usa `self::miFuncion()`, que siempre apunta a la clase donde fue definido (`A`).

Salida esperada: `A`

> Para que se ejecutara el método de `B` habría que usar `static::miFuncion()` (*late static binding*).

### `problema3.php`: Clase `final`
Muestra que una clase declarada como `final` **no puede ser heredada**. El ejemplo intenta extender `Coche` y genera un error, que es el comportamiento que se quiere demostrar.

### `problema4.php`: Clase `Circulo`
Recibe un radio y calcula:
- **Área:** `π · r²`
- **Perímetro:** `2 · π · r`

Con radio `4`:
```
Area del círculo:      50.27
Perimetro del circulo: 25.13
```

## Requisitos

- [PHP 8.0 o superior](https://www.php.net/downloads) (se usan propiedades tipadas)

## Cómo ejecutar

Desde la terminal, dentro de la carpeta del proyecto:

```bash
php Estudiantes.php
php problema1.php
php problema2.php
php problema4.php
```

Otra opción es usar el servidor integrado de PHP y abrir los archivos en el navegador:

```bash
php -S localhost:8000
```

Luego visita `http://localhost:8000/Estudiantes.php`, por ejemplo.

> **Nota:** `problema3.php` está hecho para producir un error fatal; es parte del ejercicio.


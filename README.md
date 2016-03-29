# Summa Solutions

Ejercicio técnico postulantes
-----------------------------

Ejercicio:
 
Crear las clases necesarias para administrar los Empleados de una Empresa. Cada empleado puede ser de distinto tipo como ser, Programador, Diseñador.


Estructura de clases:

* Empresa:
  * Id
  * Nombre
  * Empleados
* Programador:
  * Id
  * Nombre
  * Apellido
  * Edad
  * Lenguaje en el que programa( pueden ser: PHP, NET o Python  )
* Diseñador
  * Id
  * Nombre
  * Apellido
  * Edad
  * Tipo de diseñador( pueden ser: Gráfico o Web )

En Empresa, tengo que poder:

* agregar Empleados
* obtener un listado de todos los Empleados
* buscar por Id y obtener un Empleado
* obtener el promedio de edad de los empleados

**Nota:** Demostrar conocimientos en el manejo de objetos, getters, setters, listados y herencia. 

Instalacion
-----------

La instalacion es sencilla. Clonar el proyecto de git y luego instalar las dependencias (phpunit y creacion del autoloader de composer)

```
git clone https://github.com/gnemes/summasolutions
cd summasolutions
composer install
```

Unit testing
------------

El testing unitario se hizo sobre la clase que contiene y gestiona la coleccion de empleados de una empresa.
No tenia sentido hacer testing unitario sobre las demas clases que son solo getters y setters basicamente.

Para correrlo simplemente ejecutar phpunit

```
phpunit
```

Ejemplo de resultado:

```
[root@localhost summasolutions]# phpunit
PHPUnit 5.0.10 by Sebastian Bergmann and contributors.

...........                                                       11 / 11 (100%)

Time: 36 ms, Memory: 3.00Mb

OK (11 tests, 26 assertions)
[root@localhost summasolutions]#
```
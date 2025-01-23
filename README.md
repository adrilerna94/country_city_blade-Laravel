# Proyecto CRUD de City y Country

Este proyecto implementa las operaciones CRUD (Crear, Leer, Actualizar, Eliminar) para las entidades **City** y **Country** utilizando formularios. El proyecto se construye desde cero sin necesidad de relaciones entre las tablas, y se utilizará **Blade** para las vistas.

## Requisitos

- Crear un proyecto de Laravel desde cero.
- Implementar las operaciones CRUD para las entidades **City** y **Country**.
- Utilizar **Blade** para la creación de vistas.
- No es necesario realizar relaciones entre las tablas.

## Uso de Blade en las vistas

**Blade** es el motor de plantillas de Laravel, que facilita la creación de vistas dinámicas. En este proyecto, se utilizará Blade para renderizar las vistas de los formularios y mostrar los datos de las ciudades y países.

1. **Crear las vistas Blade**:
   - Las vistas Blade se encuentran en el directorio `resources/views`.
   - Utiliza la extensión `.blade.php` para los archivos de vista.

2. **Ejemplo de vista Blade para la lista de países**:
    ```blade
    <!-- resources/views/countries/index.blade.php -->
    <h1>Listado de Países</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($countries as $country)
                <tr>
                    <td>{{ $country->name }}</td>
                    <td>
                        <a href="{{ route('countries.edit', $country->id) }}">Editar</a>
                        <form action="{{ route('countries.destroy', $country->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('countries.create') }}">Añadir nuevo país</a>
    ```

3. **Uso de Blade para formularios**:
    - Blade ofrece una sintaxis simple para los formularios, usando el helper `Form` o directamente con HTML.
    - Ejemplo de formulario para crear o editar un país:

    ```blade
    <!-- resources/views/countries/form.blade.php -->
    <h1>{{ isset($country) ? 'Editar' : 'Crear' }} País</h1>
    <form action="{{ isset($country) ? route('countries.update', $country->id) : route('countries.store') }}" method="POST">
        @csrf
        @if(isset($country))
            @method('PUT')
        @endif

        <label for="name">Nombre del País</label>
        <input type="text" name="name" id="name" value="{{ old('name', $country->name ?? '') }}" required>

        <button type="submit">{{ isset($country) ? 'Actualizar' : 'Crear' }}</button>
    </form>
    ```

## Fecha de entrega

La fecha límite de entrega es **mañana a las 20h**.

## Recursos útiles

A continuación, algunos enlaces que pueden servir de ayuda para el desarrollo del proyecto:

- [Tutorial sobre CRUD en Laravel 11](https://www.itsolutionstuff.com/post/laravel-11-crud-application-example-tutorialexample.html)
- [Guía de CRUD en Laravel 11](https://umarfarooquekhan.medium.com/laravel-11-crud-application-example-tutorial-42f0c2d3b13d)
- [Documentación oficial de Laravel sobre Blade](https://laravel.com/docs/11.x/blade)

## Consejos

- Enfócate en lo esencial para completar las tareas.
- No busques la perfección; **mejor hecho que perfecto**.

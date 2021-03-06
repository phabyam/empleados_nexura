# Prototipo de formulario (crear/modificar)

La prueba se realizó usando el framework Laravel en su versión 8.

Para probarlo solo toca descargar el repositorio y seguir los siguientes pasos:

1. Crear una base de datos MySQL, combrarla como se guste, ('pruebas_tecnicas_dev', fue mi caso)

2.  Abrir el archivo **.env**  y configurar la conexión a la base de datos:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
**DB_DATABASE=nombre de la base de datos
DB_USERNAME=usuario de la base de datos
DB_PASSWORD=contraseña del usuario de la base de datos**
```
3. Para crear la tablas y ejecutar el versionado de la base de datos, usar el comando estando en la carpeta raiz del proyecto:
`php artisan migrate`
4. Para ejecutar el servidor de prueba del proyecto de Laravel el siguiente comando:
`php artisan serve`
5. Si todo se hace bien ya debe estár funcionando.

## Capturas

### Indice de empleados (Listar)
![](https://i.ibb.co/GxsKzg2/image.png)
### Formulario crear y validación
![](https://i.ibb.co/BKbPxZm/image.png)
### Alertas de confirmación crear empleado
![](https://i.ibb.co/ZcdhhXB/image.png)
### Alertas de confirmación actualizar empleado
![](https://i.ibb.co/pwnfXcr/image.png)
### Alertas de eliminar empleado
![](https://i.ibb.co/nLrG5td/image.png)
### Versionado de la base de datos
![](https://i.ibb.co/j39Nbcd/image.png)

*Gracias por la oportunidad. :D*
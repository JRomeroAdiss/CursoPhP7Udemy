
# Comandos Git


## git add .
```
Lo utilizamos para que añadmos los nuevos archivos.
```
## git status
```
Lo utilizamos para ver los archivos que estan listos para hacer commit.
```
## git commit 
```
Lo utilizamos para crear nuestro commit y aadimos un comentario de identificacion.

Ejemplo: git commit -am "Comentario".
```
## git push
```
Lo usamos para aplicar los cambios del commit en la rama que indiquemos.

Ejemplo: git push origin master
```
## .gitignore
```
Este es un fichero que creamos para almacenar los fichero que no queremos que se suban a GitHub, 
dentro de este fichero pondremos los nombres del fichero que no queremos que se suba ejemplo secret.txt.
```
## git checkout
```
Lo utilizamos para salir de la rama en la que estamos.

Si queremos ir a cualquier rama escribimos git checkout "nombre da la rama".
```
## git merge
```
Lo utilizamos para unir/fusionar ramas.
```
## git tag
```
Lo utilizamos para nombrar versiones estables.

Ejemplo: git tag -a v1.0.0 -m "Primera version de nuesro Software".

Se ejecutamos el comando git tag veremos v.1.0.0.

Ahora podemos poner git push origin v1.0.0 para aplicar los cambios sobre esta version.
```
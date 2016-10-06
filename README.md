# curso-php-videoclub
Este es un repositorio donde se almacenara el código del ejemplo "VideoClub" realizado por los alumnos del Curso de PHP.


# Guía para contribuir al proyecto #

1) Cada task o implementación debe ser gestionada a través de un [issue](https://github.com/sanfranciscodev/curso-php-videoclub/issues). Este issue tomara un numero, por ejemplo #125.

2) Cada task debe ser asignada a un solo responsable.

3) Para cada task, se debe crear un branch siguiendo la siguiente convención: nombre_del_issue/#**n**, donde **n** es el numero de la issue. Por ejemplo, para la issue #125 de "Crear usuarios", la rama se llamaría crear_usuarios/#125

```git
git checkout master                   #Para volver a la rama master
```

```git
git pull --rebase                     #Para traer lo nuevo de master que esta en GitHub
```

```git
git checkout -b crear_usuarios/#125   #Crea la rama
```

4) Mientras se va trabajando, es recomendable, cuando se logran pequeños pasos, ir haciendo commits sobre la rama en la que estamos trabajando, y pusheando los cambios al servidor:

```git
git status                          #Comprobar los archivos modificados y si estamos sobre la rama indicada
```

```git
git add -A .                        #Agrega todos los archivos para ser commiteados
```

```git
git commit -m "Mensaje del commit"  #El mensaje describe lo que hiciste (las comillas ESTÁN incluidas)
```

```git
git push origin nombre_del_branch   #Coloca los cambios en el repo remoto (GitHub)
```

5) Una vez finalizado el trabajo y corroborado que funcione, se hace un [Pull Request](https://github.com/sanfranciscodev/curso-php-videoclub/pulls)

6) Asignar el Pull Request a un responsable de revisión, que sera encargado de marcar correcciones en caso de que las haya, y una vez que estén solucionadas, será mergeado a master.


### **Conflictos al crear Pull Request** ###
Cuando queremos fusionar nuestra rama (ya terminada y testeada, lista para entrar en producción) con el master, tenemos que crear un Pull Request, el cual sirve para que otra persona revise lo que se hizo en busca de errores y dé el visto bueno para hacer el merge. En algunos casos, suele pasar que hay inconsistencias entre nuestra rama y master. De ser así, tenemos que seguir los siguientes pasos:

```git
git checkout master       #Pararse sobre master
```

```git
git pull --rebase         #Traer lo que está en el master del repositorio remoto
```

```git
git checkout mi_rama/#23  #Pararse sobre la rama conflictiva
```

```git
git merge master          #Fusionar con master
```

Luego de esto, van a aparecer todos los archivos en los que existen conflictos. Lo que queda por hacer es abrirlos y solucionar manualmente cada inconveniente.

Para orientar al desarrollador, Git establece una metodología donde agrega a nuestro código la siguiente comparación:

```ruby
def hello
<<<<<<< HEAD
  puts 'hola world'
=======
  puts 'hello mundo'
>>>>>>> master
end

hello()
```

Esto significa: *HEAD nos muestra nuestros cambios locales* y *master los que traemos del repositorio remoto*. Sólo nos queda unificar ese código problemático y subir los cambios como ya sabemos.

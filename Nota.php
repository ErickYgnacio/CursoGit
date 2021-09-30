******************************* GIT *******************************

------------- PRIMEROS COMANDOS -------------

	-<git init>: Solo se ejecuta una vez y es al comenzar nuestro proyecto o cuando queremos
	que git comience a ser un seguimiento de nuestro proyecto. 

		Conseguimos con esto que GIT cree 2 areas donde ira almacenando los archivos,
		la primera es Area de ensayo(staging area) que es una area temporal y la segunda es Repositorio local.

	-<git add <nombre archivo> >: hace seguimiento de uno, varios o todos los archivos del 
	proyecto y los mueve al Area de ensayo(Todo lo hace GIT internamente).
		Cuando <nombre archivo> es "." git hara un seguimiento a todos los archivos del proyecto.

	-<git commit>: traslada el archivo o archivos que haya en el area de ensayo al area del 
	repositorio local. Aca se crea el respaldo propiamente dicho. 

		Una vez que tenemos aqui el archivo o los archivos podemos obtener un respaldo 
		de como se encontraba ese archivo cuando lo llevamos al repositorio local en 	
		cualquier momomento.

		git commit -m "<descripcion>": para agregar una descripcion del respaldo.

		Siempre antes de hacer un commit a un archivo, este archivo debe estar en el
		Area de ensayo(con git add), si no, no se guardara en el repositorio.

		Cuando a un archivo que está en el repositorio se le hace modificaciones y ese archivo
		modificado se desea subir al repositorio, primero debemos mandarlo al
		Area de Ensayo(con git add) para luego hacer el commit.

		git commit -am "<descripcion>": comando para hacer un add y un commit a la vez

		git commit --amend: Abre el editor VIM. El editor VIM nos permite modificar descripcion y otras cosas.

	-<git status -s>: Nos da un listado con todos los archivos y direcctorios que tenemos de
	momento en la carpeta del proyecto.
		
		Si sale un signo de interrogación en la parte izquierda quiere decir que
		ninguno de esos archivos o directorios está siendo sometido a seguimiento por 	
		parte de GIT. Entonces por ese momento no se puede crear copias de respaldo de 
		ninguno de esos archivos o directorios.

		Si aparece una A quiere decir que ha sido agregado al area de Ensayo(staging Area).

		Si se vuelve a poner status luego de un commit a los archivos que tenian A a 	
		la izquierda, estos desaparecen del listado, ya que, esos archivos han sido 	
		agregados al repositorio. El comando git status solo informa a quienes se esta 
		haciendo seguimiento(Area de ensayo) o a quienes no.

		Cuando se pone status luego de hacer una modificación a un archivo que ya ha
		sido mandado al repositorio, se mostrará en la pantalla de git un identificador 
		M(ROJO) a la izquierda del archivo que significa que el archivo ha 	sido modificado y que 
		aun no se guarda en el repositorio el archivo con las modificaciones respectivas. Si
		hacemos un git add a ese archivo el identificador M pasará a ser color VERDE y ahí recien
		podrá ser guardado en el repositorio, antes no.

		Cuando aparece AM quiere decir que ha sido agregado al Area de Ensayo(Staging Area) y que ha
		sido modificado pero no ha sido enviado al repositorio aún. Y para enviarlo al repositorio hay
		que volver a enviar al Area de Ensayo(con git add) para luego hacer un commit.

	-<git log --oneline>: listado de todas las copias en el repositorio local

	<git reset --hard <codigo> >: restaura un archivo

		Si despues del archivo devuelto por git reset se usa el comando git log --oneline, la lista que se 
		mostrará será de las versiones anteriores al archivo y no las posteriores.

------------ PARA SUBIR MI REPOSITORIO A GITHUB ------------

	<git remote add origin <link del repositorio en github> >: Sube lo que tenemos en git(nuestro ordenador local)
	a github.

	<git push -u origin master> >: Es para ir subiendo las actualizaciones

	-------Se requiere de git remote add origin <LINK> y git push -u origin master para subir lo que tenemos en Repositorio
	local a github.--------

------------ PARA TRAER INFORMACIÓN DE REMOTO A LOCAL ------------
	-<git pull>: Trae la información de remoto a local.

	-<git tag <nombre>> : Es una etiqueta para nuestro proyecto que se crea
		primero en git. 

		<<git tag <nombre> -m >: Con este comando se le agrega una descripción al tag
	
	-<git push --tags>: Se suben las tags a github


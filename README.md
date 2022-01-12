# node-docker
aprendendo docker


### docker ps -a
### docker build .
### docker run -d -p 3000:3000 --name app_teste 9052f2a08e88
### docker images
### docker rm app_teste(deleta conteiner)
### docker rmi app_teste(deleta imagem)
### docker logs app_app -f
### docker tag 9052f2a08e88 imagen3:tag3
### docker build -t nova_imagem:d .docker tag 9052f2a08e88 imagen3:tag3
### docker system prune
### docker run -d -p 3000:3000 --name app_app --rm 9052f2a08e88
### docker cp app_app:/app/app.js .\copia
### docker top app_app
### docker inspect app_app
### docker stats
### docker login
### docker logout
### docker build -t samuellopes123/node-teste .
### docker push samuellopes123/node-teste
### docker run -d -p 801:80 --name boi99 --rm -v /data phpteste:teste3 ( Volume anonimo )
### docker run -d -p 801:80 --name boi99 --rm -v nomedovolume:/var/www/html/messages phpteste:teste3 ( Volume nomeado )
### docker volume ls
### docker run -d -p 801:80 --name boi99 --rm -v C:\Users\samu\Desktop\mesagese:/var/www/html/messages phpteste:teste3 (Bind Mount)
### docker run -d -p 801:80 --name boi99 --rm -v C:\Users\samu\Desktop\php_teste:/var/www/html phpteste:teste3 (Bind Mount pode ser usado pra editar)
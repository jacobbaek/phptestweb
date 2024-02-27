# Introduce
This is web server which will print dig command result.
Setting TDOMAIN to env will print the result of dig command for TDOMAIN.

# How to use
```
$ docker build . -t phptest
$ docker rm phptest # if there is container which has samename 
$ docker run --name phptest -e TDOMAIN='google.com' -p 8000:8000 phptest
$ curl localhost:8000
```

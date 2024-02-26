FROM php:8.2-cli
RUN apt-get update && apt-get install -y dnsutils
RUN mkdir -p /app
COPY . /app
WORKDIR /app
CMD [ "php", "-S", "0.0.0.0:8000", "./main.php" ]

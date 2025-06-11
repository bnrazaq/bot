FROM php:7.4-cli
COPY . /app
WORKDIR /app
CMD ["php", "-S", "0.0.0.0:10000"]

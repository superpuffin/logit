FROM debian:bookworm-slim

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get -y upgrade \
    && apt-cache search " module for PHP" | awk '{print $1;}' | xargs apt-get install -y  \
    && apt-get install --no-install-recommends -y npm composer zip

WORKDIR /var/www/html



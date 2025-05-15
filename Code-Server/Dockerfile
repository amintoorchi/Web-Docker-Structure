FROM ghcr.io/coder/code-server:latest

USER root

RUN apt-get update && apt-get install -y \
    python3 \
    python3-pip \
    php \
    php-cli \
    php-mbstring \
    php-xml \
    php-curl \
    php-zip \
    php-mysql \
    curl \
    unzip \
    nano \
    git


# اجازه کار به کاربر coder
USER coder

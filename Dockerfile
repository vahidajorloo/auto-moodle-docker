# Base image
FROM php:8.2-apache

ENV DEBIAN_FRONTEND=noninteractive

# Set Moodle environment variables
ENV MOODLE_VERSION=5.0.2 \
    MOODLE_DIR=/var/www/html \
    MOODLEDATA_DIR=/var/www/moodledata

# Install required packages and PHP extensions (including exif)
RUN apt-get update && apt-get install -y \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libxml2-dev \
        libzip-dev \
        libicu-dev \
        libonig-dev \
        mariadb-client \
        git \
        ghostscript \
        unzip \
        cron \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli opcache intl soap zip mbstring exif \
    && rm -rf /var/lib/apt/lists/*

# Enable Apache modules
RUN a2enmod rewrite headers

# Set PHP configuration for Moodle
RUN { \
        echo "max_input_vars=5000"; \
        echo "memory_limit=1024M"; \
        echo "post_max_size=1024M"; \
        echo "upload_max_filesize=1024M"; \
        echo "session.save_handler=files"; \
        echo "file_uploads=On"; \
        echo "opcache.enable=1"; \
        echo "opcache.memory_consumption=256"; \
        echo "opcache.interned_strings_buffer=16"; \
        echo "opcache.max_accelerated_files=10000"; \
        echo "opcache.validate_timestamps=1"; \
        echo "opcache.revalidate_freq=2"; \
    } > /usr/local/etc/php/conf.d/moodle.ini

# Create Moodle directories and set permissions
RUN mkdir -p $MOODLE_DIR $MOODLEDATA_DIR \
    && chown -R www-data:www-data $MOODLE_DIR $MOODLEDATA_DIR \
    && chmod -R 755 $MOODLE_DIR $MOODLEDATA_DIR

# Expose Apache port
EXPOSE 80

# Default command
CMD ["apache2-foreground"]

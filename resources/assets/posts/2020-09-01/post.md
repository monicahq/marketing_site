We are really happy to announce that Monica has now an [Official Docker Image](https://hub.docker.com/_/monica). It’s a huge milestone for us, and a sign of recognition from the community.

According to the official documentation, the Docker Official Images are a curated set of Docker repositories hosted on Docker Hub. These images have clear documentation, promote best practices, and are designed for the most common use cases. Each of the images in the Official Images is scanned for vulnerabilities.

Monica is the 164th open-source project to become part of the program, alongside Ubuntu, redis, node, and many others.

Our [previous home-made Docker image](https://hub.docker.com/r/monicahq/monicahq) has been downloaded almost 10 million times so far. That in itself is a huge accomplishment. 6 months ago, Alexis reached out to Docker on Github to start the submission process of having an official Docker image. There are some conditions to become part of the program, and there has been a lot of back and forth to fine-tune the image, and make it worthy of becoming part of the program.

The efforts paid off, as we now have our very own official Docker image.

### How to use the new image

Below is an easy guide to upgrade your current Docker image to the new image.

1. Backup your data before the migration

`docker-compose exec db sh -c 'exec mysqldump -u$MYSQL_USER -p"$MYSQL_PASSWORD" $MYSQL_DATABASE' > backup.sql`

2. Update your `docker-compose.yml` file or any other docker manager you use:
   1. change images name from `monicahq/monicahq` to `monica`. See the [complete documentation](https://hub.docker.com/r/monicahq/monicahq) for more information.
   2. change any reference `/var/www/monica` to `/var/www/html`

The owner user of `/var/www/html` is also different, but this should not change anything. If you use sentry, it has been removed from the monica image, the `sentry:release` artisan command is able to download it for you.

### Thanks to all

Thanks so much to Docker for their help during this process, and to the community for believing in the project.
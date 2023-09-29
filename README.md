# William Santos Arq
Landing page for William

# Instalation

## build containers

    docker run --rm -i -t \
    -v $(pwd):/var/www/html \
    -v ~/.ssh:/root/.ssh \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs

## start containers

    ./vendor/bin/sail up

## create sail alias
 - Open `~/.bashrc`
 - paste `alias sail='bash vendor/bin/sail'` in the end of the file
 - restart your terminal

now you can run sail commands with `sail` instead of `./vendor/bin/sail`

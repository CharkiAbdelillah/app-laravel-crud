FROM ubuntu:18.04
#First, update the list of packages
RUN apt update -y
#Next, install the updates:
RUN apt upgrade -y
RUN apt install git -y
RUN git clone https://github.com/CharkiAbdelillah/app-laravel-crud
RUN cd app-laravel-crud
# install composer
RUN DEBIAN_FRONTEND=noninteractive apt-get -yq install composer
# install the required packages with:
RUN apt install php-mbstring php-xml php-bcmath -y
# install composer in project
RUN cd app-laravel-crud && composer install -n
#ADD start.sh .
#CMD ["/start.sh"]
CMD ["sh","-c", "cd app-laravel-crud && ./vendor/bin/phpunit --filter fibonacci && ./vendor/bin/phpunit --filter is"]

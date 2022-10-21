FROM mysql:8.0
COPY dump.sql /var/lib/mysql
WORKDIR /var/lib/mysql
RUN mysql -uroot -proot \
    create database bootcamp; \
    exit \
    mysql -uroot -proot bootcamp < dump.sql
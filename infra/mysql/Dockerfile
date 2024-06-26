FROM mysql/mysql-server:8.0

# ENV MYSQL_USER=DB_USERNAME \
#   MYSQL_PASSWORD=DB_PASSWORD 
#   TZ=Asia/Tokyo

# rootユーザーのパスワードを設定
# ENV MYSQL_ROOT_PASSWORD=rootpass

ENV TZ=Asia/Tokyo

COPY ./my.cnf /etc/my.cnf
# RUN chmod 644 /etc/my.cnf

# 初期化スクリプトをコンテナにコピー
# COPY ./initdb.sql /docker-entrypoint-initdb.d/
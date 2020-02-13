FROM gitpod/workspace-mysql

ENV test=0

RUN apt-get update && apt-get install phpmyadmin

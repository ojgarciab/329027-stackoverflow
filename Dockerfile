FROM gitpod/workspace-mysql

ENV test=0

RUN mkdir -p /var/lib/apt/lists/partial &&
  && apt-get update && apt-get install phpmyadmin \
  && apt-get clean && rm -rf /var/cache/apt/* /var/lib/apt/lists/* /tmp/*

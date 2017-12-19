# PHP-LND-gRPC
A gRPC client for LND in PHP, auto-generated and built by docker
 - `docker build . -t protoc`
 - `docker run --rm -it -v $PWD/src:/opt/lnd-gprc protoc`
 - `sudo chown $UID:$GID -Rf ./src`
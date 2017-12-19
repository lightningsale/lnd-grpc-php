# PHP-LND-gRPC
A gRPC client for LND in PHP, auto-generated and built by docker

## To use: 
 *unkown* :/

## To generate package:
 - `docker build . -t protoc`
 - `docker run --rm -it -v $PWD/src:/opt/lnd-gprc protoc`
 - `sudo chown $UID:$GID -Rf ./src`
 - `find /opt/lnd-gprc/src -type f -print0 | xargs -0 sed -i 's|namespace Lnrpc;|namespace LightningSale\\Lnrpc;|g'`
 - `find /opt/lnd-gprc/src -type f -print0 | xargs -0 sed -i 's|namespace GPBMetadata;|namespace LightningSale\\GPBMetadata;|g'`
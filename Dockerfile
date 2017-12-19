FROM ubuntu

RUN apt-get -qq update \
    && apt-get install --assume-yes --quiet --no-install-recommends \
        ca-certificates git dh-autoreconf gcc g++ build-essential \
    && rm -r /var/lib/apt/lists/*

WORKDIR /opt/grpc
RUN git clone -b v1.8.x https://github.com/grpc/grpc .
RUN git submodule update --init && make grpc_php_plugin && make install
RUN git clone https://github.com/grpc-ecosystem/grpc-gateway /opt/grpc-ecosystem
WORKDIR /opt/temp-lnd-grpc
RUN git clone https://github.com/lightningnetwork/lnd .
RUN cd /opt/temp-lnd-grpc/lnrpc && mkdir /opt/lnd-gprc
RUN ln -s /opt/grpc/bins/opt/protobuf/protoc /bin/protoc


WORKDIR /opt/temp-lnd-grpc/lnrpc
VOLUME /opt/lnd-gprc

CMD ["protoc", \
    "--proto_path=./", \
    "--proto_path=/opt/grpc-ecosystem/third_party/googleapis/", \
    "--proto_path=/opt/grpc/third_party/protobuf/src/", \
    "--php_out=/opt/lnd-gprc", \
    "--grpc_out=./", \
    "--plugin=protoc-gen-grpc=/opt/grpc/bins/opt/grpc_php_plugin", \
    "./rpc.proto" \
    ]
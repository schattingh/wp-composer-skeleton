#!/bin/bash

DIR=$(pwd)
DIRNAME=$(basename ${DIR})

docker run -it --rm \
-v $DIR:/app \
${DIRNAME}

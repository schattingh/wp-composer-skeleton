#!/bin/bash

DIR=$(pwd)
DIRNAME=$(basename ${DIR})

docker run -it --rm \
-v $DIR:/app \
-v ~/.aws:/root/.aws \
-v ~/.ssh:/root/.ssh \
${DIRNAME}

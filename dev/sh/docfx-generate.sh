#!/bin/bash

if [ "$#" -ne 2 ]; then
     echo "usage: docfx-generate.sh \$DIR \$VERSION"
     exit 1;
fi

DIR=$1
VERSION=$2

set -ev

# run phpDocumentor to create structure.xml
phpdoc -d $DIR/src --template xml

# generate DocFX YAML
dev/google-cloud docfx $DIR .phpdoc/build/structure.xml

# create the metadata file
docuploader create-metadata \
     --name Google.Cloud.$DIR \
     --version $VERSION \
     --language php

# upload to staging bucket
docuploader upload out \
     --staging-bucket docs-staging-v2-dev \
     --destination-prefix 'docfx-'

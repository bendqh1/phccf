#!/bin/bash

cd WEBSITE_DIR &&
rm -rf prcf-main &&
curl -L -O https://github.com/bendqh1/prcf/archive/main.zip &&
unzip main.zip &&
rm main.zip

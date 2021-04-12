#!/bin/bash

cd WEBSITE_DIR && # Web Application Root directory comes here, instead "WEBSITE_DIR";
rm -rf prcf-main &&
curl -L -O https://github.com/bendqh1/prcf/archive/main.zip &&
unzip main.zip &&
rm main.zip

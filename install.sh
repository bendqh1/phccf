#!/bin/bash

cd "${website_dir}" && # Web Application Root directory comes here per global variable in, say, .bashrc
rm -rf prcf-main &&
curl -L -O https://github.com/bendqh1/prcf/archive/main.zip &&
unzip main.zip &&
rm main.zip

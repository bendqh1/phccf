#!/bin/bash

# read website_dir
rm -rf prcf-main
curl -L -O https://github.com/bendqh1/prcf/archive/main.zip
unzip main.zip
rm main.zip

while true; do
    read -p "Do you wish to configure php variables now?" yn
    case $yn in
        [Yy]* ) nano prcf-main/backend/contact_form.php; break;;
        [Nn]* ) break;;
        * ) echo "Please answer yes or no.";;
    esac
done

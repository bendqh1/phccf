#!/bin/bash

rm -rf prcf-main
curl -L -O https://github.com/bendqh1/prcf/archive/main.zip
unzip main.zip
rm main.zip
mv /prcf-main/html/contact_form.html . # MOVE THE FILE to site dir
mv /prcf-main/html/success.html . # MOVE THE FILE to site dir

# while true; do
    # read -p "Do you wish to configure your email address for the form in the php file now?" yn
    # case $yn in
        # [Yy]* ) nano prcf-main/0_contact_form.php; break;;
        # [Nn]* ) break;;
        # * ) echo "Please answer yes or no.";;
    # esac
# done

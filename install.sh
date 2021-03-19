#!/bin/bash

# I suggested to save your website direcotry path into a global variable and then do tasks;

cd "${website_dir}" &&
rm -rf prcf-main &&
curl -L -O https://github.com/bendqh1/prcf/archive/main.zip &&
unzip main.zip &&
rm main.zip
nano prcf-main/0_contact_form.php

# In the `curl` above `=L` is to follow a redirection in which case happens and `-O` is to keep the remote name (instead getting a generic file name).

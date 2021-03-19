#!/bin/bash

# If you have just one website directory per system, I suggest to save that website direcotry path into a global variable and then do tasks:

cd "${website_dir}" &&
rm -rf prcf-main &&
curl -L -O https://github.com/bendqh1/prcf/archive/main.zip &&
unzip main.zip &&
rm main.zip &&

while true; do
    read -p "Do you wish to configure your email address for the form in the php file?" yn
    case $yn in
        [Yy]* ) nano prcf-main/0_contact_form.php; break;;
        [Nn]* ) break;;
        * ) echo "Please answer yes or no.";;
    esac
done

# In the loop exit instead (the second) break for total exit;
# In the `curl` above `=L` is to follow a redirection in which case happens and `-O` is to keep the remote name (instead getting a generic file name);

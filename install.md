## Set variables

I suggested to save your website direcotry path into a variable and then do tasks.

Currently I personally do it this way:

```shell
home_dir=$(echo $HOME) &&
read website_dir_relative_path_after_home_dir && 
website_dir="${home_dir} ${website_dir_relative_path_after_home_dir}"
```

## Do tasks

```shell
cd "${full_path}"
rm -rf prfc-main
curl https://github.com/bendqh1/prcf/archive/main.zip
unzip prfc-main.zip
rm prfc-main.zip
nano prfc-main/[0-9_]contact_form.php
IFS=$' \t\n'
```

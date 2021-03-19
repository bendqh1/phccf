## Set variables

```shell
IFS= read -r domain_dir
```

## Do tasks

```shell
cd "${domain_dir}"
rm -rf prfc-main
curl https://github.com/bendqh1/prcf/archive/main.zip
unzip prfc-main.zip
rm prfc-main.zip
nano prfc-main/[0-9_]contact_form.php
IFS=$' \t\n'
```

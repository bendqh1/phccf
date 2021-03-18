## Set variables

```shell
read prfc_dir
```

## Do tasks

```shell
cd "$prfc_dir" && cd ..
rm -rf "${prfc_dir}"
curl https://github.com/bendqh1/prcf/archive/main.zip
unzip prfc-main.zip
nano prfc-main/[0-9_]*contact_form.php
```

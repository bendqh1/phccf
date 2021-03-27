Either copy-paste-exectuee the following, or make the following a shell alias or a shell function (most likely exported):

```shell
(
cd "${website_dir}" &&
wget https://raw.githubusercontent.com/USER/PROJECT/BRANCH/install.sh
source install.sh
rm install.sh
)
```

Ensure to change USER/PROJECT/BRANCH accordingly.

Either copy,paste and exectuee the following, or make the following a shell alias:

```shell
(
cd "${website_dir}"
wget https://raw.githubusercontent.com/USER/PROJECT/BRANCH/install.sh
source install.sh
rm install.sh
)
```

Ensure to change USER/PROJECT/BRANCH accordingly.

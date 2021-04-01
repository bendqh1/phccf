One could use the following pattern (most likely, after proper configuration) to call `install.sh` of this remote program:

```shell
(
cd "${website_dir}" &&
wget https://raw.githubusercontent.com/USER/PROJECT/BRANCH/install.sh
source install.sh
rm install.sh
)
```

After installing (or upgrading) one should edit the PHP file accordingly (email address and contact form success page).

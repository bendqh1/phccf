One could use the following pattern (after editing it) to call `install.sh` of this remote program:

```shell
(
cd "${website_dir}" &&
wget https://raw.githubusercontent.com/USER/PROJECT/BRANCH/install.sh
source install.sh
rm install.sh
)
```

After proper editing --- copying-pasting-executing in terminal is a nice way and a global alias/function call from terminal might be even nicer.


## Set variables

I suggested to save your website direcotry path into a variable and then do tasks.

Currently I personally do it this way:

```shell
home_dir=$(echo $HOME) &&
read website_dir_relative_path_after_home_dir && 
website_dir="${home_dir}${website_dir_relative_path_after_home_dir}" # Note the lack of spacing between the two ${}${};
```

## Do tasks

```shell
cd "${website_dir}" &&
rm -rf prcf-main &&
curl -L -O https://github.com/bendqh1/prcf/archive/main.zip &&
unzip main.zip &&
rm main.zip
nano prcf-main/0_contact_form.php
```

## Notes

In the `curl` above `=L` is to follow a redirection in which case happens and `-O` is to keep the remote name (instead getting a generic file name).

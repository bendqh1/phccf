## Set variables

read an_already_downloaded_version
# web_application_root/CMS-Website-Dir/prcf-main/

read download_destination
# web_application_root/CMS-Website-Dir

read to_email_address

## Do tasks

rm -rf an_already_downloaded_version
wget https://github.com/bendqh1/prcf/archive/main.zip -O "${download_destination}"
unzip "${download_destination}"/prfc-main
sed 

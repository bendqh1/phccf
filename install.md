## Set variables

    read delete_an_existing_prcf-main

> web_application_root/CMS-Website-Dir/prcf-main/

    read download_prcf-main_destination
    
> web_application_root/CMS-Website-Dir/

    read to_email_address

> The email address to which form inquieries should be emailed;

## Do tasks

rm -rf an_already_downloaded_version
wget https://github.com/bendqh1/prcf/archive/main.zip -O "${download_destination}"
unzip "${download_destination}"/prfc-main
sed 

# PHP RTL Contact Form

A CMS-agnostic backend-frontend simple contact form for one recpient which is aimed solely for Right To Left (RTL) languages and allows appointment setting to allow service sale automation.

## Software requirments

This program requires:

* A well configured *DNS records hosting*
* A well configured *websites hosting* 
* A well configured *website emails hosting* comprised by itself of:
  * Local Email Server (**LES**) such as *Postfix*
  * Local Email Protocoler (**LEP**) such as *Dovecot*
  * Local Email Client (**LEC**) such as *Roundcube*

## Language

It was originally designed in Hebrew but one should be able to change the Hebrew to any other RTL language.

## Installation

I recommend to do a non Git installation, directly from a shell, either by copy-pasting or by `wget`ing and `source`ing a local version (but first anyway by copy-pasting becuase I clue there about a `${website_dir}` variable than can ease loading the script remotely which is especially relvant if you have just one website directory per system).

## Notes

* A user's *local email box address* should be setted at the backend
* One might want to ensure that any PHP file is not accessible by a browser, to prevent an hardcoded email address from being leaked to spambots

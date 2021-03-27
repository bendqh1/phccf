# PHP RTL Contact Form

A CMS-agnostic HTML-CSS-PHP simple contact form which is aimed solely for Right To Left (RTL) languages and allows appointment setting.

It redundents the need in a remote email server (such as Gmail) accessible by a proxy such as sSMTP.

## Language

It was originally designed in Hebrew but one should be able to change the Hebrew to any other RTL language.

## Software requirments

This program requires a well configured local email server (such as Postfix) to work.

## Installation

I recommend to do a non Git installation, directly from a shell, either by copy-pasting or by `wget`ing and `source`ing a local version (but first anyway by copy-pasting becuase I clue there about a `${website_dir}` variable than can ease loading the script remotely which is especially relvant if you have just one website directory per system, I suggest to save that website direcotry path into a variable and then do tasks.

## Notes

* The user's email address should be setted at `contact_form.php` (install.sh prompts about that);
* I recommend to double ensure that any PHP file is not accessible by a browser, to prevent an hardcoded email address from being leaked to spambots.
* In the loop, instead the second `break` can come `exit` but this will also terminate the window.
* In the `curl` command:
  * `-L` is to follow a redirection in which case happens
  * `-O` is to keep the remote name (instead getting a generic file name such as `archive`).

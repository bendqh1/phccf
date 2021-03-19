# PHP RTL Contact Form

A CMS-agnostic HTML-JavaScript-CSS-PHP simple contact form which is aimed solely for Right To Left (RTL) languages and allows appointment setting.

It redundents the need in a remote email server (such as Gmail) accessible by a proxy such as sSMTP.

## Language

It was originally designed in Hebrew but one should be able to change the Hebrew to any other RTL language.

## Software requirments

This program requires a well configured local email server (such as Postfix) to work.

## Installation

I recommend to do a non Git installation, directly from a shell, either by copy-pasting or by wget download to stdin and piping to bash (as explained in install.sh).

### install.sh

If you have just one website directory per system, I suggest to save that website direcotry path into a global variable and then do tasks.

In the loop exit instead (the second) break for total exit.

In the `curl` above `-L` is to follow a redirection in which case happens and `-O` is to keep the remote name (instead getting a generic file name).

## Notes

* The user's email address should be setted at `contact_form.php`.
* I recommend to double ensure that any PHP file is not accessible by a browser, to prevent an hardcoded email address from being leaked to spambots.

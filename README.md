# PHP RTL Contact Form

A CMS-agnostic HTML-JavaScript-CSS-PHP simple contact form which is aimed for Right To Left (RTL) languages by design and allows appointment setting.

## Language

It was originally designed in Hebrew but one should be able to change the Hebrew to any other RTL language.

## Software requirments

This program requires a well configured local email server (such as Postfix to work; it redundents the need in a remote email server accessible by a proxy such as sSMTP).

## Notes

* The user's email address should be setted at `contact_form.php`.
* I recommend double ensure that PHP files are not accessible by a browser, to prevent an hardcoded email address from being leaked to spambots.

pour le mailing il faut mettre le fichier sendmail dans wamp64 et il faut aussi modifier le fichier de configuration 'php.ini' qui se place
"C:\wamp64\bin\apache\apache2.4.46\bin\php.ini" puis il faut chercher le mot smtp (dans le fichier php.ini et modifier les 4 parametres suivants :
-SMTP =localhost 
-smtp_port=25
-sendmail_form=
-sendmail_path=

et voici le resultat de la partie modifiée

[mail function]
; For Win32 only.
; http://php.net/smtp
SMTP =smtp.gmail.com
; http://php.net/smtp-port
smtp_port = 587

; For Win32 only.
; http://php.net/sendmail-from
sendmail_from =atunisiatour@gmail.com
; For Unix only.  You may supply arguments as well (default: "sendmail -t -i").
; http://php.net/sendmail-path
sendmail_path ="C:/wamp64/sendmail/sendmail.exe -t"

bien sur il faut redémarrer WampServer apres la modification du fichier php.ini
et Voici enfin le compte d'administration pour notre projet


adresse: atunisiatour@gmail.com
mdp: atunisiatour123

et voici le lien du site que j'ai utilisé
https://waytolearnx.com/2020/01/comment-configurer-wampserver-pour-envoyer-un-mail-depuis-localhost-en-php.html

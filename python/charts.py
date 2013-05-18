import imaplib
import email

mail = imaplib.IMAP4_SSL('imap.gmail.com')
mail.login('ebuckthal@gmail.com', 'V3vus9jy{')

mail.select('KCPR')

result, data =  mail.uid('search', None, '(HEADER Subject "Charts" from "kcpr@calpoly.edu")')

def get_first_text(e_msg_instance):
   maintype = e_msg_instance.get_content_maintype()

   if maintype == 'multipart':
      for part in e_msg_instance.get_payload():
         if part.get_content_maintype() == 'text':
            return part.get_payload()
   elif maintype == 'text':
      return e_msg_instance.get_payload()

for uid in data[0].split():
   result, data = mail.uid('fetch', uid, '(RFC822)')
   raw = data[0][1]

   e_msg = email.message_from_string(raw)


   print get_first_text(e_msg)


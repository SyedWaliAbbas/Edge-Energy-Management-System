from enc2 import *
import subprocess
import time
fh=open('/home/pi/fyp/file.csv')
#time.sleep(10)
fh2=open('/home/pi/fyp/enc.csv','w')
#time.sleep(10)
data =fh.read();

#time.sleep(10)
#print('here')
k = des("DESCRYPT", CBC, "\0\0\0\0\0\0\0\0", pad=None, padmode=PAD_PKCS5)
#time.sleep(10)
# For Python3, you'll need to use bytes, i.e.:
#   data = b"Please encrypt my data"
#   k = des(b"DESCRYPT", CBC, b"\0\0\0\0\0\0\0\0", pad=None, padmode=PAD_PKCS5)
#print('here')
d = k.encrypt(data)
#print "Encrypted: %r" % d
time.sleep(10)
fh2.write(d)

fh2.close()
fh.close()

#print "Decrypted: %r" % k.decrypt(d)
#assert k.decrypt(d, padmode=PAD_PKCS5) == data
p = subprocess.Popen([sys.executable, '/home/pi/fyp/cloud.py'], stdout=subprocess.PIPE, stderr=subprocess.STDOUT)

time.sleep(10)

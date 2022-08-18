import serial
import subprocess
import sys
import time
from datetime import datetime

fdres=open('/home/pi/fyp/dres3.txt','r')
z=fdres.read()
print (z)

try:
	
	ser1= serial.Serial(z.strip(),115200)
	print "Ardino connectd"

	
except:
	
	print ("Arduino2 Not Connected")


ser2=ser1;

time.sleep(6)

#F:\Anaconda2\python.exe  F:\a.py
	#p = subprocess.Popen([sys.executable, calculation], stdout=subprocess.PIPE, stderr=subprocess.STDOUT)
def data(ser1,ser2,fh,calculation,st):
	cons=''
	print('here')
	ser1.flushInput()
	#ser2.flush()
	q=time.time()
	ser1.write('1')
	#ser1.write('1')
	
	
	r=0
	max=1023
	a1=''
	a2=''
	


	#time.sleep(0.06*4)

	while (r<=max):
		b1= ord(ser1.read(1))
		b2= ord(ser1.read(1))
		r= b1 + b2*256
			
		

		if (r<=max):
			a1=a1+','+str(r)
		
	r=0;max=1023;	
	while (r<=max)  :	
		b1= ord(ser1.read(1))
		b2= ord(ser1.read(1))
		r= b1 + b2*256
		
		if (r<=max):
			a2=a2+','+str(r)
	
	a1=a1+'@@@'
	
	a2=a2+'@@@'		
	r=0
	max=1023
	
	ser1.flushInput();
	#ser1.flushOutput();
	#ser1.write('9');
	ser1.write('9');
	#ser1.write('9');
	check=''
	
	check=ord(ser1.read(1));
	#check=ord(ser1.read(1));
	check=str(check)	
	#print (check)
	cons=check
	
	
	ser1.flushInput();
	#ser1.write('1');
	ser1.write('1')
	
	#time.sleep(0.06*4)
	
	while (r<=max):
		b1= ord(ser1.read(1))
		b2= ord(ser1.read(1))
		r= b1 + b2*256
			
		

		if (r<=max):
			a1=a1+','+str(r)
		
	r=0;max=1023;	
	while (r<=max):	
		b1= ord(ser1.read(1))
		b2= ord(ser1.read(1))
		r= b1 + b2*256
		
		if (r<=max):
			a2=a2+','+str(r)
	a1=a1+'@@@'
	a2=a2+'@@@'
	r=0
	max=1023
	
	ser1.flushInput();
	#ser1.flushOutput();
	#ser1.write('9');
	ser1.write('9');

	check=ord(ser1.read(1));
	#print(str(check))
	check=str(check)
	cons=cons+','+check
	ser1.flushInput();
	ser1.write('1');
	#ser1.write('1')
	
	#time.sleep(0.06*4)
	
	while (r<=max):
		b1= ord(ser1.read(1))
		b2= ord(ser1.read(1))
		r= b1 + b2*256
	
		

		if (r<=max):
			a1=a1+','+str(r)
		
	r=0;max=1023;	
	while (r<=max):	
		b1= ord(ser1.read(1))
		b2= ord(ser1.read(1))
		r= b1 + b2*256
		
		if (r<=max):
			a2=a2+','+str(r)
			
	a1=a1+'@@@'
	a2=a2+'@@@'			
	r=0
	max=1023
	
	ser1.flushInput();
	#ser1.flushOutput();
	#ser1.write('9');
	ser1.write('9');

	check=ord(ser1.read(1));
	#print(str(check))
	check=str(check)
	cons=cons+','+check
	ser1.flushInput();
	#ser1.write('1');
	ser1.write('1')
	#ser2.write('1')
	#time.sleep(0.06*4)
	
	while (r<=max):
		b1= ord(ser1.read(1))
		b2= ord(ser1.read(1))
		r= b1 + b2*256
		
		

		if (r<=max):
			a1=a1+','+str(r)
		
	r=0;max=1023;	
	while (r<=max):	
		b1= ord(ser1.read(1))
		b2= ord(ser1.read(1))
		r= b1 + b2*256
		
		if (r<=max):
			a2=a2+','+str(r)
	#.........................................NEEEEEEEEEEEWWWWWWWWWWWWWWWWWWWWWWWWWW.......................................................
	a1=a1+'@@@'
	a2=a2+'@@@'			
	r=0
	max=1023
	
	ser1.flushInput();
	#ser1.flushOutput();
	#ser1.write('9');
	ser1.write('9');

	check=ord(ser1.read(1));
	check=str(check)
	cons=cons+','+check
	
        ser1.flushInput();
	#ser1.write('1');
	ser1.write('1')
	#time.sleep(0.06*4)
	
	while (r<=max):
		b1= ord(ser1.read(1))
		b2= ord(ser1.read(1))
		r= b1 + b2*256
		
		

		if (r<=max):
			a1=a1+','+str(r)
		
	r=0;max=1023;	
	while (r<=max):	
		b1= ord(ser1.read(1))
		b2= ord(ser1.read(1))
		r= b1 + b2*256
		
		if (r<=max):
			a2=a2+','+str(r)
	
	a1=a1+'@@@'
	
	a2=a2+'@@@'		
	r=0
	max=1023
	ser1.flushInput();
	#ser1.flushOutput();
	#ser1.write('9');
	ser1.write('9');

	check=ord(ser1.read(1));
	check=str(check)
	cons=cons+','+check
	ser1.flushInput();
	#ser1.write('1');
	ser1.write('1')
	
	#time.sleep(0.06*4)
	
	while (r<=max):
		b1= ord(ser1.read(1))
		b2= ord(ser1.read(1))
		r= b1 + b2*256
		
		

		if (r<=max):
			a1=a1+','+str(r)
		
	r=0;max=1023;	
	while (r<=max):	
		b1= ord(ser1.read(1))
		b2= ord(ser1.read(1))
		r= b1 + b2*256
		
		if (r<=max):
			a2=a2+','+str(r)
	a1=a1+'@@@'
	a2=a2+'@@@'
	r=0
	max=1023
	ser1.flushInput();
	#ser1.flushOutput();
	#ser1.write('9');
	ser1.write('9');

	check=ord(ser1.read(1));
	check=str(check)
	cons=cons+','+check
	ser1.flushInput();
	#ser1.write('1');
	ser1.write('1')
	
	#time.sleep(0.06*4)
	
	while (r<=max):
		b1= ord(ser1.read(1))
		b2= ord(ser1.read(1))
		r= b1 + b2*256
		
		

		if (r<=max):
			a1=a1+','+str(r)
		
	r=0;max=1023;	
	while (r<=max):	
		b1= ord(ser1.read(1))
		b2= ord(ser1.read(1))
		r= b1 + b2*256
		
		if (r<=max):
			a2=a2+','+str(r)
			
	a1=a1+'@@@'
	a2=a2+'@@@'			
	r=0
	max=1023
	ser1.flushInput();
	#ser1.flushOutput();
	#ser1.write('9');
	ser1.write('9');

	check=ord(ser1.read(1));
	check=str(check)
	cons=cons+','+check
	ser1.flushInput();
	#ser1.write('1');
	ser1.write('1')
	#ser2.write('1')
	#time.sleep(0.06*4)
	
	while (r<=max):
		b1= ord(ser1.read(1))
		b2= ord(ser1.read(1))
		r= b1 + b2*256
		
		

		if (r<=max):
			a1=a1+','+str(r)
		
	r=0;max=1023;	
	while (r<=max):	
		b1= ord(ser1.read(1))
		b2= ord(ser1.read(1))
		r= b1 + b2*256
		
		if (r<=max):
			a2=a2+','+str(r)
	
#	q2=time.time()
	#print(a1)
	#print(a2)
        ser1.flushInput();
	#ser1.flushOutput();
	#ser1.write('9');
	ser1.write('9');

	check=ord(ser1.read(1));
	check=str(check)
	cons=cons+','+check
	
	#print(cons)
	q2=time.time()
	e=(q2-q)
	cons=cons+','+str(e)
	#print(cons)
	#print len(a1)
	#print len(a2)
	fh.write(st)
	fh.write('TIME')
	fh.write(a1)
	fh.write('Current')
	fh.write(a2)
	fh.write('Const')
	fh.write(cons)
	fh.close()
	'''print a1
	x1=a1.split(',')
	print len(x1)
	print a2
	x=a2.split(',')
	print len(x)
	print len(x1)'''
	#q2=time.time()
#	print(q2-q)
	p = subprocess.Popen(['python', calculation], stdout=subprocess.PIPE, stderr=subprocess.STDOUT)


fh1=('/home/pi/fyp/d1c.txt')
fh2=('/home/pi/fyp/d2c.txt')
fh3=('/home/pi/fyp/d3c.txt')
fh4=('/home/pi/fyp/d4c.txt')
fh5=('/home/pi/fyp/d5c.txt')

fh6=('/home/pi/fyp/d6c.txt')
fh7=('/home/pi/fyp/d7c.txt')
fh8=('/home/pi/fyp/d8c.txt')
fh9=('/home/pi/fyp/d9c.txt')
fh10=('/home/pi/fyp/d10c.txt')

fh11=('/home/pi/fyp/d11c.txt')
fh12=('/home/pi/fyp/d12c.txt')
fh13=('/home/pi/fyp/d13c.txt')
fh14=('/home/pi/fyp/d14c.txt')
fh15=('/home/pi/fyp/d15c.txt')






c1='/home/pi/fyp/c1c.py'
c2='/home/pi/fyp/c2c.py'
c3='/home/pi/fyp/c3c.py'
c4='/home/pi/fyp/c4c.py'
c5='/home/pi/fyp/c5c.py'

c6='/home/pi/fyp/c6c.py'
c7='/home/pi/fyp/c7c.py'
c8='/home/pi/fyp/c8c.py'
c9='/home/pi/fyp/c9c.py'
c10='/home/pi/fyp/c10c.py'

c11='/home/pi/fyp/c11c.py'
c12='/home/pi/fyp/c12c.py'
c13='/home/pi/fyp/c13c.py'
c14='/home/pi/fyp/c14c.py'
c15='/home/pi/fyp/c15c.py'



z= str(datetime.now() ) 

dat=str(datetime.now() )  
s= z[17:len(z)-1]
hr=int(z[11:13])
m=int(z[14:16])
s=float(s)
t=dat[0:10]+" ! "+str(hr)+':'+str(m)+':'+str(s)

while True:
	print("Shuruu")
	fh1p=open(fh1,'w')
	data(ser1,ser2,fh1p,c1,t)
	z= str(datetime.now() ) 

	dat=str(datetime.now() )  
	s= z[17:len(z)-1]
	hr=int(z[11:13])
	m=int(z[14:16])
	s=float(s)
	t=dat[0:10]+" ! "+str(hr)+':'+str(m)+':'+str(s)
	fh2p=open(fh2,'w')
	data(ser1,ser2,fh2p,c2,t)

	z= str(datetime.now() ) 

	dat=str(datetime.now() )  
	s= z[17:len(z)-1]
	hr=int(z[11:13])
	m=int(z[14:16])
	s=float(s)
	t=dat[0:10]+" ! "+str(hr)+':'+str(m)+':'+str(s)
	fh3p=open(fh3,'w')
	data(ser1,ser2,fh3p,c3,t)

	z= str(datetime.now() ) 

	dat=str(datetime.now() )  
	s= z[17:len(z)-1]
	hr=int(z[11:13])
	m=int(z[14:16])
	s=float(s)
	t=dat[0:10]+" ! "+str(hr)+':'+str(m)+':'+str(s)
	fh4p=open(fh4,'w')
	data(ser1,ser2,fh4p,c4,t)

	z= str(datetime.now() ) 

	dat=str(datetime.now() )  
	s= z[17:len(z)-1]
	hr=int(z[11:13])
	m=int(z[14:16])
	s=float(s)
	t=dat[0:10]+" ! "+str(hr)+':'+str(m)+':'+str(s)
	fh5p=open(fh5,'w')
	data(ser1,ser2,fh5p,c5,t)

	z= str(datetime.now() ) 

	dat=str(datetime.now() )  
	s= z[17:len(z)-1]
	hr=int(z[11:13])
	m=int(z[14:16])
	s=float(s)
	t=dat[0:10]+" ! "+str(hr)+':'+str(m)+':'+str(s)
	fh6p=open(fh6,'w')
	data(ser1,ser2,fh6p,c6,t)
	z= str(datetime.now() ) 

	dat=str(datetime.now() )  
	s= z[17:len(z)-1]
	hr=int(z[11:13])
	m=int(z[14:16])
	s=float(s)
	t=dat[0:10]+" ! "+str(hr)+':'+str(m)+':'+str(s)
	fh7p=open(fh7,'w')
	data(ser1,ser2,fh7p,c7,t)

	z= str(datetime.now() ) 

	dat=str(datetime.now() )  
	s= z[17:len(z)-1]
	hr=int(z[11:13])
	m=int(z[14:16])
	s=float(s)
	t=dat[0:10]+" ! "+str(hr)+':'+str(m)+':'+str(s)
	fh8p=open(fh8,'w')
	data(ser1,ser2,fh8p,c8,t)

	z= str(datetime.now() ) 

	dat=str(datetime.now() )  
	s= z[17:len(z)-1]
	hr=int(z[11:13])
	m=int(z[14:16])
	s=float(s)
	t=dat[0:10]+" ! "+str(hr)+':'+str(m)+':'+str(s)
	fh9p=open(fh9,'w')
	data(ser1,ser2,fh9p,c9,t)

	z= str(datetime.now() ) 

	dat=str(datetime.now() )  
	s= z[17:len(z)-1]
	hr=int(z[11:13])
	m=int(z[14:16])
	s=float(s)
	t=dat[0:10]+" ! "+str(hr)+':'+str(m)+':'+str(s)
	fh10p=open(fh10,'w')
	data(ser1,ser2,fh10p,c10,t)

	z= str(datetime.now() ) 

	dat=str(datetime.now() )  
	s= z[17:len(z)-1]
	hr=int(z[11:13])
	m=int(z[14:16])
	s=float(s)
	t=dat[0:10]+" ! "+str(hr)+':'+str(m)+':'+str(s)
	fh11p=open(fh11,'w')
	data(ser1,ser2,fh11p,c11,t)

	z= str(datetime.now() ) 

	dat=str(datetime.now() )  
	s= z[17:len(z)-1]
	hr=int(z[11:13])
	m=int(z[14:16])
	s=float(s)
	t=dat[0:10]+" ! "+str(hr)+':'+str(m)+':'+str(s)
	fh12p=open(fh12,'w')
	data(ser1,ser2,fh12p,c12,t)

	z= str(datetime.now() ) 

	dat=str(datetime.now() )  
	s= z[17:len(z)-1]
	hr=int(z[11:13])
	m=int(z[14:16])
	s=float(s)
	t=dat[0:10]+" ! "+str(hr)+':'+str(m)+':'+str(s)
	fh13p=open(fh13,'w')
	data(ser1,ser2,fh13p,c13,t)
	z= str(datetime.now() ) 

	dat=str(datetime.now() )  
	s= z[17:len(z)-1]
	hr=int(z[11:13])
	m=int(z[14:16])
	s=float(s)
	t=dat[0:10]+" ! "+str(hr)+':'+str(m)+':'+str(s)
	fh14p=open(fh14,'w')
	data(ser1,ser2,fh14p,c14,t)
	z= str(datetime.now() ) 

	dat=str(datetime.now() )  
	s= z[17:len(z)-1]
	hr=int(z[11:13])
	m=int(z[14:16])
	s=float(s)
	t=dat[0:10]+" ! "+str(hr)+':'+str(m)+':'+str(s)
	fh15p=open(fh15,'w')
	data(ser1,ser2,fh15p,c15,t)


	z= str(datetime.now() ) 

	dat=str(datetime.now() )  
	s= z[17:len(z)-1]
	hr=int(z[11:13])
	m=int(z[14:16])
	s=float(s)
	t=dat[0:10]+" ! "+str(hr)+':'+str(m)+':'+str(s)


import serial
import subprocess
import sys
import time
from datetime import datetime
import time
import os
dev = subprocess.check_output('ls /dev/ttyACM*' ,shell=True)
line =dev.split()

try:
	
	ser1= serial.Serial(line[0].strip(),115200)
	print ("Ardino1 connectd")

	
except:
	
	print ("Arduino1 Not Connected")

try:
	ser2= serial.Serial(line[1].strip(),115200)
	print ("Ardino2 connectd")

	
except:
	
	print ("Arduino2 Not Connected")

try:
	ser3= serial.Serial(line[2].strip(),115200)
	print ("Ardino3 connectd")

	
except:
	
	print ("Arduino3 Not Connected")

serm=0
sern=0
sero=0

''' first phase check ****************************************************************************'''
check=55;
time.sleep(3)
ser1.flushInput();
ser1.flushOutput();
ser1.write('5');
#ser1.write('5');

check=ser1.read(1);

ser1.flushInput();
ser1.flushOutput();
x=1;

if (check=='1'):
	serm=line[0].strip();x=0;
if (check=='2'):
	sern=line[1].strip();x=0;
if (check=='3'):
	sero=line[2].strip();x=0;


while (x!=0):
		print ('retest');
		ser1.flushInput();
		ser1.flushOutput();
		ser1.write('5');
		#ser1.write('5');
		check=ser1.read(1);
		ser1.flushInput();
		ser1.flushOutput();
		
		
		
		if (check=='1'):
			serm=line[0].strip();x=0;#print('phase');
		if (check=='2'):
			sern=line[1].strip();x=0;
		if (check=='3'):
			sero=line[2].strip();x=0;

''' __________________________________________end____________________________________________________'''

''' second phase check ****************************************************************************'''
check=55;
time.sleep(3)
ser2.flushInput();
ser2.flushOutput();
#ser2.write('5');
ser2.write('5');

check=ser2.read(1);

ser2.flushInput();
ser2.flushOutput();
x=1;

if (check=='1'):
	serm=line[0].strip();x=0;
if (check=='2'):
	sern=line[1].strip();x=0;
if (check=='3'):
	sero=line[2].strip();x=0;


while (x!=0):
		print ('retest');
		ser2.flushInput();
		ser2.flushOutput();
		#ser2.write('5');
		ser2.write('5');
		check=ser2.read(1);
		ser2.flushInput();
		ser2.flushOutput();
		
		
		
		if (check=='1'):
			serm=line[0].strip();x=0;print('phase');
		if (check=='2'):
			sern=line[1].strip();x=0;
		if (check=='3'):
			sero=line[2].strip();x=0;

			
''' __________________________________________end____________________________________________________'''

''' third phase check ****************************************************************************'''
check=55;
time.sleep(3)
ser3.flushInput();
ser3.flushOutput();
#ser3.write('5');
ser3.write('5');

check=ser3.read(1);

ser3.flushInput();
ser3.flushOutput();
x=1;

if (check=='1'):
	serm=line[0].strip();x=0;
if (check=='2'):
	sern=line[1].strip();x=0;
if (check=='3'):
	sero=line[2].strip();x=0;


while (x!=0):
		print ('retest');
		ser3.flushInput();
		ser3.flushOutput();
		ser3.write('5');
		#ser3.write('5');
		check=ser3.read(1);
		ser3.flushInput();
		ser3.flushOutput();
		
		
		
		if (check=='1'):
			serm=line[0].strip();x=0;print('phase');
		if (check=='2'):
			sern=line[1].strip();x=0;
		if (check=='3'):
			sero=line[2].strip();x=0;



fdres=open('/home/pi/fyp/dres.txt','w')
fdres2=open('/home/pi/fyp/dres2.txt','w')
fdres3=open('/home/pi/fyp/dres3.txt','w')
fdres.write(str(serm));
fdres2.write(str(sern));
fdres3.write(str(sero));
fdres.close()
fdres2.close()
fdres3.close()
p = subprocess.Popen([sys.executable, '/home/pi/fyp/ph11.py'], stdout=subprocess.PIPE, stderr=subprocess.STDOUT)
p = subprocess.Popen([sys.executable, '/home/pi/fyp/ph22.py'], stdout=subprocess.PIPE, stderr=subprocess.STDOUT)
p = subprocess.Popen([sys.executable, '/home/pi/fyp/ph33.py'], stdout=subprocess.PIPE, stderr=subprocess.STDOUT)
print('done start')
#print (serm)
#print(sern)
#print(sero)

time.sleep(65)
#p3 = subprocess.Popen([sys.executable, '/home/pi/fyp/ll.py'], stdout=subprocess.PIPE, stderr=subprocess.STDOUT,preexec_fn=lambda: os.nice(17))
time.sleep(68)



while True:
	time.sleep(68)
	#if(p3.poll() is not None):
		#p3 = subprocess.Popen([sys.executable, '/home/pi/fyp/ll.py'], stdout=subprocess.PIPE, stderr=subprocess.STDOUT,preexec_fn=lambda: os.nice(17))
		#print ('bnd')
	time.sleep(60);
	#if(p3.poll() is not None):
		#p3 = subprocess.Popen([sys.executable, '/home/pi/fyp/ll.py'], stdout=subprocess.PIPE, stderr=subprocess.STDOUT,preexec_fn=lambda: os.nice(17))
		#print ('bnd')
	time.sleep(9000)
        time.sleep(9000)
        time.sleep(9000)

	
	

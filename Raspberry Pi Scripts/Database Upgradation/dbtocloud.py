import mysql.connector
import sys
import csv
import time
conn=mysql.connector.connect(user='pi',password='pi',database='myDB')
cursor=conn.cursor()
#sql="Select * From Consumer1 ";
sql="SELECT * FROM (SELECT * FROM Consumer1 ORDER BY id DESC LIMIT 250) sub ORDER BY id ASC";
#print (sql)
try:
    cursor.execute(sql);
    time.sleep(10)
    result=cursor.fetchall()
    #for row in result:
        #print(row);
    fp = open('/home/pi/fyp/file.csv', 'w')
    time.sleep(10)
    myFile = csv.writer(fp)
    time.sleep(10)
    myFile.writerows(result)
    time.sleep(10)
    fp.close()
except:
    print ('not done')
import subprocess
import time
p = subprocess.Popen(['python', '/home/pi/fyp/enctry.py'], stdout=subprocess.PIPE, stderr=subprocess.STDOUT)

time.sleep(20)

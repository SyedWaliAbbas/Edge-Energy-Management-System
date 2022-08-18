
import mysql.connector
fh=open('/home/pi/fyp/testfile.txt','w')
fh.write('tested')
fh.close()

conn=mysql.connector.connect(user='pi',password='pi',database='myDB')
cursor=conn.cursor()
new_power=('INSERT INTO Consumer1' '(Id,Time,Date,VA,IA,PfA,PA,QA,SA,THDVA,THDIA,TimeB,VB,IB,PfB,PB,QB,SB,THDVB,THDIB,TimeC,VC,IC,PfC,PC,QC,SC,THDVC,THDIC)' 'VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)')
td1=open('/home/pi/fyp/td.txt')
td2=open('/home/pi/fyp/tdb.txt')
td3=open('/home/pi/fyp/tdc.txt')

td=td1.read()
tdb=td2.read()
tdc=td3.read()

d1=float(td)/8.0;
d2=float(tdb)/8.0;
d3=float(tdc)/8.0;
'''.........................................................................................................'''
fh1=open('/home/pi/fyp/vrms.txt')
z1=fh1.read()
x1=z1.split('!')
D=x1[0];
#print (D)
c1=x1[1];
T=c1.split(':')
S=T[2]
hr=float(T[0]);
m=float(T[1]);
s=float(S[:8])
sec=s;
Ti=T[0]+':'+T[1]+':'+S[:8]
vv=S[9:]
v=vv.split(',')


fh2=open('/home/pi/fyp/irms.txt')
z2=fh2.read()
x2=z2.split('!')
c2=x2[1]
TT=c2.split(':')
SS=TT[2]
ii=SS[9:]
##print (i)
i=ii.split(',')
'''..........................................................'''
fh3=open('/home/pi/fyp/pf.txt')
z3=fh3.read()
x3=z3.split('!')
D=x3[0];
#print (D)
c3=x3[1];
T3=c3.split(':')
S3=T3[2]
pff=S3[9:]
pf=pff.split(',')
'''...........................................................'''
fh4=open('/home/pi/fyp/p.txt')
z4=fh4.read()
x4=z4.split('!')
D=x4[0];
#print (D)
c4=x4[1];
T4=c4.split(':')
S4=T4[2]
pp=S4[9:]
p=pp.split(',')
'''...........................................................'''
fh5=open('/home/pi/fyp/q.txt')
z5=fh5.read()
x5=z5.split('!')
D=x5[0];
#print (D)
c5=x5[1];
T5=c5.split(':')
S5=T5[2]
qq=S5[9:]
q=qq.split(',')
'''..............................................................'''
fh6=open('/home/pi/fyp/s.txt')
z6=fh6.read()
x6=z6.split('!')
D=x6[0];
#print (D)
c6=x6[1];
T6=c6.split(':')
S6=T6[2]
ss=S6[9:]
s=ss.split(',')
'''..................................................................'''
fh7=open('/home/pi/fyp/THDV.txt')
z7=fh7.read()
x7=z7.split('!')
D=x7[0];
#print (D)
c7=x7[1];
T7=c7.split(':')
S7=T7[2]
THDVV=S7[9:]
THDV=THDVV.split(',')
'''.....................................................................'''
fh8=open('/home/pi/fyp/THDI.txt')
z8=fh8.read()
x8=z8.split('!')
D=x8[0];
#print (D)
c8=x8[1];
T8=c8.split(':')
S8=T8[2]
THDII=S8[9:]
THDI=THDII.split(',')
'''..................................................................................'''

'''************************************************************************************************************************'''
'''               PH-B..................................................;;;'''
'''*************************************************************************************************************************'''

'''.........................................................................................................'''
fh9=open('/home/pi/fyp/vrmsb.txt')
z9=fh9.read()
x9=z9.split('!')
D9=x9[0];
#print (D)
c9=x9[1];
T9=c9.split(':')
Sb=T9[2]
hrb=float(T9[0]);
mb=float(T9[1]);
sb=float(Sb[:8])
secb=sb;
Tib=T9[0]+':'+T9[1]+':'+Sb[:8]
vvb=Sb[9:]
vb=vvb.split(',')


fh10=open('/home/pi/fyp/irmsb.txt')
z10=fh10.read()
x10=z10.split('!')
c10=x10[1]
TTb=c10.split(':')
SSb=TTb[2]
iib=SSb[9:]
##print (i)
ib=iib.split(',')
'''..........................................................'''
fh11=open('/home/pi/fyp/pfb.txt')
z11=fh11.read()
x11=z11.split('!')
D11=x11[0];
#print (D)
c11=x11[1];
T11=c11.split(':')
S11=T11[2]
pffb=S11[9:]
pfb=pffb.split(',')
'''...........................................................'''
fh12=open('/home/pi/fyp/pb.txt')
z12=fh12.read()
x12=z12.split('!')
D12=x12[0];
#print (D)
c12=x12[1];
T12=c12.split(':')
S12=T12[2]
ppb=S12[9:]
pb=ppb.split(',')
'''...........................................................'''
fh13=open('/home/pi/fyp/qb.txt')
z13=fh13.read()
x13=z13.split('!')
D13=x13[0];
#print (D)
c13=x13[1];
T13=c13.split(':')
S13=T13[2]
qqb=S13[9:]
qb=qqb.split(',')
'''..............................................................'''
fh14=open('/home/pi/fyp/sb.txt')
z14=fh14.read()
x14=z14.split('!')
D=x14[0];
#print (D)
c14=x14[1];
T14=c14.split(':')
S14=T14[2]
ssb=S14[9:]
sb=ssb.split(',')
'''..................................................................'''
fh15=open('/home/pi/fyp/THDVb.txt')
z15=fh15.read()
x15=z15.split('!')
D=x15[0];
#print (D)
c15=x15[1];
T15=c15.split(':')
S15=T15[2]
THDVVb=S15[9:]
THDVb=THDVVb.split(',')
'''.....................................................................'''
fh16=open('/home/pi/fyp/THDIb.txt')
z16=fh16.read()
x16=z16.split('!')
D=x16[0];
#print (D)
c16=x16[1];
T16=c16.split(':')
S16=T16[2]
THDIIb=S16[9:]
THDIb=THDIIb.split(',')
'''..................................................................................'''


'''************************************************************************************************************************'''
'''               PH-C..................................................;;;'''
'''*************************************************************************************************************************'''

'''.........................................................................................................'''
fh17=open('/home/pi/fyp/vrmsc.txt')
z17=fh17.read()
x17=z17.split('!')
D17=x17[0];
#print (D)
c17=x17[1];
T17=c17.split(':')
Sc=T17[2]
hrc=float(T17[0]);
mc=float(T17[1]);
sc=float(Sc[:8])
secc=sc;
Tic=T17[0]+':'+T17[1]+':'+Sc[:8]
vvc=Sc[9:]
vc=vvc.split(',')


fh18=open('/home/pi/fyp/irmsc.txt')
z18=fh18.read()
x18=z18.split('!')
c18=x18[1]
TTc=c18.split(':')
SSc=TTc[2]
iic=SSc[9:]
##print (i)
ic=iic.split(',')
'''..........................................................'''
fh19=open('/home/pi/fyp/pfc.txt')
z19=fh19.read()
x19=z19.split('!')
D19=x19[0];
#print (D)
c19=x19[1];
T19=c19.split(':')
S19=T19[2]
pffc=S19[9:]
pfc=pffc.split(',')
'''...........................................................'''
fh20=open('/home/pi/fyp/pc.txt')
z20=fh20.read()
#print(z20)
x20=z20.split('!')
D20=x20[0];
#print (x20)
c20=x20[1];
T20=c20.split(':')
S20=T20[2]
ppc=S20[9:]
pc=ppc.split(',')
'''...........................................................'''
fh21=open('/home/pi/fyp/qc.txt')
z21=fh21.read()
x21=z21.split('!')
D21=x21[0];
#print (D)
c21=x21[1];
T21=c21.split(':')
S21=T21[2]
qqc=S21[9:]
qc=qqc.split(',')
'''..............................................................'''
fh22=open('/home/pi/fyp/sc.txt')
z22=fh22.read()
x22=z22.split('!')
D=x22[0];
#print (D)
c22=x22[1];
T22=c22.split(':')
S22=T22[2]
ssc=S22[9:]
sc=ssc.split(',')
'''..................................................................'''
fh23=open('/home/pi/fyp/THDVc.txt')
z23=fh23.read()
x23=z23.split('!')
D=x23[0];
#print (D)
c23=x23[1];
T23=c23.split(':')
S23=T23[2]
THDVVc=S23[9:]
THDVc=THDVVc.split(',')
'''.....................................................................'''
fh24=open('/home/pi/fyp/THDIc.txt')
z24=fh24.read()
x24=z24.split('!')
D=x24[0];
#print (D)
c24=x24[1];
T24=c24.split(':')
S24=T24[2]
THDIIc=S24[9:]
THDIc=THDIIc.split(',')
'''..................................................................................'''







power1=('',Ti,D,float(v[0]),float(i[0]),float(pf[0]),float(p[0]),float(q[0]),float(s[0]),float(THDV[0]),float(THDI[0]),Tib,float(vb[0]),float(ib[0]),float(pfb[0]),float(pb[0]),float(qb[0]),float(sb[0]),float(THDVb[0]),float(THDIb[0]),Tic,float(vc[0]),float(ic[0]),float(pfc[0]),float(pc[0]),float(qc[0]),float(sc[0]),float(THDVc[0]),float(THDIc[0]))
sec=float(sec)+d1
secb=float(secb)+d2
secc=float(secc)+d3
if sec>60:
	sec=sec-60
	secb=secb-60
	secc=secc-60
	m=m+1
if m>60:
	m=m-60
	hr=hr+1
if hr>=24:
	hr=0

Ti=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(sec))))

Tib=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(secb))))
Tic=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(secc))))

#print (Ti)
power2=('',Ti,D,float(v[1]),float(i[1]),float(pf[1]),float(p[1]),float(q[1]),float(s[1]),float(THDV[1]),float(THDI[1]),Tib,float(vb[1]),float(ib[1]),float(pfb[1]),float(pb[1]),float(qb[1]),float(sb[1]),float(THDVb[1]),float(THDIb[1]),Tic,float(vc[1]),float(ic[1]),float(pfc[1]),float(pc[1]),float(qc[1]),float(sc[1]),float(THDVc[1]),float(THDIc[1]))


sec=float(sec)+d1
secb=float(secb)+d2
secc=float(secc)+d3
if sec>60:
	sec=sec-60
	secb=secb-60
	secc=secc-60
	m=m+1
if m>60:
	m=m-60
	hr=hr+1
if hr>=24:
	hr=0

Ti=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(sec))))

Tib=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(secb))))
Tic=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(secc))))


power3=('',Ti,D,float(v[2]),float(i[2]),float(pf[2]),float(p[2]),float(q[2]),float(s[2]),float(THDV[2]),float(THDI[2]),Tib,float(vb[2]),float(ib[2]),float(pfb[2]),float(pb[2]),float(qb[2]),float(sb[2]),float(THDVb[2]),float(THDIb[2]),Tic,float(vc[2]),float(ic[2]),float(pfc[2]),float(pc[2]),float(qc[2]),float(sc[2]),float(THDVc[2]),float(THDIc[2]))

sec=float(sec)+d1

secb=float(secb)+d2
secc=float(secc)+d3
if sec>60:
	sec=sec-60
	secb=secb-60
	secc=secc-60
	m=m+1
if m>60:
	m=m-60
	hr=hr+1
if hr>=24:
	hr=0

Ti=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(sec))))

Tib=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(secb))))
Tic=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(secc))))

power4=('',Ti,D,float(v[3]),float(i[3]),float(pf[3]),float(p[3]),float(q[3]),float(s[3]),float(THDV[3]),float(THDI[3]),Tib,float(vb[3]),float(ib[3]),float(pfb[3]),float(pb[3]),float(qb[3]),float(sb[3]),float(THDVb[3]),float(THDIb[3]),Tic,float(vc[3]),float(ic[3]),float(pfc[3]),float(pc[3]),float(qc[3]),float(sc[3]),float(THDVc[3]),float(THDIc[3]))

sec=float(sec)+d1

secb=float(secb)+d2
secc=float(secc)+d3
if sec>60:
	sec=sec-60
	secb=secb-60
	secc=secc-60
	m=m+1
if m>60:
	m=m-60
	hr=hr+1
if hr>=24:
	hr=0

Ti=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(sec))))

Tib=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(secb))))
Tic=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(secc))))

power5=('',Ti,D,float(v[4]),float(i[4]),float(pf[4]),float(p[4]),float(q[4]),float(s[4]),float(THDV[4]),float(THDI[4]),Tib,float(vb[4]),float(ib[4]),float(pfb[4]),float(pb[4]),float(qb[4]),float(sb[4]),float(THDVb[4]),float(THDIb[4]),Tic,float(vc[4]),float(ic[4]),float(pfc[4]),float(pc[4]),float(qc[4]),float(sc[4]),float(THDVc[4]),float(THDIc[4]))

sec=float(sec)+d1
secb=float(secb)+d2
secc=float(secc)+d3
if sec>60:
	sec=sec-60
	secb=secb-60
	secc=secc-60
	m=m+1
if m>60:
	m=m-60
	hr=hr+1
if hr>=24:
	hr=0

Ti=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(sec))))

Tib=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(secb))))
Tic=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(secc))))

power6=('',Ti,D,float(v[5]),float(i[5]),float(pf[5]),float(p[5]),float(q[5]),float(s[5]),float(THDV[5]),float(THDI[5]),Tib,float(vb[5]),float(ib[5]),float(pfb[5]),float(pb[5]),float(qb[5]),float(sb[5]),float(THDVb[5]),float(THDIb[5]),Tic,float(vc[5]),float(ic[5]),float(pfc[5]),float(pc[5]),float(qc[5]),float(sc[5]),float(THDVc[5]),float(THDIc[5]))

sec=float(sec)+d1
secb=float(secb)+d2
secc=float(secc)+d3
if sec>60:
	sec=sec-60
	secb=secb-60
	secc=secc-60
	m=m+1
if m>60:
	m=m-60
	hr=hr+1
if hr>=24:
	hr=0

Ti=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(sec))))

Tib=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(secb))))
Tic=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(secc))))

power7=('',Ti,D,float(v[6]),float(i[6]),float(pf[6]),float(p[6]),float(q[6]),float(s[6]),float(THDV[6]),float(THDI[6]),Tib,float(vb[6]),float(ib[6]),float(pfb[6]),float(pb[6]),float(qb[6]),float(sb[6]),float(THDVb[6]),float(THDIb[6]),Tic,float(vc[6]),float(ic[6]),float(pfc[6]),float(pc[6]),float(qc[6]),float(sc[6]),float(THDVc[6]),float(THDIc[6]))

sec=float(sec)+d1
secb=float(secb)+d2
secc=float(secc)+d3
if sec>60:
	sec=sec-60
	secb=secb-60
	secc=secc-60
	m=m+1
if m>60:
	m=m-60
	hr=hr+1
if hr>=24:
	hr=0

Ti=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(sec))))

Tib=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(secb))))
Tic=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(secc))))

power8=('',Ti,D,float(v[7]),float(i[7]),float(pf[7]),float(p[7]),float(q[7]),float(s[7]),float(THDV[7]),float(THDI[7]),Tib,float(vb[7]),float(ib[7]),float(pfb[7]),float(pb[7]),float(qb[7]),float(sb[7]),float(THDVb[7]),float(THDIb[7]),Tic,float(vc[7]),float(ic[7]),float(pfc[7]),float(pc[7]),float(qc[7]),float(sc[7]),float(THDVc[7]),float(THDIc[7]))


#print (power1)
#/home/pi/fyp/dbb.py
#print (type(v))
try:
	cursor.execute(new_power,power1)
	cursor.execute(new_power,power2)
	cursor.execute(new_power,power3)
	cursor.execute(new_power,power4)
	cursor.execute(new_power,power5)
	cursor.execute(new_power,power6)
	cursor.execute(new_power,power7)
	cursor.execute(new_power,power8)
	conn.commit()
except:
	print ('No execution ')
else:
	print('done')
cursor.close()
conn.close()



	

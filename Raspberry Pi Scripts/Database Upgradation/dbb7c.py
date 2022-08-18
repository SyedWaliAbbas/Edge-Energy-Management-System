
import mysql.connector
conn=mysql.connector.connect(user='pi',password='pi',database='myDB')
cursor=conn.cursor()
new_power=('INSERT INTO Consumer1' '(Id,Time,Date,VA,IA,PfA,PA,QA,SA,THDVA,THDIA,TimeB,VB,IB,PfB,PB,QB,SB,THDVB,THDIB,TimeC,VC,IC,PfC,PC,QC,SC,THDVC,THDIC)' 'VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)')

'''.........................................................................................................'''

fh1=open('/home/pi/fyp/vrms7.txt')
fh2=open('/home/pi/fyp/irms7.txt')
fh3=open('/home/pi/fyp/pf7.txt')
fh4=open('/home/pi/fyp/p7.txt')
fh5=open('/home/pi/fyp/q7.txt')
fh6=open('/home/pi/fyp/s7.txt')
fh7=open('/home/pi/fyp/THDV7.txt')
fh8=open('/home/pi/fyp/THDI7.txt')
fh9=open('/home/pi/fyp/vrms7b.txt')
fh10=open('/home/pi/fyp/irms7b.txt')
fh11=open('/home/pi/fyp/pf7b.txt')
fh12=open('/home/pi/fyp/p7b.txt')
fh13=open('/home/pi/fyp/q7b.txt')
fh14=open('/home/pi/fyp/s7b.txt')
fh15=open('/home/pi/fyp/THDV7b.txt')
fh16=open('/home/pi/fyp/THDI7b.txt')
fh17=open('/home/pi/fyp/vrms7c.txt')
fh18=open('/home/pi/fyp/irms7c.txt')
fh19=open('/home/pi/fyp/pf7c.txt')
fh20=open('/home/pi/fyp/p7c.txt')
fh21=open('/home/pi/fyp/q7c.txt')
fh22=open('/home/pi/fyp/s7c.txt')
fh23=open('/home/pi/fyp/THDV7c.txt')
fh24=open('/home/pi/fyp/THDI7c.txt')

'''.....................................................................................................................'''





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



z2=fh2.read()
x2=z2.split('!')
c2=x2[1]
TT=c2.split(':')
SS=TT[2]
ii=SS[9:]
##print (i)
i=ii.split(',')
'''..........................................................'''

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



z10=fh10.read()
x10=z10.split('!')
c10=x10[1]
TTb=c10.split(':')
SSb=TTb[2]
iib=SSb[9:]
##print (i)
ib=iib.split(',')
'''..........................................................'''

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


z18=fh18.read()
x18=z18.split('!')
c18=x18[1]
TTc=c18.split(':')
SSc=TTc[2]
iic=SSc[9:]
##print (i)
ic=iic.split(',')
'''..........................................................'''

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


iter=[0,1,2,3,4,5,6,7];

for ii in iter :
    try:
        v1=float(v[ii]);i1=float(i[ii]);pf1=float(pf[ii]);p1=float(p[ii]);q1=float(q[ii]);s1=float(s[ii]);THDV1=float(THDV[ii]);THDI1=float(THDI[ii]);
        vb1=float(vb[ii]);ib1=float(ib[ii]);pfb1=float(pfb[ii]);pb1=float(pb[ii]);qb1=float(qb[ii]);sb1=float(sb[ii]);THDVb1=float(THDVb[ii]);THDIb1=float(THDIb[ii]);
        vc1=float(vc[ii]);ic1=float(ic[ii]);pfc1=float(pfc[ii]);pc1=float(pc[ii]);qc1=float(qc[ii]);sc1=float(sc[ii]);THDVc1=float(THDVc[ii]);THDIc1=float(THDIc[ii]);
    except:
        print(ii)
        print('not done properly')
    power1=('',Ti,D,v1,i1,pf1,p1,q1,s1,THDV1,THDI1,Tib,vb1,ib1,pfb1,pb1,qb1,sb1,THDVb1,THDIb1,Tic,vc1,ic1,pfc1,pc1,qc1,sc1,THDVc1,THDIc1)
    sec=float(sec)+0.25
    secb=float(secb)+0.25
    secc=float(secc)+0.25
    if sec>60:
            sec=sec-60
            
            m=m+1
    if m>60:
            m=m-60
            hr=hr+1
    if hr>=24:
            hr=0
    
    if secb>60:
            secb=secb-60
            
            mb=mb+1
    if mb>60:
            mb=mb-60
            hrb=hrb+1
    if hrb>=24:
            hrb=0
            
    if secc>60:
            secc=secc-60
            
            mc=mc+1
    if mc>60:
            mc=mc-60
            hrc=hrc+1
    if hrc>=24:
            hrc=0

    Ti=(str(int(hr)))[:2]+':'+(str(int((m))))[:2]+':'+((str(int(sec))))

    Tib=(str(int(hrb)))[:2]+':'+(str(int((mb))))[:2]+':'+((str(int(secb))))
    Tic=(str(int(hrc)))[:2]+':'+(str(int((mc))))[:2]+':'+((str(float(secc))))
    
    try:
            cursor.execute(new_power,power1)
            conn.commit()
    except:
            print ('No execution ')
    else:
            print('done')



cursor.close()
conn.close()



	



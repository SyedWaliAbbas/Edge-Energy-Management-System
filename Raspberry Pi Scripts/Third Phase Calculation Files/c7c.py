import time 
import operator
import subprocess
from numpy.fft import rfft
import sys
from numpy import mean,diff,linspace,argmax,kaiser,log,sqrt
from numpy import angle as gl
from math import acos,pi,cos,sin
#from matplotlib.mlab import find
#import matplotlib.pyplot as plt
#import scipy as sp
def parabolic(f, x):
    """
    Quadratic interpolation for estimating the true position of an
    inter-sample maximum when nearby samples are known.

    f is a vector and x is an index for that vector.

    Returns (vx, vy), the coordinates of the vertex of a parabola that goes
    through point x and its two neighbors.

    Example:
    Defining a vector f with a local maximum at index 3 (= 6), find local
    maximum if points 2, 3, and 4 actually defined a parabola.

    In [3]: f = [2, 3, 1, 6, 4, 2, 3, 1]

    In [4]: parabolic(f, argmax(f))
    Out[4]: (3.2142857142857144, 6.1607142857142856)
    """
    xv = 1/2. * (f[x-1] - f[x+1]) / (f[x-1] - 2 * f[x] + f[x+1]) + x
    yv = f[x] - 1/4. * (f[x-1] - f[x+1]) * (xv - x)
    return (xv, yv)


fv=open('/home/pi/fyp/vrms7c.txt','w')
fi=open('/home/pi/fyp/irms7c.txt','w')
ffv=open('/home/pi/fyp/fv7c.txt','w')
ffi=open('/home/pi/fyp/fi7c.txt','w')
fh=open('/home/pi/fyp/d7c.txt')
fpf=open('/home/pi/fyp/pf7c.txt','w')
fq=open('/home/pi/fyp/q7c.txt','w')
fp=open('/home/pi/fyp/p7c.txt','w')
fs=open('/home/pi/fyp/s7c.txt','w')
fthdv=open('/home/pi/fyp/THDV7c.txt','w')
fthdi=open('/home/pi/fyp/THDI7c.txt','w')
ftd=open('/home/pi/fyp/td7c.txt','w')
fcons=open('/home/pi/fyp/constc.txt')
KSSS=fcons.read();


db='/home/pi/fyp/dbb7c.py'
z=fh.read()
TimeData=z.split('TIME')
TimeStamp=TimeData[0]
fi.write(TimeStamp)
fi.write('\n')
fv.write(TimeStamp)
fv.write('\n')
ffv.write(TimeStamp)
ffv.write('\n')
fthdv.write(TimeStamp)
fthdv.write('\n')
fthdi.write(TimeStamp)
fthdi.write('\n')
Data=TimeData[1]
#VI=Data.split('CURRENT')
VI=Data.split('Current')
Voltage=VI[0]
#Current=VI[1]
Currentg=VI[1]
CurrentKs=Currentg.split('Const')
Current=CurrentKs[0];

Ks=CurrentKs[1]
#print(Ks)
G=[];
Gs=Ks.split(',');
itr=len(Gs)-1;
for H in Gs:
	e=float(H);
	G.append(e);
GG=[];
GGSS=KSSS.split(',');
for H in GGSS:
	e=float(H);
	GG.append(e);
#print('const');
#print(GG[4]);
#print(G[0])
#print(G[1])
#print(G[5])
#print(G[8])
ftd.write(str(G[8]))


I=Voltage.split('@@@')
V=Current.split('@@@')
THDV=[0,0,0,0,0,0,0,0]
THDI=[0,0,0,0,0,0,0,0]
'''.............const of cuurent...................................'''
nnnn=0;Vac=[];nn=0;fin=[0,0,0,0,0,0,0,0];
phi=[0,0,0,0,0,0,0,0];vrm=[0,0,0,0,0,0,0,0];vhrm=range(0,625);count=0;
vhrm[624]=0;
for v in V:
	n=1;volt=[];s=v.split(',');move=len(s)-1;
	for vv in s[1:move]:
                x=float(vv)
		
		volt.append(x*(5.0/1023))
	#axis=(max(volt)+min(volt))/2
	axis=mean(volt)
	Vac=[]
	#print (axis)
	
	for vvv in volt:
		Vac.append(vvv-axis)
	
	
	
	
	
	
	
	sum=0
	for z in Vac:
		sum=sum+(z*z)
	avg=sum/move

	vrms=avg**(1/2.0);
	vrm[nn]=(vrms);
	volt=[];
	if (vrm[nn]>=0.5):
            rrr=1;
        else:
            rrr=0;
	for vv in s[1:move]:
		x=float(vv)
		kkkk=G[nnnn];
		kkkk=int(kkkk);
		k=GG[(kkkk*2)+rrr]	
		volt.append(x*(5.0/1023)*k)
	#axis=(max(volt)+min(volt))/2
	axis=mean(volt);
	Vac=[]
	nnnn=nnnn+1;
	for vvv in volt:
		Vac.append(vvv-axis)
	
	signal=Vac;
	signal=signal[0:1024]
	N = len(signal)

        # Compute Fourier transform of windowed signal
        windowed = signal #* kaiser(N, 100)
        fii = rfft(windowed)/N
        # Find the peak and interpolate to get a more accurate peak
        i_peak = argmax(abs(fii))  # Just use this value for less-accurate result
        i_interp = parabolic(log(abs(fii)), i_peak)[0]
        #print(i_peak)
        # Convert to equivalent frequency
        freq1= (8333.33333 * i_interp / N)  # Hz
	#anglei=sp.angle(fii);
	#phi[nn]=anglei[i_peak]
	#print(ph*(180/pi))
	sum=0;
        for x in   range(2, 80):
            g=abs(2*fii[i_peak*x])*abs(2*fii[i_peak*x])
            vhrm[count]=(fii[i_peak*x]);
            sum=sum+g
            count=count+1
        THD=(sum**(1/2.0))/(abs(2*fii[i_peak]))
        #print(count)
        #THD = sum([abs(fii[i_peak*x]) for x in range(2, 30)]) / abs(fii[i_peak])
        THDI[nn]=(THD * 100)
        ffi.write(str(freq1))
	ffi.write(',')
	fin[nn]=fii[i_peak]
	
	time.sleep(2)
	sum=0
	for z in Vac:
		sum=sum+(z*z)
	avg=sum/move

	vrms=avg**(1/2.0);
	vrm[nn]=(vrms);
	nn=nn+1
	fv.write(str(vrms))
	fv.write(',')
	#print (vrms)
	


'''******************  VOLTAGE************************************************'''

'''constnts'''
meshconst=10.3125;turnc=18.58;fvin=[0,0,0,0,0,0,0,0];
Iconst=meshconst*turnc;ihrm=range(0,625);count=0;
Iconst=GG[8];
Iac=[];nn=0;phv=[0,0,0,0,0,0,0,0];irm=[0,0,0,0,0,0,0,0];
for i in I:
	n=1;curr=[];ss=i.split(',');move=len(ss)-1;
	for ii in ss[1:move]:
		x=float(ii)
		
		curr.append(x*(5.0/1023.0)*Iconst)
	axis2=(max(curr)+min(curr))/2
	Iac=[]
	for iii in curr:
		
		Iac.append(iii-axis2)
	
	sum=0.0
	time.sleep(2)
        """Estimate frequency by counting zero crossings

            Pros: Fast, accurate (increasing with signal length).  Works well for long
            low-noise sines, square, triangle, etc.

            Cons: Doesn't work if there are multiple zero crossings per cycle,
            low-frequency baseline shift, noise, etc.

            """
	'''
	signal=Iac;
        
        signal=signal-mean(signal);
        # Find all indices right before a rising-edge zero crossing
        indices = find((signal[1:] >= 0) & (signal[:-1] < 0))

        # Naive (Measures 1000.185 Hz for 1000 Hz, for instance)
            # crossings = indices

            # More accurate, using linear interpolation to find intersample
            # zero-crossings (Measures 1000.000129 Hz for 1000 Hz, for instance)
        crossings = [i - signal[i] / (signal[i+1] - signal[i]) for i in indices]

            # Some other interpolation based on neighboring points might be better.
            # Spline, cubic, whatever
        fs=8333.333;
        freq1=fs / mean(diff(crossings));
	print (freq1)
	'''
	
	signal=Iac;
	signal=signal[0:1024]
	N = len(signal)
        #print(len(Iac))
        # Compute Fourier transform of windowed signal
        windowed = signal #* kaiser(N, 100)
        fvv = rfft(windowed)/N
        #print(len(windowed))
        #print(len(fvv))
        #print((abs(fvv[6])))
        #plt.stem((abs(fvv[0:60])))
        #plt.show()
        # Find the peak and interpolate to get a more accurate peak
        i_peak = argmax(abs(fvv))  # Just use this value for less-accurate result
        i_interp = parabolic(log(abs(fvv)), i_peak)[0]
        #print(i_peak)
        # Convert to equivalent frequency
        freq1= (8333.33333 * i_interp / N)  # Hz
	#anglev=sp.angle(fvv);
	#phv[nn]=anglev[i_peak]
	#print(ph*(180/pi))
        sum=0;
        for x in   range(2, 80):
            g=abs(2*fvv[i_peak*x])*abs(2*fvv[i_peak*x])
            ihrm[count]=(fvv[i_peak*x]);
            sum=sum+g
            count=count+1
        THD=(sum**(1/2.0))/(abs(2*fvv[i_peak]))
        #print(count)
        #THD = sum([abs(fvv[i_peak*x]) for x in range(2, 15)]) / abs(fvv[i_peak])
        THDV[nn]=(THD * 100)
        ffv.write(str(freq1))
	ffv.write(',')
	fvin[nn]=fvv[i_peak]
        ##        plt.plot(211)
        ##        plt.stem(abs(X[:(10)]));
        ##	plt.show()
	sum=0;
	for z in Iac:
		sum=sum+(z*z)
	avg=float(sum)/move
	'''
	print ('mx')
	print (max(Iac))
	print 'min'
	print (min(Iac))
	print 'sum :'
	print sum
	print ('move :')
	print move
	print ('\n')'''
	irms=avg**(1/2.0)
	irm[nn]=irms;
	nn=nn+1
	fi.write(str(irms))
	fi.write(',')
	#print (irms)
'''....................................*****......................'''
#print (fin)
#print(fvin)
iter=range(0,8)
sum=0;
vi=[0,0,0,0,0,0,0,0];
sumh=0;
for b in range(0,78):
    temph=(2*abs(vhrm[b]))*(2*abs(ihrm[b]))
    difh=gl(vhrm[b])-gl(ihrm[b])
    pfh=cos(difh)
    sumh=sumh+(temph*pfh)
vi[0]=sumh
sumh=0;
for b in range(78,156):
    temph=(2*abs(vhrm[b]))*(2*abs(ihrm[b]))
    difh=gl(vhrm[b])-gl(ihrm[b])
    pfh=cos(difh)
    sumh=sumh+(temph*pfh)
vi[1]=sumh

sumh=0;
for b in range(156,234):
    temph=(2*abs(vhrm[b]))*(2*abs(ihrm[b]))
    difh=gl(vhrm[b])-gl(ihrm[b])
    pfh=cos(difh)
    sumh=sumh+(temph*pfh)
vi[2]=sumh

sumh=0;
for b in range(234,312):
    temph=(2*abs(vhrm[b]))*(2*abs(ihrm[b]))
    difh=gl(vhrm[b])-gl(ihrm[b])
    pfh=cos(difh)
    sumh=sumh+(temph*pfh)
vi[3]=sumh

sumh=0;
for b in range(312,390):
    temph=(2*abs(vhrm[b]))*(2*abs(ihrm[b]))
   
    difh=gl(vhrm[b])-gl(ihrm[b])
    pfh=cos(difh)
    sumh=sumh+(temph*pfh)
vi[4]=sumh

sumh=0;
for b in range(390,468):
    temph=(2*abs(vhrm[b]))*(2*abs(ihrm[b]))
    difh=gl(vhrm[b])-gl(ihrm[b])
    pfh=cos(difh)
    sumh=sumh+(temph*pfh)
vi[5]=sumh

sumh=0;
for b in range(468,546):
    temph=(2*abs(vhrm[b]))*(2*abs(ihrm[b]))
    difh=gl(vhrm[b])-gl(ihrm[b])
    pfh=cos(difh)
    sumh=sumh+(temph*pfh)
vi[6]=sumh

sumh=0;
for b in range(546,623):
    temph=(2*abs(vhrm[b]))*(2*abs(ihrm[b]))
    difh=gl(vhrm[b])-gl(ihrm[b])
    pfh=cos(difh)
    sumh=sumh+(temph*pfh)
vi[7]=sumh

sum=0;
Pavg=[0,0,0,0,0,0,0,0];
for q in iter:
    temp=(2*abs(fin[q]))*(2*abs(fvin[q]))
    v=gl(fvin[q])
    i=(gl(fin[q]))
    #print (abs(fii[q]))
    diff=v-i
    pf=cos(diff)
    p=0
    p=temp*pf
    p=vi[q]+p
    Pavg[q]=p

#print(Pavg)
#print(vi)
#print(irm)
zz=[0,1,2,3,4,5,6,7];
diff=[0,0,0,0,0,0,0,0];

for jj in zz:
    vh=sqrt(1+(THDV[jj]/100.0)**2)
    ih=sqrt(1+(THDI[jj]/100.0)**2)
    vms=abs(fvin[q])*vh*2/sqrt(2)
    ims=abs(fin[q])*ih*2/sqrt(2)
    pf=(Pavg[jj]/2)/(vms*ims);
    #print('here')
    ##print(abs(fin[q]))
    #print (vms)
    #print(ims)
    
    #print(pf)
    if(pf>=1)or(pf>=0.98):
        pf=1;
    diff[jj]=pf;
    #diff[jj]=acos(pf)*(180/pi);

#print (Pavg)
#print (diff)
S=map(operator.mul,vrm,irm);
P=[0,0,0,0,0,0,0,0];
Q=[0,0,0,0,0,0,0,0];
zz=[0,1,2,3,4,5,6,7];
for j in zz:
    P[j]=S[j]*diff[j];
    if (diff[j]>1)or(diff[j]<0):
	diff[j]=1;
    Q[j]=S[j]*sin(acos(diff[j]));




fpf.write(TimeStamp)
fpf.write('\n')
fq.write(TimeStamp)
fq.write('\n')
fp.write(TimeStamp)
fp.write('\n')
fs.write(TimeStamp)
fs.write('\n')
for s in zz:
    fpf.write(str(diff[s]));
    fpf.write(',');
    fq.write(str(Q[s]));
    fq.write(',');
    fp.write(str(P[s]));
    fp.write(',');
    fs.write(str(S[s]));
    fs.write(',');
    fthdv.write(str(THDV[s]))
    fthdv.write(',')
    fthdi.write(str(THDI[s]))
    fthdi.write(',')
#print (P)
#print (Q)












p = subprocess.Popen(['python3', db], stdout=subprocess.PIPE, stderr=subprocess.STDOUT)
#plt.subplot(211)		
#plt.plot(Iac)
#plt.subplot(212)
#plt.plot(Vac)
#plt.show()

fi.close()
fv.close()
ffv.close()
fh.close()
ffi.close()
fpf.close()
fp.close()
fq.close()
fs.close()

#print(P)
#print(Q)
#print (THDV)
#print (THDI)



ftd.close()

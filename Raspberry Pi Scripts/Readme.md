# Parallel Processing Scripts
**Main Script Folder**: It contains python scripts that remain live throughout the operation of data management system. Main.py file call three subprocess (ph11.py, ph22.py and ph33.py) to initiate data acquisition from three phases of tactical network
 <br />
 <br />
 **Calculation Script Folders**: There are three folders in the directory, each folder calculates different electrical parameters from the acquired raw data (Voltage and Current Signal) and stores it into the data files.
<br />
<br />
**Database Upgradation and Encryption Folders**: These folders contain python scripts that encrypt the preprocessed data and stores the real-time data into the local database (MySQL)
<img src="https://github.com/SyedWaliAbbas/Edge-Energy-Management-System/blob/main/Raspberry%20Pi%20Scripts/Programming_Architecture.jpg"  valign="middle" alt="Scapy" />

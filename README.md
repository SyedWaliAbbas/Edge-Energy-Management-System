# <img src="https://github.com/SyedWaliAbbas/Edge-Energy-Management-System/blob/main/EEMS%20logo.JPG" width="120" valign="middle" alt="Scapy" />&nbsp; Edge-Energy-Management-System 

[![DOI](https://zenodo.org/badge/524748996.svg)](https://zenodo.org/badge/latestdoi/524748996)

<p align="justify"> Microgrids  specialized for tactical operations have been subjected to several challenges. These tactical power networks are islanded and have a relatively low power generation capacity. Meeting power requirements of military equipment, having intermittent and highly inductive nature, exposes microgrids to severe stresses. Existing methodologies to monitor and control the impact of load variations require sophisticated equipment and trained personnel. The objective of this research is to develop an open-source edge energy monitoring system (EEMS) for efficient demand management of tactical networks. The proposed system is capable of capturing all minute operational artifacts, including harmonic distortions and power quality of these networks. The proposed system utilizes raspberry pi as an edge device to meet the low power requirements of tactical networks. The novel concurrent programming approach adopted in the proposed EMS, effectively handles the large amount of data acquired from the network. This parallel processing of acquired data speeds up the execution process. All electrical parameters obtained during this process are stored in an encrypted local database that can be utilized for fault analysis and load prediction. Further integration of machine learning tools in proposed EMS assists in automated power network reconfiguration and tuning under harsh battlefield situations. </p>

## Usage

### Hardware Requirements:
The development of an Edge Energy Management System requires 
1)	Arduino Mega 
2)	Raspberry Pi
3)	Data Acquisition Circuit
Raspberry Pi is connected to the Arduino Mega via serial ports and Arduino is connected to the Data Acquisition Circuits via its Analog Input Pins. Details of the Data Acquisition Circuit used in the Edge Energy Management System are provided in the paper.

### Software Requirements:
1)	Arduino Code is provided in the repository. In order to program Arduino Mega, the open-source Arduino IDE 2.0 will be required.
2)	All scripts in Raspberry Pi are based on Python.  The following Dependencies are required to run scripts of the Edge Energy Management system

    pyDes >>>>>2.0.1 

    mysql.connector >>>> 2.0
3)	Install following for Raspberry Pi LAMP Server
  
    Apache 2
  
    PHP
  
    phpMyAdmin
  
    MySQL server >>>> 5.5-5.7


## Experimental Data:
Experiments were performed in two different settings, including low-voltage residential and industrial settings. Experimental data obtained in both settings are provided in [![DOI](https://zenodo.org/badge/DOI/10.5281/zenodo.7267520.svg)](https://doi.org/10.5281/zenodo.7267520)

## Citation 
 If you are using our tool, kindly cite our related  [paper](https://www.techrxiv.org/articles/preprint/Development_of_Open-Source_Edge_Energy_Management_System_for_Tactical_Power_Networks/20964400) which outlines the details of the tools and its processing. 
 
 ```yaml
 @article{EEMS,
title={Development of Open-Source, Edge Energy Management System for Tactical Power Networks},
author={ Syed Wali and Irfan Khan and Yasir Ali Farrukh and Muhammad Areeb Fasih and Majida Kazmi and Muhammad Hassan ul Haq},
year={2022},
month={9},
url={ https://www.techrxiv.org/articles/preprint/Development_of_Open-Source_Edge_Energy_Management_System_for_Tactical_Power_Networks/20964400}, 
doi={ 10.36227/techrxiv.20964400.v1},
publisher={TechRxiv}
}

 
 
  
 ```

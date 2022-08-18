using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;
using System.IO;
using EasyModbus;

namespace Multi_Task
{
    public partial class Form1 : Form
    {

        private static int iteration = 10;
        private static int g1t, g2t, g3t, g4t, g5t, g6t, g7t, g8t, g9t, g10t, g11t, g12t, g13t, g14t, g15t;
        private static int delay = 1000;
        private static int sts = 1;
        private static bool status1, status2, status3, status4, status5, status6, status7, status8, status9, status10, status11, status12, status13, status14, status15;
        private static string ip = "localhost";
        private static ModbusClient modbusclient1 = new ModbusClient();
        private static ModbusClient modbusclient2 = new ModbusClient("192.168.1.56", 502);
        private static ModbusClient modbusclient3 = new ModbusClient("192.168.1.57", 502);
        private static ModbusClient modbusclient4 = new ModbusClient("192.168.1.58", 502);
        private static ModbusClient modbusclient5 = new ModbusClient("192.168.1.59", 502);
        private static ModbusClient modbusclient6 = new ModbusClient("192.168.1.60", 502);
        private static ModbusClient modbusclient7 = new ModbusClient("192.168.1.61", 502);
        private static ModbusClient modbusclient8 = new ModbusClient("192.168.1.62", 502);
        private static ModbusClient modbusclient9 = new ModbusClient("192.168.1.63", 502);
        private static ModbusClient modbusclient10 = new ModbusClient("192.168.1.64", 502);
        private static ModbusClient modbusclient11 = new ModbusClient("192.168.1.65", 502);
        private static ModbusClient modbusclient12 = new ModbusClient("192.168.1.66", 502);
        private static ModbusClient modbusclient13 = new ModbusClient("192.168.1.67", 502);
        private static ModbusClient modbusclient14 = new ModbusClient("192.168.1.68", 502);
        private static ModbusClient modbusclient15 = new ModbusClient("192.168.1.69", 502);

        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            textBox1.Text = iteration.ToString();
            textBox17.Text = delay.ToString();
            textBox18.Text = ip;
            check();
        }





        // Function 
        


        public static bool Insert(string table, Character B)
        {
            //gen = table;
            bool result = false;
            DateTime Date = DateTime.Now;
            string currentdate = Date.ToString("yyyy/MM/dd HH:mm:ss");
            B.dt = currentdate;


            
            //Connection String
            MySqlConnection con = new MySqlConnection("server=localhost;database=orc2;uid=pi;pwd=byco");

            try
            {
                
                con.Open();
                string xQry = "INSERT INTO " + table + " ( dt,status, op, ct, cav, ebv, rpm, gf, v1, v2, v3, v12, v23, v31, i1, i2, i3, ie, w1, w2, w3, bf, bv1, bv2, bv3, bv12, bv23, bv31, tw, va1, va2, va3, tva, var1, var2, var3, tvar, pf1, pf2, pf3, tpf, perc_w, perc_var, btw, btvar, ert, kwh, kvah, kvarh, starts,warn,shut,e_trip,gov,avr) VALUES ( '" + B.dt + "', ' " + B.status + "',  ' " + B.op + "', ' " + B.ct + "', ' " + B.cav + "', ' " + B.ebv + "', ' " + B.rpm + "', ' " + B.gf + "', ' " + B.v1 + "', ' " + B.v2 + "', ' " + B.v3 + "', ' " + B.v12 + "', ' " + B.v23 + "', ' " + B.v31 + "', ' " + B.i1 + "', ' " + B.i2 + "', ' " + B.i3 + "', ' " + B.ie + "', ' " + B.w1 + "', ' " + B.w2 + "', ' " + B.w3 + "', ' " + B.bf + "', ' " + B.bv1 + "', ' " + B.bv2 + "', ' " + B.bv3 + "', ' " + B.bv12 + "', ' " + B.bv23 + "', ' " + B.bv31 + "', ' " + B.tw + "', ' " + B.va1 + "', ' " + B.va2 + "', ' " + B.va3 + "', ' " + B.tva + "', ' " + B.var1 + "', ' " + B.var2 + "', ' " + B.var3 + "', ' " + B.tvar + "', ' " + B.pf1 + "', ' " + B.pf2 + "', ' " + B.pf3 + "', ' " + B.tpf + "', ' " + B.perc_w + "', ' " + B.perc_var + "', ' " + B.btw + "', ' " + B.btvar + "', ' " + B.ert + "', ' " + B.kwh + "', ' " + B.kvah + "', ' " + B.kvarh + "', ' " + B.starts + "', ' " + B.warn + "', ' " + B.shut + "', ' " + B.e_trip + "', ' " + B.gov + "', ' " + B.avr + "')";
                //Console.WriteLine(xQry);
                MySqlCommand cmdi = new MySqlCommand(xQry, con);
                cmdi.ExecuteNonQuery();
                result = true;
            }
            catch (Exception ex)
            { throw ex; }
            finally { con.Close(); }
            return result;
        }

        public class Character
        {
            public string dt { get; set; }
            public int warn { get; set; }
            public int shut { get; set; }
            public int e_trip { get; set; }
            public int status { get; set; }
            public double op { get; set; }
            public double ct { get; set; }
            public double cav { get; set; }
            public double ebv { get; set; }
            public double rpm { get; set; }
            public double gf { get; set; }
            public double v1 { get; set; }
            public double v2 { get; set; }
            public double v3 { get; set; }
            public double v12 { get; set; }
            public double v23 { get; set; }
            public double v31 { get; set; }
            public double i1 { get; set; }
            public double i2 { get; set; }
            public double i3 { get; set; }
            public double ie { get; set; }
            public double w1 { get; set; }
            public double w2 { get; set; }
            public double w3 { get; set; }
            public double bf { get; set; }
            public double bv1 { get; set; }
            public double bv2 { get; set; }
            public double bv3 { get; set; }
            public double bv12 { get; set; }
            public double bv23 { get; set; }
            public double bv31 { get; set; }
            public double tw { get; set; }
            public double va1 { get; set; }
            public double va2 { get; set; }
            public double va3 { get; set; }
            public double tva { get; set; }
            public double var1 { get; set; }
            public double var2 { get; set; }
            public double var3 { get; set; }
            public double tvar { get; set; }
            public double pf1 { get; set; }
            public double pf2 { get; set; }
            public double pf3 { get; set; }
            public double tpf { get; set; }
            public double perc_w { get; set; }
            public double perc_var { get; set; }
            public double btw { get; set; }
            public double btvar { get; set; }
            public double ert { get; set; }
            public double kwh { get; set; }
            public double kvah { get; set; }
            public double kvarh { get; set; }
            public double starts { get; set; }
            public double gov { get; set; }
            public double avr { get; set; }


        }

        private static double todecimal(int msb, int lsb, double pre)
        {
            int z = lsb & 65535;
            int combined = (msb << 16) | z;
            double B = combined * pre;
            return B;
        }

        private static double todecimal1(int msb, int lsb, double pre)
        {
            int z = lsb & 65535;
            string n1 = msb.ToString("X");
            string n2 = z.ToString("X");
            string hex = n1 + n2;
            double B = (Convert.ToInt32(hex, 16)) * pre;
            return B;
        }







        public async void Getdata(string table, bool status)
        {
            int check_conn = 0;

            //if(status==true)
            //{
            //    gen1status.BackColor = Color.YellowGreen;
            //   // gen1status.Text = "On Status";
            for (int a = 0; a < iteration; a++)
            {
                if (status1 == true)
                {

                    var watch = new System.Diagnostics.Stopwatch();
                    watch.Start();

                    bool readflag = new bool();
                    try
                    {
                   
                        modbusclient1.Connect(ip, 502);
                        check_conn = 0;
                        Character B = new Character()
                        { };
                        ///////// Reading Regsiters 
                        
                        B.status = sts;
                        int[] A = modbusclient1.ReadHoldingRegisters(1024, 2);
                        B.op = A[0];
                        B.ct = A[1];
                        A = modbusclient1.ReadHoldingRegisters(1028, 4);
                        B.cav = (A[0] * 0.1);
                        B.ebv = (A[1] * 0.1);
                        B.rpm = A[2];
                        B.gf = (A[3] * 0.1);
                        A = modbusclient1.ReadHoldingRegisters(1033, 1);
                        B.v1 = (A[0] * 0.1);
                        A = modbusclient1.ReadHoldingRegisters(1035, 1);
                        B.v2 = (A[0] * 0.1);
                        A = modbusclient1.ReadHoldingRegisters(1037, 1);
                        B.v3 = (A[0] * 0.1);
                        A = modbusclient1.ReadHoldingRegisters(1039, 1);
                        B.v12 = (A[0] * 0.1);
                        A = modbusclient1.ReadHoldingRegisters(1041, 1);
                        B.v23 = (A[0] * 0.1);
                        A = modbusclient1.ReadHoldingRegisters(1043, 1);
                        B.v31 = (A[0] * 0.1);
                        A = modbusclient1.ReadHoldingRegisters(1045, 1);
                        B.i1 = (A[0] * 0.1);
                        A = modbusclient1.ReadHoldingRegisters(1047, 1);
                        B.i2 = (A[0] * 0.1);
                        A = modbusclient1.ReadHoldingRegisters(1049, 1);
                        B.i3 = (A[0] * 0.1);
                        A = modbusclient1.ReadHoldingRegisters(1051, 1);
                        B.ie = (A[0] * 0.1);
                        A = modbusclient1.ReadHoldingRegisters(1052, 6);
                        B.w1 = (todecimal(A[0], A[1], 1))/1000;
                        B.w2 = (todecimal(A[2], A[3], 1))/1000;
                        B.w3 = (todecimal(A[4], A[5], 1))/1000;
                        A = modbusclient1.ReadHoldingRegisters(1091, 1);
                        B.bf = (A[0] * 0.1);
                        A = modbusclient1.ReadHoldingRegisters(1093, 1);
                        B.bv1 = (A[0] * 0.1);
                        A = modbusclient1.ReadHoldingRegisters(1095, 1);
                        B.bv2 = (A[0] * 0.1);
                        A = modbusclient1.ReadHoldingRegisters(1097, 1);
                        B.bv3 = (A[0] * 0.1);
                        A = modbusclient1.ReadHoldingRegisters(1099, 1);
                        B.bv12 = (A[0] * 0.1);
                        A = modbusclient1.ReadHoldingRegisters(1101, 1);
                        B.bv23 = (A[0] * 0.1);
                        A = modbusclient1.ReadHoldingRegisters(1103, 1);
                        B.bv31 = (A[0] * 0.1);
                        A = modbusclient1.ReadHoldingRegisters(1536, 18);
                        B.tw = (todecimal(A[0], A[1], 1))/1000;
                        B.va1 = (todecimal(A[2], A[3], 1))/1000;
                        B.va2 = (todecimal(A[4], A[5], 1))/1000;
                        B.va3 = (todecimal(A[6], A[7], 1))/1000;
                        B.tva = (todecimal(A[8], A[9], 1))/1000;
                        B.var1 = (todecimal(A[10], A[11], 1))/1000;
                        B.var2 = (todecimal(A[12], A[13], 1))/1000;
                        B.var3 = (todecimal(A[14], A[15], 1))/1000;
                        B.tvar = (todecimal(A[16], A[17], 1)) / 1000;
                        A = modbusclient1.ReadHoldingRegisters(1554, 6);
                        B.pf1 = (A[0] * 0.01);
                        B.pf2 = (A[1] * 0.01);
                        B.pf3 = (A[2] * 0.01);
                        B.tpf = (A[3] * 0.01);
                        B.perc_w = (A[4] * 0.1);
                        B.perc_var = (A[5] * 0.1);
                        A = modbusclient1.ReadHoldingRegisters(1584, 2);
                        B.btw = (todecimal(A[0], A[1], 1))/ 1000;
                        A = modbusclient1.ReadHoldingRegisters(1600, 2);
                        B.btvar = (todecimal(A[0], A[1], 1))/1000;
                        A = modbusclient1.ReadHoldingRegisters(1798, 4);
                        B.ert = (todecimal(A[0], A[1], 1)) / 3600 ;

                       // Console.WriteLine(A[2].ToString());
                        //Console.WriteLine(A[3].ToString());

                        B.kwh = (todecimal(A[2], A[3], 0.1));
                       // Console.WriteLine(B.kwh.ToString());

                        A = modbusclient1.ReadHoldingRegisters(1804, 6);
                        B.kvah = todecimal(A[0], A[1], 0.1);
                        B.kvarh = todecimal(A[2], A[3], 0.1);
                        B.starts = todecimal(A[4], A[5], 1);
                        B.dt = "op";

                        A = modbusclient1.ReadHoldingRegisters(774, 1);
                        B.warn = (A[0] & 1024) >> 10;
                        B.e_trip = (A[0] & 2048)>> 11;
                        B.shut = (A[0] & 4096) >> 12;
                        A = modbusclient1.ReadHoldingRegisters(1219, 2);
                        B.gov = (A[0] * 0.1);
                        B.avr = (A[1] * 0.1);

                        modbusclient1.Disconnect();
                        readflag = Insert(table, B);


                    }
                    catch (Exception ex)
                    {
                        
                        ///// Connection lost determinaton /////
                        Packet_loss(ex);

                        if (check_conn > 2)
                        {
                            Character C = new Character();

                            C.status = 0;
                            C.op = 0;
                            C.ct = 0;
                            C.cav = 0;
                            C.ebv = 0;
                            C.rpm = 0;
                            C.gf = 0;
                            C.v1 = 0;
                            C.v2 = 0;
                            C.v3 = 0;
                            C.v12 = 0;
                            C.v23 = 0;
                            C.v31 = 0;
                            C.i1 = 0;
                            C.i2 = 0;
                            C.i3 = 0;
                            C.ie = 0;
                            C.w1 = 0;
                            C.w2 = 0;
                            C.w3 = 0;
                            C.bf = 0;
                            C.bv1 = 0;
                            C.bv2 = 0;
                            C.bv3 = 0;
                            C.bv12 = 0;
                            C.bv23 = 0;
                            C.bv31 = 0;
                            C.tw = 0;
                            C.va1 = 0;
                            C.va2 = 0;
                            C.va3 = 0;
                            C.tva = 0;
                            C.var1 = 0;
                            C.var2 = 0;
                            C.var3 = 0;
                            C.tvar = 0;
                            C.pf1 = 0;
                            C.pf2 = 0;
                            C.pf3 = 0;
                            C.tpf = 0;
                            C.perc_w = 0;
                            C.perc_var = 0;
                            C.btw = 0;
                            C.btvar = 0;
                            C.ert = 0;
                            C.kwh = 0;
                            C.kvah = 0;
                            C.kvarh = 0;
                            C.starts = 0;

                            readflag = Insert(table, C);
                        }
                        if (check_conn > 4)
                        {
                            MessageBox.Show(ex.Message);
                            ErrorLogging(ex);
                            status1 = false;
                            modbusclient1.Disconnect();
                            break;
                        }
                        check_conn++;
                    
                    }
                   
                    
                    watch.Stop();
                    int d2 = Convert.ToInt32(watch.ElapsedMilliseconds);
                    g1t = d2;
                    //Console.WriteLine("Time Taken by " + table+" :"+d2+ " ms");
                    int d4 = (delay - d2);
                    if (d4 > 0)
                    { await Task.Delay(d4); }
                   
                }
                else
                {
                    break;
                }
            }
            status1 = false;
           
            // button1.Enabled = true;

            // }                                    
        }
                            
        public async void Getdata2(string table, bool status)
        {
            int check_conn = 0;
            //if(status==true)
            //{
            //    gen1status.BackColor = Color.YellowGreen;
            //   // gen1status.Text = "On Status";
            for (int a = 0; a < iteration; a++)
            {

                if (status2 == true)
                {

                    var watch = new System.Diagnostics.Stopwatch();
                    watch.Start();

                    bool readflag = new bool();
                    try
                    {

                        modbusclient2.Connect();
                        check_conn = 0;
                        Character B = new Character()
                        { };
                        ///////// Reading Regsiters 

                        B.status = sts;
                        int[] A = modbusclient2.ReadHoldingRegisters(1024, 2);
                        B.op = A[0];
                        B.ct = A[1];
                        A = modbusclient2.ReadHoldingRegisters(1028, 4);
                        B.cav = (A[0] * 0.1);
                        B.ebv = (A[1] * 0.1);
                        B.rpm = A[2];
                        B.gf = (A[3] * 0.1);
                        A = modbusclient2.ReadHoldingRegisters(1033, 1);
                        B.v1 = (A[0] * 0.1);
                        A = modbusclient2.ReadHoldingRegisters(1035, 1);
                        B.v2 = (A[0] * 0.1);
                        A = modbusclient2.ReadHoldingRegisters(1037, 1);
                        B.v3 = (A[0] * 0.1);
                        A = modbusclient2.ReadHoldingRegisters(1039, 1);
                        B.v12 = (A[0] * 0.1);
                        A = modbusclient2.ReadHoldingRegisters(1041, 1);
                        B.v23 = (A[0] * 0.1);
                        A = modbusclient2.ReadHoldingRegisters(1043, 1);
                        B.v31 = (A[0] * 0.1);
                        A = modbusclient2.ReadHoldingRegisters(1045, 1);
                        B.i1 = (A[0] * 0.1);
                        A = modbusclient2.ReadHoldingRegisters(1047, 1);
                        B.i2 = (A[0] * 0.1);
                        A = modbusclient2.ReadHoldingRegisters(1049, 1);
                        B.i3 = (A[0] * 0.1);
                        A = modbusclient2.ReadHoldingRegisters(1051, 1);
                        B.ie = (A[0] * 0.1);
                        A = modbusclient2.ReadHoldingRegisters(1052, 6);
                        B.w1 = (todecimal(A[0], A[1], 1)) / 1000;
                        B.w2 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.w3 = (todecimal(A[4], A[5], 1)) / 1000;
                        A = modbusclient2.ReadHoldingRegisters(1091, 1);
                        B.bf = (A[0] * 0.1);
                        A = modbusclient2.ReadHoldingRegisters(1093, 1);
                        B.bv1 = (A[0] * 0.1);
                        A = modbusclient2.ReadHoldingRegisters(1095, 1);
                        B.bv2 = (A[0] * 0.1);
                        A = modbusclient2.ReadHoldingRegisters(1097, 1);
                        B.bv3 = (A[0] * 0.1);
                        A = modbusclient2.ReadHoldingRegisters(1099, 1);
                        B.bv12 = (A[0] * 0.1);
                        A = modbusclient2.ReadHoldingRegisters(1101, 1);
                        B.bv23 = (A[0] * 0.1);
                        A = modbusclient2.ReadHoldingRegisters(1103, 1);
                        B.bv31 = (A[0] * 0.1);
                        A = modbusclient2.ReadHoldingRegisters(1536, 18);
                        B.tw = (todecimal(A[0], A[1], 1)) / 1000;
                        B.va1 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.va2 = (todecimal(A[4], A[5], 1)) / 1000;
                        B.va3 = (todecimal(A[6], A[7], 1)) / 1000;
                        B.tva = (todecimal(A[8], A[9], 1)) / 1000;
                        B.var1 = (todecimal(A[10], A[11], 1)) / 1000;
                        B.var2 = (todecimal(A[12], A[13], 1)) / 1000;
                        B.var3 = (todecimal(A[14], A[15], 1)) / 1000;
                        B.tvar = (todecimal(A[16], A[17], 1)) / 1000;
                        A = modbusclient2.ReadHoldingRegisters(1554, 6);
                        B.pf1 = (A[0] * 0.01);
                        B.pf2 = (A[1] * 0.01);
                        B.pf3 = (A[2] * 0.01);
                        B.tpf = (A[3] * 0.01);
                        B.perc_w = (A[4] * 0.1);
                        B.perc_var = (A[5] * 0.1);
                        A = modbusclient2.ReadHoldingRegisters(1584, 2);
                        B.btw = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient2.ReadHoldingRegisters(1600, 2);
                        B.btvar = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient2.ReadHoldingRegisters(1798, 4);
                        B.ert = (todecimal(A[0], A[1], 1)) / 3600;

                        B.kwh = (todecimal(A[2], A[3], 0.1));

                        A = modbusclient2.ReadHoldingRegisters(1804, 6);
                        B.kvah = todecimal(A[0], A[1], 0.1);
                        B.kvarh = todecimal(A[2], A[3], 0.1);
                        B.starts = todecimal(A[4], A[5], 1);
                        B.dt = "op";
                        modbusclient2.Disconnect();
                        readflag = Insert(table, B);


                    }
                    catch (Exception ex)
                    {

                        ///// Connection lost determinaton /////
                        Packet_loss(ex);

                        if (check_conn > 2)
                        {
                            Character C = new Character();

                            C.status = 0;
                            C.op = 0;
                            C.ct = 0;
                            C.cav = 0;
                            C.ebv = 0;
                            C.rpm = 0;
                            C.gf = 0;
                            C.v1 = 0;
                            C.v2 = 0;
                            C.v3 = 0;
                            C.v12 = 0;
                            C.v23 = 0;
                            C.v31 = 0;
                            C.i1 = 0;
                            C.i2 = 0;
                            C.i3 = 0;
                            C.ie = 0;
                            C.w1 = 0;
                            C.w2 = 0;
                            C.w3 = 0;
                            C.bf = 0;
                            C.bv1 = 0;
                            C.bv2 = 0;
                            C.bv3 = 0;
                            C.bv12 = 0;
                            C.bv23 = 0;
                            C.bv31 = 0;
                            C.tw = 0;
                            C.va1 = 0;
                            C.va2 = 0;
                            C.va3 = 0;
                            C.tva = 0;
                            C.var1 = 0;
                            C.var2 = 0;
                            C.var3 = 0;
                            C.tvar = 0;
                            C.pf1 = 0;
                            C.pf2 = 0;
                            C.pf3 = 0;
                            C.tpf = 0;
                            C.perc_w = 0;
                            C.perc_var = 0;
                            C.btw = 0;
                            C.btvar = 0;
                            C.ert = 0;
                            C.kwh = 0;
                            C.kvah = 0;
                            C.kvarh = 0;
                            C.starts = 0;

                            readflag = Insert(table, C);
                        }
                        if (check_conn > 4)
                        {
                            MessageBox.Show(ex.Message);
                            ErrorLogging(ex);
                            status2 = false;
                            modbusclient2.Disconnect();
                            break;
                        }
                        check_conn++;

                    }


                    watch.Stop();
                    int d2 = Convert.ToInt32(watch.ElapsedMilliseconds);
                    g2t = d2;
                    //Console.WriteLine("Time Taken by " + table+" :"+d2+ " ms");
                    int d4 = (delay - d2);
                    if (d4 > 0)
                    { await Task.Delay(d4); }
                    
                }
                else
                {
                    break;
                }
            }

            status2 = false;


        }

        public async void Getdata3(string table, bool status)
        {
            int check_conn = 0;

            //if(status==true)
            //{
            //    gen1status.BackColor = Color.YellowGreen;
            //   // gen1status.Text = "On Status";
            for (int a = 0; a < iteration; a++)
            {
                if (status3 == true)
                {

                    var watch = new System.Diagnostics.Stopwatch();
                    watch.Start();

                    bool readflag = new bool();
                    try
                    {

                        modbusclient3.Connect();
                        check_conn = 0;
                        Character B = new Character()
                        { };
                        ///////// Reading Regsiters 

                        B.status = sts;
                        int[] A = modbusclient3.ReadHoldingRegisters(1024, 2);
                        B.op = A[0];
                        B.ct = A[1];
                        A = modbusclient3.ReadHoldingRegisters(1028, 4);
                        B.cav = (A[0] * 0.1);
                        B.ebv = (A[1] * 0.1);
                        B.rpm = A[2];
                        B.gf = (A[3] * 0.1);
                        A = modbusclient3.ReadHoldingRegisters(1033, 1);
                        B.v1 = (A[0] * 0.1);
                        A = modbusclient3.ReadHoldingRegisters(1035, 1);
                        B.v2 = (A[0] * 0.1);
                        A = modbusclient3.ReadHoldingRegisters(1037, 1);
                        B.v3 = (A[0] * 0.1);
                        A = modbusclient3.ReadHoldingRegisters(1039, 1);
                        B.v12 = (A[0] * 0.1);
                        A = modbusclient3.ReadHoldingRegisters(1041, 1);
                        B.v23 = (A[0] * 0.1);
                        A = modbusclient3.ReadHoldingRegisters(1043, 1);
                        B.v31 = (A[0] * 0.1);
                        A = modbusclient3.ReadHoldingRegisters(1045, 1);
                        B.i1 = (A[0] * 0.1);
                        A = modbusclient3.ReadHoldingRegisters(1047, 1);
                        B.i2 = (A[0] * 0.1);
                        A = modbusclient3.ReadHoldingRegisters(1049, 1);
                        B.i3 = (A[0] * 0.1);
                        A = modbusclient3.ReadHoldingRegisters(1051, 1);
                        B.ie = (A[0] * 0.1);
                        A = modbusclient3.ReadHoldingRegisters(1052, 6);
                        B.w1 = (todecimal(A[0], A[1], 1)) / 1000;
                        B.w2 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.w3 = (todecimal(A[4], A[5], 1)) / 1000;
                        A = modbusclient3.ReadHoldingRegisters(1091, 1);
                        B.bf = (A[0] * 0.1);
                        A = modbusclient3.ReadHoldingRegisters(1093, 1);
                        B.bv1 = (A[0] * 0.1);
                        A = modbusclient3.ReadHoldingRegisters(1095, 1);
                        B.bv2 = (A[0] * 0.1);
                        A = modbusclient3.ReadHoldingRegisters(1097, 1);
                        B.bv3 = (A[0] * 0.1);
                        A = modbusclient3.ReadHoldingRegisters(1099, 1);
                        B.bv12 = (A[0] * 0.1);
                        A = modbusclient3.ReadHoldingRegisters(1101, 1);
                        B.bv23 = (A[0] * 0.1);
                        A = modbusclient3.ReadHoldingRegisters(1103, 1);
                        B.bv31 = (A[0] * 0.1);
                        A = modbusclient3.ReadHoldingRegisters(1536, 18);
                        B.tw = (todecimal(A[0], A[1], 1)) / 1000;
                        B.va1 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.va2 = (todecimal(A[4], A[5], 1)) / 1000;
                        B.va3 = (todecimal(A[6], A[7], 1)) / 1000;
                        B.tva = (todecimal(A[8], A[9], 1)) / 1000;
                        B.var1 = (todecimal(A[10], A[11], 1)) / 1000;
                        B.var2 = (todecimal(A[12], A[13], 1)) / 1000;
                        B.var3 = (todecimal(A[14], A[15], 1)) / 1000;
                        B.tvar = (todecimal(A[16], A[17], 1)) / 1000;
                        A = modbusclient3.ReadHoldingRegisters(1554, 6);
                        B.pf1 = (A[0] * 0.01);
                        B.pf2 = (A[1] * 0.01);
                        B.pf3 = (A[2] * 0.01);
                        B.tpf = (A[3] * 0.01);
                        B.perc_w = (A[4] * 0.1);
                        B.perc_var = (A[5] * 0.1);
                        A = modbusclient3.ReadHoldingRegisters(1584, 2);
                        B.btw = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient3.ReadHoldingRegisters(1600, 2);
                        B.btvar = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient3.ReadHoldingRegisters(1798, 4);
                        B.ert = (todecimal(A[0], A[1], 1)) / 3600;
                        B.kwh = (todecimal(A[2], A[3], 0.1));
                        A = modbusclient3.ReadHoldingRegisters(1804, 6);
                        B.kvah = todecimal(A[0], A[1], 0.1);
                        B.kvarh = todecimal(A[2], A[3], 0.1);
                        B.starts = todecimal(A[4], A[5], 1);
                        B.dt = "op";
                        modbusclient3.Disconnect();
                        readflag = Insert(table, B);


                    }
                    catch (Exception ex)
                    {

                        ///// Connection lost determinaton /////
                        Packet_loss(ex);

                        if (check_conn > 2)
                        {
                            Character C = new Character();

                            C.status = 0;
                            C.op = 0;
                            C.ct = 0;
                            C.cav = 0;
                            C.ebv = 0;
                            C.rpm = 0;
                            C.gf = 0;
                            C.v1 = 0;
                            C.v2 = 0;
                            C.v3 = 0;
                            C.v12 = 0;
                            C.v23 = 0;
                            C.v31 = 0;
                            C.i1 = 0;
                            C.i2 = 0;
                            C.i3 = 0;
                            C.ie = 0;
                            C.w1 = 0;
                            C.w2 = 0;
                            C.w3 = 0;
                            C.bf = 0;
                            C.bv1 = 0;
                            C.bv2 = 0;
                            C.bv3 = 0;
                            C.bv12 = 0;
                            C.bv23 = 0;
                            C.bv31 = 0;
                            C.tw = 0;
                            C.va1 = 0;
                            C.va2 = 0;
                            C.va3 = 0;
                            C.tva = 0;
                            C.var1 = 0;
                            C.var2 = 0;
                            C.var3 = 0;
                            C.tvar = 0;
                            C.pf1 = 0;
                            C.pf2 = 0;
                            C.pf3 = 0;
                            C.tpf = 0;
                            C.perc_w = 0;
                            C.perc_var = 0;
                            C.btw = 0;
                            C.btvar = 0;
                            C.ert = 0;
                            C.kwh = 0;
                            C.kvah = 0;
                            C.kvarh = 0;
                            C.starts = 0;

                            readflag = Insert(table, C);
                        }
                        if (check_conn > 4)
                        {
                            MessageBox.Show(ex.Message);
                            ErrorLogging(ex);
                            status3 = false;
                            modbusclient3.Disconnect();
                            break;
                        }
                        check_conn++;
                    }

                    watch.Stop();
                    int d2 = Convert.ToInt32(watch.ElapsedMilliseconds);
                    g3t = d2;
                    //Console.WriteLine("Time Taken by " + table+" :"+d2+ " ms");
                    int d4 = (delay - d2);
                    if (d4 > 0)
                    { await Task.Delay(d4); }
                }
                else
                {
                    break;
                }
            }
            status3 = false;
        }

        public async void Getdata4(string table, bool status)
        {
            int check_conn = 0;

            for (int a = 0; a < iteration; a++)
            {
                if (status4 == true)
                {

                    var watch = new System.Diagnostics.Stopwatch();
                    watch.Start();

                    bool readflag = new bool();
                    try
                    {

                        modbusclient4.Connect();
                        check_conn = 0;
                        Character B = new Character()
                        { };
                        ///////// Reading Regsiters 

                        B.status = sts;
                        int[] A = modbusclient4.ReadHoldingRegisters(1024, 2);
                        B.op = A[0];
                        B.ct = A[1];
                        A = modbusclient4.ReadHoldingRegisters(1028, 4);
                        B.cav = (A[0] * 0.1);
                        B.ebv = (A[1] * 0.1);
                        B.rpm = A[2];
                        B.gf = (A[3] * 0.1);
                        A = modbusclient4.ReadHoldingRegisters(1033, 1);
                        B.v1 = (A[0] * 0.1);
                        A = modbusclient4.ReadHoldingRegisters(1035, 1);
                        B.v2 = (A[0] * 0.1);
                        A = modbusclient4.ReadHoldingRegisters(1037, 1);
                        B.v3 = (A[0] * 0.1);
                        A = modbusclient4.ReadHoldingRegisters(1039, 1);
                        B.v12 = (A[0] * 0.1);
                        A = modbusclient4.ReadHoldingRegisters(1041, 1);
                        B.v23 = (A[0] * 0.1);
                        A = modbusclient4.ReadHoldingRegisters(1043, 1);
                        B.v31 = (A[0] * 0.1);
                        A = modbusclient4.ReadHoldingRegisters(1045, 1);
                        B.i1 = (A[0] * 0.1);
                        A = modbusclient4.ReadHoldingRegisters(1047, 1);
                        B.i2 = (A[0] * 0.1);
                        A = modbusclient4.ReadHoldingRegisters(1049, 1);
                        B.i3 = (A[0] * 0.1);
                        A = modbusclient4.ReadHoldingRegisters(1051, 1);
                        B.ie = (A[0] * 0.1);
                        A = modbusclient4.ReadHoldingRegisters(1052, 6);
                        B.w1 = (todecimal(A[0], A[1], 1)) / 1000;
                        B.w2 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.w3 = (todecimal(A[4], A[5], 1)) / 1000;
                        A = modbusclient4.ReadHoldingRegisters(1091, 1);
                        B.bf = (A[0] * 0.1);
                        A = modbusclient4.ReadHoldingRegisters(1093, 1);
                        B.bv1 = (A[0] * 0.1);
                        A = modbusclient4.ReadHoldingRegisters(1095, 1);
                        B.bv2 = (A[0] * 0.1);
                        A = modbusclient4.ReadHoldingRegisters(1097, 1);
                        B.bv3 = (A[0] * 0.1);
                        A = modbusclient4.ReadHoldingRegisters(1099, 1);
                        B.bv12 = (A[0] * 0.1);
                        A = modbusclient4.ReadHoldingRegisters(1101, 1);
                        B.bv23 = (A[0] * 0.1);
                        A = modbusclient4.ReadHoldingRegisters(1103, 1);
                        B.bv31 = (A[0] * 0.1);
                        A = modbusclient4.ReadHoldingRegisters(1536, 18);
                        B.tw = (todecimal(A[0], A[1], 1)) / 1000;
                        B.va1 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.va2 = (todecimal(A[4], A[5], 1)) / 1000;
                        B.va3 = (todecimal(A[6], A[7], 1)) / 1000;
                        B.tva = (todecimal(A[8], A[9], 1)) / 1000;
                        B.var1 = (todecimal(A[10], A[11], 1)) / 1000;
                        B.var2 = (todecimal(A[12], A[13], 1)) / 1000;
                        B.var3 = (todecimal(A[14], A[15], 1)) / 1000;
                        B.tvar = (todecimal(A[16], A[17], 1)) / 1000;
                        A = modbusclient4.ReadHoldingRegisters(1554, 6);
                        B.pf1 = (A[0] * 0.01);
                        B.pf2 = (A[1] * 0.01);
                        B.pf3 = (A[2] * 0.01);
                        B.tpf = (A[3] * 0.01);
                        B.perc_w = (A[4] * 0.1);
                        B.perc_var = (A[5] * 0.1);
                        A = modbusclient4.ReadHoldingRegisters(1584, 2);
                        B.btw = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient4.ReadHoldingRegisters(1600, 2);
                        B.btvar = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient4.ReadHoldingRegisters(1798, 4);
                        B.ert = (todecimal(A[0], A[1], 1)) / 3600;
                        B.kwh = (todecimal(A[2], A[3], 0.1));
                        A = modbusclient4.ReadHoldingRegisters(1804, 6);
                        B.kvah = todecimal(A[0], A[1], 0.1);
                        B.kvarh = todecimal(A[2], A[3], 0.1);
                        B.starts = todecimal(A[4], A[5], 1);
                        B.dt = "op";
                        modbusclient4.Disconnect();
                        readflag = Insert(table, B);


                    }
                    catch (Exception ex)
                    {

                        ///// Connection lost determinaton /////
                        Packet_loss(ex);

                        if (check_conn > 2)
                        {
                            Character C = new Character();

                            C.status = 0;
                            C.op = 0;
                            C.ct = 0;
                            C.cav = 0;
                            C.ebv = 0;
                            C.rpm = 0;
                            C.gf = 0;
                            C.v1 = 0;
                            C.v2 = 0;
                            C.v3 = 0;
                            C.v12 = 0;
                            C.v23 = 0;
                            C.v31 = 0;
                            C.i1 = 0;
                            C.i2 = 0;
                            C.i3 = 0;
                            C.ie = 0;
                            C.w1 = 0;
                            C.w2 = 0;
                            C.w3 = 0;
                            C.bf = 0;
                            C.bv1 = 0;
                            C.bv2 = 0;
                            C.bv3 = 0;
                            C.bv12 = 0;
                            C.bv23 = 0;
                            C.bv31 = 0;
                            C.tw = 0;
                            C.va1 = 0;
                            C.va2 = 0;
                            C.va3 = 0;
                            C.tva = 0;
                            C.var1 = 0;
                            C.var2 = 0;
                            C.var3 = 0;
                            C.tvar = 0;
                            C.pf1 = 0;
                            C.pf2 = 0;
                            C.pf3 = 0;
                            C.tpf = 0;
                            C.perc_w = 0;
                            C.perc_var = 0;
                            C.btw = 0;
                            C.btvar = 0;
                            C.ert = 0;
                            C.kwh = 0;
                            C.kvah = 0;
                            C.kvarh = 0;
                            C.starts = 0;

                            readflag = Insert(table, C);
                        }
                        if (check_conn > 4)
                        {
                            MessageBox.Show(ex.Message);
                            ErrorLogging(ex);
                            status4 = false;
                            modbusclient4.Disconnect();
                            break;
                        }
                        check_conn++;
                    }

                    watch.Stop();
                    int d2 = Convert.ToInt32(watch.ElapsedMilliseconds);
                    g4t = d2;
                    //Console.WriteLine("Time Taken by " + table+" :"+d2+ " ms");
                    int d4 = (delay - d2);
                    if (d4 > 0)
                    { await Task.Delay(d4); }
                }
                else
                {
                    break;
                }
            }
            status4 = false;
        }

        public async void Getdata5(string table, bool status)
        {
            int check_conn=0;
            //if(status==true)
            //{
            //    gen1status.BackColor = Color.YellowGreen;
            //   // gen1status.Text = "On Status";
            for (int a = 0; a < iteration; a++)
            {
                if (status5 == true)
                {

                    var watch = new System.Diagnostics.Stopwatch();
                    watch.Start();

                    bool readflag = new bool();
                    try
                    {

                        modbusclient5.Connect();
                        check_conn = 0;
                        Character B = new Character()
                        { };
                        ///////// Reading Regsiters 

                        B.status = sts;
                        int[] A = modbusclient5.ReadHoldingRegisters(1024, 2);
                        B.op = A[0];
                        B.ct = A[1];
                        A = modbusclient5.ReadHoldingRegisters(1028, 4);
                        B.cav = (A[0] * 0.1);
                        B.ebv = (A[1] * 0.1);
                        B.rpm = A[2];
                        B.gf = (A[3] * 0.1);
                        A = modbusclient5.ReadHoldingRegisters(1033, 1);
                        B.v1 = (A[0] * 0.1);
                        A = modbusclient5.ReadHoldingRegisters(1035, 1);
                        B.v2 = (A[0] * 0.1);
                        A = modbusclient5.ReadHoldingRegisters(1037, 1);
                        B.v3 = (A[0] * 0.1);
                        A = modbusclient5.ReadHoldingRegisters(1039, 1);
                        B.v12 = (A[0] * 0.1);
                        A = modbusclient5.ReadHoldingRegisters(1041, 1);
                        B.v23 = (A[0] * 0.1);
                        A = modbusclient5.ReadHoldingRegisters(1043, 1);
                        B.v31 = (A[0] * 0.1);
                        A = modbusclient5.ReadHoldingRegisters(1045, 1);
                        B.i1 = (A[0] * 0.1);
                        A = modbusclient5.ReadHoldingRegisters(1047, 1);
                        B.i2 = (A[0] * 0.1);
                        A = modbusclient5.ReadHoldingRegisters(1049, 1);
                        B.i3 = (A[0] * 0.1);
                        A = modbusclient5.ReadHoldingRegisters(1051, 1);
                        B.ie = (A[0] * 0.1);
                        A = modbusclient5.ReadHoldingRegisters(1052, 6);
                        B.w1 = (todecimal(A[0], A[1], 1)) / 1000;
                        B.w2 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.w3 = (todecimal(A[4], A[5], 1)) / 1000;
                        A = modbusclient5.ReadHoldingRegisters(1091, 1);
                        B.bf = (A[0] * 0.1);
                        A = modbusclient5.ReadHoldingRegisters(1093, 1);
                        B.bv1 = (A[0] * 0.1);
                        A = modbusclient5.ReadHoldingRegisters(1095, 1);
                        B.bv2 = (A[0] * 0.1);
                        A = modbusclient5.ReadHoldingRegisters(1097, 1);
                        B.bv3 = (A[0] * 0.1);
                        A = modbusclient5.ReadHoldingRegisters(1099, 1);
                        B.bv12 = (A[0] * 0.1);
                        A = modbusclient5.ReadHoldingRegisters(1101, 1);
                        B.bv23 = (A[0] * 0.1);
                        A = modbusclient5.ReadHoldingRegisters(1103, 1);
                        B.bv31 = (A[0] * 0.1);
                        A = modbusclient5.ReadHoldingRegisters(1536, 18);
                        B.tw = (todecimal(A[0], A[1], 1)) / 1000;
                        B.va1 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.va2 = (todecimal(A[4], A[5], 1)) / 1000;
                        B.va3 = (todecimal(A[6], A[7], 1)) / 1000;
                        B.tva = (todecimal(A[8], A[9], 1)) / 1000;
                        B.var1 = (todecimal(A[10], A[11], 1)) / 1000;
                        B.var2 = (todecimal(A[12], A[13], 1)) / 1000;
                        B.var3 = (todecimal(A[14], A[15], 1)) / 1000;
                        B.tvar = (todecimal(A[16], A[17], 1)) / 1000;
                        A = modbusclient5.ReadHoldingRegisters(1554, 6);
                        B.pf1 = (A[0] * 0.01);
                        B.pf2 = (A[1] * 0.01);
                        B.pf3 = (A[2] * 0.01);
                        B.tpf = (A[3] * 0.01);
                        B.perc_w = (A[4] * 0.1);
                        B.perc_var = (A[5] * 0.1);
                        A = modbusclient5.ReadHoldingRegisters(1584, 2);
                        B.btw = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient5.ReadHoldingRegisters(1600, 2);
                        B.btvar = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient5.ReadHoldingRegisters(1798, 4);
                        B.ert = (todecimal(A[0], A[1], 1)) / 3600;
                        B.kwh = (todecimal(A[2], A[3], 0.1));
                        A = modbusclient5.ReadHoldingRegisters(1804, 6);
                        B.kvah = todecimal(A[0], A[1], 0.1);
                        B.kvarh = todecimal(A[2], A[3], 0.1);
                        B.starts = todecimal(A[4], A[5], 1);
                        B.dt = "op";
                        modbusclient5.Disconnect();
                        readflag = Insert(table, B);

                    }
                    catch (Exception ex)
                    {

                        ///// Connection lost determinaton /////
                        Packet_loss(ex);

                        if (check_conn > 2)
                        {
                            Character C = new Character();

                            C.status = 0;
                            C.op = 0;
                            C.ct = 0;
                            C.cav = 0;
                            C.ebv = 0;
                            C.rpm = 0;
                            C.gf = 0;
                            C.v1 = 0;
                            C.v2 = 0;
                            C.v3 = 0;
                            C.v12 = 0;
                            C.v23 = 0;
                            C.v31 = 0;
                            C.i1 = 0;
                            C.i2 = 0;
                            C.i3 = 0;
                            C.ie = 0;
                            C.w1 = 0;
                            C.w2 = 0;
                            C.w3 = 0;
                            C.bf = 0;
                            C.bv1 = 0;
                            C.bv2 = 0;
                            C.bv3 = 0;
                            C.bv12 = 0;
                            C.bv23 = 0;
                            C.bv31 = 0;
                            C.tw = 0;
                            C.va1 = 0;
                            C.va2 = 0;
                            C.va3 = 0;
                            C.tva = 0;
                            C.var1 = 0;
                            C.var2 = 0;
                            C.var3 = 0;
                            C.tvar = 0;
                            C.pf1 = 0;
                            C.pf2 = 0;
                            C.pf3 = 0;
                            C.tpf = 0;
                            C.perc_w = 0;
                            C.perc_var = 0;
                            C.btw = 0;
                            C.btvar = 0;
                            C.ert = 0;
                            C.kwh = 0;
                            C.kvah = 0;
                            C.kvarh = 0;
                            C.starts = 0;

                            readflag = Insert(table, C);
                        }
                        if (check_conn > 4)
                        {
                            MessageBox.Show(ex.Message);
                            ErrorLogging(ex);
                            status1 = false;
                            modbusclient5.Disconnect();
                            break;
                        }
                        check_conn++;

                    }

                    watch.Stop();
                    int d2 = Convert.ToInt32(watch.ElapsedMilliseconds);
                    g5t = d2;
                    int d4 = (delay - d2);
                    if (d4 > 0)
                    { await Task.Delay(d4); }
                    
                }
                else
                {
                    break;
                }
            }
            status5 = false;
            // }                                    
        }

        public async void Getdata6(string table, bool status  )
        { 
            int check_conn = 0;

            for (int a = 0; a < iteration; a++)
            {
                if (status6 == true)
                {

                    var watch = new System.Diagnostics.Stopwatch();
                    watch.Start();

                    bool readflag = new bool();
                    try
                    {

                        modbusclient6.Connect();
                        check_conn = 0;
                        Character B = new Character()
                        { };
                        ///////// Reading Regsiters 

                        B.status = sts;
                        int[] A = modbusclient6.ReadHoldingRegisters(1024, 2);
                        B.op = A[0];
                        B.ct = A[1];
                        A = modbusclient6.ReadHoldingRegisters(1028, 4);
                        B.cav = (A[0] * 0.1);
                        B.ebv = (A[1] * 0.1);
                        B.rpm = A[2];
                        B.gf = (A[3] * 0.1);
                        A = modbusclient6.ReadHoldingRegisters(1033, 1);
                        B.v1 = (A[0] * 0.1);
                        A = modbusclient6.ReadHoldingRegisters(1035, 1);
                        B.v2 = (A[0] * 0.1);
                        A = modbusclient6.ReadHoldingRegisters(1037, 1);
                        B.v3 = (A[0] * 0.1);
                        A = modbusclient6.ReadHoldingRegisters(1039, 1);
                        B.v12 = (A[0] * 0.1);
                        A = modbusclient6.ReadHoldingRegisters(1041, 1);
                        B.v23 = (A[0] * 0.1);
                        A = modbusclient6.ReadHoldingRegisters(1043, 1);
                        B.v31 = (A[0] * 0.1);
                        A = modbusclient6.ReadHoldingRegisters(1045, 1);
                        B.i1 = (A[0] * 0.1);
                        A = modbusclient6.ReadHoldingRegisters(1047, 1);
                        B.i2 = (A[0] * 0.1);
                        A = modbusclient6.ReadHoldingRegisters(1049, 1);
                        B.i3 = (A[0] * 0.1);
                        A = modbusclient6.ReadHoldingRegisters(1051, 1);
                        B.ie = (A[0] * 0.1);
                        A = modbusclient6.ReadHoldingRegisters(1052, 6);
                        B.w1 = (todecimal(A[0], A[1], 1)) / 1000;
                        B.w2 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.w3 = (todecimal(A[4], A[5], 1)) / 1000;
                        A = modbusclient6.ReadHoldingRegisters(1091, 1);
                        B.bf = (A[0] * 0.1);
                        A = modbusclient6.ReadHoldingRegisters(1093, 1);
                        B.bv1 = (A[0] * 0.1);
                        A = modbusclient6.ReadHoldingRegisters(1095, 1);
                        B.bv2 = (A[0] * 0.1);
                        A = modbusclient6.ReadHoldingRegisters(1097, 1);
                        B.bv3 = (A[0] * 0.1);
                        A = modbusclient6.ReadHoldingRegisters(1099, 1);
                        B.bv12 = (A[0] * 0.1);
                        A = modbusclient6.ReadHoldingRegisters(1101, 1);
                        B.bv23 = (A[0] * 0.1);
                        A = modbusclient6.ReadHoldingRegisters(1103, 1);
                        B.bv31 = (A[0] * 0.1);
                        A = modbusclient6.ReadHoldingRegisters(1536, 18);
                        B.tw = (todecimal(A[0], A[1], 1)) / 1000;
                        B.va1 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.va2 = (todecimal(A[4], A[5], 1)) / 1000;
                        B.va3 = (todecimal(A[6], A[7], 1)) / 1000;
                        B.tva = (todecimal(A[8], A[9], 1)) / 1000;
                        B.var1 = (todecimal(A[10], A[11], 1)) / 1000;
                        B.var2 = (todecimal(A[12], A[13], 1)) / 1000;
                        B.var3 = (todecimal(A[14], A[15], 1)) / 1000;
                        B.tvar = (todecimal(A[16], A[17], 1)) / 1000;
                        A = modbusclient6.ReadHoldingRegisters(1554, 6);
                        B.pf1 = (A[0] * 0.01);
                        B.pf2 = (A[1] * 0.01);
                        B.pf3 = (A[2] * 0.01);
                        B.tpf = (A[3] * 0.01);
                        B.perc_w = (A[4] * 0.1);
                        B.perc_var = (A[5] * 0.1);
                        A = modbusclient6.ReadHoldingRegisters(1584, 2);
                        B.btw = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient6.ReadHoldingRegisters(1600, 2);
                        B.btvar = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient6.ReadHoldingRegisters(1798, 4);
                        B.ert = (todecimal(A[0], A[1], 1)) / 3600;
                        B.kwh = (todecimal(A[2], A[3], 0.1));
                        A = modbusclient6.ReadHoldingRegisters(1804, 6);
                        B.kvah = todecimal(A[0], A[1], 0.1);
                        B.kvarh = todecimal(A[2], A[3], 0.1);
                        B.starts = todecimal(A[4], A[5], 1);
                        B.dt = "op";
                        modbusclient6.Disconnect();
                        readflag = Insert(table, B);


                    }
                    catch (Exception ex)
                    {

                        ///// Connection lost determinaton /////
                        Packet_loss(ex);

                        if (check_conn > 2)
                        {
                            Character C = new Character();

                            C.status = 0;
                            C.op = 0;
                            C.ct = 0;
                            C.cav = 0;
                            C.ebv = 0;
                            C.rpm = 0;
                            C.gf = 0;
                            C.v1 = 0;
                            C.v2 = 0;
                            C.v3 = 0;
                            C.v12 = 0;
                            C.v23 = 0;
                            C.v31 = 0;
                            C.i1 = 0;
                            C.i2 = 0;
                            C.i3 = 0;
                            C.ie = 0;
                            C.w1 = 0;
                            C.w2 = 0;
                            C.w3 = 0;
                            C.bf = 0;
                            C.bv1 = 0;
                            C.bv2 = 0;
                            C.bv3 = 0;
                            C.bv12 = 0;
                            C.bv23 = 0;
                            C.bv31 = 0;
                            C.tw = 0;
                            C.va1 = 0;
                            C.va2 = 0;
                            C.va3 = 0;
                            C.tva = 0;
                            C.var1 = 0;
                            C.var2 = 0;
                            C.var3 = 0;
                            C.tvar = 0;
                            C.pf1 = 0;
                            C.pf2 = 0;
                            C.pf3 = 0;
                            C.tpf = 0;
                            C.perc_w = 0;
                            C.perc_var = 0;
                            C.btw = 0;
                            C.btvar = 0;
                            C.ert = 0;
                            C.kwh = 0;
                            C.kvah = 0;
                            C.kvarh = 0;
                            C.starts = 0;

                            readflag = Insert(table, C);
                        }
                        if (check_conn > 4)
                        {
                            MessageBox.Show(ex.Message);
                            ErrorLogging(ex);
                            status6 = false;
                            modbusclient6.Disconnect();
                            break;
                        }
                        check_conn++;
                    }

                    watch.Stop();
                    int d2 = Convert.ToInt32(watch.ElapsedMilliseconds);
                    g6t = d2;
                    //Console.WriteLine("Time Taken by " + table+" :"+d2+ " ms");
                    int d4 = (delay - d2);
                    if (d4 > 0)
                    { await Task.Delay(d4); }
                }
                else
                {
                    break;
                }
            }
            status6 = false;
        }
        public async void Getdata7(string table, bool status  )
        {
            int check_conn = 0;

            for (int a = 0; a < iteration; a++)
            {
                if (status7 == true)
                {

                    var watch = new System.Diagnostics.Stopwatch();
                    watch.Start();

                    bool readflag = new bool();
                    try
                    {

                        modbusclient7.Connect();
                        check_conn = 0;
                        Character B = new Character()
                        { };
                        ///////// Reading Regsiters 

                        B.status = sts;
                        int[] A = modbusclient7.ReadHoldingRegisters(1024, 2);
                        B.op = A[0];
                        B.ct = A[1];
                        A = modbusclient7.ReadHoldingRegisters(1028, 4);
                        B.cav = (A[0] * 0.1);
                        B.ebv = (A[1] * 0.1);
                        B.rpm = A[2];
                        B.gf = (A[3] * 0.1);
                        A = modbusclient7.ReadHoldingRegisters(1033, 1);
                        B.v1 = (A[0] * 0.1);
                        A = modbusclient7.ReadHoldingRegisters(1035, 1);
                        B.v2 = (A[0] * 0.1);
                        A = modbusclient7.ReadHoldingRegisters(1037, 1);
                        B.v3 = (A[0] * 0.1);
                        A = modbusclient7.ReadHoldingRegisters(1039, 1);
                        B.v12 = (A[0] * 0.1);
                        A = modbusclient7.ReadHoldingRegisters(1041, 1);
                        B.v23 = (A[0] * 0.1);
                        A = modbusclient7.ReadHoldingRegisters(1043, 1);
                        B.v31 = (A[0] * 0.1);
                        A = modbusclient7.ReadHoldingRegisters(1045, 1);
                        B.i1 = (A[0] * 0.1);
                        A = modbusclient7.ReadHoldingRegisters(1047, 1);
                        B.i2 = (A[0] * 0.1);
                        A = modbusclient7.ReadHoldingRegisters(1049, 1);
                        B.i3 = (A[0] * 0.1);
                        A = modbusclient7.ReadHoldingRegisters(1051, 1);
                        B.ie = (A[0] * 0.1);
                        A = modbusclient7.ReadHoldingRegisters(1052, 6);
                        B.w1 = (todecimal(A[0], A[1], 1)) / 1000;
                        B.w2 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.w3 = (todecimal(A[4], A[5], 1)) / 1000;
                        A = modbusclient7.ReadHoldingRegisters(1091, 1);
                        B.bf = (A[0] * 0.1);
                        A = modbusclient7.ReadHoldingRegisters(1093, 1);
                        B.bv1 = (A[0] * 0.1);
                        A = modbusclient7.ReadHoldingRegisters(1095, 1);
                        B.bv2 = (A[0] * 0.1);
                        A = modbusclient7.ReadHoldingRegisters(1097, 1);
                        B.bv3 = (A[0] * 0.1);
                        A = modbusclient7.ReadHoldingRegisters(1099, 1);
                        B.bv12 = (A[0] * 0.1);
                        A = modbusclient7.ReadHoldingRegisters(1101, 1);
                        B.bv23 = (A[0] * 0.1);
                        A = modbusclient7.ReadHoldingRegisters(1103, 1);
                        B.bv31 = (A[0] * 0.1);
                        A = modbusclient7.ReadHoldingRegisters(1536, 18);
                        B.tw = (todecimal(A[0], A[1], 1)) / 1000;
                        B.va1 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.va2 = (todecimal(A[4], A[5], 1)) / 1000;
                        B.va3 = (todecimal(A[6], A[7], 1)) / 1000;
                        B.tva = (todecimal(A[8], A[9], 1)) / 1000;
                        B.var1 = (todecimal(A[10], A[11], 1)) / 1000;
                        B.var2 = (todecimal(A[12], A[13], 1)) / 1000;
                        B.var3 = (todecimal(A[14], A[15], 1)) / 1000;
                        B.tvar = (todecimal(A[16], A[17], 1)) / 1000;
                        A = modbusclient7.ReadHoldingRegisters(1554, 6);
                        B.pf1 = (A[0] * 0.01);
                        B.pf2 = (A[1] * 0.01);
                        B.pf3 = (A[2] * 0.01);
                        B.tpf = (A[3] * 0.01);
                        B.perc_w = (A[4] * 0.1);
                        B.perc_var = (A[5] * 0.1);
                        A = modbusclient7.ReadHoldingRegisters(1584, 2);
                        B.btw = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient7.ReadHoldingRegisters(1600, 2);
                        B.btvar = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient7.ReadHoldingRegisters(1798, 4);
                        B.ert = (todecimal(A[0], A[1], 1)) / 3600;
                        B.kwh = (todecimal(A[2], A[3], 0.1));
                        A = modbusclient7.ReadHoldingRegisters(1804, 6);
                        B.kvah = todecimal(A[0], A[1], 0.1);
                        B.kvarh = todecimal(A[2], A[3], 0.1);
                        B.starts = todecimal(A[4], A[5], 1);
                        B.dt = "op";
                        modbusclient7.Disconnect();
                        readflag = Insert(table, B);


                    }
                    catch (Exception ex)
                    {

                        ///// Connection lost determinaton /////
                        Packet_loss(ex);

                        if (check_conn > 2)
                        {
                            Character C = new Character();

                            C.status = 0;
                            C.op = 0;
                            C.ct = 0;
                            C.cav = 0;
                            C.ebv = 0;
                            C.rpm = 0;
                            C.gf = 0;
                            C.v1 = 0;
                            C.v2 = 0;
                            C.v3 = 0;
                            C.v12 = 0;
                            C.v23 = 0;
                            C.v31 = 0;
                            C.i1 = 0;
                            C.i2 = 0;
                            C.i3 = 0;
                            C.ie = 0;
                            C.w1 = 0;
                            C.w2 = 0;
                            C.w3 = 0;
                            C.bf = 0;
                            C.bv1 = 0;
                            C.bv2 = 0;
                            C.bv3 = 0;
                            C.bv12 = 0;
                            C.bv23 = 0;
                            C.bv31 = 0;
                            C.tw = 0;
                            C.va1 = 0;
                            C.va2 = 0;
                            C.va3 = 0;
                            C.tva = 0;
                            C.var1 = 0;
                            C.var2 = 0;
                            C.var3 = 0;
                            C.tvar = 0;
                            C.pf1 = 0;
                            C.pf2 = 0;
                            C.pf3 = 0;
                            C.tpf = 0;
                            C.perc_w = 0;
                            C.perc_var = 0;
                            C.btw = 0;
                            C.btvar = 0;
                            C.ert = 0;
                            C.kwh = 0;
                            C.kvah = 0;
                            C.kvarh = 0;
                            C.starts = 0;

                            readflag = Insert(table, C);
                        }
                        if (check_conn > 4)
                        {
                            MessageBox.Show(ex.Message);
                            ErrorLogging(ex);
                            status7 = false;
                            modbusclient7.Disconnect();
                            break;
                        }
                        check_conn++;
                    }

                    watch.Stop();
                    int d2 = Convert.ToInt32(watch.ElapsedMilliseconds);
                    g7t = d2;
                    //Console.WriteLine("Time Taken by " + table+" :"+d2+ " ms");
                    int d4 = (delay - d2);
                    if (d4 > 0)
                    { await Task.Delay(d4); }
                }
                else
                {
                    break;
                }
            }
            status7 = false;
        }
        public async void Getdata8(string table, bool status )
        {
            int check_conn = 0;

            for (int a = 0; a < iteration; a++)
            {
                if (status8 == true)
                {

                    var watch = new System.Diagnostics.Stopwatch();
                    watch.Start();

                    bool readflag = new bool();
                    try
                    {

                        modbusclient8.Connect();
                        check_conn = 0;
                        Character B = new Character()
                        { };
                        ///////// Reading Regsiters 

                        B.status = sts;
                        int[] A = modbusclient8.ReadHoldingRegisters(1024, 2);
                        B.op = A[0];
                        B.ct = A[1];
                        A = modbusclient8.ReadHoldingRegisters(1028, 4);
                        B.cav = (A[0] * 0.1);
                        B.ebv = (A[1] * 0.1);
                        B.rpm = A[2];
                        B.gf = (A[3] * 0.1);
                        A = modbusclient8.ReadHoldingRegisters(1033, 1);
                        B.v1 = (A[0] * 0.1);
                        A = modbusclient8.ReadHoldingRegisters(1035, 1);
                        B.v2 = (A[0] * 0.1);
                        A = modbusclient8.ReadHoldingRegisters(1037, 1);
                        B.v3 = (A[0] * 0.1);
                        A = modbusclient8.ReadHoldingRegisters(1039, 1);
                        B.v12 = (A[0] * 0.1);
                        A = modbusclient8.ReadHoldingRegisters(1041, 1);
                        B.v23 = (A[0] * 0.1);
                        A = modbusclient8.ReadHoldingRegisters(1043, 1);
                        B.v31 = (A[0] * 0.1);
                        A = modbusclient8.ReadHoldingRegisters(1045, 1);
                        B.i1 = (A[0] * 0.1);
                        A = modbusclient8.ReadHoldingRegisters(1047, 1);
                        B.i2 = (A[0] * 0.1);
                        A = modbusclient8.ReadHoldingRegisters(1049, 1);
                        B.i3 = (A[0] * 0.1);
                        A = modbusclient8.ReadHoldingRegisters(1051, 1);
                        B.ie = (A[0] * 0.1);
                        A = modbusclient8.ReadHoldingRegisters(1052, 6);
                        B.w1 = (todecimal(A[0], A[1], 1)) / 1000;
                        B.w2 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.w3 = (todecimal(A[4], A[5], 1)) / 1000;
                        A = modbusclient8.ReadHoldingRegisters(1091, 1);
                        B.bf = (A[0] * 0.1);
                        A = modbusclient8.ReadHoldingRegisters(1093, 1);
                        B.bv1 = (A[0] * 0.1);
                        A = modbusclient8.ReadHoldingRegisters(1095, 1);
                        B.bv2 = (A[0] * 0.1);
                        A = modbusclient8.ReadHoldingRegisters(1097, 1);
                        B.bv3 = (A[0] * 0.1);
                        A = modbusclient8.ReadHoldingRegisters(1099, 1);
                        B.bv12 = (A[0] * 0.1);
                        A = modbusclient8.ReadHoldingRegisters(1101, 1);
                        B.bv23 = (A[0] * 0.1);
                        A = modbusclient8.ReadHoldingRegisters(1103, 1);
                        B.bv31 = (A[0] * 0.1);
                        A = modbusclient8.ReadHoldingRegisters(1536, 18);
                        B.tw = (todecimal(A[0], A[1], 1)) / 1000;
                        B.va1 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.va2 = (todecimal(A[4], A[5], 1)) / 1000;
                        B.va3 = (todecimal(A[6], A[7], 1)) / 1000;
                        B.tva = (todecimal(A[8], A[9], 1)) / 1000;
                        B.var1 = (todecimal(A[10], A[11], 1)) / 1000;
                        B.var2 = (todecimal(A[12], A[13], 1)) / 1000;
                        B.var3 = (todecimal(A[14], A[15], 1)) / 1000;
                        B.tvar = (todecimal(A[16], A[17], 1)) / 1000;
                        A = modbusclient8.ReadHoldingRegisters(1554, 6);
                        B.pf1 = (A[0] * 0.01);
                        B.pf2 = (A[1] * 0.01);
                        B.pf3 = (A[2] * 0.01);
                        B.tpf = (A[3] * 0.01);
                        B.perc_w = (A[4] * 0.1);
                        B.perc_var = (A[5] * 0.1);
                        A = modbusclient8.ReadHoldingRegisters(1584, 2);
                        B.btw = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient8.ReadHoldingRegisters(1600, 2);
                        B.btvar = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient8.ReadHoldingRegisters(1798, 4);
                        B.ert = (todecimal(A[0], A[1], 1)) / 3600;
                        B.kwh = (todecimal(A[2], A[3], 0.1));
                        A = modbusclient8.ReadHoldingRegisters(1804, 6);
                        B.kvah = todecimal(A[0], A[1], 0.1);
                        B.kvarh = todecimal(A[2], A[3], 0.1);
                        B.starts = todecimal(A[4], A[5], 1);
                        B.dt = "op";
                        modbusclient8.Disconnect();
                        readflag = Insert(table, B);


                    }
                    catch (Exception ex)
                    {

                        ///// Connection lost determinaton /////
                        Packet_loss(ex);

                        if (check_conn > 2)
                        {
                            Character C = new Character();

                            C.status = 0;
                            C.op = 0;
                            C.ct = 0;
                            C.cav = 0;
                            C.ebv = 0;
                            C.rpm = 0;
                            C.gf = 0;
                            C.v1 = 0;
                            C.v2 = 0;
                            C.v3 = 0;
                            C.v12 = 0;
                            C.v23 = 0;
                            C.v31 = 0;
                            C.i1 = 0;
                            C.i2 = 0;
                            C.i3 = 0;
                            C.ie = 0;
                            C.w1 = 0;
                            C.w2 = 0;
                            C.w3 = 0;
                            C.bf = 0;
                            C.bv1 = 0;
                            C.bv2 = 0;
                            C.bv3 = 0;
                            C.bv12 = 0;
                            C.bv23 = 0;
                            C.bv31 = 0;
                            C.tw = 0;
                            C.va1 = 0;
                            C.va2 = 0;
                            C.va3 = 0;
                            C.tva = 0;
                            C.var1 = 0;
                            C.var2 = 0;
                            C.var3 = 0;
                            C.tvar = 0;
                            C.pf1 = 0;
                            C.pf2 = 0;
                            C.pf3 = 0;
                            C.tpf = 0;
                            C.perc_w = 0;
                            C.perc_var = 0;
                            C.btw = 0;
                            C.btvar = 0;
                            C.ert = 0;
                            C.kwh = 0;
                            C.kvah = 0;
                            C.kvarh = 0;
                            C.starts = 0;

                            readflag = Insert(table, C);
                        }
                        if (check_conn > 4)
                        {
                            MessageBox.Show(ex.Message);
                            ErrorLogging(ex);
                            status8 = false;
                            modbusclient8.Disconnect();
                            break;
                        }
                        check_conn++;
                    }

                    watch.Stop();
                    int d2 = Convert.ToInt32(watch.ElapsedMilliseconds);
                    g8t = d2;
                    //Console.WriteLine("Time Taken by " + table+" :"+d2+ " ms");
                    int d4 = (delay - d2);
                    if (d4 > 0)
                    { await Task.Delay(d4); }
                }
                else
                {
                    break;
                }
            }
            status8 = false;
        }

        public async void Getdata9(string table, bool status  )
        { 
            int check_conn = 0;

            for (int a = 0; a < iteration; a++)
            {
                if (status9 == true)
                {

                    var watch = new System.Diagnostics.Stopwatch();
                    watch.Start();

                    bool readflag = new bool();
                    try
                    {

                        modbusclient9.Connect();
                        check_conn = 0;
                        Character B = new Character()
                        { };
                        ///////// Reading Regsiters 

                        B.status = sts;
                        int[] A = modbusclient9.ReadHoldingRegisters(1024, 2);
                        B.op = A[0];
                        B.ct = A[1];
                        A = modbusclient9.ReadHoldingRegisters(1028, 4);
                        B.cav = (A[0] * 0.1);
                        B.ebv = (A[1] * 0.1);
                        B.rpm = A[2];
                        B.gf = (A[3] * 0.1);
                        A = modbusclient9.ReadHoldingRegisters(1033, 1);
                        B.v1 = (A[0] * 0.1);
                        A = modbusclient9.ReadHoldingRegisters(1035, 1);
                        B.v2 = (A[0] * 0.1);
                        A = modbusclient9.ReadHoldingRegisters(1037, 1);
                        B.v3 = (A[0] * 0.1);
                        A = modbusclient9.ReadHoldingRegisters(1039, 1);
                        B.v12 = (A[0] * 0.1);
                        A = modbusclient9.ReadHoldingRegisters(1041, 1);
                        B.v23 = (A[0] * 0.1);
                        A = modbusclient9.ReadHoldingRegisters(1043, 1);
                        B.v31 = (A[0] * 0.1);
                        A = modbusclient9.ReadHoldingRegisters(1045, 1);
                        B.i1 = (A[0] * 0.1);
                        A = modbusclient9.ReadHoldingRegisters(1047, 1);
                        B.i2 = (A[0] * 0.1);
                        A = modbusclient9.ReadHoldingRegisters(1049, 1);
                        B.i3 = (A[0] * 0.1);
                        A = modbusclient9.ReadHoldingRegisters(1051, 1);
                        B.ie = (A[0] * 0.1);
                        A = modbusclient9.ReadHoldingRegisters(1052, 6);
                        B.w1 = (todecimal(A[0], A[1], 1)) / 1000;
                        B.w2 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.w3 = (todecimal(A[4], A[5], 1)) / 1000;
                        A = modbusclient9.ReadHoldingRegisters(1091, 1);
                        B.bf = (A[0] * 0.1);
                        A = modbusclient9.ReadHoldingRegisters(1093, 1);
                        B.bv1 = (A[0] * 0.1);
                        A = modbusclient9.ReadHoldingRegisters(1095, 1);
                        B.bv2 = (A[0] * 0.1);
                        A = modbusclient9.ReadHoldingRegisters(1097, 1);
                        B.bv3 = (A[0] * 0.1);
                        A = modbusclient9.ReadHoldingRegisters(1099, 1);
                        B.bv12 = (A[0] * 0.1);
                        A = modbusclient9.ReadHoldingRegisters(1101, 1);
                        B.bv23 = (A[0] * 0.1);
                        A = modbusclient9.ReadHoldingRegisters(1103, 1);
                        B.bv31 = (A[0] * 0.1);
                        A = modbusclient9.ReadHoldingRegisters(1536, 18);
                        B.tw = (todecimal(A[0], A[1], 1)) / 1000;
                        B.va1 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.va2 = (todecimal(A[4], A[5], 1)) / 1000;
                        B.va3 = (todecimal(A[6], A[7], 1)) / 1000;
                        B.tva = (todecimal(A[8], A[9], 1)) / 1000;
                        B.var1 = (todecimal(A[10], A[11], 1)) / 1000;
                        B.var2 = (todecimal(A[12], A[13], 1)) / 1000;
                        B.var3 = (todecimal(A[14], A[15], 1)) / 1000;
                        B.tvar = (todecimal(A[16], A[17], 1)) / 1000;
                        A = modbusclient9.ReadHoldingRegisters(1554, 6);
                        B.pf1 = (A[0] * 0.01);
                        B.pf2 = (A[1] * 0.01);
                        B.pf3 = (A[2] * 0.01);
                        B.tpf = (A[3] * 0.01);
                        B.perc_w = (A[4] * 0.1);
                        B.perc_var = (A[5] * 0.1);
                        A = modbusclient9.ReadHoldingRegisters(1584, 2);
                        B.btw = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient9.ReadHoldingRegisters(1600, 2);
                        B.btvar = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient9.ReadHoldingRegisters(1798, 4);
                        B.ert = (todecimal(A[0], A[1], 1)) / 3600;
                        B.kwh = (todecimal(A[2], A[3], 0.1));
                        A = modbusclient9.ReadHoldingRegisters(1804, 6);
                        B.kvah = todecimal(A[0], A[1], 0.1);
                        B.kvarh = todecimal(A[2], A[3], 0.1);
                        B.starts = todecimal(A[4], A[5], 1);
                        B.dt = "op";
                        modbusclient9.Disconnect();
                        readflag = Insert(table, B);


                    }
                    catch (Exception ex)
                    {

                        ///// Connection lost determinaton /////
                        Packet_loss(ex);

                        if (check_conn > 2)
                        {
                            Character C = new Character();

                            C.status = 0;
                            C.op = 0;
                            C.ct = 0;
                            C.cav = 0;
                            C.ebv = 0;
                            C.rpm = 0;
                            C.gf = 0;
                            C.v1 = 0;
                            C.v2 = 0;
                            C.v3 = 0;
                            C.v12 = 0;
                            C.v23 = 0;
                            C.v31 = 0;
                            C.i1 = 0;
                            C.i2 = 0;
                            C.i3 = 0;
                            C.ie = 0;
                            C.w1 = 0;
                            C.w2 = 0;
                            C.w3 = 0;
                            C.bf = 0;
                            C.bv1 = 0;
                            C.bv2 = 0;
                            C.bv3 = 0;
                            C.bv12 = 0;
                            C.bv23 = 0;
                            C.bv31 = 0;
                            C.tw = 0;
                            C.va1 = 0;
                            C.va2 = 0;
                            C.va3 = 0;
                            C.tva = 0;
                            C.var1 = 0;
                            C.var2 = 0;
                            C.var3 = 0;
                            C.tvar = 0;
                            C.pf1 = 0;
                            C.pf2 = 0;
                            C.pf3 = 0;
                            C.tpf = 0;
                            C.perc_w = 0;
                            C.perc_var = 0;
                            C.btw = 0;
                            C.btvar = 0;
                            C.ert = 0;
                            C.kwh = 0;
                            C.kvah = 0;
                            C.kvarh = 0;
                            C.starts = 0;

                            readflag = Insert(table, C);
                        }
                        if (check_conn > 4)
                        {
                            MessageBox.Show(ex.Message);
                            ErrorLogging(ex);
                            status9 = false;
                            modbusclient9.Disconnect();
                            break;
                        }
                        check_conn++;
                    }

                    watch.Stop();
                    int d2 = Convert.ToInt32(watch.ElapsedMilliseconds);
                    g9t = d2;
                    //Console.WriteLine("Time Taken by " + table+" :"+d2+ " ms");
                    int d4 = (delay - d2);
                    if (d4 > 0)
                    { await Task.Delay(d4); }
                }
                else
                {
                    break;
                }
            }
            status9 = false;
        }
        public async void Getdata10(string table, bool status  )
        {
            int check_conn = 0;

            for (int a = 0; a < iteration; a++)
            {
                if (status10 == true)
                {

                    var watch = new System.Diagnostics.Stopwatch();
                    watch.Start();

                    bool readflag = new bool();
                    try
                    {

                        modbusclient10.Connect();
                        check_conn = 0;
                        Character B = new Character()
                        { };
                        ///////// Reading Regsiters 

                        B.status = sts;
                        int[] A = modbusclient10.ReadHoldingRegisters(1024, 2);
                        B.op = A[0];
                        B.ct = A[1];
                        A = modbusclient10.ReadHoldingRegisters(1028, 4);
                        B.cav = (A[0] * 0.1);
                        B.ebv = (A[1] * 0.1);
                        B.rpm = A[2];
                        B.gf = (A[3] * 0.1);
                        A = modbusclient10.ReadHoldingRegisters(1033, 1);
                        B.v1 = (A[0] * 0.1);
                        A = modbusclient10.ReadHoldingRegisters(1035, 1);
                        B.v2 = (A[0] * 0.1);
                        A = modbusclient10.ReadHoldingRegisters(1037, 1);
                        B.v3 = (A[0] * 0.1);
                        A = modbusclient10.ReadHoldingRegisters(1039, 1);
                        B.v12 = (A[0] * 0.1);
                        A = modbusclient10.ReadHoldingRegisters(1041, 1);
                        B.v23 = (A[0] * 0.1);
                        A = modbusclient10.ReadHoldingRegisters(1043, 1);
                        B.v31 = (A[0] * 0.1);
                        A = modbusclient10.ReadHoldingRegisters(1045, 1);
                        B.i1 = (A[0] * 0.1);
                        A = modbusclient10.ReadHoldingRegisters(1047, 1);
                        B.i2 = (A[0] * 0.1);
                        A = modbusclient10.ReadHoldingRegisters(1049, 1);
                        B.i3 = (A[0] * 0.1);
                        A = modbusclient10.ReadHoldingRegisters(1051, 1);
                        B.ie = (A[0] * 0.1);
                        A = modbusclient10.ReadHoldingRegisters(1052, 6);
                        B.w1 = (todecimal(A[0], A[1], 1)) / 1000;
                        B.w2 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.w3 = (todecimal(A[4], A[5], 1)) / 1000;
                        A = modbusclient10.ReadHoldingRegisters(1091, 1);
                        B.bf = (A[0] * 0.1);
                        A = modbusclient10.ReadHoldingRegisters(1093, 1);
                        B.bv1 = (A[0] * 0.1);
                        A = modbusclient10.ReadHoldingRegisters(1095, 1);
                        B.bv2 = (A[0] * 0.1);
                        A = modbusclient10.ReadHoldingRegisters(1097, 1);
                        B.bv3 = (A[0] * 0.1);
                        A = modbusclient10.ReadHoldingRegisters(1099, 1);
                        B.bv12 = (A[0] * 0.1);
                        A = modbusclient10.ReadHoldingRegisters(1101, 1);
                        B.bv23 = (A[0] * 0.1);
                        A = modbusclient10.ReadHoldingRegisters(1103, 1);
                        B.bv31 = (A[0] * 0.1);
                        A = modbusclient10.ReadHoldingRegisters(1536, 18);
                        B.tw = (todecimal(A[0], A[1], 1)) / 1000;
                        B.va1 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.va2 = (todecimal(A[4], A[5], 1)) / 1000;
                        B.va3 = (todecimal(A[6], A[7], 1)) / 1000;
                        B.tva = (todecimal(A[8], A[9], 1)) / 1000;
                        B.var1 = (todecimal(A[10], A[11], 1)) / 1000;
                        B.var2 = (todecimal(A[12], A[13], 1)) / 1000;
                        B.var3 = (todecimal(A[14], A[15], 1)) / 1000;
                        B.tvar = (todecimal(A[16], A[17], 1)) / 1000;
                        A = modbusclient10.ReadHoldingRegisters(1554, 6);
                        B.pf1 = (A[0] * 0.01);
                        B.pf2 = (A[1] * 0.01);
                        B.pf3 = (A[2] * 0.01);
                        B.tpf = (A[3] * 0.01);
                        B.perc_w = (A[4] * 0.1);
                        B.perc_var = (A[5] * 0.1);
                        A = modbusclient10.ReadHoldingRegisters(1584, 2);
                        B.btw = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient10.ReadHoldingRegisters(1600, 2);
                        B.btvar = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient10.ReadHoldingRegisters(1798, 4);
                        B.ert = (todecimal(A[0], A[1], 1)) / 3600;
                        B.kwh = (todecimal(A[2], A[3], 0.1));
                        A = modbusclient10.ReadHoldingRegisters(1804, 6);
                        B.kvah = todecimal(A[0], A[1], 0.1);
                        B.kvarh = todecimal(A[2], A[3], 0.1);
                        B.starts = todecimal(A[4], A[5], 1);
                        B.dt = "op";
                        modbusclient10.Disconnect();
                        readflag = Insert(table, B);


                    }
                    catch (Exception ex)
                    {

                        ///// Connection lost determinaton /////
                        Packet_loss(ex);

                        if (check_conn > 2)
                        {
                            Character C = new Character();

                            C.status = 0;
                            C.op = 0;
                            C.ct = 0;
                            C.cav = 0;
                            C.ebv = 0;
                            C.rpm = 0;
                            C.gf = 0;
                            C.v1 = 0;
                            C.v2 = 0;
                            C.v3 = 0;
                            C.v12 = 0;
                            C.v23 = 0;
                            C.v31 = 0;
                            C.i1 = 0;
                            C.i2 = 0;
                            C.i3 = 0;
                            C.ie = 0;
                            C.w1 = 0;
                            C.w2 = 0;
                            C.w3 = 0;
                            C.bf = 0;
                            C.bv1 = 0;
                            C.bv2 = 0;
                            C.bv3 = 0;
                            C.bv12 = 0;
                            C.bv23 = 0;
                            C.bv31 = 0;
                            C.tw = 0;
                            C.va1 = 0;
                            C.va2 = 0;
                            C.va3 = 0;
                            C.tva = 0;
                            C.var1 = 0;
                            C.var2 = 0;
                            C.var3 = 0;
                            C.tvar = 0;
                            C.pf1 = 0;
                            C.pf2 = 0;
                            C.pf3 = 0;
                            C.tpf = 0;
                            C.perc_w = 0;
                            C.perc_var = 0;
                            C.btw = 0;
                            C.btvar = 0;
                            C.ert = 0;
                            C.kwh = 0;
                            C.kvah = 0;
                            C.kvarh = 0;
                            C.starts = 0;

                            readflag = Insert(table, C);
                        }
                        if (check_conn > 4)
                        {
                            MessageBox.Show(ex.Message);
                            ErrorLogging(ex);
                            status10 = false;
                            modbusclient10.Disconnect();
                            break;
                        }
                        check_conn++;
                    }

                    watch.Stop();
                    int d2 = Convert.ToInt32(watch.ElapsedMilliseconds);
                    g10t = d2;
                    //Console.WriteLine("Time Taken by " + table+" :"+d2+ " ms");
                    int d4 = (delay - d2);
                    if (d4 > 0)
                    { await Task.Delay(d4); }
                }
                else
                {
                    break;
                }
            }
            status10 = false;
        }

        public async void Getdata11(string table, bool status  )
        {
            int check_conn = 0;

            for (int a = 0; a < iteration; a++)
            {
                if (status11 == true)
                {

                    var watch = new System.Diagnostics.Stopwatch();
                    watch.Start();

                    bool readflag = new bool();
                    try
                    {

                        modbusclient11.Connect();
                        check_conn = 0;
                        Character B = new Character()
                        { };
                        ///////// Reading Regsiters 

                        B.status = sts;
                        int[] A = modbusclient11.ReadHoldingRegisters(1024, 2);
                        B.op = A[0];
                        B.ct = A[1];
                        A = modbusclient11.ReadHoldingRegisters(1028, 4);
                        B.cav = (A[0] * 0.1);
                        B.ebv = (A[1] * 0.1);
                        B.rpm = A[2];
                        B.gf = (A[3] * 0.1);
                        A = modbusclient11.ReadHoldingRegisters(1033, 1);
                        B.v1 = (A[0] * 0.1);
                        A = modbusclient11.ReadHoldingRegisters(1035, 1);
                        B.v2 = (A[0] * 0.1);
                        A = modbusclient11.ReadHoldingRegisters(1037, 1);
                        B.v3 = (A[0] * 0.1);
                        A = modbusclient11.ReadHoldingRegisters(1039, 1);
                        B.v12 = (A[0] * 0.1);
                        A = modbusclient11.ReadHoldingRegisters(1041, 1);
                        B.v23 = (A[0] * 0.1);
                        A = modbusclient11.ReadHoldingRegisters(1043, 1);
                        B.v31 = (A[0] * 0.1);
                        A = modbusclient11.ReadHoldingRegisters(1045, 1);
                        B.i1 = (A[0] * 0.1);
                        A = modbusclient11.ReadHoldingRegisters(1047, 1);
                        B.i2 = (A[0] * 0.1);
                        A = modbusclient11.ReadHoldingRegisters(1049, 1);
                        B.i3 = (A[0] * 0.1);
                        A = modbusclient11.ReadHoldingRegisters(1051, 1);
                        B.ie = (A[0] * 0.1);
                        A = modbusclient11.ReadHoldingRegisters(1052, 6);
                        B.w1 = (todecimal(A[0], A[1], 1)) / 1000;
                        B.w2 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.w3 = (todecimal(A[4], A[5], 1)) / 1000;
                        A = modbusclient11.ReadHoldingRegisters(1091, 1);
                        B.bf = (A[0] * 0.1);
                        A = modbusclient11.ReadHoldingRegisters(1093, 1);
                        B.bv1 = (A[0] * 0.1);
                        A = modbusclient11.ReadHoldingRegisters(1095, 1);
                        B.bv2 = (A[0] * 0.1);
                        A = modbusclient11.ReadHoldingRegisters(1097, 1);
                        B.bv3 = (A[0] * 0.1);
                        A = modbusclient11.ReadHoldingRegisters(1099, 1);
                        B.bv12 = (A[0] * 0.1);
                        A = modbusclient11.ReadHoldingRegisters(1101, 1);
                        B.bv23 = (A[0] * 0.1);
                        A = modbusclient11.ReadHoldingRegisters(1103, 1);
                        B.bv31 = (A[0] * 0.1);
                        A = modbusclient11.ReadHoldingRegisters(1536, 18);
                        B.tw = (todecimal(A[0], A[1], 1)) / 1000;
                        B.va1 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.va2 = (todecimal(A[4], A[5], 1)) / 1000;
                        B.va3 = (todecimal(A[6], A[7], 1)) / 1000;
                        B.tva = (todecimal(A[8], A[9], 1)) / 1000;
                        B.var1 = (todecimal(A[10], A[11], 1)) / 1000;
                        B.var2 = (todecimal(A[12], A[13], 1)) / 1000;
                        B.var3 = (todecimal(A[14], A[15], 1)) / 1000;
                        B.tvar = (todecimal(A[16], A[17], 1)) / 1000;
                        A = modbusclient11.ReadHoldingRegisters(1554, 6);
                        B.pf1 = (A[0] * 0.01);
                        B.pf2 = (A[1] * 0.01);
                        B.pf3 = (A[2] * 0.01);
                        B.tpf = (A[3] * 0.01);
                        B.perc_w = (A[4] * 0.1);
                        B.perc_var = (A[5] * 0.1);
                        A = modbusclient11.ReadHoldingRegisters(1584, 2);
                        B.btw = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient11.ReadHoldingRegisters(1600, 2);
                        B.btvar = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient11.ReadHoldingRegisters(1798, 4);
                        B.ert = (todecimal(A[0], A[1], 1)) / 3600;
                        B.kwh = (todecimal(A[2], A[3], 0.1));
                        A = modbusclient11.ReadHoldingRegisters(1804, 6);
                        B.kvah = todecimal(A[0], A[1], 0.1);
                        B.kvarh = todecimal(A[2], A[3], 0.1);
                        B.starts = todecimal(A[4], A[5], 1);
                        B.dt = "op";

                        A = modbusclient11.ReadHoldingRegisters(774, 1);
                        B.warn = (A[0] & 1024) >> 10;
                        B.e_trip = (A[0] & 2048) >> 11;
                        B.shut = (A[0] & 4096) >> 12;
                        Console.Write((B.shut).ToString());
                        A = modbusclient11.ReadHoldingRegisters(1219, 2);
                        B.gov = (A[0] * 0.1);
                        B.avr = (A[1] * 0.1);

                        modbusclient11.Disconnect();
                        readflag = Insert(table, B);


                    }
                    catch (Exception ex)
                    {

                        ///// Connection lost determinaton /////
                        Packet_loss(ex);

                        if (check_conn > 2)
                        {
                            Character C = new Character();

                            C.status = 0;
                            C.op = 0;
                            C.ct = 0;
                            C.cav = 0;
                            C.ebv = 0;
                            C.rpm = 0;
                            C.gf = 0;
                            C.v1 = 0;
                            C.v2 = 0;
                            C.v3 = 0;
                            C.v12 = 0;
                            C.v23 = 0;
                            C.v31 = 0;
                            C.i1 = 0;
                            C.i2 = 0;
                            C.i3 = 0;
                            C.ie = 0;
                            C.w1 = 0;
                            C.w2 = 0;
                            C.w3 = 0;
                            C.bf = 0;
                            C.bv1 = 0;
                            C.bv2 = 0;
                            C.bv3 = 0;
                            C.bv12 = 0;
                            C.bv23 = 0;
                            C.bv31 = 0;
                            C.tw = 0;
                            C.va1 = 0;
                            C.va2 = 0;
                            C.va3 = 0;
                            C.tva = 0;
                            C.var1 = 0;
                            C.var2 = 0;
                            C.var3 = 0;
                            C.tvar = 0;
                            C.pf1 = 0;
                            C.pf2 = 0;
                            C.pf3 = 0;
                            C.tpf = 0;
                            C.perc_w = 0;
                            C.perc_var = 0;
                            C.btw = 0;
                            C.btvar = 0;
                            C.ert = 0;
                            C.kwh = 0;
                            C.kvah = 0;
                            C.kvarh = 0;
                            C.starts = 0;

                            readflag = Insert(table, C);
                        }
                        if (check_conn > 4)
                        {
                            MessageBox.Show(ex.Message);
                            ErrorLogging(ex);
                            status11 = false;
                            modbusclient11.Disconnect();
                            break;
                        }
                        check_conn++;
                    }

                    watch.Stop();
                    int d2 = Convert.ToInt32(watch.ElapsedMilliseconds);
                    g11t = d2;
                    //Console.WriteLine("Time Taken by " + table+" :"+d2+ " ms");
                    int d4 = (delay - d2);
                    if (d4 > 0)
                    { await Task.Delay(d4); }
                }
                else
                {
                    break;
                }
            }
            status11 = false;
        }

        public async void Getdata12(string table, bool status  )
        {
            int check_conn = 0;

            for (int a = 0; a < iteration; a++)
            {
                if (status12 == true)
                {

                    var watch = new System.Diagnostics.Stopwatch();
                    watch.Start();

                    bool readflag = new bool();
                    try
                    {

                        modbusclient12.Connect();
                        check_conn = 0;
                        Character B = new Character()
                        { };
                        ///////// Reading Regsiters 

                        B.status = sts;
                        int[] A = modbusclient12.ReadHoldingRegisters(1024, 2);
                        B.op = A[0];
                        B.ct = A[1];
                        A = modbusclient12.ReadHoldingRegisters(1028, 4);
                        B.cav = (A[0] * 0.1);
                        B.ebv = (A[1] * 0.1);
                        B.rpm = A[2];
                        B.gf = (A[3] * 0.1);
                        A = modbusclient12.ReadHoldingRegisters(1033, 1);
                        B.v1 = (A[0] * 0.1);
                        A = modbusclient12.ReadHoldingRegisters(1035, 1);
                        B.v2 = (A[0] * 0.1);
                        A = modbusclient12.ReadHoldingRegisters(1037, 1);
                        B.v3 = (A[0] * 0.1);
                        A = modbusclient12.ReadHoldingRegisters(1039, 1);
                        B.v12 = (A[0] * 0.1);
                        A = modbusclient12.ReadHoldingRegisters(1041, 1);
                        B.v23 = (A[0] * 0.1);
                        A = modbusclient12.ReadHoldingRegisters(1043, 1);
                        B.v31 = (A[0] * 0.1);
                        A = modbusclient12.ReadHoldingRegisters(1045, 1);
                        B.i1 = (A[0] * 0.1);
                        A = modbusclient12.ReadHoldingRegisters(1047, 1);
                        B.i2 = (A[0] * 0.1);
                        A = modbusclient12.ReadHoldingRegisters(1049, 1);
                        B.i3 = (A[0] * 0.1);
                        A = modbusclient12.ReadHoldingRegisters(1051, 1);
                        B.ie = (A[0] * 0.1);
                        A = modbusclient12.ReadHoldingRegisters(1052, 6);
                        B.w1 = (todecimal(A[0], A[1], 1)) / 1000;
                        B.w2 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.w3 = (todecimal(A[4], A[5], 1)) / 1000;
                        A = modbusclient12.ReadHoldingRegisters(1091, 1);
                        B.bf = (A[0] * 0.1);
                        A = modbusclient12.ReadHoldingRegisters(1093, 1);
                        B.bv1 = (A[0] * 0.1);
                        A = modbusclient12.ReadHoldingRegisters(1095, 1);
                        B.bv2 = (A[0] * 0.1);
                        A = modbusclient12.ReadHoldingRegisters(1097, 1);
                        B.bv3 = (A[0] * 0.1);
                        A = modbusclient12.ReadHoldingRegisters(1099, 1);
                        B.bv12 = (A[0] * 0.1);
                        A = modbusclient12.ReadHoldingRegisters(1101, 1);
                        B.bv23 = (A[0] * 0.1);
                        A = modbusclient12.ReadHoldingRegisters(1103, 1);
                        B.bv31 = (A[0] * 0.1);
                        A = modbusclient12.ReadHoldingRegisters(1536, 18);
                        B.tw = (todecimal(A[0], A[1], 1)) / 1000;
                        B.va1 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.va2 = (todecimal(A[4], A[5], 1)) / 1000;
                        B.va3 = (todecimal(A[6], A[7], 1)) / 1000;
                        B.tva = (todecimal(A[8], A[9], 1)) / 1000;
                        B.var1 = (todecimal(A[10], A[11], 1)) / 1000;
                        B.var2 = (todecimal(A[12], A[13], 1)) / 1000;
                        B.var3 = (todecimal(A[14], A[15], 1)) / 1000;
                        B.tvar = (todecimal(A[16], A[17], 1)) / 1000;
                        A = modbusclient12.ReadHoldingRegisters(1554, 6);
                        B.pf1 = (A[0] * 0.01);
                        B.pf2 = (A[1] * 0.01);
                        B.pf3 = (A[2] * 0.01);
                        B.tpf = (A[3] * 0.01);
                        B.perc_w = (A[4] * 0.1);
                        B.perc_var = (A[5] * 0.1);
                        A = modbusclient12.ReadHoldingRegisters(1584, 2);
                        B.btw = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient12.ReadHoldingRegisters(1600, 2);
                        B.btvar = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient12.ReadHoldingRegisters(1798, 4);
                        B.ert = (todecimal(A[0], A[1], 1)) / 3600;
                        B.kwh = (todecimal(A[2], A[3], 0.1));
                        A = modbusclient12.ReadHoldingRegisters(1804, 6);
                        B.kvah = todecimal(A[0], A[1], 0.1);
                        B.kvarh = todecimal(A[2], A[3], 0.1);
                        B.starts = todecimal(A[4], A[5], 1);
                        B.dt = "op";

                        A = modbusclient12.ReadHoldingRegisters(774, 1);
                        B.warn = (A[0] & 1024) >> 10;
                        B.e_trip = (A[0] & 2048) >> 11;
                        B.shut = (A[0] & 4096) >> 12;
                        A = modbusclient12.ReadHoldingRegisters(1219, 2);
                        B.gov = (A[0] * 0.1);
                        B.avr = (A[1] * 0.1);

                        modbusclient12.Disconnect();
                        readflag = Insert(table, B);


                    }
                    catch (Exception ex)
                    {

                        ///// Connection lost determinaton /////
                        Packet_loss(ex);

                        if (check_conn > 2)
                        {
                            Character C = new Character();

                            C.status = 0;
                            C.op = 0;
                            C.ct = 0;
                            C.cav = 0;
                            C.ebv = 0;
                            C.rpm = 0;
                            C.gf = 0;
                            C.v1 = 0;
                            C.v2 = 0;
                            C.v3 = 0;
                            C.v12 = 0;
                            C.v23 = 0;
                            C.v31 = 0;
                            C.i1 = 0;
                            C.i2 = 0;
                            C.i3 = 0;
                            C.ie = 0;
                            C.w1 = 0;
                            C.w2 = 0;
                            C.w3 = 0;
                            C.bf = 0;
                            C.bv1 = 0;
                            C.bv2 = 0;
                            C.bv3 = 0;
                            C.bv12 = 0;
                            C.bv23 = 0;
                            C.bv31 = 0;
                            C.tw = 0;
                            C.va1 = 0;
                            C.va2 = 0;
                            C.va3 = 0;
                            C.tva = 0;
                            C.var1 = 0;
                            C.var2 = 0;
                            C.var3 = 0;
                            C.tvar = 0;
                            C.pf1 = 0;
                            C.pf2 = 0;
                            C.pf3 = 0;
                            C.tpf = 0;
                            C.perc_w = 0;
                            C.perc_var = 0;
                            C.btw = 0;
                            C.btvar = 0;
                            C.ert = 0;
                            C.kwh = 0;
                            C.kvah = 0;
                            C.kvarh = 0;
                            C.starts = 0;

                            readflag = Insert(table, C);
                        }
                        if (check_conn > 4)
                        {
                            MessageBox.Show(ex.Message);
                            ErrorLogging(ex);
                            status12 = false;
                            modbusclient12.Disconnect();
                            break;
                        }
                        check_conn++;
                    }

                    watch.Stop();
                    int d2 = Convert.ToInt32(watch.ElapsedMilliseconds);
                    g12t = d2;
                    //Console.WriteLine("Time Taken by " + table+" :"+d2+ " ms");
                    int d4 = (delay - d2);
                    if (d4 > 0)
                    { await Task.Delay(d4); }
                }
                else
                {
                    break;
                }
            }
            status12 = false;
        }

        public async void Getdata13(string table, bool status  )
        {
            int check_conn = 0;

            for (int a = 0; a < iteration; a++)
            {
                if (status13 == true)
                {

                    var watch = new System.Diagnostics.Stopwatch();
                    watch.Start();

                    bool readflag = new bool();
                    try
                    {

                        modbusclient13.Connect();
                        check_conn = 0;
                        Character B = new Character()
                        { };
                        ///////// Reading Regsiters 

                        B.status = sts;
                        int[] A = modbusclient13.ReadHoldingRegisters(1024, 2);
                        B.op = A[0];
                        B.ct = A[1];
                        A = modbusclient13.ReadHoldingRegisters(1028, 4);
                        B.cav = (A[0] * 0.1);
                        B.ebv = (A[1] * 0.1);
                        B.rpm = A[2];
                        B.gf = (A[3] * 0.1);
                        A = modbusclient13.ReadHoldingRegisters(1033, 1);
                        B.v1 = (A[0] * 0.1);
                        A = modbusclient13.ReadHoldingRegisters(1035, 1);
                        B.v2 = (A[0] * 0.1);
                        A = modbusclient13.ReadHoldingRegisters(1037, 1);
                        B.v3 = (A[0] * 0.1);
                        A = modbusclient13.ReadHoldingRegisters(1039, 1);
                        B.v12 = (A[0] * 0.1);
                        A = modbusclient13.ReadHoldingRegisters(1041, 1);
                        B.v23 = (A[0] * 0.1);
                        A = modbusclient13.ReadHoldingRegisters(1043, 1);
                        B.v31 = (A[0] * 0.1);
                        A = modbusclient13.ReadHoldingRegisters(1045, 1);
                        B.i1 = (A[0] * 0.1);
                        A = modbusclient13.ReadHoldingRegisters(1047, 1);
                        B.i2 = (A[0] * 0.1);
                        A = modbusclient13.ReadHoldingRegisters(1049, 1);
                        B.i3 = (A[0] * 0.1);
                        A = modbusclient13.ReadHoldingRegisters(1051, 1);
                        B.ie = (A[0] * 0.1);
                        A = modbusclient13.ReadHoldingRegisters(1052, 6);
                        B.w1 = (todecimal(A[0], A[1], 1)) / 1000;
                        B.w2 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.w3 = (todecimal(A[4], A[5], 1)) / 1000;
                        A = modbusclient13.ReadHoldingRegisters(1091, 1);
                        B.bf = (A[0] * 0.1);
                        A = modbusclient13.ReadHoldingRegisters(1093, 1);
                        B.bv1 = (A[0] * 0.1);
                        A = modbusclient13.ReadHoldingRegisters(1095, 1);
                        B.bv2 = (A[0] * 0.1);
                        A = modbusclient13.ReadHoldingRegisters(1097, 1);
                        B.bv3 = (A[0] * 0.1);
                        A = modbusclient13.ReadHoldingRegisters(1099, 1);
                        B.bv12 = (A[0] * 0.1);
                        A = modbusclient13.ReadHoldingRegisters(1101, 1);
                        B.bv23 = (A[0] * 0.1);
                        A = modbusclient13.ReadHoldingRegisters(1103, 1);
                        B.bv31 = (A[0] * 0.1);
                        A = modbusclient13.ReadHoldingRegisters(1536, 18);
                        B.tw = (todecimal(A[0], A[1], 1)) / 1000;
                        B.va1 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.va2 = (todecimal(A[4], A[5], 1)) / 1000;
                        B.va3 = (todecimal(A[6], A[7], 1)) / 1000;
                        B.tva = (todecimal(A[8], A[9], 1)) / 1000;
                        B.var1 = (todecimal(A[10], A[11], 1)) / 1000;
                        B.var2 = (todecimal(A[12], A[13], 1)) / 1000;
                        B.var3 = (todecimal(A[14], A[15], 1)) / 1000;
                        B.tvar = (todecimal(A[16], A[17], 1)) / 1000;
                        A = modbusclient13.ReadHoldingRegisters(1554, 6);
                        B.pf1 = (A[0] * 0.01);
                        B.pf2 = (A[1] * 0.01);
                        B.pf3 = (A[2] * 0.01);
                        B.tpf = (A[3] * 0.01);
                        B.perc_w = (A[4] * 0.1);
                        B.perc_var = (A[5] * 0.1);
                        A = modbusclient13.ReadHoldingRegisters(1584, 2);
                        B.btw = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient13.ReadHoldingRegisters(1600, 2);
                        B.btvar = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient13.ReadHoldingRegisters(1798, 4);
                        B.ert = (todecimal(A[0], A[1], 1)) / 3600;
                        B.kwh = (todecimal(A[2], A[3], 0.1));
                        A = modbusclient13.ReadHoldingRegisters(1804, 6);
                        B.kvah = todecimal(A[0], A[1], 0.1);
                        B.kvarh = todecimal(A[2], A[3], 0.1);
                        B.starts = todecimal(A[4], A[5], 1);
                        B.dt = "op";

                        A = modbusclient13.ReadHoldingRegisters(774, 1);
                        B.warn = (A[0] & 1024) >> 10;
                        B.e_trip = (A[0] & 2048) >> 11;
                        B.shut = (A[0] & 4096) >> 12;
                        A = modbusclient13.ReadHoldingRegisters(1219, 2);
                        B.gov = (A[0] * 0.1);
                        B.avr = (A[1] * 0.1);

                        modbusclient13.Disconnect();
                        readflag = Insert(table, B);


                    }
                    catch (Exception ex)
                    {

                        ///// Connection lost determinaton /////
                        Packet_loss(ex);

                        if (check_conn > 2)
                        {
                            Character C = new Character();

                            C.status = 0;
                            C.op = 0;
                            C.ct = 0;
                            C.cav = 0;
                            C.ebv = 0;
                            C.rpm = 0;
                            C.gf = 0;
                            C.v1 = 0;
                            C.v2 = 0;
                            C.v3 = 0;
                            C.v12 = 0;
                            C.v23 = 0;
                            C.v31 = 0;
                            C.i1 = 0;
                            C.i2 = 0;
                            C.i3 = 0;
                            C.ie = 0;
                            C.w1 = 0;
                            C.w2 = 0;
                            C.w3 = 0;
                            C.bf = 0;
                            C.bv1 = 0;
                            C.bv2 = 0;
                            C.bv3 = 0;
                            C.bv12 = 0;
                            C.bv23 = 0;
                            C.bv31 = 0;
                            C.tw = 0;
                            C.va1 = 0;
                            C.va2 = 0;
                            C.va3 = 0;
                            C.tva = 0;
                            C.var1 = 0;
                            C.var2 = 0;
                            C.var3 = 0;
                            C.tvar = 0;
                            C.pf1 = 0;
                            C.pf2 = 0;
                            C.pf3 = 0;
                            C.tpf = 0;
                            C.perc_w = 0;
                            C.perc_var = 0;
                            C.btw = 0;
                            C.btvar = 0;
                            C.ert = 0;
                            C.kwh = 0;
                            C.kvah = 0;
                            C.kvarh = 0;
                            C.starts = 0;

                            readflag = Insert(table, C);
                        }
                        if (check_conn > 4)
                        {
                            MessageBox.Show(ex.Message);
                            ErrorLogging(ex);
                            status13 = false;
                            modbusclient13.Disconnect();
                            break;
                        }
                        check_conn++;
                    }

                    watch.Stop();
                    int d2 = Convert.ToInt32(watch.ElapsedMilliseconds);
                    g13t = d2;
                    //Console.WriteLine("Time Taken by " + table+" :"+d2+ " ms");
                    int d4 = (delay - d2);
                    if (d4 > 0)
                    { await Task.Delay(d4); }
                }
                else
                {
                    break;
                }
            }
            status13 = false;
        }

        public async void Getdata14(string table, bool status  )
        {
            int check_conn = 0;

            for (int a = 0; a < iteration; a++)
            {
                if (status14 == true)
                {

                    var watch = new System.Diagnostics.Stopwatch();
                    watch.Start();

                    bool readflag = new bool();
                    try
                    {

                        modbusclient14.Connect();
                        check_conn = 0;
                        Character B = new Character()
                        { };
                        ///////// Reading Regsiters 

                        B.status = sts;
                        int[] A = modbusclient14.ReadHoldingRegisters(1024, 2);
                        B.op = A[0];
                        B.ct = A[1];
                        A = modbusclient14.ReadHoldingRegisters(1028, 4);
                        B.cav = (A[0] * 0.1);
                        B.ebv = (A[1] * 0.1);
                        B.rpm = A[2];
                        B.gf = (A[3] * 0.1);
                        A = modbusclient14.ReadHoldingRegisters(1033, 1);
                        B.v1 = (A[0] * 0.1);
                        A = modbusclient14.ReadHoldingRegisters(1035, 1);
                        B.v2 = (A[0] * 0.1);
                        A = modbusclient14.ReadHoldingRegisters(1037, 1);
                        B.v3 = (A[0] * 0.1);
                        A = modbusclient14.ReadHoldingRegisters(1039, 1);
                        B.v12 = (A[0] * 0.1);
                        A = modbusclient14.ReadHoldingRegisters(1041, 1);
                        B.v23 = (A[0] * 0.1);
                        A = modbusclient14.ReadHoldingRegisters(1043, 1);
                        B.v31 = (A[0] * 0.1);
                        A = modbusclient14.ReadHoldingRegisters(1045, 1);
                        B.i1 = (A[0] * 0.1);
                        A = modbusclient14.ReadHoldingRegisters(1047, 1);
                        B.i2 = (A[0] * 0.1);
                        A = modbusclient14.ReadHoldingRegisters(1049, 1);
                        B.i3 = (A[0] * 0.1);
                        A = modbusclient14.ReadHoldingRegisters(1051, 1);
                        B.ie = (A[0] * 0.1);
                        A = modbusclient14.ReadHoldingRegisters(1052, 6);
                        B.w1 = (todecimal(A[0], A[1], 1)) / 1000;
                        B.w2 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.w3 = (todecimal(A[4], A[5], 1)) / 1000;
                        A = modbusclient14.ReadHoldingRegisters(1091, 1);
                        B.bf = (A[0] * 0.1);
                        A = modbusclient14.ReadHoldingRegisters(1093, 1);
                        B.bv1 = (A[0] * 0.1);
                        A = modbusclient14.ReadHoldingRegisters(1095, 1);
                        B.bv2 = (A[0] * 0.1);
                        A = modbusclient14.ReadHoldingRegisters(1097, 1);
                        B.bv3 = (A[0] * 0.1);
                        A = modbusclient14.ReadHoldingRegisters(1099, 1);
                        B.bv12 = (A[0] * 0.1);
                        A = modbusclient14.ReadHoldingRegisters(1101, 1);
                        B.bv23 = (A[0] * 0.1);
                        A = modbusclient14.ReadHoldingRegisters(1103, 1);
                        B.bv31 = (A[0] * 0.1);
                        A = modbusclient14.ReadHoldingRegisters(1536, 18);
                        B.tw = (todecimal(A[0], A[1], 1)) / 1000;
                        B.va1 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.va2 = (todecimal(A[4], A[5], 1)) / 1000;
                        B.va3 = (todecimal(A[6], A[7], 1)) / 1000;
                        B.tva = (todecimal(A[8], A[9], 1)) / 1000;
                        B.var1 = (todecimal(A[10], A[11], 1)) / 1000;
                        B.var2 = (todecimal(A[12], A[13], 1)) / 1000;
                        B.var3 = (todecimal(A[14], A[15], 1)) / 1000;
                        B.tvar = (todecimal(A[16], A[17], 1)) / 1000;
                        A = modbusclient14.ReadHoldingRegisters(1554, 6);
                        B.pf1 = (A[0] * 0.01);
                        B.pf2 = (A[1] * 0.01);
                        B.pf3 = (A[2] * 0.01);
                        B.tpf = (A[3] * 0.01);
                        B.perc_w = (A[4] * 0.1);
                        B.perc_var = (A[5] * 0.1);
                        A = modbusclient14.ReadHoldingRegisters(1584, 2);
                        B.btw = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient14.ReadHoldingRegisters(1600, 2);
                        B.btvar = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient14.ReadHoldingRegisters(1798, 4);
                        B.ert = (todecimal(A[0], A[1], 1)) / 3600;
                        B.kwh = (todecimal(A[2], A[3], 0.1));
                        A = modbusclient14.ReadHoldingRegisters(1804, 6);
                        B.kvah = todecimal(A[0], A[1], 0.1);
                        B.kvarh = todecimal(A[2], A[3], 0.1);
                        B.starts = todecimal(A[4], A[5], 1);
                        B.dt = "op";

                        A = modbusclient14.ReadHoldingRegisters(774, 1);
                        B.warn = (A[0] & 1024) >> 10;
                        B.e_trip = (A[0] & 2048) >> 11;
                        B.shut = (A[0] & 4096) >> 12;
                        A = modbusclient14.ReadHoldingRegisters(1219, 2);
                        B.gov = (A[0] * 0.1);
                        B.avr = (A[1] * 0.1);

                        modbusclient14.Disconnect();
                        readflag = Insert(table, B);


                    }
                    catch (Exception ex)
                    {

                        ///// Connection lost determinaton /////
                        Packet_loss(ex);

                        if (check_conn > 2)
                        {
                            Character C = new Character();

                            C.status = 0;
                            C.op = 0;
                            C.ct = 0;
                            C.cav = 0;
                            C.ebv = 0;
                            C.rpm = 0;
                            C.gf = 0;
                            C.v1 = 0;
                            C.v2 = 0;
                            C.v3 = 0;
                            C.v12 = 0;
                            C.v23 = 0;
                            C.v31 = 0;
                            C.i1 = 0;
                            C.i2 = 0;
                            C.i3 = 0;
                            C.ie = 0;
                            C.w1 = 0;
                            C.w2 = 0;
                            C.w3 = 0;
                            C.bf = 0;
                            C.bv1 = 0;
                            C.bv2 = 0;
                            C.bv3 = 0;
                            C.bv12 = 0;
                            C.bv23 = 0;
                            C.bv31 = 0;
                            C.tw = 0;
                            C.va1 = 0;
                            C.va2 = 0;
                            C.va3 = 0;
                            C.tva = 0;
                            C.var1 = 0;
                            C.var2 = 0;
                            C.var3 = 0;
                            C.tvar = 0;
                            C.pf1 = 0;
                            C.pf2 = 0;
                            C.pf3 = 0;
                            C.tpf = 0;
                            C.perc_w = 0;
                            C.perc_var = 0;
                            C.btw = 0;
                            C.btvar = 0;
                            C.ert = 0;
                            C.kwh = 0;
                            C.kvah = 0;
                            C.kvarh = 0;
                            C.starts = 0;

                            readflag = Insert(table, C);
                        }
                        if (check_conn > 4)
                        {
                            MessageBox.Show(ex.Message);
                            ErrorLogging(ex);
                            status14 = false;
                            modbusclient14.Disconnect();
                            break;
                        }
                        check_conn++;
                    }

                    watch.Stop();
                    int d2 = Convert.ToInt32(watch.ElapsedMilliseconds);
                    g14t = d2;
                    //Console.WriteLine("Time Taken by " + table+" :"+d2+ " ms");
                    int d4 = (delay - d2);
                    if (d4 > 0)
                    { await Task.Delay(d4); }
                }
                else
                {
                    break;
                }
            }
            status14 = false;
        }

        public async void Getdata15(string table, bool status )
        {
            int check_conn = 0;

            for (int a = 0; a < iteration; a++)
            {
                if (status15 == true)
                {

                    var watch = new System.Diagnostics.Stopwatch();
                    watch.Start();

                    bool readflag = new bool();
                    try
                    {

                        modbusclient15.Connect();
                        check_conn = 0;
                        Character B = new Character()
                        { };
                        ///////// Reading Regsiters 

                        B.status = sts;
                        int[] A = modbusclient15.ReadHoldingRegisters(1024, 2);
                        B.op = A[0];
                        B.ct = A[1];
                        A = modbusclient15.ReadHoldingRegisters(1028, 4);
                        B.cav = (A[0] * 0.1);
                        B.ebv = (A[1] * 0.1);
                        B.rpm = A[2];
                        B.gf = (A[3] * 0.1);
                        A = modbusclient15.ReadHoldingRegisters(1033, 1);
                        B.v1 = (A[0] * 0.1);
                        A = modbusclient15.ReadHoldingRegisters(1035, 1);
                        B.v2 = (A[0] * 0.1);
                        A = modbusclient15.ReadHoldingRegisters(1037, 1);
                        B.v3 = (A[0] * 0.1);
                        A = modbusclient15.ReadHoldingRegisters(1039, 1);
                        B.v12 = (A[0] * 0.1);
                        A = modbusclient15.ReadHoldingRegisters(1041, 1);
                        B.v23 = (A[0] * 0.1);
                        A = modbusclient15.ReadHoldingRegisters(1043, 1);
                        B.v31 = (A[0] * 0.1);
                        A = modbusclient15.ReadHoldingRegisters(1045, 1);
                        B.i1 = (A[0] * 0.1);
                        A = modbusclient15.ReadHoldingRegisters(1047, 1);
                        B.i2 = (A[0] * 0.1);
                        A = modbusclient15.ReadHoldingRegisters(1049, 1);
                        B.i3 = (A[0] * 0.1);
                        A = modbusclient15.ReadHoldingRegisters(1051, 1);
                        B.ie = (A[0] * 0.1);
                        A = modbusclient15.ReadHoldingRegisters(1052, 6);
                        B.w1 = (todecimal(A[0], A[1], 1)) / 1000;
                        B.w2 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.w3 = (todecimal(A[4], A[5], 1)) / 1000;
                        A = modbusclient15.ReadHoldingRegisters(1091, 1);
                        B.bf = (A[0] * 0.1);
                        A = modbusclient15.ReadHoldingRegisters(1093, 1);
                        B.bv1 = (A[0] * 0.1);
                        A = modbusclient15.ReadHoldingRegisters(1095, 1);
                        B.bv2 = (A[0] * 0.1);
                        A = modbusclient15.ReadHoldingRegisters(1097, 1);
                        B.bv3 = (A[0] * 0.1);
                        A = modbusclient15.ReadHoldingRegisters(1099, 1);
                        B.bv12 = (A[0] * 0.1);
                        A = modbusclient15.ReadHoldingRegisters(1101, 1);
                        B.bv23 = (A[0] * 0.1);
                        A = modbusclient15.ReadHoldingRegisters(1103, 1);
                        B.bv31 = (A[0] * 0.1);
                        A = modbusclient15.ReadHoldingRegisters(1536, 18);
                        B.tw = (todecimal(A[0], A[1], 1)) / 1000;
                        B.va1 = (todecimal(A[2], A[3], 1)) / 1000;
                        B.va2 = (todecimal(A[4], A[5], 1)) / 1000;
                        B.va3 = (todecimal(A[6], A[7], 1)) / 1000;
                        B.tva = (todecimal(A[8], A[9], 1)) / 1000;
                        B.var1 = (todecimal(A[10], A[11], 1)) / 1000;
                        B.var2 = (todecimal(A[12], A[13], 1)) / 1000;
                        B.var3 = (todecimal(A[14], A[15], 1)) / 1000;
                        B.tvar = (todecimal(A[16], A[17], 1)) / 1000;
                        A = modbusclient15.ReadHoldingRegisters(1554, 6);
                        B.pf1 = (A[0] * 0.01);
                        B.pf2 = (A[1] * 0.01);
                        B.pf3 = (A[2] * 0.01);
                        B.tpf = (A[3] * 0.01);
                        B.perc_w = (A[4] * 0.1);
                        B.perc_var = (A[5] * 0.1);
                        A = modbusclient15.ReadHoldingRegisters(1584, 2);
                        B.btw = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient15.ReadHoldingRegisters(1600, 2);
                        B.btvar = (todecimal(A[0], A[1], 1)) / 1000;
                        A = modbusclient15.ReadHoldingRegisters(1798, 4);
                        B.ert = (todecimal(A[0], A[1], 1)) / 3600;
                        B.kwh = (todecimal(A[2], A[3], 0.1));
                        A = modbusclient15.ReadHoldingRegisters(1804, 6);
                        B.kvah = todecimal(A[0], A[1], 0.1);
                        B.kvarh = todecimal(A[2], A[3], 0.1);
                        B.starts = todecimal(A[4], A[5], 1);
                        B.dt = "op";

                        A = modbusclient15.ReadHoldingRegisters(774, 1);
                        B.warn = (A[0] & 1024) >> 10;
                        B.e_trip = (A[0] & 2048) >> 11;
                        B.shut = (A[0] & 4096) >> 12;
                        A = modbusclient15.ReadHoldingRegisters(1219, 2);
                        B.gov = (A[0] * 0.1);
                        B.avr = (A[1] * 0.1);

                        modbusclient15.Disconnect();
                        readflag = Insert(table, B);


                    }
                    catch (Exception ex)
                    {

                        ///// Connection lost determinaton /////
                        Packet_loss(ex);

                        if (check_conn > 2)
                        {
                            Character C = new Character();

                            C.status = 0;
                            C.op = 0;
                            C.ct = 0;
                            C.cav = 0;
                            C.ebv = 0;
                            C.rpm = 0;
                            C.gf = 0;
                            C.v1 = 0;
                            C.v2 = 0;
                            C.v3 = 0;
                            C.v12 = 0;
                            C.v23 = 0;
                            C.v31 = 0;
                            C.i1 = 0;
                            C.i2 = 0;
                            C.i3 = 0;
                            C.ie = 0;
                            C.w1 = 0;
                            C.w2 = 0;
                            C.w3 = 0;
                            C.bf = 0;
                            C.bv1 = 0;
                            C.bv2 = 0;
                            C.bv3 = 0;
                            C.bv12 = 0;
                            C.bv23 = 0;
                            C.bv31 = 0;
                            C.tw = 0;
                            C.va1 = 0;
                            C.va2 = 0;
                            C.va3 = 0;
                            C.tva = 0;
                            C.var1 = 0;
                            C.var2 = 0;
                            C.var3 = 0;
                            C.tvar = 0;
                            C.pf1 = 0;
                            C.pf2 = 0;
                            C.pf3 = 0;
                            C.tpf = 0;
                            C.perc_w = 0;
                            C.perc_var = 0;
                            C.btw = 0;
                            C.btvar = 0;
                            C.ert = 0;
                            C.kwh = 0;
                            C.kvah = 0;
                            C.kvarh = 0;
                            C.starts = 0;

                            readflag = Insert(table, C);
                        }
                        if (check_conn > 4)
                        {
                            MessageBox.Show(ex.Message);
                            ErrorLogging(ex);
                            status15 = false;
                            modbusclient15.Disconnect();
                            break;
                        }
                        check_conn++;
                    }

                    watch.Stop();
                    int d2 = Convert.ToInt32(watch.ElapsedMilliseconds);
                    g15t = d2;
                    //Console.WriteLine("Time Taken by " + table+" :"+d2+ " ms");
                    int d4 = (delay - d2);
                    if (d4 > 0)
                    { await Task.Delay(d4); }
                }
                else
                {
                    break;
                }
            }
            status15 = false;
        }



        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        private void button1_Click(object sender, EventArgs e)
        {
            status1 = true;
            var t1 = new Task(() => Getdata("gen1", status1));
            t1.Start();
            button1.Enabled = false;

        }
        private void button2_Click_1(object sender, EventArgs e)
        {
            status2 = true;
            var t2 = new Task(() => Getdata2("gen2", status2));
            t2.Start();
            button2.Enabled = false;
        }
        private void button3_Click_1(object sender, EventArgs e)
        {
            status3 = true;
            var t3 = new Task(() => Getdata3("gen3", status3));
            t3.Start();
            button3.Enabled = false;
        }
        private void button7_Click(object sender, EventArgs e)
        {
            status7 = true;
            var t7 = new Task(() => Getdata7("gen7", status7));
            t7.Start();
            button7.Enabled = false;
        }

        private void button8_Click(object sender, EventArgs e)
        {
            status8 = true;
            var t8 = new Task(() => Getdata8("gen8", status8));
            t8.Start();
            button8.Enabled = false;
        }





        // ///////////////////// START ALL BUTTON /////////////////////

        private void button46_Click(object sender, EventArgs e)
        {
            button1_Click(sender, e);
            button2_Click_1(sender, e);
            button3_Click_1(sender, e);
            button4_Click(sender, e);
            button5_Click(sender, e);
            button6_Click(sender, e);
            button7_Click(sender, e);
            button8_Click(sender, e);
            button18_Click(sender, e);
            button20_Click(sender, e);
            button22_Click(sender, e);
            button24_Click(sender, e);
            button26_Click(sender, e);
            button28_Click(sender, e);
            button30_Click(sender, e);

        }

        // ///////////////////// STOP ALL BUTTON /////////////////////

        private void button47_Click(object sender, EventArgs e)
        {
            button9_Click(sender, e);
            button10_Click(sender, e);
            button11_Click(sender, e);
            button12_Click(sender, e);
            button13_Click(sender, e);
            button14_Click(sender, e);
            button15_Click(sender, e);
            button16_Click(sender, e);
            button17_Click(sender, e);
            button19_Click(sender, e);
            button21_Click(sender, e);
            button23_Click(sender, e);
            button25_Click(sender, e);
            button27_Click(sender, e);
            button29_Click(sender, e);
        }

        private void button48_Click(object sender, EventArgs e)
        {
            if (sts == 1)
            {
                sts = 0;
            }
            else
            {
                sts = 1;
            }
        }

        private void button18_Click(object sender, EventArgs e)
        {
            status9 = true;
            var t9 = new Task(() => Getdata9("gen9", status9));
            t9.Start();
            button18.Enabled = false;
        }

        private void button20_Click(object sender, EventArgs e)
        {
            status10 = true;
            var t10 = new Task(() => Getdata10("gen10", status10));
            t10.Start();
            button20.Enabled = false;
        }

        private void button22_Click(object sender, EventArgs e)
        {
            status11 = true;
            var t11 = new Task(() => Getdata11("gen11", status11));
            t11.Start();
            button22.Enabled = false;
        }

        private void button24_Click(object sender, EventArgs e)
        {
            status12 = true;
            var t12 = new Task(() => Getdata12("gen12", status12));
            t12.Start();
            button24.Enabled = false;
        }

        private void button26_Click(object sender, EventArgs e)
        {
            status13 = true;
            var t13 = new Task(() => Getdata13("gen13", status13));
            t13.Start();
            button26.Enabled = false;
        }

        private void button28_Click(object sender, EventArgs e)
        {
            status14 = true;
            var t14 = new Task(() => Getdata14("gen14", status14));
            t14.Start();
            button28.Enabled = false;
        }

        private void button30_Click(object sender, EventArgs e)
        {
            status15 = true;
            var t15 = new Task(() => Getdata15("gen15", status15));
            t15.Start();
            button30.Enabled = false;
        }

        private void button6_Click(object sender, EventArgs e)
        {
            status6 = true;
            var t6 = new Task(() => Getdata6("gen6", status6));
            t6.Start();
            button6.Enabled = false;
        }

        private void button5_Click(object sender, EventArgs e)
        {
            status5 = true;
            var t5 = new Task(() => Getdata5("gen5", status5));
            t5.Start();
            button5.Enabled = false;
        }

        private void button4_Click(object sender, EventArgs e)
        {
            status4 = true;
            var t4 = new Task(() => Getdata4("gen4", status4));
            t4.Start();
            button4.Enabled = false;
        }



        ///////////////// Selcction Button ///////////////////////
        private void button45_Click(object sender, EventArgs e)
        {
            iteration = Convert.ToInt32(textBox1.Text);
            delay = Convert.ToInt32(textBox17.Text);
            ip= Convert.ToString(textBox18.Text);
            Console.WriteLine(ip);
            

    }


        /// //////////////////Stop Button ///////////////////////
        /// /// //////////////////Stop Button ///////////////////////
        /// /// //////////////////Stop Button ///////////////////////

        private void button14_Click(object sender, EventArgs e)
        {
            status6 = false;
            button6.Enabled = true;
        }

        private void button15_Click(object sender, EventArgs e)
        {
            status7 = false;
            button7.Enabled = true;
        }

        private void button16_Click(object sender, EventArgs e)
        {
            status8 = false;
            button8.Enabled = true;
        }

        private void button17_Click(object sender, EventArgs e)
        {
            status9 = false;
            button18.Enabled = true;
        }

        private void button19_Click(object sender, EventArgs e)
        {
            status10 = false;
            button20.Enabled = true;
        }

        private void button21_Click(object sender, EventArgs e)
        {
            status11 = false;
            button22.Enabled = true;
        }

        private void button23_Click(object sender, EventArgs e)
        {
            status12 = false;
            button24.Enabled = true;
        }

        private void button25_Click(object sender, EventArgs e)
        {
            status13 = false;
            button26.Enabled = true;
        }

        private void button27_Click(object sender, EventArgs e)
        {
            status14 = false;
            button28.Enabled = true;
        }

        private void button29_Click(object sender, EventArgs e)
        {
            status15 = false;
            button30.Enabled = true;
        }

        private void button13_Click(object sender, EventArgs e)
        {
            status5 = false;
            button5.Enabled = true;
        }

        private void button12_Click(object sender, EventArgs e)
        {
            status4 = false;
            button4.Enabled = true;
        }

        private void button11_Click(object sender, EventArgs e)
        {
            status3 = false;
            button3.Enabled = true;
        }

        private void button10_Click(object sender, EventArgs e)
        {
            status2 = false;
            button2.Enabled = true;
        }

        private void button9_Click(object sender, EventArgs e)
        {
            status1 = false;
            button1.Enabled = true;
        }

        public async void check()
        {

            while (true)
            {
                var watch = new System.Diagnostics.Stopwatch();
                watch.Start();
                /////////////////time delay ^^^^ /////


                if (status1 == true)
                {
                    gen1status.BackColor = Color.YellowGreen;
                    gen1status.Text = "Connected";
                    textBox2.Text = g1t + " ms";
                }
                else
                {
                    gen1status.BackColor = Color.OrangeRed;
                    gen1status.Text = "Disconnected";
                    button1.Enabled = true;
                }
                if (status2 == true)
                {
                    button31.BackColor = Color.YellowGreen;
                    button31.Text = "Connected";
                    textBox3.Text = g2t + " ms";
                }
                else
                {
                    button31.BackColor = Color.OrangeRed;
                    button31.Text = "Disconnected";
                    button2.Enabled = true;
                }
                //////////////////////////////////////////////////////
                if (status3 == true)
                {
                    button32.BackColor = Color.YellowGreen;
                    button32.Text = "Connected";
                    textBox4.Text = g3t + " ms";
                }
                else
                {
                    button32.BackColor = Color.OrangeRed;
                    button32.Text = "Disconnected";
                    button3.Enabled = true;
                }
                //////////////////////////////////////////////////////
                if (status4 == true)
                {
                    button33.BackColor = Color.YellowGreen;
                    button33.Text = "Connected";
                    textBox5.Text = g4t + " ms";
                }
                else
                {
                    button33.BackColor = Color.OrangeRed;
                    button33.Text = "Disconnected";
                    button4.Enabled = true;
                }
                //////////////////////////////////////////////////////
                if (status5 == true)
                {
                    button34.BackColor = Color.YellowGreen;
                    button34.Text = "Connected";
                    textBox6.Text = g5t + " ms";
                }
                else
                {
                    button34.BackColor = Color.OrangeRed;
                    button34.Text = "Disconnected";
                    button5.Enabled = true;
                }
                //////////////////////////////////////////////////////
                if (status6 == true)
                {
                    button35.BackColor = Color.YellowGreen;
                    button35.Text = "Connected";
                    textBox7.Text = g6t + " ms";
                }
                else
                {
                    button35.BackColor = Color.OrangeRed;
                    button35.Text = "Disconnected";
                    button6.Enabled = true;
                }
                //////////////////////////////////////////////////////
                if (status7 == true)
                {
                    button36.BackColor = Color.YellowGreen;
                    button36.Text = "Connected";
                    textBox8.Text = g7t + " ms";
                }
                else
                {
                    button36.BackColor = Color.OrangeRed;
                    button36.Text = "Disconnected";
                    button7.Enabled = true;
                }
                //////////////////////////////////////////////////////
                if (status8 == true)
                {
                    button37.BackColor = Color.YellowGreen;
                    button37.Text = "Connected";
                    textBox9.Text = g8t + " ms";
                }
                else
                {
                    button37.BackColor = Color.OrangeRed;
                    button37.Text = "Disconnected";
                    button8.Enabled = true;
                }
                //////////////////////////////////////////////////////
                if (status9 == true)
                {
                    button38.BackColor = Color.YellowGreen;
                    button38.Text = "Connected";
                    textBox10.Text = g9t + " ms";
                }
                else
                {
                    button38.BackColor = Color.OrangeRed;
                    button38.Text = "Disconnected";
                    button18.Enabled = true;
                }
                //////////////////////////////////////////////////////
                if (status10 == true)
                {
                    button39.BackColor = Color.YellowGreen;
                    button39.Text = "Connected";
                    textBox11.Text = g10t + " ms";
                }
                else
                {
                    button39.BackColor = Color.OrangeRed;
                    button39.Text = "Disconnected";
                    button20.Enabled = true;
                }
                //////////////////////////////////////////////////////
                if (status11 == true)
                {
                    button40.BackColor = Color.YellowGreen;
                    button40.Text = "Connected";
                    textBox12.Text = g11t + " ms";
                }
                else
                {
                    button40.BackColor = Color.OrangeRed;
                    button40.Text = "Disconnected";
                    button22.Enabled = true;
                }
                //////////////////////////////////////////////////////
                if (status12 == true)
                {
                    button41.BackColor = Color.YellowGreen;
                    button41.Text = "Connected";
                    textBox13.Text = g12t + " ms";
                }
                else
                {
                    button41.BackColor = Color.OrangeRed;
                    button41.Text = "Disconnected";
                    button24.Enabled = true;
                }
                //////////////////////////////////////////////////////
                if (status13 == true)
                {
                    button42.BackColor = Color.YellowGreen;
                    button42.Text = "Connected";
                    textBox14.Text = g13t + " ms";
                }
                else
                {
                    button42.BackColor = Color.OrangeRed;
                    button42.Text = "Disconnected";
                    button26.Enabled = true;
                }
                //////////////////////////////////////////////////////
                if (status14 == true)
                {
                    button43.BackColor = Color.YellowGreen;
                    button43.Text = "Connected";
                    textBox15.Text = g14t + " ms";
                }
                else
                {
                    button43.BackColor = Color.OrangeRed;
                    button43.Text = "Disconnected";
                    button28.Enabled = true;
                }
                //////////////////////////////////////////////////////
                if (status15 == true)
                {
                    button44.BackColor = Color.YellowGreen;
                    button44.Text = "Connected";
                    textBox16.Text = g15t + " ms";
                }
                else
                {
                    button44.BackColor = Color.OrangeRed;
                    button44.Text = "Disconnected";
                    button30.Enabled = true;
                }


                //////////////// time delay below ///////////
                watch.Stop();
                int d2 = Convert.ToInt32(watch.ElapsedMilliseconds);
                int d4 = (1000 - d2);
                //Console.WriteLine(d2);
                if (d4 > 0)
                { await Task.Delay(d4); }
            }
        }
        public static void ErrorLogging(Exception ex)
        {
            string strPath = @"D:\Log.txt";
            if (!File.Exists(strPath))
            {
                File.Create(strPath).Dispose();
            }
            using (StreamWriter sw = File.AppendText(strPath))
            {
                sw.WriteLine("=============Error Logging ===========");
                sw.WriteLine("===========Start====================== " + DateTime.Now);
                sw.WriteLine("Error Message: " + ex.Message);
                sw.WriteLine("Stack Trace: " + ex.StackTrace);
                sw.WriteLine("===========End======================== " + DateTime.Now);
                sw.WriteLine("                            ");

            }
        }

        
        public static void Packet_loss(Exception ex)
        {
            string strPath = @"D:\packet_loss.txt";
            if (!File.Exists(strPath))
            {
                File.Create(strPath).Dispose();
            }
            using (StreamWriter sw = File.AppendText(strPath))
            {
                sw.WriteLine("                            ");
                sw.WriteLine("=============Packet Loss Logging ===========");
                sw.WriteLine("===========Start====================== " + DateTime.Now);
                sw.WriteLine("Error Message: " + ex.Message);
                sw.WriteLine("Stack Trace: " + ex.StackTrace);
                sw.WriteLine("===========End======================== " + DateTime.Now);
                sw.WriteLine("                            ");

            }
        }
    }

}


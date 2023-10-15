using System.Net;
using System.Net.Sockets;
using System.Threading;
namespace Task_2_client
{
    public partial class Form1 : Form
    {
        TcpClient connect_obj = GetClient();
        static TcpClient GetClient()
        {
            string HOST = "127.0.0.1";
            int PORT = 7000;
            TcpClient tcpClient = new TcpClient();
            tcpClient.Connect(HOST, PORT);
            return tcpClient;
        }

        public Form1()
        {
            InitializeComponent();
            new Thread(() => this.UpdaterChat()).Start();
        }

        public void UpdaterChat()
        {
            NetworkStream netStream = this.connect_obj.GetStream();
            StreamReader reader = new StreamReader(netStream);
            string msgs = reader.ReadLine();
            if (msgs != null) { listBox1.Text = msgs; }

        }

        public void SendMSG(string msg, TcpClient tcpClient)
        {
            NetworkStream netStream = tcpClient.GetStream();
            StreamWriter writer = new StreamWriter(netStream);
            writer.WriteLine(msg);
        }

        private void button1_Click(object sender, EventArgs e)

        {
            new Thread(() => this.SendMSG("Im client", this.connect_obj)).Start();
            string msg = richTextBox1.Text;
            if (msg != null)
            {
                this.SendMSG(msg, this.connect_obj);
            }
        }
    }
}
using System.Net.Sockets;
using System.Net;
using System.Threading;
class Program
{

    static void Main(string[] args)
    {
        int port = 7000;
        int count_accpet_client = 3;
        ProgrammProcess proc = new ProgrammProcess();
        proc.Start(port, count_accpet_client);

    }
}

class ProgrammProcess
{
    public void LookMSG(NetworkStream stream)
    {
         StreamReader sr = new StreamReader(stream);
         string msg = sr.ReadLine();
         if (msg != null)
         {
            DateTime dateTime = DateTime.Now;
            Console.WriteLine(msg, '\t', dateTime.ToString());
         }
    }

    public void LoopConnection(TcpListener server)
    {
        TcpClient client = server.AcceptTcpClient();
        NetworkStream stream = client.GetStream();
        StreamWriter sw = new StreamWriter(stream);
        sw.WriteLine("Подключён");
        new Thread(() => this.LookMSG(stream)).Start();
        
    }

    public void Start(int port, int count_accpet_client)
    {
        IPAddress localAddr = IPAddress.Any;
        TcpListener server = new TcpListener(localAddr, port);
        Console.WriteLine("Сервер стартует...");
        server.Start();
        Console.WriteLine("Сервер стартовал успешно.");
        for (int i = 0; i < count_accpet_client; i++)
        {
            new Thread(() => this.LoopConnection(server)).Start();
        }
        Console.ReadLine();
    }
}
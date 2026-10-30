public class Bai9
{
    public void bai9()
    {
        Console.WriteLine("CHƯƠNG TRÌNH TÍNH SỐ GIÂY");
        Console.Write("Nhập số giây: ");
        int giay = Convert.ToInt32(Console.ReadLine());

        int ngay = giay / 86400;
        int gio = giay % 86400 / 3600;
        int phut = giay % 3600 / 60;
        int giaymoi = giay%60;

        Console.WriteLine($"{giay} giây = {ngay} ngày {gio} giờ {phut} phút {giaymoi} giây");
    }
}
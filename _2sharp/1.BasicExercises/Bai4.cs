public class Bai4
{
    public void bai4()
    {
        Console.WriteLine("CHƯƠNG TRÌNH HOÁN ĐỔI HAI SỐ");
        Console.Write("Nhập số thứ nhất: ");
        double a = Convert.ToDouble(Console.ReadLine());
        Console.Write("Nhập số thứ hai: ");
        double b = Convert.ToDouble(Console.ReadLine());
        Console.WriteLine($"Trước khi hoán đổi: ({a}, {b})");
        (a, b) = (b, a);
        Console.WriteLine($"Sau khi hoán đổi: ({a}, {b})");
    }
}
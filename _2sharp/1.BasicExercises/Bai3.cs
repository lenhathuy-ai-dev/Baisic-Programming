public class Bai3
{
    public void bai3()
    {
        Console.WriteLine("CHƯƠNG TRÌNH TÍNH TOÁN");
        Console.Write("Nhập số thứ nhất: ");
        double a = Convert.ToDouble(Console.ReadLine());
        Console.Write("Nhập số thứ hai: ");
        double b = Convert.ToDouble(Console.ReadLine());

        Console.WriteLine("KẾT QUẢ PHÉP TÍNH");
        Console.WriteLine($"{a} + {b} = {a+b}");
        Console.WriteLine($"{a} - {b} = {a-b}");
        Console.WriteLine($"{a} * {b} = {a*b}");
        Console.WriteLine($"{a} / {b} = {a/b}");
        Console.WriteLine($"{a} % {b} = {a%b}");
    }
}
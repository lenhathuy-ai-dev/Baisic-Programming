public class Bai8
{
    public void bai8()
    {
        Console.WriteLine("CHƯƠNG TRÌNH TÍNH TRUNG BÌNH CỘNG CỦA 3 SỐ");
        Console.Write("Nhập số thứ nhất: ");
        double a = Convert.ToDouble(Console.ReadLine());
        Console.Write("Nhập số thứ hai: ");
        double b = Convert.ToDouble(Console.ReadLine());
        Console.Write("Nhập số thứ ba: ");
        double c = Convert.ToDouble(Console.ReadLine());
        Console.WriteLine($"Trung bình cộng: ({a}+{b}+{c})/3 = {Math.Round((a+b+c)/3)}");
    }
}
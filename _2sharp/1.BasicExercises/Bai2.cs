public class Bai2
{
    public void bai2()
    {
        Console.WriteLine("THÔNG TIN SINH VIÊN");
        Console.Write("Nhập họ tên: ");
        string name = Console.ReadLine();
        Console.Write("Nhập tuổi: ");
        int age = Convert.ToInt32(Console.ReadLine());
        Console.Write("Nhập quê quán: ");
        string hometown = Console.ReadLine();

        Console.WriteLine($"Xin chào, tôi là {name}, tôi đến từ {hometown}. Tôi {age} tuổi. Rất vui được gặp các bạn!");
    }
}
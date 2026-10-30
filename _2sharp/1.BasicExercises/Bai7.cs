public class Bai7
{
    public void bai7()
    {
        Console.WriteLine("CHƯƠNG TRÌNH ĐỔI NHIỆT ĐỘ");
        Console.Write("Nhập nhiệt độ (độ C): ");
        double temp = Convert.ToDouble(Console.ReadLine());
        double Ftemp = temp*1.8+32;
        Console.WriteLine($"{temp}°C = {Ftemp}°F");
        
    }
}
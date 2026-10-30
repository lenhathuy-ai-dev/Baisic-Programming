public class Bai6
{
    public void bai6()
    {
        Console.WriteLine("CHƯƠNG TRÌNH TÍNH CHU VI DIỆN TÍCH HÌNH tròn");
        Double r = 0;
        do
        {
            Console.Write("Nhập bán kính đường tròn: ");
            r = Convert.ToDouble(Console.ReadLine());
            if (r <= 0)
                Console.WriteLine("Bán kính r phải là số nguyên dương");
        }while (r <= 0);
        
        
        Console.WriteLine($"Chu vi hình hình tròn là 2 * {Math.PI:F2}  {r} = {2*Math.PI*r:F2}");
        Console.WriteLine($"Diện tích hình hình tròn là {Math.PI:F2} * {r}^2) = {Math.PI*r*r:F2}");

    }
}
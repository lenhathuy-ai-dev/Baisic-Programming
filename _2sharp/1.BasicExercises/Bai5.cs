public class Bai5
{
    public void bai5()
    {
        Console.WriteLine("CHƯƠNG TRÌNH TÍNH CHU VI DIỆN TÍCH HÌNH CHỮ NHẬT");
        Double a = 0, b = 0;
        do
        {
            Console.Write("Nhập số thứ nhất: ");
            a = Convert.ToDouble(Console.ReadLine());
            Console.Write("Nhập số thứ hai: ");
            b = Convert.ToDouble(Console.ReadLine());
            if (a <= 0 || b <= 0 )
                Console.WriteLine("Bạn đang nhập sai kích thước HCN! Vui lòng nhập lại!");
            if (a < b)
                Console.WriteLine("Chiều dài HCN phải lớn hơn chiều rộng! Vui lòng nhập lại!");
        }while (a <= 0 || b <= 0 || a < b);
        
        
        Console.WriteLine($"Chu vi hình chữ chữ nhật là 2*({a}+{b}) = {2*(a+b)}");
        Console.WriteLine($"Diện tích hình chữ chữ nhật là {a}*{b} = {a*b}");
    }
}
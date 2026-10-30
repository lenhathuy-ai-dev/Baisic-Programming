import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class Bai3_BasicArthimetic {
    public void main() throws IOException
    {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
        System.out.print("Nhập số nguyên thứ nhất: ");
        int a = Integer.parseInt(br.readLine());
        System.out.print("Nhập số nguyên thứ hai: ");
        int b = Integer.parseInt(br.readLine());

        System.out.println("CÁC PHÉP TOÁN");
        System.out.printf("Tổng: %d + %d = %d\n", a, b, a+b);
        System.out.printf("Hiệu %d - %d = %d\n", a, b, a-b);
        System.out.printf("Tích: %d * %d = %d\n", a, b, a*b);
        System.out.printf("Thương: %d / %d = %.2f\n", a, b, a/b*1.0);
        System.out.printf("Chia lấy phần nguyên: %d / %d = %d\n", a, b, a/b);
        System.out.printf("Chia lấy phần dư: %d %% %d = %d\n", a, b, a%b);
        System.out.printf("Trung bình cộng: (%d + %d)/2 = %.3f\n", a, b, (a+b)/2.0);

        


    }
}
